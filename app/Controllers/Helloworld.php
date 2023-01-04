<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Helloworld extends Controller {
  public function helloworld() {
    $data['title'] = "Saya sedang belajar ci4";
    return view('helloworld', $data);
  }
}


?>