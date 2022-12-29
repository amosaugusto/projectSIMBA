<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('home/index');
    }

    public function indexLogged()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/indexlogged', $data);
    }

    public function request()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/request', $data);
    }

    public function history()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/history', $data);
    }

    public function info()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/info', $data);
    }
    public function kalenderakademik()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/kalenderakademik', $data);
    }
    public function kurikulummbkm()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/kurikulummbkm', $data);
    }
    public function kurikulum1620()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/kurikulum1620', $data);
    }
}
