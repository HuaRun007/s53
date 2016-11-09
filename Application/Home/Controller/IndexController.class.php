<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       $data = M('bcontent')->field('content')->select();
       $str = file_get_contents($data[0]['content']);
       $this->assign('content',$str);
       $this->display();
    }
}