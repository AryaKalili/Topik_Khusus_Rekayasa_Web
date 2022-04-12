<?php

namespace App\Controllers;

use App\Models\course;
use App\Models\login_user;
use App\Models\teacher;

class Page extends BaseController
{
  protected $login_user;
  protected $teacher;
  protected $course;
  public function __construct()
  {
    $this->login_user = new login_user();
    $this->teacher = new teacher();
    $this->course = new course();
  }
  public function index()
  {
    $data['title'] = "Home | Learning";
    $data['user'] = $this->login_user->findAll();
    return view('layout/index', $data);
  }
  public function learning()
  {
    $data['title'] = "Course | Learning";
    return view('layout/learning', $data);
  }
  public function student()
  {
    $v_session = session()->get('data');
    $status = $v_session['status'];
    $data['active'] = $this->login_user->where('status', $status)->findAll();
    $data['title'] = "List Student | Learning";
    return view('layout/daftar', $data);
  }
  public function login()
  {
    return view('layout/login');
  }
  public function register()
  {
    $data['title'] = "Register | Learning";
    return view('layout/register', $data);
  }
}
