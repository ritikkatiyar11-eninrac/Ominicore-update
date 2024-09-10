<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/backend/Default_Backend_Controler.php');
class Pages extends Default_Backend_Controler
{
  public function __construct()
  {
    parent::__construct();
    $this->is_login();
  }
  public function index()
  {
    $pageArray = ['edit', 'add'];
    $get = $this->input->get('action');
    if (!in_array($get, $pageArray) || empty($get)) {
      $this->defaultPage();
    }
    if ($get == 'add') {
      $this->addPage();
    }
    if ($get == 'edit') {
      $this->editPage();
    }
  }

  private function defaultPage()
  {
    $this->load->view('backend/layout/header');
    $this->load->view('backend/pages/view_pages');
    $this->load->view('backend/layout/footer');
  }
  private function addPage()
  {
    $this->load->view('backend/layout/header');
    $this->load->view('backend/pages/add_pages');
    $this->load->view('backend/layout/footer');
  }
  private function editPage()
  {
    $this->load->view('backend/layout/header');
    $this->load->view('backend/pages/edit_pages');
    $this->load->view('backend/layout/footer');
  }

  public function page_api($id)
  {
    header('Content-Type: application/json');
    if ($id == "") {
      http_response_code(400);
      exit(json_encode([
        "responseCode" => 400,
        'responseStatus' => true,
        'responseMessage' =>  "Request not Acceptable",
        'responseData' =>  "Bad Request"
      ]));
    }
    if ($id == 'get') $this->get_api_pages();
    if ($id == 'add') $this->add_api_pages();
    if ($id == 'set') $this->set_api_pages();
    if ($id == 'delete') $this->delete_api_pages();
    if ($id == 'check-slug') $this->check_slug();
  }

