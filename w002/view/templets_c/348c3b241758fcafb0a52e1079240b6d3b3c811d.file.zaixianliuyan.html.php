<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 12:01:40
         compiled from "D:\WWW\jiumi\view\templets\home\index\zaixianliuyan.html" */ ?>
<?php /*%%SmartyHeaderCode:81065625b91e51b792-69572910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '348c3b241758fcafb0a52e1079240b6d3b3c811d' => 
    array (
      0 => 'D:\\WWW\\jiumi\\view\\templets\\home\\index\\zaixianliuyan.html',
      1 => 1445313203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81065625b91e51b792-69572910',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5625b91e58cc36_26793737',
  'variables' => 
  array (
    'templets' => 0,
    'about' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625b91e58cc36_26793737')) {function content_5625b91e58cc36_26793737($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/zaixianliuyan.css" rel="stylesheet" type="text/css">

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
                	<h3>在线留言</h3>
                </div>
                   <form action="/index.php/home/index/ly" method="post">
                <dl><dt>姓名</dt><dd><input name="name"></dd></dl>
                <dl><dt>联系电话</dt><dd><input name="tel"></dd></dl>
                <dl><dt>留言内容</dt><dd><textarea nama="conten"></textarea></dd></dl>
                <button>提交</button>
                </form>>
            </li>
        </ul>
    </div>
</div>

<!--footer--><?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
