<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 11:30:25
         compiled from "D:\WWW\jiumi\view\templets\home\index\lianxi.html" */ ?>
<?php /*%%SmartyHeaderCode:2567056259844cb7aa1-50228229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c72d028d1adadc7ae17c5e31db268630560fc577' => 
    array (
      0 => 'D:\\WWW\\jiumi\\view\\templets\\home\\index\\lianxi.html',
      1 => 1445311822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2567056259844cb7aa1-50228229',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56259844cfdfb9_93704962',
  'variables' => 
  array (
    'templets' => 0,
    'about' => 0,
    'id' => 0,
    'keshi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56259844cfdfb9_93704962')) {function content_56259844cfdfb9_93704962($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--主体区域-->
<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/lianxi.css" rel="stylesheet" type="text/css">
<!--��������-->
<div class="mainbox">
	<div class="main">
    	<ul class="mainone">
        	<li>您现在的位置:<a class="one" href="index.html">首页</a>&nbsp;>&nbsp;<a class="two" href="index.html">科室导航</a>&nbsp;>&nbsp;<span>临床科室</span></li>
        </ul>
        <ul class="maintwo">
        	<li class="left">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
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
?>
        	<?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id']) {?> 
            <div  class="current1"  > 
            <a href="/index.php/home/index/yuyue/tid/9/id/<?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['navsonname'];?>
</a></div>
            <?php } else { ?> <div><a href="/index.php/home/index/yuyue/tid/9/id/<?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['navsonname'];?>
</a>
             </div>
             <?php }?>
            <?php endfor; endif; ?>
            </li>
            <li class="right">
            	<div class="ll">
                	<h3>预约挂号</h3>
                </div>
                <form action="/index.php/home/index/yyjs" method="post">
                <dl><dt>预约科室类型</dt>
                <dd><select name="kslx">
                <option value="">--请选择----</option>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['keshi']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
?><option value="<?php echo $_smarty_tpl->tpl_vars['keshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['keshi']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['keshileixing'];?>
</option>
                   <?php endfor; endif; ?></select></dd></dl>
                <dl><dt>预约科室</dt><dd>
                <select name="ks"><option id="w1" value="">--请选择----</option></select></dd></dl>
  
                <dl><dt>就诊时间</dt><dd><input name="yytime"></dd></dl>
                <dl><dt>患者姓名</dt><dd><input name="name"></dd></dl>
                <dl><dt>联系电话</dt><dd><input name="tel"></dd></dl>
                <dl><dt>备注留言</dt><dd><textarea name="yyly"></textarea></dd></dl>
                <button>提交</button> 
                </form>
                <div class="zhu">
                	<h2>注：</h2>
                    <p>1、上午8:00不能挂号<br>

2、9:00~12:00（不包括12点）每个科室一小时只能预约挂号一个人<br>

3、12:00~16:00不限定</p>
                </div>
            </li>
        </ul>
    </div>
</div>
<script type="text/javascript">
$("select[name=kslx]").change(function(){
   $.getJSON("/index.php/home/index/deal",{id:$(this).val(),bs:$(this).attr('name')},function(msg){
	  
	    if(msg){
	    	 	
	    	/* $("select[name=ks] option:gt(0)").remove(); */
	    	$("#w1").remove();
	    	var str="";
	         for(var i=0;i<msg.length;i++){
	           str+= "<option value="+msg[i].ks+">"+msg[i].ks+"</option>";
	         }
	         $("select[name=ks]").html(str);
	    }
	});
});

</script>
<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
