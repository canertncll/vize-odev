<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ogrenci_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Veritabanını kesin yüklüyoruz (autoload yapmadıysan)
        $this->load->database();
    }

    // Kayıt ekleme
    public function ekle($data) {
        return $this->db->insert('OGRENCI_NOT', $data);
    }

    // Tüm kayıtları listeleme
    public function listele() {
        return $this->db->get('OGRENCI_NOT')->result();
    }
}
