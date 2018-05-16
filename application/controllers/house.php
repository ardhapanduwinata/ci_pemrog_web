<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class House extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Blog');
    }

    public function index()
    {
        $data['blog_array']=$this->Blog->getBlog();
        $this->load->view('house', $data);
    }
    function addBlog()
    {
    //    $this->form_validation->set_rules();
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->Blog->addBlog();
            redirect(base_url());
        } else {
            $this->load->view('addnew');
        }
    }

    function addNewCategory()
    {
        $this->load->view('categories/cat_create');
    }

    function deleteBlog($id)
    {
        $this->Blog->deleteBlog($id);
        redirect(base_url());
    }
}