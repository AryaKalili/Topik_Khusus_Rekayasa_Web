<?php

namespace App\Controllers;

class login extends BaseController
{
  public function register()
  {
    $email = $this->request->getVar('Email');
    $user = $this->request->getVar('Username');
    $pass = $this->request->getVar('Password');
    $vpass = $this->request->getVar('Password1');
    $data = $this->login_user->where('email', $email)->first();
    if ($email != $data['email']) {
      if ($pass == $vpass) {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $this->login_user->save([
          'id_user' => date('ymdhsi') . rand(100, 999),
          'username' => $user,
          'email' => $email,
          'password' => $pass,
          'status' => "Offline"
        ]);
        return redirect()->to('/page/login');
      }
    }
    $title['title'] = "Register | Learning";
    return view('layout/register', $title);
  }
  public function login()
  {
    $email = $this->request->getVar("Email");
    $pass = $this->request->getVar('Password');
    $data = $this->login_user->where('email', $email)->first();
    $CPass = password_verify($pass, $data['password']);
    $r = $data['status'];
    if ($r != "Online") {
      if ($CPass) {
        $id = $data['id_user'];
        $status = ['status' => 'Online'];
        $this->login_user->update($id, $status);
        $data = $this->login_user->where('email', $email)->first();
        session()->set('data', $data);
        return redirect()->to('Page/index');
      } else {
        if (empty($data['email'])) {
          $err = "Email is not Found";
          session()->setFlashdata('error', $err);
          return redirect()->to('Page/login');
        } else {
          $err = "Email / Password incorrect";
          session()->setFlashdata('error', $err);
          return redirect()->to('Page/login');
        }
      }
    } else {
      $err = "Account Already Used";
      session()->setFlashdata('error', $err);
      return redirect()->to('Page/login');
    }
  }
  public function logout()
  {
    $session = session()->get('data');
    $id = $session['id_user'];
    $data = $this->login_user->where('id_user', $id)->first();
    if ($id == $data["id_user"]) {
      $status = ['status' => 'Offline'];
      $this->login_user->update($data["id_user"], $status);
      session()->remove($data);
      return redirect()->to('Page/login');
    } else {
      $session->get('data');
      return redirect()->to("Page/index");
    }
  }
}
