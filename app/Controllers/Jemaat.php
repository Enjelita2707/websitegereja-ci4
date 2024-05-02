<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJemaat;

class Jemaat extends BaseController
{
    public function __construct()
    {
        $this->ModelJemaat = new ModelJemaat();
    }

    public function index()
    {
        $data = [
            'judul' => 'Jemaat',
            'subjudul' => '',
            'menu' => 'jemaat',
            'submenu' => '',
            'page' => 'v_jemaat',
            'jemaat' => $this->ModelJemaat->AllData(),
        ];
        return view('v_template_admin', $data);
    }

    public function InsertData()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'no_tlpn' => $this->request->getPost('no_tlpn'),
            'email' => $this->request->getPost('email'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'status' => $this->request->getPost('status'),
        ];

        $this->ModelJemaat->InsertData($data);
        session()->setFlashdata('pesan','Data Jemaat Berhasil Ditambahkan');
        return redirect()->to(base_url('Jemaat'));
    }

    public function UpdateData($id_nama)
    {
        $data = [
            'id_nama' => $id_nama, 
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'no_tlpn' => $this->request->getPost('no_tlpn'),
            'email' => $this->request->getPost('email'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'status' => $this->request->getPost('status'),
        ];

        $this->ModelJemaat->UpdateData($data);
        session()->setFlashdata('pesan','Data Jemaat Berhasil Diupdate');
        return redirect()->to(base_url('Jemaat'));
    }

    public function DeleteData($id_nama)
    {
        $data = [
            'id_nama' => $id_nama, 
        ];

        $this->ModelJemaat->DeleteData($data);
        session()->setFlashdata('pesan','Data Jemaat Berhasil Didelete');
        return redirect()->to(base_url('Jemaat'));
    }
}
