<?php

defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/backend/Default_Backend_Controler.php');
class FilterController extends Default_Backend_Controler
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('api/FilterModel'); // Load the model
        header('Content-Type: application/json'); // Set header for JSON output
    }

    // Read all filters it takes one parameter through get request which is type
    public function index()
    {
        $type = $this->input->get('type');
        if ($type == "") {
            exit(json_encode([
                "responseCode" => 402,
                'responseStatus' => false,
                'responseMessage' =>  "NON STANDARD",
                'responseData' =>  "",
            ], JSON_PRETTY_PRINT));
        }
        $filters = $this->FilterModel->get_all_filters($type);
        if (empty($filters)) {
            exit(json_encode([
                "responseCode" => 404,
                'responseStatus' => false,
                'responseMessage' =>  "no record found",
                'responseData' =>  "",
            ], JSON_PRETTY_PRINT));
        }
        exit(json_encode([
            "responseCode" => 200,
            'responseStatus' => true,
            'responseMessage' =>  "OK",
            'responseData' =>  $filters,
        ], JSON_PRETTY_PRINT));
    }

    // Read a filter by DB_ID
    public function getById($id)
    {
        $filter = $this->FilterModel->get_filter_by_id($id);
        $filter['meta_title'] = $this->FilterModel->get_filter_meta_by_id($id, 'meta_title') == "" ? "" : $this->FilterModel->get_filter_meta_by_id($id, 'meta_title');
        $filter['meta_description'] = $this->FilterModel->get_filter_meta_by_id($id, 'meta_description') == "" ? "" : $this->FilterModel->get_filter_meta_by_id($id, 'meta_description');
        if ($filter) {
            exit(json_encode([
                "responseCode" => 200,
                'responseStatus' => true,
                'responseMessage' =>  "OK",
                'responseData' =>  $filter,
            ], JSON_PRETTY_PRINT));
        } else {
            exit(json_encode([
                "responseCode" => 404,
                'responseStatus' => false,
                'responseMessage' =>  "no record found",
                'responseData' =>  "",
            ], JSON_PRETTY_PRINT));
        }
    }

    private function get_filter_tree($filters)
    {
        // Step 1: Create an associative array to hold references to each node by DB_ID
        $items = [];
        foreach ($filters as $filter) {
            $items[$filter['DB_ID']] = $filter; // Initialize each filter
            $items[$filter['DB_ID']]['children'] = []; // Initialize children array
        }

        // Step 2: Initialize an array to hold the root items (top-level items)
        $tree = [];

        // Step 3: Loop through each item to build the tree based on GROUP_OF and FILTER_LEVEL
        foreach ($items as $id => &$item) {
            if ($item['FILTER_LEVEL'] == 0) { // If it's a top-level item
                $tree[] = &$item; // Add it to the root level
            } else {
                $parentId = $item['GROUP_OF'];
                if (isset($items[$parentId])) {
                    // Add this item to its parent's children array
                    $items[$parentId]['children'][] = &$item;
                }
            }
        }

        return $tree;
    }

    // Tree filters nested structure: it takes one parameter through get request which is type
    public function get_filter_tree_structure()
    {
        $type = $this->input->get('type');
        if ($type == "") {
            exit(json_encode([
                "responseCode" => 402,
                'responseStatus' => false,
                'responseMessage' =>  "NON STANDARD",
                'responseData' =>  "",
            ], JSON_PRETTY_PRINT));
        }
        $filters = $this->FilterModel->get_all_filters($type);
        if (empty($filters)) {
            exit(json_encode([
                "responseCode" => 404,
                'responseStatus' => false,
                'responseMessage' =>  "no record found",
                'responseData' =>  "",
            ], JSON_PRETTY_PRINT));
        }

        // Get the nested tree structure
        $filterTree = $this->get_filter_tree($filters);
        // Return the JSON-encoded tree structure
        exit(json_encode([
            "responseCode" => 200,
            'responseStatus' => true,
            'responseMessage' =>  "OK",
            'responseData' =>  $filterTree,
        ], JSON_PRETTY_PRINT));
    }

    // Search filters by NAME or SLUG  it takes two parameter through get request which is 1. Keyword 2. Type
    public function search()
    {
        $type = $this->input->get('type');
        $keyword = $this->input->get('keyword');
        if ($keyword == '' || $type == "") {
            exit(json_encode([
                "responseCode" => 402,
                'responseStatus' => false,
                'responseMessage' =>  "NON STANDARD",
                'responseData' =>  "",
            ], JSON_PRETTY_PRINT));
        }
        $filters = $this->FilterModel->search_filters($keyword, $type);
        if (empty($filters)) {
            exit(json_encode([
                "responseCode" => 404,
                'responseStatus' => false,
                'responseMessage' =>  "no record found",
                'responseData' =>  "",
            ], JSON_PRETTY_PRINT));
        }
        exit(json_encode([
            "responseCode" => 200,
            'responseStatus' => true,
            'responseMessage' =>  "OK",
            'responseData' =>  $filters,
        ], JSON_PRETTY_PRINT));
    }

    // Create a new filter
    public function create()
    {
        $json = json_decode($this->input->raw_input_stream);
        if (empty($json)) {
            exit(json_encode([
                'responseCode' => 500,
                'responseStatus' => false,
                'responseMessage' => 'invalid data type',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $name = $json->name;
        if ($name == "") {
            exit(json_encode([
                'responseCode' => 400,
                'responseStatus' => false,
                'responseMessage' => 'Name is required',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $type = $json->type;
        if ($type == "") {
            exit(json_encode([
                'responseCode' => 400,
                'responseStatus' => false,
                'responseMessage' => 'Type is required',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $parent = $json->parent == "" ? 0 : $json->parent;
        $slug = $this->createSlug($name);
        $level = 0;
        $group_of = 0;
        $parent_row = $this->FilterModel->get_parent_row($parent);
        if (!empty($parent_row)) {
            $slug = $parent_row['URL_SLUG'] . "/" . $slug;
            $level = $parent_row['FILTER_LEVEL'] + 1;
            $group_of = $parent_row['DB_ID'];
        } else {
            $slug = $type . "/" . $slug;
        }
        $tagSlug = $slug;
        $count = 1;
        for ($i = 0; $i < $count; $i++) {
            if ($this->FilterModel->check_slug_exist($tagSlug) > 0) {
                $count++;
                $tagSlug = $slug . '-' . $count;
            }
        }
        $this->db->trans_start();
        $basicData = [
            'NAME' => $name,
            'DES' => $json->Description,
            'URL_SLUG' => $tagSlug,
            'IMG' => $json->media,
            'IS_PARENT' => "1",
            'GROUP_OF' => $group_of,
            'FILTER_LEVEL' => $level,
            'CREATE_AT' => date_format(date_create(), "Y-m-d H:i:s"),
            'LAST_CHANGES' => date_format(date_create(), "Y-m-d H:i:s"),
            'TYPE' => $type,
            'STATUS' => "1",
        ];
        if (!$this->FilterModel->insert($basicData)) {
            $this->db->trans_rollback();
            exit(json_encode([
                'responseCode' => 503,
                'responseStatus' => false,
                'responseMessage' => 'server error',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $tagId = $this->db->insert_id();
        $metaKey = ['meta_title', 'meta_description'];
        $metaValue = [$json->metaTitle, $json->metaDescription];
        if (!$this->addTypeMeta($metaKey, $metaValue, $tagId)) {
            $this->db->trans_rollback();
            exit(json_encode([
                'responseCode' => 503,
                'responseStatus' => false,
                'responseMessage' => 'server error',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $this->db->trans_complete();
        $this->create_type_route($type);
        exit(json_encode([
            "responseCode" => 200,
            'responseStatus' => true,
            'responseMessage' =>  "OK",
            'responseData' =>  'Filter created successfully',
        ], JSON_PRETTY_PRINT));
    }

    // Update a filter by DB_ID
    public function update($id)
    {
        $json = json_decode($this->input->raw_input_stream);
        if (empty($json)) {
            exit(json_encode([
                'responseCode' => 500,
                'responseStatus' => false,
                'responseMessage' => 'invalid data type',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        if ($id == "") {
            exit(json_encode([
                'responseCode' => 400,
                'responseStatus' => false,
                'responseMessage' => 'Does not have valid ID',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $name = $json->name;
        if ($name == "") {
            exit(json_encode([
                'responseCode' => 400,
                'responseStatus' => false,
                'responseMessage' => 'Name is required',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $type = $json->type;
        if ($type == "") {
            exit(json_encode([
                'responseCode' => 400,
                'responseStatus' => false,
                'responseMessage' => 'Type is required',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $SELECT_FILTER_DATA = $this->FilterModel->get_filter_by_id($id);
        $parent = $json->parent == "" ? 0 : $json->parent;
        $slug = $this->createSlug($name);
        $level = 0;
        $group_of = 0;
        $parent_row = $this->FilterModel->get_parent_row($parent);
        if (!empty($parent_row)) {
            $slug = $parent_row['URL_SLUG'] . "/" . $slug;
            $level = $parent_row['FILTER_LEVEL'] + 1;
            $group_of = $parent_row['DB_ID'];
        } else {
            $slug = $type . "/" . $slug;
        }

        $tagSlug = $slug;
        $count = 1;
        for ($i = 0; $i < $count; $i++) {
            if ($this->FilterModel->check_slug_exist($tagSlug) > 0) {
                $count++;
                $tagSlug = $slug . '-' . $count;
            }
        }
        $this->db->trans_start();
        $basicData = [
            'NAME' => $name,
            'DES' => $json->Description,
            'URL_SLUG' => $tagSlug,
            'IMG' => $json->media,
            'IS_PARENT' => "1",
            'GROUP_OF' => $group_of,
            'FILTER_LEVEL' => $level,
            'LAST_CHANGES' => date_format(date_create(), "Y-m-d H:i:s"),
            'TYPE' => $type,
            'STATUS' => "1",
        ];
        if (!$this->FilterModel->update_filter($id, $basicData)) {
            $this->db->trans_rollback();
            exit(json_encode([
                'responseCode' => 503,
                'responseStatus' => false,
                'responseMessage' => 'server error',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $metaKey = ['meta_title', 'meta_description'];
        $metaValue = [$json->metaTitle, $json->metaDescription];
        if (!$this->addTypeMeta($metaKey, $metaValue, $id)) {
            $this->db->trans_rollback();
            exit(json_encode([
                'responseCode' => 503,
                'responseStatus' => false,
                'responseMessage' => 'server error',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        if (!$this->update_all_slug($id, $SELECT_FILTER_DATA, $tagSlug)) {
            $this->db->trans_rollback();
            exit(json_encode([
                'responseCode' => 503,
                'responseStatus' => false,
                'responseMessage' => 'server error',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $this->db->trans_complete();
        $this->create_type_route($type);
        exit(json_encode([
            "responseCode" => 200,
            'responseStatus' => true,
            'responseMessage' =>  "OK",
            'responseData' =>  'updated',
        ], JSON_PRETTY_PRINT));
    }

    public function updateStatus()
    {
        $json = json_decode($this->input->raw_input_stream);
        if (empty($json)) {
            exit(json_encode([
                'responseCode' => 500,
                'responseStatus' => false,
                'responseMessage' => 'invalid data type',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        if ($json->id == "" || $json->value == "" || $json->type == "") {
            exit(json_encode([
                'responseCode' => 400,
                'responseStatus' => false,
                'responseMessage' => 'Does not have valid ID',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        if (!$this->FilterModel->update_filter($json->id, ['STATUS' => $json->value, 'LAST_CHANGES' => date_format(date_create(), "Y-m-d H:i:s")])) {
            exit(json_encode([
                'responseCode' => 503,
                'responseStatus' => false,
                'responseMessage' => 'server error',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $this->create_type_route($json->type);
        exit(json_encode([
            "responseCode" => 200,
            'responseStatus' => true,
            'responseMessage' =>  "OK",
            'responseData' =>  'updated',
        ], JSON_PRETTY_PRINT));
    }

    // Delete a filter by DB_ID
    public function delete($id)
    {
        $type = $this->input->get('type');
        if ($id == "" || $type == "") {
            exit(json_encode([
                'responseCode' => 400,
                'responseStatus' => false,
                'responseMessage' => 'Does not have valid ID',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $checkChild = $this->db->select('*')->where('GROUP_OF', $id)->get('filter')->num_rows();
        if ($checkChild > 0) {
            exit(json_encode([
                'responseCode' => 403,
                'responseStatus' => false,
                'responseMessage' => 'ACCESS DENIED',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $SELECT_FILTER = $this->FilterModel->get_filter_by_id($id);
        if (empty($SELECT_FILTER)) {
            exit(json_encode([
                'responseCode' => 404,
                'responseStatus' => false,
                'responseMessage' => 'NOT FOUND',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $this->db->trans_start();
        if (!$this->FilterModel->delete_filter($id)) {
            $this->db->trans_rollback();
            exit(json_encode([
                'responseCode' => 503,
                'responseStatus' => false,
                'responseMessage' => 'server error',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        if (!$this->FilterModel->delete_filter_meta($id)) {
            $this->db->trans_rollback();
            exit(json_encode([
                'responseCode' => 503,
                'responseStatus' => false,
                'responseMessage' => 'server error',
                'responseData' => []
            ], JSON_PRETTY_PRINT));
        }
        $this->db->trans_complete();
        $this->create_type_route($type);
        exit(json_encode([
            "responseCode" => 200,
            'responseStatus' => true,
            'responseMessage' =>  "OK",
            'responseData' =>  'Deleted',
        ], JSON_PRETTY_PRINT));
    }

    private function addTypeMeta($key, $value, $id)
    {
        $count = 0;
        foreach ($key as $index => $item) {
            $metacheck = $this->FilterModel->check_filter_meta_tags_is_exist($id, $item);
            if ($metacheck > 0) {
                $this->FilterModel->update_filter_meta_tags($id, $item, ['FILTER_VALUE' => $value[$index]]);
            } else {
                $this->FilterModel->insert_filter_meta_tags([
                    'FILTER_ID' => $id,
                    'FILTER_KEY' => $item,
                    'FILTER_VALUE' => $value[$index]
                ]);
            }
            $count = $index + 1;
        }
        return ($count == count($key)) ? true : false;
    }

    public function create_type_route($type)
    {
        $this->db->select('*');
        $this->db->where('TYPE', $type);
        $this->db->where('STATUS', '1');
        $query = $this->db->get('filter');

        if ($query->num_rows() > 0) {
            $textdata = "<?php\n";
            foreach ($query->result() as $key => $value) {
                $textdata .= "\$route['" . $value->URL_SLUG . "'] = '" . $type . "/single/" . $value->DB_ID . "';\n";
            }
            $textdata .= "?>";
            $file = fopen(APPPATH . "cache/" . $type . ".php", 'w');
            fwrite($file, $textdata);
            fclose($file);
        }
    }

    public function update_all_slug($ID, $SELECT_FILTER_DATA, $NEW_SLUG)
    {
        $id = $ID;
        $URL_SLUG = $SELECT_FILTER_DATA['URL_SLUG'];
        $UPDATE_SLUG = $NEW_SLUG;
        $allChild = $this->db->select('*')->like('URL_SLUG', $URL_SLUG)->where('DB_ID !=', $id)->get('filter');
        if ($allChild->num_rows() > 0) {
            foreach ($allChild->result() as $key => $value) {
                $SLUG_REPLACE = str_replace($URL_SLUG, $UPDATE_SLUG, $value->URL_SLUG);
                $this->db->where('DB_ID', $value->DB_ID)->update('filter', ['URL_SLUG' => $SLUG_REPLACE]);
            }
        }
        return true;
    }
}
