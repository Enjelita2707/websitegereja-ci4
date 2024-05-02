<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJadwal extends Model
{
   public function AllData()
   {
        return $this->db->table('tbl_jadwal_ibadah')
        ->get()->getResultArray();
   }

   public function InsertData($data)
   {
        $this->db->table('tbl_jadwal_ibadah')->insert($data);
   }
   public function updateData($data)
   {
        $this->db->table('tbl_jadwal_ibadah')
        ->where('id_waktu', $data['id_waktu'])
        ->update($data);
   }
   public function DeleteData($data)
   {
        $this->db->table('tbl_jadwal_ibadah')
        ->where('id_waktu', $data['id_waktu'])
        ->delete($data);
   }
}
