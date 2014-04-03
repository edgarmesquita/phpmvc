<?php /* Smarty version Smarty-3.1.13, created on 2013-09-12 14:53:53
         compiled from "D:\Edgar\eQuantic\Projetos\Itashop\CRM\web\Views\account\Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35625231ffb1658c70-20657427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65bba8bdc7935ef1ed43c8e09493405577018bac' => 
    array (
      0 => 'D:\\Edgar\\eQuantic\\Projetos\\Itashop\\CRM\\web\\Views\\account\\Login.tpl',
      1 => 1379007317,
      2 => 'file',
    ),
    '6f07d2d6eed475e19eb195c17e9299fbe18aa6a6' => 
    array (
      0 => 'D:\\Edgar\\eQuantic\\Projetos\\Itashop\\CRM\\web\\Views\\Shared\\_Layout.tpl',
      1 => 1379007359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35625231ffb1658c70-20657427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5231ffb17d8a73_71531188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5231ffb17d8a73_71531188')) {function content_5231ffb17d8a73_71531188($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />

    <title>Itashop - CRM</title>
    <meta name="description" content="Dil Excursões Administração" />
    <meta name="keywords" content="Admin,Dil,Excursões" />
    <!-- We need to emulate IE7 only when we are to use excanvas -->
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <![endif]-->
    <!-- Favicons -->
    <link rel="shortcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Content/Images/favicon.png");?>
" />
    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Content/Images/favicon.png");?>
" />
    <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Content/Images/apple.png");?>
" />

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Content/Themes/blitzer/jquery-ui-1.10.3.custom.min.css");?>
" type="text/css" />
    
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Content/style.css");?>
" type="text/css" />

    <!--swfobject - needed only if you require <video> tag support for older browsers -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/swfobject.js");?>
"></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery-2.0.3.min.js");?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery-migrate-1.1.1.min.js");?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery-ui-1.10.3.min.js");?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery.extensions.js");?>
"></script>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery.unobtrusive-ajax.min.js");?>
"></script>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery.validate.min.js");?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery.validate.extension.js");?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery.validate.unobtrusive.min.js");?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery.validate.unobtrusive.extension.js");?>
"></script>
        
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/DataTables-1.9.4/media/js/jquery.dataTables.js");?>
"></script>
    
    <!-- jQuery tooltips -->            
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery.tipTip.min.js");?>
"></script>
    <!-- Superfish navigation -->       
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery.superfish.min.js");?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/jquery.supersubs.min.js");?>
"></script>
    
    <!-- jQuery graph plugins -->       
    <!--[if IE]><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/flot/excanvas.min.js");?>
"></script><![endif]-->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/flot/jquery.flot.min.js");?>
"></script>
    <!-- Internet Explorer Fixes -->
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Content/ie.css");?>
"/>
    <script src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/html5.js");?>
"></script>
    <![endif]-->
    <!--Upgrade MSIE5.5-7 to be compatible with MSIE8: http://ie7-js.googlecode.com/svn/version/2.1(beta3)/IE8.js -->
    <!--[if lt IE 8]>
    <script src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/IE8.js");?>
"></script>
    <![endif]-->

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Scripts/Views/main.js");?>
"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                Admin.Init();
            });
        </script>

        
    </head>
    <body>
        <!-- Header -->
        <header id="top">
            <div class="wrapper">
                <div id="title"></div>
                <div id="topnav">
                    <a href="#"><img class="avatar" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/Content/Images/user_32.png");?>
" alt="" /></a>
                </div>
                <nav id="menu">
                    <ul class="sf-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("index","home",array(array("area","admin")));?>
">Home</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- End of Header -->
        <!-- Page title -->
        <div id="pagetitle">
            <div class="wrapper">
                <h1>Título</h1>
                <!-- Quick search box -->
                <form action="" method="get"><input class="" type="text" id="q" name="q" /></form>
            </div>
        </div>
        <!-- End of Page title -->
        
        <!-- Page content -->
        <div id="page">
            <!-- Wrapper -->
            <div class="wrapper">
                


            </div>
            <!-- End of Wrapper -->
        </div>
        <!-- End of Wrapper -->
        
        
    </body>
</html><?php }} ?>