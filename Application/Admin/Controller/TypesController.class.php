<?php 
namespace Admin\Controller;
use Think\Controller;
// header('content-type:text/html;charset=urf-8');
/*
 *   �������
 *   ����:����
*/
class TypesController extends Controller
{
    public function index()
    {
        $data = M('type')->order('pid')->select();
        $this->assign('data',$data);
        $this->assign('title','�������');
        $this->display('index');
    }

    // ִ����Ӳ���
    public function add()
    {
        if(empty($_POST['name'])) {
            $this->error('������!');
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

            $this->success('��ϲ��,��ӳɹ�!',U('index'));
        } else{

            $this->error('���ʧ��!');
        }
    }

    // ִ��ɾ��
    public function del()
    {
        if(empty($_GET['id'])) {
            $this->error('����������~');
        }
        $id = I('get.id/d');

        if (M('type')->delete($id) > 0) {
           $this->success('��ϲ��,ɾ���ɹ�!', U('index'));
        } else {
           $this->error('ɾ��ʧ��....', U('index'));
        }
    }

    // �����޸�ҳ��
    public function edit()
    {
        if(empty($_GET['id'])) {
            // $this->redirect('');
            echo '<h1>404</h1>';exit;
        }
        $id = I('get.id/d');

        $map['id'] = $id;

        $this->assign('title','�޸ķ���');
        $data = M('type')->where($map)->select();
        $this->assign('data',$data);
        $this->display();
    }

    // ִ���޸�
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
            $this->success('�޸ĳɹ�!', U('index'));
        } else {
            $this->error('�޸�ʧ��....');
        }
        
    }

}



