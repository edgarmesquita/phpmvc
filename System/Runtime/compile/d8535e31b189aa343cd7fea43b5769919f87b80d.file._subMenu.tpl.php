<?php /* Smarty version Smarty-3.1.13, created on 2013-09-08 22:15:04
         compiled from "areas\admin\views\shared\_subMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4599522d21185c4d60-41252726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8535e31b189aa343cd7fea43b5769919f87b80d' => 
    array (
      0 => 'areas\\admin\\views\\shared\\_subMenu.tpl',
      1 => 1378502092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4599522d21185c4d60-41252726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d2118645d42_26442985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d2118645d42_26442985')) {function content_522d2118645d42_26442985($_smarty_tpl) {?><ul class="middleNavA">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("form","media",array(array("area","admin")));?>
" title="Cadastrar Mídia"><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/admin/icons/color/showreel.png");?>
" alt="" /><span>Cadastrar Mídia</span></a></li>
    <!-- li><a href="cadastrar-video-indicado.html" title="Indique um vídeo"><img src="images/icons/color/hire-me.png" alt="" /><span>Vídeo Indicado</span></a><strong>8</strong></li -->
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("index","media",array(array("area","admin")));?>
" title="Mensagnes"><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/admin/icons/color/youtube2.png");?>
" alt="" /><span>Minhas Mídias</span></a><strong>8</strong></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("index","profile",array(array("area","admin")));?>
" title="Meu Perfil"><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/admin/icons/color/issue.png");?>
" alt="" /><span>Meu Perfil</span></a></li>
</ul><?php }} ?>