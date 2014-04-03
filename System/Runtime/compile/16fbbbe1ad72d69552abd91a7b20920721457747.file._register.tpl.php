<?php /* Smarty version Smarty-3.1.13, created on 2013-09-08 22:14:56
         compiled from "views\home\_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2574522d2110b41c77-93838238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16fbbbe1ad72d69552abd91a7b20920721457747' => 
    array (
      0 => 'views\\home\\_register.tpl',
      1 => 1378504955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2574522d2110b41c77-93838238',
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
  'unifunc' => 'content_522d2110bfe711_20766980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d2110bfe711_20766980')) {function content_522d2110bfe711_20766980($_smarty_tpl) {?><form id="form1" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("register","home");?>
">
    <p class="txtnome"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("firstName",array(array("placeholder","Seu primeiro Nome")));?>
<?php echo $_smarty_tpl->tpl_vars['Html']->value->ValidationMessageFor("firstName");?>
</p>
    <p class="txtsobrenome"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("lastName",array(array("placeholder","Seu segundo Nome")));?>
<?php echo $_smarty_tpl->tpl_vars['Html']->value->ValidationMessageFor("lastName");?>
</p>
    <p class="txtemail"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("email",array(array("placeholder","Seu e-mail")));?>
<?php echo $_smarty_tpl->tpl_vars['Html']->value->ValidationMessageFor("email");?>
</p>
    <p class="txtrepitaemail"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("emailConfirm",array(array("placeholder","Confirme seu e-mail")));?>
<?php echo $_smarty_tpl->tpl_vars['Html']->value->ValidationMessageFor("emailConfirm");?>
</p>
    <p class="txtsenha"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("password",array(array("placeholder","Sua senha")));?>
<?php echo $_smarty_tpl->tpl_vars['Html']->value->ValidationMessageFor("password");?>
</p>
    <p class="txtrepitasenha"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("passwordConfirm",array(array("placeholder","Confirme sua senha")));?>
<?php echo $_smarty_tpl->tpl_vars['Html']->value->ValidationMessageFor("passwordConfirm");?>
</p>
    <p></p><hr></hr>
    <p class="botao"><input type="submit" value="Confirmar Cadastro" /></p>
    <p class="termo">Clicando no botão <strong>Cadastrar</strong>, você estará cofirmando o aceite dos <a href="#">Termos de uso</a>.</p>
</form><?php }} ?>