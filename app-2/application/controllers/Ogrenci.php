<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ogrenci extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Modeli yükle
        $this->load->model('Ogrenci_model');
        // İstersen controller'da da veritabanını yükelebilirsin:
        // $this->load->database();
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        if ($this->input->post()) {
            $vize  = (int) $this->input->post('vize');
            $final = (int) $this->input->post('final');

            $gecme = ($vize * 0.40) + ($final * 0.60);

            $data = array(
                'ogrenci_adi' => $this->input->post('ogrenci_adi'),
                'ders_adi'    => $this->input->post('ders_adi'),
                'vize'        => $vize,
                'final'       => $final,
                'gecme_notu'  => intval($gecme)
            );

            $this->Ogrenci_model->ekle($data);
            redirect(current_url()); // POST redirect PRG pattern (isteğe bağlı)
        }

        $data["liste"] = $this->Ogrenci_model->listele();
        $this->load->view('ogrenci_view', $data);
    }
}
