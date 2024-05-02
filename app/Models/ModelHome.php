<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHome extends Model
{
   public function Agenda()
   {
    return $this->db->table('tbl_agenda')
    ->where('month(tanggal)', date('m'))
    ->where('year(tanggal)', date('Y'))
    ->orderBy('tanggal', 'ASC')
    ->get()->getResultArray();
   }

   public function Jadwal()
   {
    return $this->db->table('tbl_jadwal_ibadah')
    
    ->get()->getResultArray();
   }

   public function Jemaat()
   {
    return $this->db->table('tbl_jemaat')
    
    ->get()->getResultArray();
   }

   public function Pendeta()
   {
    return $this->db->table('tbl_p_pendeta')
    
    ->get()->getResultArray();
   }

   public function Acara()
   {
    return $this->db->table('acara_ibadah')
    
    ->get()->getResultArray();
   }
   
}
