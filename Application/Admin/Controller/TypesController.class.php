<?php 
namespace Admin\Controller;
use Think\Controller;
class TypesController extends Controller
{
    public function index()
    {
        $this->assign('title','分类管理');
        $this->display();
    }
}




