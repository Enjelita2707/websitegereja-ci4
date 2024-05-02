<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendeta extends Model
{
   public function AllData()
   {
        return $this->db->table('tbl_p_pendeta')
                        ->get()
                        ->getResultArray();
   }

   public function InsertData($data)
   {
        return $this->db->table('tbl_p_pendeta')->insert($data);
   }

   public function updateData($data)
   {
        return $this->db->table('tbl_p_pendeta')
                        ->where('id', $data['id'])
                        ->update($data);
   }

   public function deleteData($id)
   {
        return $this->db->table('tbl_p_pendeta')
                        ->where('id', $id)
                        ->delete();
   }

   public function updateFoto($id, $foto)
   {
        return $this->db->table('tbl_p_pendeta')
                        ->where('id', $id)
                        ->update(['foto' => $foto]);
   }
}