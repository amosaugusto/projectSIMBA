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

    public function indexProdi()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/indexprodi', $data);
    }
    public function indexDosen()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/indexdosen', $data);
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
    public function infodos()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/infodos', $data);
    }
    public function infoprodi()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/infoprodi', $data);
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
    public function report()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/report', $data);
    }
    public function hisprod()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/hisprod', $data);
    }
    public function new()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/new', $data);
    }
    public function newmassal()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/newmassal', $data);
    }
    public function newindividu()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/newindividu', $data);
    }
    public function approval()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/approval', $data);
    }
    public function catdos()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/catdos', $data);
    }
    public function hisdos()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/hisdos', $data);
    }
}