  public function get_api_pages()
  {
    if (empty($this->input->get('id'))) {
      $this->getAllPages();
    } else {
      $this->getPagesByID();
    }
  }
  private function getAllPages()
  {
    if (empty($this->input->get('q')) || $this->input->get('q') == 'all') {
      $policy = $this->db->select('*')->from('post')->where('type', 'policy')->order_by('update_at', 'DESC')->get();
    }
    if ($this->input->get('q') == '1') {
      $policy = $this->db->select('*')->from('post')->where('type', 'policy')->where('status', 1)->order_by('update_at', 'DESC')->get();
    }
    if ($this->input->get('q') == '0') {
      $policy = $this->db->select('*')->from('post')->where('type', 'policy')->where('status', 0)->order_by('update_at', 'DESC')->get();
    }

    if ($policy->num_rows() > 0) {
      http_response_code(200);
      exit(json_encode([
        "responseCode" => 200,
        'responseStatus' => true,
        'responseMessage' =>  "OK",
        'responseData' =>  $policy->result()
      ]));
    }
    http_response_code(404);
    exit(json_encode([
      "responseCode" => 404,
      'responseStatus' => false,
      'responseMessage' =>  "NO DATA FOUND",
      'responseData' =>  []
    ]));
  }
  private function getPagesByID()
  {
    $policy = $this->db->select('*')->from('post')->where('type', 'policy')->where('id', $this->input->get('id'))->get();
    if ($policy->num_rows() > 0) {
      http_response_code(200);
      exit(json_encode([
        "responseCode" => 200,
        'responseStatus' => true,
        'responseMessage' =>  "OK",
        'responseData' =>  $policy->result()
      ]));
    }
    http_response_code(404);
    exit(json_encode([
      "responseCode" => 404,
      'responseStatus' => false,
      'responseMessage' =>  "NO DATA FOUND",
      'responseData' =>  []
    ]));
  }
  public function add_api_pages()
  {
    $json = json_decode($this->input->raw_input_stream);
    if (empty($json)) {
      exit(json_encode(
        [
          'responseCode' => 500,
          'responseStatus' => false,
          'responseMessage' => 'invalid data type',
          'responseData' => []
        ]
      ));
    }
    $postTitle = $json->postTitle;
    if (empty($postTitle)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Post title is required',
          'responseData' => []
        ]
      ));
    }
    $type = $json->type;
    if (empty($type)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Post type is required',
          'responseData' => []
        ]
      ));
    }
    $postContent = $json->postContent;
    if (empty($postContent)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Post content is required',
          'responseData' => []
        ]
      ));
    }
    $postReview = $json->postReview;
    if (empty($postReview)) {
      $postReview = "";
    }
    $publish_date = $json->publish_date;
    if (empty($publish_date)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Post publish date is required',
          'responseData' => []
        ]
      ));
    }
    $categoryValue = $json->categoryValue;
    if (empty($categoryValue)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any category or category is required',
          'responseData' => []
        ]
      ));
    }
    $StateValue = $json->StateValue;
    if (empty($StateValue)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any state or state is required',
          'responseData' => []
        ]
      ));
    }
    $SubCategoryValue = $json->SubCategoryValue;
    if (empty($SubCategoryValue)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any sub-category or sub-category is required',
          'responseData' => []
        ]
      ));
    }
    $newsletter = empty($json->newsletter) ? 0 : $json->newsletter;
    $insights = empty($json->insights) ? 0 : $json->insights;
    $status = empty($json->status) ? 0 : $json->status;


    $tagValue = $json->tagValue;
    if (empty($tagValue)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any tags or tags is required',
          'responseData' => []
        ]
      ));
    }
    $media = $json->media;
    if (empty($media)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any featured image or featured image is required',
          'responseData' => []
        ]
      ));
    }
    $postSlug = $json->postSlug;
    $count = 1;
    for ($i = 0; $i < $count; $i++) {
      $check = $this->db->select('*')->from('post')->where('slug', $postSlug)->get();
      if ($check->num_rows() > 0) {
        $count++;
        $postSlug = $json->postSlug . '-' . $count;
      }
    }
    if (empty($postSlug)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Slug is required',
          'responseData' => []
        ]
      ));
    }
    $metaDescription = $json->metaDescription;
    if (empty($metaDescription)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Meta description is required',
          'responseData' => []
        ]
      ));
    }
    $metaTitle = $json->metaTitle;
    if (empty($metaTitle)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Meta title is required',
          'responseData' => []
        ]
      ));
    }
    $userid = $json->userid;
    if (empty($userid)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Meta title is required',
          'responseData' => []
        ]
      ));
    }
    $TopArticles = $json->TopArticles;
    if (empty($TopArticles)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any Top Articles or Top Articles is required',
          'responseData' => []
        ]
      ));
    }
    $source = $json->source;
    $publish_date = $publish_date . ' ' . date('H:i:s');
    $this->db->trans_start();
    $basicData = [
      'user_id' => $userid,
      'title' => $postTitle,
      'content' => $postContent,
      'slug' => $postSlug,
      'created_at' => date_format(date_create($publish_date), "Y-m-d H:i:s"),
      'update_at' => date_format(date_create(), "Y-m-d H:i:s"),
      'type' => $type,
      'status' => $status,
      'approve' => $status,
    ];
    if (!$this->db->insert('post', $basicData)) {
      $this->db->trans_rollback();
      exit(json_encode([
        'responseCode' => 503,
        'responseStatus' => false,
        'responseMessage' => 'server error',
        'responseData' => []
      ]));
    }
    $postId = $this->db->insert_id();
    $filtervalue = $this->getTagsArraybyname($tagValue);
    $filters = array_merge($categoryValue, $StateValue, $SubCategoryValue, $filtervalue, $TopArticles);
    if (!$this->addPostFilterRelationship($postId, $filters)) {
      $this->db->trans_rollback();
      exit(json_encode([
        'responseCode' => 503,
        'responseStatus' => false,
        'responseMessage' => 'server error',
        'responseData' => []
      ]));
    }
    $metaKey = ['feature_image', 'meta_title', 'meta_description', 'comments', 'is_insights', 'is_newsletter', 'source'];
    $metaValue = [$media, $metaTitle, $metaDescription, $postReview, $insights, $newsletter, json_encode($source)];
    if (!$this->addPostMeta($metaKey, $metaValue, $postId)) {
      $this->db->trans_rollback();
      exit(json_encode([
        'responseCode' => 503,
        'responseStatus' => false,
        'responseMessage' => 'server error',
        'responseData' => []
      ]));
    }
    $this->db->trans_complete();
    $this->create_pages_route();
    exit(json_encode(
      [
        'responseCode' => 200,
        'responseStatus' => true,
        'responseMessage' => 'Post created successfully',
        'responseData' => $postId
      ]
    ));
  }

  public function set_api_pages()
  {
    $json = json_decode($this->input->raw_input_stream);
    $postId = $json->postId;
    if (empty($postId)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Post id is required',
          'responseData' => []
        ]
      ));
    }
    $postTitle = $json->postTitle;
    if (empty($postTitle)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Post title is required',
          'responseData' => []
        ]
      ));
    }
    $type = $json->type;
    if (empty($type)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Post type is required',
          'responseData' => []
        ]
      ));
    }
    $postContent = $json->postContent;
    if (empty($postContent)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Post content is required',
          'responseData' => []
        ]
      ));
    }
    $postReview = $json->postReview;
    if (empty($postReview)) {
      $postReview = "";
    }
    $publish_date = $json->publish_date;
    if (empty($publish_date)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Post publish date is required',
          'responseData' => []
        ]
      ));
    }
    $categoryValue = $json->categoryValue;
    if (empty($categoryValue)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any category or category is required',
          'responseData' => []
        ]
      ));
    }
    $StateValue = $json->StateValue;
    if (empty($StateValue)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any state or state is required',
          'responseData' => []
        ]
      ));
    }
    $SubCategoryValue = $json->SubCategoryValue;
    if (empty($SubCategoryValue)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any sub-category or sub-category is required',
          'responseData' => []
        ]
      ));
    }
    $newsletter = empty($json->newsletter) ? 0 : $json->newsletter;
    $insights = empty($json->insights) ? 0 : $json->insights;
    $breaking = empty($json->breaking) ? 0 : $json->breaking;
    $feature = empty($json->feature) ? 0 : $json->feature;
    $status = empty($json->status) ? 0 : $json->status;
    $source = json_encode([
      'sourceText' => empty($json->sourceText) ? "See the source" : $json->sourceText,
      'sourceLink' => empty($json->sourceLink) ? "" : $json->sourceLink,
    ]);

    $tagValue = $json->tagValue;
    if (empty($tagValue)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any tags or tags is required',
          'responseData' => []
        ]
      ));
    }
    $media = $json->media;
    if (empty($media)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any featured image or featured image is required',
          'responseData' => []
        ]
      ));
    }
    $postSlug = $json->postSlug;
    if (empty($postSlug)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Slug is required',
          'responseData' => []
        ]
      ));
    }
    $metaDescription = $json->metaDescription;
    if (empty($metaDescription)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Meta description is required',
          'responseData' => []
        ]
      ));
    }
    $metaTitle = $json->metaTitle;
    if (empty($metaTitle)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Meta title is required',
          'responseData' => []
        ]
      ));
    }
    $userid = $json->userid;
    if (empty($userid)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'Meta title is required',
          'responseData' => []
        ]
      ));
    }
    $TopArticles = $json->TopArticles;
    if (empty($TopArticles)) {
      exit(json_encode(
        [
          'responseCode' => 400,
          'responseStatus' => false,
          'responseMessage' => 'You have not selected any Top Articles or Top Articles is required',
          'responseData' => []
        ]
      ));
    }
    $source = $json->source;
    $publish_date = $publish_date . ' ' . date('H:i:s');
    $this->db->trans_start();
    $basicData = [
      'user_id' => $userid,
      'title' => $postTitle,
      'content' => $postContent,
      'slug' => $postSlug,
      'created_at' => date_format(date_create($publish_date), "Y-m-d H:i:s"),
      'update_at' => date_format(date_create(), "Y-m-d H:i:s"),
      'type' => $type,
      'status' => $status,
      'approve' => $status
    ];
    if (!$this->updatepage($postId, $basicData)) {
      $this->db->trans_rollback();
      exit(json_encode([
        'responseCode' => 503,
        'responseStatus' => false,
        'responseMessage' => 'server error',
        'responseData' => []
      ]));
    }


    $filtervalue = $this->getTagsArraybyname($tagValue);
    $filters = array_merge($categoryValue, $StateValue, $SubCategoryValue, $filtervalue, $TopArticles);
    if (!$this->addPostFilterRelationship($postId, $filters)) {
      $this->db->trans_rollback();
      exit(json_encode([
        'responseCode' => 503,
        'responseStatus' => false,
        'responseMessage' => 'server error',
        'responseData' => []
      ]));
    }
    $metaKey = ['feature_image', 'meta_title', 'meta_description', 'comments', 'is_insights', 'is_newsletter', 'source'];
    $metaValue = [$media, $metaTitle, $metaDescription, $postReview, $insights, $newsletter, json_encode($source)];
    if (!$this->addPostMeta($metaKey, $metaValue, $postId)) {
      $this->db->trans_rollback();
      exit(json_encode([
        'responseCode' => 503,
        'responseStatus' => false,
        'responseMessage' => 'server error',
        'responseData' => []
      ]));
    }
    $this->db->trans_complete();
    $this->create_pages_route();
    exit(json_encode(
      [
        'responseCode' => 200,
        'responseStatus' => true,
        'responseMessage' => 'Post created successfully',
        'responseData' => []
      ]
    ));
  }

  private function updatepage($postId, $basicData)
  {
    if ($this->db->where('id', $postId)->update('post', $basicData)) return true;
    return false;
  }
  private function addPostMeta($key, $value, $postId)
  {
    $count = 0;
    foreach ($key as $index => $item) {
      $metacheck = $this->db->select('*')->from('postmeta')->where('POST_ID', $postId)->where('POST_KEY', $item)->get();
      if ($metacheck->num_rows() > 0) {
        $this->db->where('POST_ID', $postId)->where('POST_KEY', $item)->update('postmeta', [
          'POST_VALUE' => $value[$index]
        ]);
      } else {
        $this->db->insert('postmeta', [
          'POST_ID' => $postId,
          'POST_KEY' => $item,
          'POST_VALUE' => $value[$index]
        ]);
      }
      $count = $index + 1;
    }
    return ($count == count($key)) ? true : false;
  }
  private function addPostFilterRelationship($postId, $filters)
  {
    $count = 0;
    $this->db->where('OBJECT_ID', $postId)->delete('filter_post_relationship');
    foreach ($filters as $key => $value) {
      $this->db->insert('filter_post_relationship', [
        'OBJECT_ID' => $postId,
        'RELATION_ID' => $value,
      ]);
      $count = $key + 1;
    }
    return ($count == count($filters)) ? true : false;
  }
  private function getTagsArraybyname($tagValue)
  {
    $filterArray = [];
    if (!is_array($tagValue)) {
      $filterArray = [];
    } else {
      foreach ($tagValue as $key => $value) {
        $filter = $this->db->select('DB_ID')->from('filter')->where('NAME', $value)->where('TYPE', 'tags')->get();
        if ($filter->num_rows() > 0) {
          $filterArray[] = $filter->row('DB_ID');
        } else {
          $slug = $this->createSlug($value);
          $slug_new = "tags/" . $slug;
          $slug_change = $slug_new;
          $count = 1;
          for ($i = 0; $i < $count; $i++) {
            $check = $this->db->select('*')->from('filter')->where('URL_SLUG', $slug_change)->get();
            if ($check->num_rows() > 0) {
              $count++;
              $slug_change = $slug_new . '-' . $count;
            }
          }
          $this->db->insert('filter', [
            'NAME' => $value,
            'DES' => $value,
            'SLUG' => str_replace('tags/', '', $slug_change),
            'URL_SLUG' => $slug_change,
            'IMG' => 'https://via.placeholder.com/350x150',
            'IS_PARENT' => '1',
            'GROUP_OF' => 0,
            'FILTER_LEVEL' => 0,
            'CREATE_AT' => date_format(date_create(), "Y-m-d H:i:s"),
            'LAST_CHANGES' => date_format(date_create(), "Y-m-d H:i:s"),
            'TYPE' => "tags",
            'STATUS' => "1",
          ]);
          $fid = $this->db->insert_id();
          $filterArray[] = $fid;
        }
      }
    }
    return $filterArray;
  }
  public function create_pages_route()
  {
    $this->db->select('*');
    $this->db->from('post');
    $this->db->where('type', 'policy');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $textdata = "<?php\n";
      foreach ($query->result() as $key => $value) {
        $textdata .= "\$route['post/" . $value->slug . "'] = 'posts/single/" . $value->id . "';\n";
      }
      $textdata .= "?>";

      $file = fopen(APPPATH . "cache/post-routes.php", 'w');
      fwrite($file, $textdata);
      fclose($file);
    }
  }
  public function delete_api_pages()
  {
    $q = $this->input->get('q');
    if (empty($q)) {
      exit(json_encode([
        'responseCode' => 400,
        'responseStatus' => false,
        'responseMessage' => 'BAD REQUEST',
        'responseData' => []
      ]));
    }
    $post = $this->db->select('*')->from('post')->where('id', $q)->get();
    if ($post->num_rows() > 0) {
      $this->db->where('id', $q)->delete('post');
      $this->db->where('OBJECT_ID', $q)->delete('filter_post_relationship');
      $this->db->where('POST_ID', $q)->delete('postmeta');
      $this->create_pages_route();
      exit(json_encode([
        'responseCode' => 200,
        'responseStatus' => true,
        'responseMessage' => 'OK',
        'responseData' => []
      ]));
    } else {
      exit(json_encode([
        'responseCode' => 404,
        'responseStatus' => false,
        'responseMessage' => 'NOT FOUND',
        'responseData' => []
      ]));
    }
  }
  public function check_slug()
  {
    $json = json_decode($this->security->xss_clean($this->input->raw_input_stream));
    if ($json->slug == "" && empty($json)) {
      exit(json_encode(
        [
          'responseCode' => 403,
          'responseStatus' => false,
          'responseMessage' => 'INVALID REQUEST',
          'responseData' => []
        ]
      ));
    }
    $json->slug = $this->createSlug($json->slug);
    $slug = $json->slug;
    $count = 1;
    for ($i = 0; $i < $count; $i++) {
      $check = $this->db->select('*')->from('post')->where('slug', $slug)->get();
      if ($check->num_rows() > 0) {
        $count++;
        $slug = $json->slug . '-' . $count;
      } else {
        exit(json_encode(
          [
            'responseCode' => 200,
            'responseStatus' => true,
            'responseMessage' => 'OK',
            'responseData' => ['slug' => strtolower($slug)]
          ]
        ));
      }
    }
  }
}
