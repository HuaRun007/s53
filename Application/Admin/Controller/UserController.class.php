<?php 
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller
{
    public function index()
    {
        $this->assign('title','前台用户管理');
        $this->display();
    }
}













