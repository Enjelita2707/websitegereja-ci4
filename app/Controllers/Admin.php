<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;

class Admin extends BaseController
{
    public function __construct() {
        $this->ModelAdmin = new ModelAdmin();
    }
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'subjudul' => '',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'v_dashboard',
        ];
        return view('v_template_admin', $data);
    }
    public function Setting()
    {
        $data = [
            'judul' => 'Setting',
            'subjudul' => '',
            'menu' => 'setting',
            'submenu' => '',
            'page' => 'v_setting',
            'setting' => $this->ModelAdmin->ViewSetting(),
        ];
        return view('v_template_admin', $data);
    }
    public function UpdateSetting()
    {
        $data = [
            'id' => 1,
            'nama_gereja' => $this->request->getPost('nama_gereja'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $this->ModelAdmin->UpdateSetting($data);
        session()->setFlashdata('pesan','Setting Berhasil Diupdate');
        return redirect()->to(base_url('Admin/Setting'));
    }
    
}
