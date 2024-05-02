<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAcara;

class Acara extends BaseController
{
    public function __construct()
    {
        $this->ModelAcara = new ModelAcara();
    }

    public function index()
    {
        $data = [
            'judul' => 'Acara Ibadah',
            'subjudul' => '',
            'menu' => 'acara',
            'submenu' => '',
            'page' => 'v_acara',
            'acara' => $this->ModelAcara->AllData(),
        ];
        return view('v_template_admin', $data);
    }

    public function InsertData()
{
    $file = $this->request->getFile('file');

    // Cek apakah file berhasil diunggah
    if ($file->isValid() && ! $file->hasMoved()) {
        // Simpan file di lokasi yang sesuai dan beri nama unik
        $newName = $file->getRandomName();
        $file->move(ROOTPATH . 'file', $newName);
    } else {
        // Jika gagal unggah, atur nama file menjadi null
        $newName = null;
    }

    $data = [
        'judul' => $this->request->getPost('judul'),
        'deskripsi' => $this->request->getPost('deskripsi'),
        'file' => $newName, // Simpan nama file ke dalam database
        'updated_at' => date('Y-m-d H:i:s'),    
    ];

    $this->ModelAcara->InsertData($data);
    session()->setFlashdata('pesan', 'Acara Berhasil Ditambahkan');
    return redirect()->to(base_url('Acara'));
}



    public function UpdateData($id)
    {
        // Ambil file yang diunggah dari form
        $file = $this->request->getFile('file');

        // Jika ada file baru diunggah, simpan file ke folder uploads dan ambil nama file
        if ($file->isValid()) {
            $fileName = $file->getRandomName();
            $file->move(ROOTPATH . 'uploads', $fileName);
        } else {
            // Jika tidak ada file baru diunggah, gunakan nama file yang sudah ada
            $fileName = $this->request->getPost('file_lama');
        }

        $data = [
            'id' => $id,
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'file' => $fileName, // Simpan nama file ke dalam database
            'updated_at' => date('Y-m-d H:i:s'), // Tambahkan tanggal dan waktu saat ini
        ];

        $this->ModelAcara->UpdateData($data);
        session()->setFlashdata('pesan', 'Acara Berhasil Diupdate');
        return redirect()->to(base_url('Acara'));
    }

    public function DeleteData($id)
    {
        $this->ModelAcara->DeleteData($id);
        session()->setFlashdata('pesan', 'Acara Berhasil Didelete');
        return redirect()->to(base_url('Acara'));
    }
}
