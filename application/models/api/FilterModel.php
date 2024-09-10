<?php

defined('BASEPATH') or exit('No direct script access allowed');

class FilterModel extends CI_Model
{
    protected $table = 'filter';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Get all filters
    public function get_all_filters($type)
    {
        return $this->db->where('TYPE', $type)->order_by('CREATE_AT', 'desc')->get($this->table)->result_array();
    }

    // Get a filter by DB_ID
    public function get_filter_by_id($id)
    {
        return $this->db->get_where($this->table, ['DB_ID' => $id])->row_array();
    }

    public function get_filter_meta_by_id($id, $filter_key)
    {
        $this->db->where('FILTER_ID', $id);
        $this->db->where('FILTER_KEY', $filter_key);
        return $this->db->get('filter_meta')->row('FILTER_VALUE');
    }

    public function get_parent_row($parent)
    {
        return $this->db->select('*')->where('DB_ID', $parent)->get('filter')->row_array();
    }

    public function check_slug_exist($slug)
    {
        return $this->db->select('*')->where('URL_SLUG', $slug)->get('filter')->num_rows();
    }

    // Search filters by NAME or SLUG
    public function search_filters($keyword, $type)
    {
        // Ensure the TYPE condition is applied first
        $this->db->where('TYPE', $type);

        // Group the LIKE conditions for NAME and SLUG
        $this->db->group_start();
        $this->db->like('NAME', $keyword);
        $this->db->or_like('SLUG', $keyword);
        $this->db->group_end();

        // Execute the query and return the result
        return $this->db->get($this->table)->result_array();
    }

    public function get_all_types()
    {
        return $this->db->select('type')->group_by('type')->get($this->table)->result_array();
    }





    // Insert a new filter
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    // Update a filter by DB_ID
    public function update_filter($id, $data)
    {
        $this->db->where('DB_ID', $id);
        return $this->db->update($this->table, $data);
    }

    // Delete a filter by DB_ID
    public function delete_filter($id)
    {
        $this->db->where('DB_ID', $id);
        return $this->db->delete($this->table);
    }

    public function delete_filter_meta($id)
    {
        $this->db->where('FILTER_ID', $id);
        return $this->db->delete('filter_meta');
    }

    public function insert_filter_meta_tags($data)
    {
        return $this->db->insert('filter_meta', $data);
    }

    public function update_filter_meta_tags($id, $key, $data)
    {
        $this->db->where('FILTER_ID', $id);
        $this->db->where('FILTER_KEY', $key);
        return $this->db->update('filter_meta', $data);
    }

    public function check_filter_meta_tags_is_exist($id, $key)
    {
        return $this->db->select('*')->from('filter_meta')->where('FILTER_ID', $id)->where('FILTER_KEY', $key)->get()->num_rows();
    }

    public function getFiltersByLevelAndGroup($index, $groupOf) {
        $this->db->select('*')
                 ->from($this->table)
                 ->where('FILTER_LEVEL', $index)
                 ->where('GROUP_OF', $groupOf)
                 ->where('TYPE', 'category')
                 ->where('STATUS', '1');
        
        $query = $this->db->get();
        return $query->result_array(); // Return the result as an array
    }
}
