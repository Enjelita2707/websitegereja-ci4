<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendeta;

class Pendeta extends BaseController
{
    public function __construct()
    {
        $this->ModelPendeta = new ModelPendeta();
    }

    public function index()
    {
        $data = [
            'judul' => 'Pengurus Gereja',
            'subjudul' => '',
            'menu' => 'pendeta',
            'submenu' => '',
            'page' => 'v_pendeta',
            'pendeta' => $this->ModelPendeta->AllData(),
        ];
        return view('v_template_admin', $data);
    }

    public function InsertData()
    {
    $foto = $this->request->getFile('foto');

    // Cek apakah file foto berhasil diunggah
    if ($foto->isValid() && ! $foto->hasMoved()) {
        // Debug foto
        dd($foto); // Menghentikan eksekusi skrip setelah dd()

        // Pindahkan file foto ke direktori yang ditentukan
        $foto->move(ROOTPATH . 'gambar/', $foto->getName());

        // Ambil nama file foto yang telah diunggah
        $fotoName = $foto->getName();
    } else {
        // Jika gagal unggah foto, atur nama file foto menjadi null
        $fotoName = null;
    }

    $data = [
        'nama' => $this->request->getPost('nama'),
        'jabatan' => $this->request->getPost('jabatan'),
        'keterangan' => $this->request->getPost('keterangan'),
        'foto' => $fotoName,
    ];

    $this->ModelPendeta->InsertData($data);
    session()->setFlashdata('pesan', 'Pendeta Berhasil Ditambahkan');
    return redirect()->to(base_url('Pendeta'));
}



    public function UpdateData($id)
    {
        $foto = $this->request->getFile('foto'); // Ambil foto dari form

        // Jika ada foto baru diunggah, simpan foto ke folder uploads dan ambil nama file
        if ($foto->isValid()) {
            $fotoName = $foto->getRandomName();
            $foto->move(ROOTPATH . 'gambar/', $fotoName);
        } else {
            // Jika tidak ada foto baru diunggah, gunakan nama file yang sudah ada
            $fotoName = $this->request->getPost('foto_lama');
        }

        $data = [
            'id' => $id,
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'keterangan' => $this->request->getPost('keterangan'),
            'foto' => $fotoName // Simpan nama file foto ke dalam database
        ];

        $this->ModelPendeta->UpdateData($data);
        session()->setFlashdata('pesan', 'Pendeta Berhasil Diupdate');
        return redirect()->to(base_url('Pendeta'));
    }

    public function DeleteData($id)
    {
        $this->ModelPendeta->DeleteData($id);
        session()->setFlashdata('pesan', 'Pendeta Berhasil Didelete');
        return redirect()->to(base_url('Pendeta'));
    }

    public function downloadFile($fileName)
    {
        // Tentukan path ke file PDF atau gambar
        $filePath = ROOTPATH . 'gambar/' . $fileName; // Ganti dengan path file Anda

        // Pastikan file ada
        if (!file_exists($filePath)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('File tidak ditemukan.');
        }

        // Set respons
        $response = $this->response
            ->download($filePath, null, true);

        // Pastikan tipe konten sesuai
        $response->setContentType('application/pdf'); // Ganti dengan tipe konten yang sesuai jika file adalah gambar

        // Kembalikan respons
        return $response;
    }

    public function upload() {
        $config['upload_path'] = './gambar';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1000;
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        } else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('upload_success', $data);
        }

    }
}
