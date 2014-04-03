<?php /* Smarty version Smarty-3.1.13, created on 2013-09-08 22:15:04
         compiled from "areas\admin\views\account\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15960522d211895c256-92265150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '052f814a06a9f3f091f6b8164af888087569689a' => 
    array (
      0 => 'areas\\admin\\views\\account\\login.tpl',
      1 => 1378078360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15960522d211895c256-92265150',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d2118b55348_03253532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d2118b55348_03253532')) {function content_522d2118b55348_03253532($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>ADMIN - Login | Olheiro Musical</title>

        <link href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/css/admin/styles.css");?>
" rel="stylesheet" type="text/css" />
        <!--[if IE]> <link href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/css/admin/css/ie.css");?>
" rel="stylesheet" type="text/css"> <![endif]-->

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/ui.spinner.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.mousewheel.js");?>
"></script>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/charts/excanvas.min.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/charts/jquery.flot.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/charts/jquery.flot.orderBars.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/charts/jquery.flot.pie.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/charts/jquery.flot.resize.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/charts/jquery.sparkline.min.js");?>
"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/tables/jquery.dataTables.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/tables/jquery.sortable.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/tables/jquery.resizable.js");?>
"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/autogrowtextarea.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.uniform.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.inputlimiter.min.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.tagsinput.min.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.maskedinput.min.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.autotab.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.chosen.min.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.dualListBox.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.cleditor.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.ibutton.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.validationEngine-en.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.validationEngine.js");?>
"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/uploader/plupload.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/uploader/plupload.html4.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/uploader/plupload.html5.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/uploader/jquery.plupload.queue.js");?>
"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/wizards/jquery.form.wizard.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/wizards/jquery.validate.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/wizards/jquery.form.js");?>
"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.collapsible.min.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.breadcrumbs.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.tipsy.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.progress.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.timeentry.min.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.colorpicker.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.jgrowl.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.fancybox.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.fileTree.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.sourcerer.js");?>
"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/others/jquery.fullcalendar.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/others/jquery.elfinder.js");?>
"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/ui/jquery.easytabs.min.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/files/bootstrap.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/files/login.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/files/functions.js");?>
"></script>

    </head>

    <body>

        <!-- Top line begins -->
        <div id="top">
            <div class="wrapper">
                <a href="#" title="" class="logo"><h1>OLHEIRO MUSICAL</h1></a>

                <!-- Right top nav -->
                <div class="topNav">
                    <ul class="userNav">
                        <li><a href="#" title="" class="screen"></a></li>
                        <li><a href="#" title="" class="settings"></a></li>
                        <li><a href="#" title="" class="logout"></a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- Top line ends -->


        <!-- Login wrapper begins -->
        <div class="loginWrapper">

            
            <!-- Current user form -->
            <form action="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("login","account",array(array("area","admin")));?>
" id="login" method="POST">
                <div class="loginPic">
                    <a href="#" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/admin/userLogin.png");?>
" alt="" /></a>
                    <span>Eugene Kopyov</span>
                    <div class="loginActions">
                        <div><a href="#" title="Change user" class="logleft flip"></a></div>
                        <div><a href="#" title="Forgot password?" class="logright"></a></div>
                    </div>
                </div>

                <input type="text" name="login" placeholder="Confirm your email" class="loginEmail" />
                <input type="password" name="password" placeholder="Password" class="loginPassword" />

                <div class="logControl">
                    <div class="memory"><input type="checkbox" checked="checked" class="check" id="remember1" /><label for="remember1">Remember me</label></div>
                    <input type="submit" name="submit" value="Login" class="buttonM bBlue" />
                    <div class="clear"></div>
                </div>
            </form>
            
            
            <!-- New user form -->
            <form action="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("login","account",array(array("area","admin")));?>
" id="recover" method="POST">
                <div class="loginPic">
                    <a href="#" title=""><img src="images/userLogin2.png" alt="" /></a>
                    <div class="loginActions">
                        <div><a href="#" title="" class="logback flip"></a></div>
                        <div><a href="#" title="Forgot password?" class="logright"></a></div>
                    </div>
                </div>

                <input type="text" name="login" placeholder="Your username" class="loginUsername" />
                <input type="password" name="password" placeholder="Password" class="loginPassword" />

                <div class="logControl">
                    <div class="memory"><input type="checkbox" checked="checked" class="check" id="remember2" /><label for="remember2">Remember me</label></div>
                    <input type="submit" name="submit" value="Login" class="buttonM bBlue" />
                </div>
            </form>

        </div>
        <!-- Login wrapper ends -->

    </body>
</html><?php }} ?>