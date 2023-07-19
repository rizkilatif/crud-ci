<?php namespace App\Controllers;

use \App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;
class Page extends BaseController {
  public function register(){
    // validasi data user
    $validation = \Config\Services::validation();
    $validation->setRules([
      'name' => 'required',
      'email' => 'required',
      'password' => 'required',
    ]);
    $isDataValid = $validation->withRequest($this->request)->run();
    
    if($isDataValid) {
      $users = new UserModel();
      $users->insert([
        'name' => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
        'password' => $this->request->getPost('password'),
      ]);
      return redirect('dashboard');
    };

    echo view("register");
  }

  public function dashboard() {
    $users = new UserModel();
    $data['users'] = $users->findAll();

    if(!$data['users']) {
      throw PageNotFoundException::forPageNotFound('Data user tidak ditemukan!');
    }

    echo view("dashboard", $data);
  }

  public function landing()
    {
        echo view('landing.php');
    }
}