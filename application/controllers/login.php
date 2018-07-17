<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        $this->load->view('v_login');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('v_login');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $data['user'] = $this->user_model->login($username, $password);

            foreach ($data['user'] as $key) {
                if ($data['user'] != false) {
                    foreach ($data['user'] as $key) {
                        if ($key != false) {
                            // Buat session
                            $user_data = array(
                                'user_id' => $key['user_id'],
                                'username' => $username,
                                'logged_in' => true,
                                'level' => $key['level']
                            );


                            $this->session->set_userdata('datauser', $user_data);

                            // Set message
                            $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                            redirect('home/blogdatatable');
                        } else {
                            // Set message
                            $this->session->set_flashdata('login_failed', 'Login is invalid');
                            $this->load->view('v_login');
                        }
                    }
                } else {
                    $this->session->set_flashdata('login_failed', 'Login is invalid');
                    $this->load->view('v_login');
                }
            }
        }
    }

    public function logout(){
            redirect('users/login');
    }

    public function seeuser()
    {
    	$data['user']=$this->user_model->lihatSemuaUser();
    	$this->load->view('user/v_seeUser', $data);
    }

    public function edit_user()
    {
    	$idUser = $this->input->post('edit');
		$data['detailUser'] = $this->user_model->getUserbyID($idUser);
		$this->load->view('user/v_editUser', $data);
    }

    public function edituser()
    {
    	$idUser = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');

		$data = array('nama' => $nama,
					'email' => $email,
					'username' => $username,
					'user_id' => $idUser
			);

		$this->user_model->editUser($data);
		redirect('user/viewuser');
    }

    public function hapusUser()
    {
    	$idUser = $this->input->post('id');
    	$this->user_model->deleteUser($idUser);
		redirect('user/viewuser');

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */