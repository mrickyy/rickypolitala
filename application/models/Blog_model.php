<?php
class Blog_model extends CI_Model
{
    public function getBlogs()
    {
        $query = $this->db->get("blog");
        return $query->result_array();
    }

    public function getSingleBlog($url)
    {
        $this->db->where('url',$url);
        $query = $this->db->get('blog');
        return $query->row_array();
    }

    public function insertBlog($data)
    {
        $this->db->insert('blog',$data);
        return $this->db->insert_id();
    }
}