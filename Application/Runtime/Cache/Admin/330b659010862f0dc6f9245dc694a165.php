<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/book/Public/css/pintuer.css">
<link rel="stylesheet" href="/book/Public/css/admin.css">
<script src="/book/Public/js/jquery.js"></script>
<script src="/book/Public/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span><?php echo ($title); ?></strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo U('update');?>">        
      <input type="hidden" name="id" value="<?php echo ($data[0]["id"]); ?>">
      <?php echo ($data[0]["id"]); ?>
      <div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="name" value="<?php echo ($data[0]["name"]); ?>" />
          <div class="tips"></div>
        </div>
      </div>        
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="path" value="<?php echo ($data[0]["path"]); ?>"  disabled />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>