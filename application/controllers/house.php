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
//        $author = $this->input->post('author');
//        $title = $this->input->post('title');
//        $image_file = $this->input->post('image_file');
//        $content = $this->input->post('content');
//
//        $data = array(
//            'author' => $author,
//            'title' => $title,
//            'image_file' => $image_file,
//            'content' => $content
//        );
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->Blog->addBlog();
            redirect(base_url());
        } else {
            $this->load->view('addnew');
        }

    }
    function deleteBlog($id)
    {
        $this->Blog->deleteBlog($id);
        redirect(base_url());
    }
}