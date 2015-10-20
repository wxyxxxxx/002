<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 09:26:35
         compiled from "D:\WWW\jiumi\view\templets\home\index\yingpinzhiwei.html" */ ?>
<?php /*%%SmartyHeaderCode:138315625984ba0bd49-54355581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd318ecd520dce48f2e0623c5ebe440cd6ed8019' => 
    array (
      0 => 'D:\\WWW\\jiumi\\view\\templets\\home\\index\\yingpinzhiwei.html',
      1 => 1445246244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138315625984ba0bd49-54355581',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templets' => 0,
    'about' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5625984ba90a61_49873180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625984ba90a61_49873180')) {function content_5625984ba90a61_49873180($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/yingpinzhiwei.css" rel="stylesheet" type="text/css">


<!--��������-->
<div class="mainbox">
	<div class="main">
    	<ul class="mainone">
        	<li>您现在的位置:<a class="one" href="index">首页</a></li>
        </ul>
        <ul class="maintwo">
        	<li class="left"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['about']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total']);
?> <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id']) {?>
				<div class="current1">
					<a class="wsp" href="/index.php/home/index/rencai/tid/8/id/<?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['navsonname'];?>
</a>
				</div> <?php } else { ?>
				<div>
					<a href="/index.php/home/index/rencai/tid/8/id/<?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['navsonname'];?>
</a>
				</div> <?php }?> <?php endfor; endif; ?>
			</li>
            <li class="right">
            	<h3>临床科室</h3>
            	<form name="form1" id="form1">
                <div class="abox">
                	    <div class="aleft">
                        	<dl><dt>姓名：</dt><dd><input type="text" name="p_name"></dd><span>*</span></dl>
                            <dl><dt>年龄：</dt><dd><input type="text" name="p_age"></dd><span>*</span></dl>
                            <dl><dt>毕业院校：</dt><dd class="yi"><input type="text" name="p_school"></dd><span>*</span></dl>
                            <dl><dt>毕业时间：</dt><dd class="yi"><input type="text" name="b_time"></dd><span>*</span></dl>
                            <dl><dt>户口所在地：</dt><dd class="yi"><input type="text" name="h_addr"></dd><span>*</span></dl>
                            <dl><dt>联系地址：</dt><dd class="yi"><input type="text" name="l_addr"></dd><span>*</span></dl>
                            <dl><dt>QQ号码：</dt><dd class="yi"><input type="text" name="qq"></dd><span>*</span></dl>
                            <dl class="yanx"><dt>验证码：</dt><dd class="yan"><input type="text" name="code">
                            </dd><img style="width:100px;height:35px" onclick="javascript:this.src='/index.php/home/reg/get_yz_code/num/'+Math.random()" src="/index.php/home/reg/get_yz_code" alt="">
&nbsp;请输入图片中的字符</dl>
                        </div>
                        <div class="aright">
                    	   <dl class="xingbie"><dt>性别：</dt><dd><form><label><input name="sex" type="radio" value="男" checked="checked">&nbsp;男</label>&nbsp;&nbsp;<label><input name="sex" type="radio" value="女">&nbsp;女</label></form>&nbsp;</dd><span>*</span></dl>
                            <dl class="minzu"><dt>民族：</dt><dd><input type="text" name="mz"></dd><span>*</span></dl>
                            <dl><dt>所学专业：</dt><dd class="yi"><input type="text" name="zy"></dd><span>*</span></dl>
                            <dl><dt>最高学历：</dt><dd class="ben"><select name="xl"><option>本科</option><option>专科</option></select></dd><span>*</span></dl>
                            <dl><dt>目前所在地：</dt><dd class="yi"><input type="text" name="m_addr"></dd><span>*</span></dl>
                            <dl><dt>手机号码：</dt><dd class="yi"><input type="text" name="p_tel"></dd><span>*</span></dl>
                            <dl><dt>Email：</dt><dd class="yi"><input type="text" name="p_email"></dd><span>*</span></dl>
                        </div>
                </div>
                <button id="button" type="button">提交确认</button>
                </form>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("button").click(function(){
            var name=$('input[name="p_name"]').val();
            var age=$('input[name="p_age"]').val();
            var school=$('input[name="p_school"]').val();
            var btime=$('input[name="b_time"]').val(); 
            var huji=$('input[name="h_addr"]').val();
            var addr=$('input[name="l_addr"]').val();
            var QQ=$('input[name="qq"]').val();
            var sex=$('input[name="sex"]').val();
            var minzu=$('input[name="mz"]').val();
            var zhuanye=$('input[name="zy"]').val();
            var xueli=$('input[name="xl"]').val();
            var maddr=$('input[name="m_addr"]').val();
            var phone=$('input[name="p_tel"]').val();
            var email=$('input[name="p_email"]').val();
            var code=$('input[name="code"]').val();
            if (name=="") {alert("姓名不能为空");return false};
            if (age=="") {alert("年龄不能为空");return false};
            if (school=="") {alert("毕业学校不能为空");return false};
            if (btime=="") {alert("毕业时间不能为空");return false};
            if (huji=="") {alert("户口所在地不能为空");return false};
            if (addr=="") {alert("联系地址不能为空");return false};
            if (QQ=="") {alert("QQ号码不能为空");return false};
            if (minzu=="") {alert("民族不能为空");return false};
            if (zhuanye=="") {alert("所学专业不能为空");return false};
            if (xueli=="") {alert("最高学历不能为空");return false};
            if (maddr=="") {alert("目前所在地不能为空");return false};
            if (phone=="") {alert("手机号码不能为空");return false};

            if (!phone.match(/^(((1[0-9][0-9]{1})|159|153)+\d{8})$/)) {
               alert("手机号码格式不正确！");
               $('select[name="p_tel"]').focus();
               return false;
            }  

            if (email=="") {alert("邮箱不能为空");return false};

                if (!email.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)) { 
                alert("邮箱格式不正确"); 
                //$("#confirmMsg").html("<font color='red'>邮箱格式不正确！请重新输入！</font>"); 
                $(".email").focus(); 
                return false; 
            } 

            var data=$("#form1").serialize();
            $.post("/index.php/home/index/do_pin",data,function(sb){
                    if (sb==-4) {alert("验证码错误");}
                    if (sb>0) {alert("提交成功");location.href="/index.php/home/index/index"}
                    else{
                        alert("失败");
                      
                    }
            })
        })
    })
    </script>
				</script>
<!--footer--><?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
