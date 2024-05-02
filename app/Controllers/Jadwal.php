<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJadwal;

class Jadwal extends BaseController
{
    public function __construct()
    {
        $this->ModelJadwal = new ModelJadwal();
    }

    public function index()
    {
        $data = [
            'judul' => 'Jadwal',
            'subjudul' => '',
            'menu' => 'jadwal',
            'submenu' => '',
            'page' => 'v_jadwal',
            'jadwal' => $this->ModelJadwal->AllData(),
        ];
        return view('v_template_admin', $data);
    }

    public function InsertData()
    {
        $data = [
            'nama_ibadah' => $this->request->getPost('nama_ibadah'),
            'jam' => $this->request->getPost('jam'),
        ];

        $this->ModelJadwal->InsertData($data);
        session()->setFlashdata('pesan','Jadwal Berhasil Ditambahkan');
        return redirect()->to(base_url('Jadwal'));
    }

    public function UpdateData($id_waktu)
    {
        $data = [
            'id_waktu' => $id_waktu, 
            'nama_ibadah' => $this->request->getPost('nama_ibadah'),
            'jam' => $this->request->getPost('jam'),
        ];

        $this->ModelJadwal->UpdateData($data);
        session()->setFlashdata('pesan','Jadwal Berhasil Diupdate');
        return redirect()->to(base_url('Jadwal'));
    }

    public function DeleteData($id_waktu)
    {
        $data = [
            'id_waktu' => $id_waktu, 
        ];

        $this->ModelJadwal->DeleteData($data);
        session()->setFlashdata('pesan','Jadwal Berhasil Didelete');
        return redirect()->to(base_url('Jadwal'));
    }
}
