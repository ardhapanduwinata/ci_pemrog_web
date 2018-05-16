<?php

class C_category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_category');
    }
    public function index()
    {

        // Judul Halaman
        $data['page_title'] = 'List Kategori';

        // Dapatkan semua kategori
        $data['categories'] = $this->category_model->get_all_categories();

        $this->load->view('categories/cat_view', $data);
    }

    public function create()
    {
        // Judul Halaman
        $data['page_title'] = 'Buat Kategori';

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'cat_name',
            'Nama Kategori',
            'required|is_unique[categories.cat_name]',
            array(
                'required' => 'Isi %s donk, males amat.',
                'is_unique' => 'Judul ' . $this->input->post('title') . ' sudah ada bosque.'
            )
        );
        if($this->form_validation->run() === FALSE){
            $this->load->view('categories/cat_create', $data);
        } else {
            $this->m_category->create_category();
            redirect('categories');
        }
    }

    public function viewAll()
    {
        $this->load->view('categories/cat_view');
    }
    public function artikel($id)
    {
        // Menampilkan judul berdasar nama kategorinya
        $data['page_title'] = $this->category_model->get_category_by_id($id)->cat_name;

        // Dapatkan semua artikel dalam kategori ini
        $data['all_artikel'] = $this->blog_model->get_artikel_by_category($id);

        // Kita gunakan view yang sama pada controller Blog
        $this->load->view('blogs/blog_view', $data);
    }
}