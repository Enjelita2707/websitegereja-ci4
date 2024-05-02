<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ModelKasGereja;


class KasGereja extends BaseController
{
    public function __construct() 
    {
        $this->ModelKasGereja = new ModelKasGereja;
    }
    public function index()
    {
        $data = [
            'judul' => 'Rekapitulasi Kas Gereja',
            'subjudul' => '',
            'menu' => 'kas-gereja',
            'submenu' => 'rekap-kas',
            'page' => 'v_rekap_kas_gereja',
            'kas' => $this->ModelKasGereja->AllData(),
        ];
        return view('v_template_admin', $data);
    }
}
