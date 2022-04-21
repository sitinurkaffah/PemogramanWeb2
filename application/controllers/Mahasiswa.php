<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    // Fungsi : menampilkan seluruh data
	public function index()
	{
		// Load model + buat objek
        $this->load->model('mahasiswa_model', 'mhs1');

        // Pakai class model
        $this->mhs1->id = 1;
        $this->mhs1->nim = "010001";
        $this->mhs1->nama = "Faiz Fikri";
        $this->mhs1->gender = "L";
        $this->mhs1->ipk = 3.85;

        // Buat Objek 2
        // Load model + buat objek
        $this->load->model('mahasiswa_model', 'mhs2');

        // Pakai Class Model + Isi Data
        $this->mhs2->id = 2;
        $this->mhs2->nim = "020001";
        $this->mhs2->nama = "Pandan Wangi";
        $this->mhs2->gender = "P";
        $this->mhs2->ipk = 3.35;

        // Simpan Objek Ke Dalam Array
        $list_mhs = [$this->mhs1, $this->mhs2];

        // Siapkan Data Untuk Dikirim Ke View
        $data["list_mhs"] = $list_mhs;

        // Untuk Mengirim Data + Menampilkan Ke View
        $this->load->view('header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('footer');

    
	}
}
