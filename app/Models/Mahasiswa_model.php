<?php 

namespace App\Models;
use CodeIgniter\Model;

class Mahasiswa_model extends Model {
  Protected $db;

  public function __construct() {
    $this->$db = \Config\Database::connect();
  }

  function get_data() {
    $data = $this->db->query('select idmahasiswa, nim, nama, angkatan, namajurusan from tbl_mahasiswa m left join tbl_jurusan j on m.idjurusan=j.idjurusan');

    return $data->getResultArray();
  }

}


?>