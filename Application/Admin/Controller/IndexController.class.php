<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->assign('title','后台管理页面');
        $this->display();
    }
}