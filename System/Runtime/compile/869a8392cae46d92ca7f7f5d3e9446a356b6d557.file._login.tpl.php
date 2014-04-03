<?php /* Smarty version Smarty-3.1.13, created on 2013-09-08 22:14:56
         compiled from "views\home\_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14381522d2110ce29e2-48972541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '869a8392cae46d92ca7f7f5d3e9446a356b6d557' => 
    array (
      0 => 'views\\home\\_login.tpl',
      1 => 1378656283,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14381522d2110ce29e2-48972541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Url' => 0,
    'Html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d2110d02e12_19453891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d2110d02e12_19453891')) {function content_522d2110d02e12_19453891($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("login","account",array(array("area","admin")));?>
" method="POST">
    <h3>FAÇA SEU LOGIN</h3>
    <p>ENVIE MAIS VÍDEOS E MANTENHA SEUS DADOS ATUALIZADOS</p>
    <span class="login"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("email",array(array("placeholder","Digite seu email")));?>
</span>
    <span class="login"><?php echo $_smarty_tpl->tpl_vars['Html']->value->PasswordFor("password");?>
</span>
    <span class="botao"><input type="submit" name="button" id="button" value="ENTRAR" /></span>
    <span class="check"><input name="" type="checkbox" value="" class="checkbox" />LEMBRAR MEU EMAIL</span>
    <span class="check"><a href="#">ESQUECI MINHA SENHA</a></span>
</form><?php }} ?>