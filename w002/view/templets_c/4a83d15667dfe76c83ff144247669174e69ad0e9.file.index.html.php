<?php /* Smarty version Smarty-3.1.18, created on 2015-10-20 10:35:19
         compiled from "D:\WWW\jiumi\view\templets\home\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:176295625a867f1f1e2-22250677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a83d15667dfe76c83ff144247669174e69ad0e9' => 
    array (
      0 => 'D:\\WWW\\jiumi\\view\\templets\\home\\index\\index.html',
      1 => 1445066147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176295625a867f1f1e2-22250677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templets' => 0,
    'newtp' => 0,
    'news_list' => 0,
    'vf' => 0,
    'img' => 0,
    'nav' => 0,
    'my_list' => 0,
    'job_new' => 0,
    'jk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5625a8682e2598_32744189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5625a8682e2598_32744189')) {function content_5625a8682e2598_32744189($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\WWW\\jiumi\\system\\Smarty\\plugins\\modifier.date_format.php';
?>﻿<?php echo $_smarty_tpl->getSubTemplate ("common_head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--主体区域-->
<link href="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/css/index.css" rel="stylesheet" type="text/css">
<div class="mainbox">
	<div class="main">
        <div class="mainleft">
            <div class="ntittle">
                <h2>新闻动态</h2>
                <a href="/index.php/home/index/news">更多>></a>
            </div>
            <div class="bannerbox">
                <div class="bannerimg">          
           	        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['newtp']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <a href="<?php echo $_smarty_tpl->tpl_vars['newtp']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['newtp']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['t3'];?>
" alt=""></a>
                     <?php endfor; endif; ?>
                </div>
                <div class="biaoyu">
                	<p>爱心传递 播散希望</p>
                    <div class="hd">
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                    </div>
                </div>
                
			<script>
                jQuery(".bannerbox").slide({mainCell:".bannerimg",titCell:".hd span",delayTime:1500,trigger:"click",autoPlay:true});
            </script> 
            </div>
            <div class="text">
            	<dl class="neirong">
            	 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['news_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <dd><a href="{$news_list[v].id}>">&nbsp;<?php echo $_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['t1'];?>
</a><a href="#">
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['c_time'],'%Y-%m-%d');?>
</a></dd>
                    <?php endfor; endif; ?>
           	   </dl>
            </div>
        </div>
        <div class="mainright">
        	<div class="stittle">
                <h2>视频专区</h2>
                <a href="/index.php/home/index/vf">更多>></a>
            </div>
            <div class="text1">
            	<dl class="neirong1">
            	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['vf']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <dd><a href="<?php echo $_smarty_tpl->tpl_vars['vf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['vf'];?>
"  target="view_window" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['vf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['vft'];?>
</a><a class="aa" href="<?php echo $_smarty_tpl->tpl_vars['vf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['vf'];?>
">
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['c_time'],'%Y-%m-%d');?>
</a></a></dd>
                  <?php endfor; endif; ?>
           	   </dl>
            </div>
            <div class="yuyue"><a href="/index.php/home/index/lianxi"><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p4.jpg"></a></div>
            <div class="woyao"><a href="/index.php/home/index/zaixianliuyan"><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p5.jpg"></a></div>
        </div>
    </div>
</div>

<!--广告位-->
<div class="guanggao1">
	<img src="<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = (int) 2;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['img']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max']);
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
?><?php echo $_smarty_tpl->tpl_vars['img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['img_url'];?>
<?php endfor; endif; ?>">
</div>

<!--名医荟萃-->
<div class="mingyibox">
	<div class="mingyi">
    	<div class="mingleft">
        	<div class="ntittle">
                <h2><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = (int) 4;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nav']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max']);
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
?><?php echo $_smarty_tpl->tpl_vars['nav']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['navname'];?>
<?php endfor; endif; ?></h2>
                <a href="/index.php/home/index/mingyi">更多>></a>
            </div>
            <div class="bbbox">
                   <!-- <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['vf']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <dd><a href="<?php echo $_smarty_tpl->tpl_vars['vf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['vf'];?>
"  target="view_window" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['vf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['vft'];?>
</a><a class="aa" href="<?php echo $_smarty_tpl->tpl_vars['vf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['vf'];?>
">
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vf']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['c_time'],'%Y-%m-%d');?>
</a></a></dd>
                  <?php endfor; endif; ?> -->
            	<ul>
            		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['my_list']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                	<li>
                    	<div><a href="<?php echo $_smarty_tpl->tpl_vars['my_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['my_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['t3'];?>
"></a></div>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['my_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['my_list']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['t1'];?>
</a></p>
                    </li>
                    <?php endfor; endif; ?>
                    <!-- <li>
                    	<div><a href="mingyi-xiangqing.html"><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p7.jpg"></a></div>
                        <p><a href="mingyi-xiangqing.html">名医大侠</a></p>
                    </li>
                    <li>
                    	<div><a href="mingyi-xiangqing.html"><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p7.jpg"></a></div>
                        <p><a href="mingyi-xiangqing.html">名医大侠</a></p>
                    </li>
                    <li>
                    	<div><a href="mingyi-xiangqing.html"><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p7.jpg"></a></div>
                        <p><a href="mingyi-xiangqing.html">名医大侠</a></p>
                    </li>
                    <li>
                    	<div><a href="mingyi-xiangqing.html"><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p7.jpg"></a></div>
                        <p><a href="mingyi-xiangqing.html">名医大侠</a></p>
                    </li>
                    <li>
                    	<div><a href="mingyi-xiangqing.html"><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p7.jpg"></a></div>
                        <p><a href="mingyi-xiangqing.html">名医大侠</a></p>
                    </li>
                    <li>
                    	<div><a href="mingyi-xiangqing.html"><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p7.jpg"></a></div>
                        <p><a href="mingyi-xiangqing.html">名医大侠</a></p>
                    </li> -->
                </ul>
                <script>jQuery(".bbbox").slide({mainCell:"ul",autoPlay:true,effect:"leftMarquee",vis:7,interTime:50,trigger:"click"});</script>
            </div>
        </div>
        <div class="mingright">
        	<div class="ntittle">
                <h2>患者心声</h2>
            </div>
            <div class="bannerbox1">
                <div class="bannerimg1">
                    <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p3.jpg" alt=""></a>
                    <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p3.jpg" alt=""></a>
                    <a href=""><img src="<?php echo $_smarty_tpl->tpl_vars['templets']->value;?>
/index/images/p3.jpg" alt=""></a>
                </div>
                <div class="biaoyu">
                	<p>爱心传递 播散希望</p>
                    <div class="hd">
                        <span>1</span>
                        <span>2</span>
                        <span>3</span>
                    </div>
                </div>
			<script>
                jQuery(".bannerbox1").slide({mainCell:".bannerimg1",titCell:".hd span",delayTime:1500,trigger:"click",autoPlay:true});
            </script> 
            </div>
        </div>
    </div>
</div>

<!--院务公开-->
<div class="yuanwubox">
	<div class="yuanwu">
    	<ul>
        	<li class="ntittle">
                <h2>院务公开</h2>
            </li>
            <li class="wenzhang">
            	<img src="<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = (int) 3;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['img']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max']);
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
?><?php echo $_smarty_tpl->tpl_vars['img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['img_url'];?>
<?php endfor; endif; ?>">
                <dl class="neirong1">
                    <dd><a class="bb" href="news-xiangqing.html">博美医院风貌博美医院风貌博美医院风貌</a><a class="aa" href="#">2015-05-12</a></dd>
                    <dd><a class="bb" href="news-xiangqing.html">博美医院风貌</a><a class="aa" href="#">2015-05-12</a></dd>
                    <dd><a class="bb" href="news-xiangqing.html">博美医院风貌</a><a class="aa" href="#">2015-05-12</a></dd>
                    <dd><a class="bb" href="news-xiangqing.html">博美医院风貌</a><a class="aa" href="#">2015-05-12</a></dd>
                    <dd><a class="bb" href="news-xiangqing.html">博美医院风貌</a><a class="aa" href="#">2015-05-12</a></dd>
                    <dd><a class="bb" href="news-xiangqing.html">博美医院风貌</a><a class="aa" href="#">2015-05-12</a></dd>
                    <dd><a class="bb" href="news-xiangqing.html">博美医院风貌</a><a class="aa" href="#">2015-05-12</a></dd>
           	   </dl>
            </li>
        </ul>
        <ul>
        	<li class="ntittle">
                <h2><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nav']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max']);
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
?><?php echo $_smarty_tpl->tpl_vars['nav']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['navname'];?>
<?php endfor; endif; ?></h2>
            </li>
            <li class="wenzhang">
            	<img src="<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = (int) 4;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['img']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max']);
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
?><?php echo $_smarty_tpl->tpl_vars['img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['img_url'];?>
<?php endfor; endif; ?>">
                <dl class="neirong1">
            
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['job_new']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <dd><a class="bb" href="<?php echo $_smarty_tpl->tpl_vars['job_new']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['job_new']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['t1'];?>
</a>
                    <a class="aa" href="<?php echo $_smarty_tpl->tpl_vars['job_new']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['job_new']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['c_time'],'%Y-%m-%d');?>
</a></dd>
                      <?php endfor; endif; ?>
           	   </dl>
            </li>
        </ul>
        <ul>
        	<li class="ntittle">
                <h2><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = (int) 3;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['nav']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max']);
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
?><?php echo $_smarty_tpl->tpl_vars['nav']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['navname'];?>
<?php endfor; endif; ?></h2>
            </li>
            <li class="wenzhang">
            	<img src="<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = (int) 5;
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['img']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['v']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['v']['max']);
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
?><?php echo $_smarty_tpl->tpl_vars['img']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['img_url'];?>
<?php endfor; endif; ?>">
                <dl class="neirong1">
                     <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['v'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['v']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['name'] = 'v';
$_smarty_tpl->tpl_vars['smarty']->value['section']['v']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jk']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                    <dd><a class="bb" href="<?php echo $_smarty_tpl->tpl_vars['jk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['jk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['t1'];?>
</a>
                    <a class="aa" href="<?php echo $_smarty_tpl->tpl_vars['jk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['id'];?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['jk']->value[$_smarty_tpl->getVariable('smarty')->value['section']['v']['index']]['c_time'],'%Y-%m-%d');?>
</a></dd>
                      <?php endfor; endif; ?>
           	   </dl>
            </li>
        </ul>
    </div>
</div>

<!--footer-->
<?php echo $_smarty_tpl->getSubTemplate ("common_foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

























































</body>
</html>
<?php }} ?>
