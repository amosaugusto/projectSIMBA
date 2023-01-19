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
    public function tambah()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl_bimbingan = $this->input->post('tgl_bimbingan');
        $topik = $this->input->post('topik');
        $dospem = $this->input->post('dospem');

        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'tgl_bimbingan' => $tgl_bimbingan,
            'topik' => $topik,
            'dospem' => $dospem,
        );
        $this->m_bimbingan->input_data($data, 'tb_bimbingan');
        redirect('home/request');
    }

    public function history()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['catatan'] = $this->m_bimbingan->tampil_catatan()->result();
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
    public function kalenderakademikdos()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/kalenderakademikdos', $data);
    }
    public function kurikulummbkmdos()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/kurikulummbkmdos', $data);
    }
    public function kurikulum1620dos()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/kurikulum1620dos', $data);
    }
    public function kalenderakademikprod()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/kalenderakademikprod', $data);
    }
    public function kurikulummbkmprod()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/kurikulummbkmprod', $data);
    }
    public function kurikulum1620prod()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/kurikulum1620prod', $data);
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
    public function tambahindividu()
    {
        $jenis = $this->input->post('jenis');
        $lokasi = $this->input->post('lokasi');
        $link = $this->input->post('link');
        $tgl_bimbingan = $this->input->post('tgl_bimbingan');
        $dospem = $this->input->post('dospem');
        $angkatan = $this->input->post('angkatan');
        $mahasiswa = $this->input->post('mahasiswa');

        $data = array(
            'jenis' => $jenis,
            'lokasi' => $lokasi,
            'link' => $link,
            'tgl_bimbingan' => $tgl_bimbingan,
            'dospem' => $dospem,
            'angkatan' => $angkatan,
            'mahasiswa' => $mahasiswa,
        );
        $this->m_bimbingan->input_dataindividu($data, 'tb_buatjadwal');
        redirect('home/newindividu');
    }

    public function approval()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['bimbingan'] = $this->m_bimbingan->tampil_data()->result();
        $this->load->view('home/approval', $data);
    }
    public function catdos()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/catdos', $data);
    }
    public function tambahcatat()
    {
        $jenis = $this->input->post('jenis');
        $lokasi = $this->input->post('lokasi');
        $link = $this->input->post('link');
        $tgl_bimbingan = $this->input->post('tgl_bimbingan');
        $topik = $this->input->post('topik');
        $feedback = $this->input->post('feedback');
        $angkatan = $this->input->post('angkatan');
        $mahasiswa = $this->input->post('mahasiswa');

        $data = array(
            'jenis' => $jenis,
            'lokasi' => $lokasi,
            'link' => $link,
            'tgl_bimbingan' => $tgl_bimbingan,
            'topik' => $topik,
            'feedback' => $feedback,
            'angkatan' => $angkatan,
            'mahasiswa' => $mahasiswa,
        );
        $this->m_bimbingan->input_catatan($data, 'tb_catat');
        redirect('home/catdos');
    }
    public function hisdos()
    {
        is_logged_in();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('home/hisdos', $data);
    }
}
