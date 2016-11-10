<?php 
namespace Admin\Controller;
use Think\Controller;
// header('content-type:text/html;charset=urf-8');
/*
 *   分类管理控制器
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

    // 执行添加分类
    public function add()
    {
        if(empty($_POST['name'])) {
            $this->error('分类标题不为空!');
        }
        $pid = I('post.pid/d');
        //判断是否是顶级分类 不是的话查询父id和父级的路径
        if($pid==0) {
            $path = $pid.',';
        } else{
            $map = [];
            $map['id'] = array(array('eq', $pid));
            // 指定查询字段 获取父类路径
            $row=M('type')->where($map)->field('id,path')->select();
            $_POST['path'] = $row[0]['path'].$row[0]['id'].',';
            $_POST['pid'] = $row[0]['id'];
        }

        M('type')->create();

        if(M('type')->add() > 0) {

            $this->success('恭喜您,添加成功!',U('index'));
        } else{

            $this->error('添加失败!');
        }
    }

    // 执行删除操作
    public function del()
    {
        if(empty($_GET['id'])) {
            $this->error('哎呀呀出错了~');
        }
        $id = I('get.id/d');

        if (M('type')->delete($id) > 0) {
           $this->success('恭喜您,删除成功!', U('index'));
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

    // 执行修改操作
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
            $this->success('恭喜您,编辑成功!', U('index'));
        } else {
            $this->error('编辑失败....');
        }
        
    }

}



