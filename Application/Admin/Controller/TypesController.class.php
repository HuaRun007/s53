<?php 
namespace Admin\Controller;
use Think\Controller;
// header('content-type:text/html;charset=urf-8');
/*
 *   分类管理
 *   作者:华润
*/
class TypesController extends Controller
{
    public function index()
    {
        $data = M('type')->order('pid')->select();
        $this->assign('data',$data);
        $this->assign('title','分类管理');
        $this->display('index');
    }

    // 执行添加操作
    public function add()
    {
        if(empty($_POST['name'])) {
            $this->error('出错啦!');
        }
        $pid = I('post.pid/d');
        //
        if($pid==0) {
            $path = $pid.',';
        } else{
            $map = [];
            $map['id'] = array(array('eq', $pid));
            // 
            $row=M('type')->where($map)->field('id,path')->select();
            $_POST['path'] = $row[0]['path'].$row[0]['id'].',';
            $_POST['pid'] = $row[0]['id'];
        }

        M('type')->create();

        if(M('type')->add() > 0) {

            $this->success('恭喜你,添加成功!',U('index'));
        } else{

            $this->error('添加失败!');
        }
    }

    // 执行删除
    public function del()
    {
        if(empty($_GET['id'])) {
            $this->error('出错啦啦啦~');
        }
        $id = I('get.id/d');

        if (M('type')->delete($id) > 0) {
           $this->success('恭喜你,删除成功!', U('index'));
        } else {
           $this->error('删除失败....', U('index'));
        }
    }

    // 加载修改页面
    public function edit()
    {
        if(empty($_GET['id'])) {
            // $this->redirect('');
            echo '<h1>404</h1>';exit;
        }
        $id = I('get.id/d');

        $map['id'] = $id;

        $this->assign('title','修改分类');
        $data = M('type')->where($map)->select();
        $this->assign('data',$data);
        $this->display();
    }

    // 执行修改
    public function update()
    {

        if(empty($_POST['id'])) {
            // $this->redirect('');
            echo '<h1>404</h1>';exit;
        }
        $id = I('post.id/d');

        $map['id'] = $id;

        M('type')->create();
        if (M('type')->where($map)->save() > 0) {
            $this->success('修改成功!', U('index'));
        } else {
            $this->error('修改失败....');
        }
        
    }

}



