<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 09:26:25
         compiled from "D:\WWW\jiumi\view\templets\home\index\zhaopinxiangqing.html" */ ?>
<?php /*%%SmartyHeaderCode:18800562596cc813f45-56656723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32da269425247db8e002872679c2e0691c3a52ce' => 
    array (
      0 => 'D:\\WWW\\jiumi\\view\\templets\\home\\index\\zhaopinxiangqing.html',
      1 => 1445304379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18800562596cc813f45-56656723',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_562596cc8b0365_88629744',
  'variables' => 
  array (
    'templets' => 0,
    'about' => 0,
    'id' => 0,
    'rcxq' => 0,
    'prev' => 0,
    'next' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562596cc8b0365_88629744')) {function content_562596cc8b0365_88629744($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\WWW\\jiumi\\system\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/news-xiangqing.css" rel="stylesheet" type="text/css">


<!--��������-->
<div class="mainbox">
	<div class="main">
    	<ul class="mainone">
        	<li>您现在的位置:<a class="one" href="index">首页</a></span></li>
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
            <a href="/index.php/home/index/rencai/tid/8/id/<?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['navsonname'];?>
</a></div>
            <?php } else { ?> <div><a href="/index.php/home/index/rencai/tid/8/id/<?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['about']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['navsonname'];?>
</a>
             </div>
             <?php }?>
            <?php endfor; endif; ?>
            </li>
            <li class="right">
           	 	<h2><?php echo $_smarty_tpl->tpl_vars['rcxq']->value['t1'];?>
</h2>
                <div>来源：<?php echo $_smarty_tpl->tpl_vars['rcxq']->value['t5'];?>
<span>发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rcxq']->value['c_time'],'%Y-%m-%d');?>
</span><b></b></div>
                  <?php echo $_smarty_tpl->tpl_vars['rcxq']->value['t2'];?>

	<p></p>  
                <!--  <?php if ($_smarty_tpl->tpl_vars['prev']->value['id']!='') {?>
					<a class="shang" href="/index.php/home/index/newsxqy/tid/3/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/nid/<?php echo $_smarty_tpl->tpl_vars['prev']->value['id'];?>
"><b>上一篇:<?php echo $_smarty_tpl->tpl_vars['prev']->value['t1'];?>
</b></a>
					<?php } else { ?>
					<a href="javascript:void(0)">
					
					<a calss="xia" href="javascript:void(0)"><b>没有了</b></a>					
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['next']->value['id']!='') {?>
					<a calss="xia" href="/index.php/home/index/newsxqy/tid/3/id/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
/nid/<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
"><b>下一篇:<?php echo $_smarty_tpl->tpl_vars['next']->value['t1'];?>
</b></a>
					<a href="/index.php/home/index/news_detail/id/<?php echo $_smarty_tpl->tpl_vars['next']->value['id'];?>
/"></a>
					<?php } else { ?>
					<a calss="xia" href="javascript:void(0)"><b>没有了</b></a>
					<a href="javascript:void(0)"><img class="next"></a>				
					<?php }?>  -->
          </li>
          
        </ul>
    </div>
</div>

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
