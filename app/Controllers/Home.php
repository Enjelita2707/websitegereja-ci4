<?php

namespace App\Controllers;
use App\Models\ModelHome;


class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelHome = new ModelHome();
    }


    public function index()
    {
        $data = [
            'judul' => 'Home',
            'page' => 'v_home',
        ];
        return view('v_template', $data);
    }

    public function Agenda()
    {
        $data = [
            'judul' => 'Agenda',
            'page' => 'front-end/v_agenda',
            'agenda' => $this->ModelHome->Agenda(),
        ];
        return view('v_template', $data);
    }

    public function Jadwal()
    {
        $data = [
            'judul' => 'Jadwal',
            'page' => 'front-end/v_jadwal',
            'jadwal' => $this->ModelHome->Jadwal(),
        ];
        return view('v_template', $data);
    }

    public function Jemaat()
    {
        $data = [
            'judul' => 'Jemaat',
            'page' => 'front-end/v_jemaat',
            'jemaat' => $this->ModelHome->Jemaat(),
        ];
        return view('v_template', $data);
    }

    public function Pendeta()
    {
        $data = [
            'judul' => 'Pengurus Gereja',
            'page' => 'front-end/v_pendeta',
            'pendeta' => $this->ModelHome->Pendeta(),
        ];
        return view('v_template', $data);
    }
    
    public function Acara()
    {
        $data = [
            'judul' => 'Acara Ibadah',
            'page' => 'front-end/v_acara',
            'acara' => $this->ModelHome->Acara(),
        ];
        return view('v_template', $data);
    }
}
