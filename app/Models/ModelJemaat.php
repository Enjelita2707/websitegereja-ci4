<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJemaat extends Model
{
   public function AllData()
   {
        return $this->db->table('tbl_jemaat')
        ->get()->getResultArray();
   }

   public function InsertData($data)
   {
        $this->db->table('tbl_jemaat')->insert($data);
   }
   public function updateData($data)
   {
        $this->db->table('tbl_jemaat')
        ->where('id_nama', $data['id_nama'])
        ->update($data);
   }
   public function DeleteData($data)
   {
        $this->db->table('tbl_jemaat')
        ->where('id_nama', $data['id_nama'])
        ->delete($data);
   }
}
