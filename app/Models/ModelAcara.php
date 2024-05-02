<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAcara extends Model
{
    protected $table = 'acara_ibadah'; // sesuaikan dengan nama tabel di database

    protected $allowedFields = ['judul', 'deskripsi', 'file', 'created_at', 'updated_at']; // sesuaikan dengan bidang yang ada dalam tabel

    public function AllData()
    {
        return $this->findAll(); // mengambil semua data dari tabel
    }

    public function InsertData($data)
    {
        return $this->insert($data);
    }

    public function UpdateData($id, $data)
    {
        return $this->update($id, $data);
    }

    public function DeleteData($id)
    {
        return $this->delete($id);
    }

    // Metode untuk menyimpan nama file yang diunggah
    public function saveFile($fileName)
    {
        $data = [
            'file' => $fileName
        ];
        return $this->insert($data);
    }
}
