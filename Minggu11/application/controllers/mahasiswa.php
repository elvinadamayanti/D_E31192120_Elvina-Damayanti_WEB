<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class mahasiswa extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Mahasiswa_model');
            $this->load->library('form_validation');
        }

        public function index()
        {
            $data['user'] = $this->Mahasiswa_model -> getAll()->result();
            $this -> template -> views('crud/home_mahasiswa', $data);
    }
}