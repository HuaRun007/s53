<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/book/Public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/book/Public/my.css">
</head>
<body>
    <div class="container">
        <h1><?php echo ($title); ?></h1>
        <div class="center-block mt20">
            <a href="<?php echo U('index');?>" class="btn btn-primary">首页</a>
            <button  class="btn btn-success" data-toggle="modal" data-target="#myModal">添加</button>
        </div>
        <hr>
        
        <table class="table table-hover mt20 text-center">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">姓名</th>
                <th class="text-center">性别</th>
                <th class="text-center">等级</th>
                <th class="text-center">操作</th>
            </tr>
            <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($k % 2 );++$k;?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["username"]); ?></td>
                <td><?php echo ($v["sex"]); ?></td>
                <td class="col-md-3">
                    <?php if($v["state"] == 0): ?>BOSS
                    <?php elseif($v["state"] == 1): ?>技术人员
                    <?php else: ?>普通用户<?php endif; ?>
                </td>
                <td class="col-md-2">
                    <a href="<?php echo U('edit',array('id'=>$v['id']));?>" class="btn btn-primary">编辑</a>
                    <a href="<?php echo U('del',array('id'=>$v['id']));?>" class="btn btn-danger">删除</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        
    </div><!--END container-->

    <div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">添加用户</h4>
      </div>
      <div class="modal-body">
        <table class="table">
            <div class="form-group">
            <form action="<?php echo U('insert');?>" method="post">
                <tr>
                    <th>用户名:</th>
                <td><input type="text" class="form-control" aria-describedby="sizing-addon1" name="username" placeholder="5-50个字符"></td>
                </tr>
                <tr>
                    <th>密码:</th>
                <td><input type="password" class="form-control" aria-describedby="sizing-addon1" name="password" placeholder="8-32个字符"></td>
                </tr>
                <tr>
                    <th>邮箱地址:</th>
                <td><input type="email" class="form-control" aria-describedby="sizing-addon1" name="email" placeholder="输入邮箱地址"></td>
                </tr>
                <tr>
                    <th>性别:</th>
                    <td>
                        <input type="radio" name="sex" value="1">男
                        <input type="radio" name="sex" value="0" checked>女
                        <input type="radio" name="sex" value="2" >保密</td>
                </tr>
                <tr>
                    <th>电话号码:</th>

                <td><input type="text" class="form-control" aria-describedby="sizing-addon1"  name="phone" placeholder="输入电话号码"></td>
                </tr>
                <tr>
                    <td>
                        <img tyle='cursor:pointer;width:60px;height:27px;' title='看不清楚?换一张' src="<?php echo U('Public/verify');?>" name='verifyImg' onclick="this.src='<?php echo U('Public/verify');?>'">
                    </td>
                    <td>
                        <input type="text" class="form-control" aria-describedby="sizing-addon1">
                    </td>
                </tr>
            </div>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">添加</button>
          </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <script src="/book/Public/js/jquery.min.js"></script>
    <script src="/book/Public/js/bootstrap.min.js"></script>
</body>
</html>