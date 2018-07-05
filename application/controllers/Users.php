<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function login()
    {
        $data['page_title'] = 'Log In';
        if ($user_id) {
            $user_data = array(
                'user_id' => $user_id,
                'username' => $username,
                'logged_in' => true,
                'level' => $this->user_model->get_user_level($user_id)
            );

            $this->session->set_userdata($user_data);
        }
        if($user_id){
            $this->session->set_flashdata('user_loggedin', 'Selamat datang, ' . $username );
            redirect('user/dashboard');
        } else {
            $this->session->set_flashdata('login_failed', 'Login invalid');
            redirect('user/login');
        }
    }
    public function dashboard(){

        if(!$this->session->userdata('logged_in')){
            redirect('user/login');
        }

        $username = $this->session->userdata('username');

        $data['user'] = $this->user_model->get_user_details( $username );

        $this->load->view('users/dashboard', $data);
    }

}
