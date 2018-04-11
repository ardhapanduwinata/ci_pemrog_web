<?php

class Blog extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function getBlog()
    {
        $query = $this->db->query("select * from blog");
        return $query->result_array();
    }
    function addBlog()
    {
        $query = $this->db->insert('blog', $this->input->post());
    }

    function deleteBlog($id)
    {
        $this->db->delete('blog', array('id' => $id));
    }
}