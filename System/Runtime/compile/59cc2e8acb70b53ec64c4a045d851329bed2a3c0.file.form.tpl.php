<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 17:15:05
         compiled from "areas\admin\views\media\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3936522d21e553deb7-90486399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59cc2e8acb70b53ec64c4a045d851329bed2a3c0' => 
    array (
      0 => 'areas\\admin\\views\\media\\form.tpl',
      1 => 1378689173,
      2 => 'file',
    ),
    'dc10dbecc57ed92376216986eac0f83762c1bc91' => 
    array (
      0 => 'areas\\admin\\views\\shared\\_layout.tpl',
      1 => 1378757646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3936522d21e553deb7-90486399',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522d21e58879b2_50832564',
  'variables' => 
  array (
    'Url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d21e58879b2_50832564')) {function content_522d21e58879b2_50832564($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>ADMIN | Olheiro Musical</title>

        <link href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/css/admin/styles.css");?>
" rel="stylesheet" type="text/css" />
        <!--[if IE]> <link href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/css/admin/css/ie.css");?>
" rel="stylesheet" type="text/css"> <![endif]-->

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/jquery-2.0.3.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/jquery-migrate-1.1.1.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/jquery-ui-1.10.3.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/jquery.extensions.js");?>
"></script>
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/ui.spinner.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/plugins/forms/jquery.mousewheel.js");?>
"></script>

        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/jquery.unobtrusive-ajax.min.js");?>
"></script>
        
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/jquery.validate.min.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/jquery.validate.extension.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/jquery.validate.unobtrusive.min.js");?>
"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/jquery.validate.unobtrusive.extension.js");?>
"></script>

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
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/js/files/functions.js");?>
"></script>

        
    </head>

    <body>

        <!-- Top line begins -->
        <div id="top">
            <div class="wrapper">
                <a href="index.html" title="" class="logo"><h1>OLHEIRO MUSICAL</h1></a>

                <!-- Right top nav -->
                <div class="topNav">
                    <ul class="userNav">
                        <li><a href="#" title="" class="logout"></a></li>
                    </ul>
                </div>

                <!-- Responsive nav -->
                <ul class="altMenu">
                    <li><a href="index.html" title="">Dashboard</a></li>
                </ul>

                <div class="clear"></div>
            </div>
        </div>
        <!-- Top line ends -->


        <!-- Sidebar begins -->
        <div id="sidebar">

            <!-- Main nav -->
            <div class="mainNav">
                <div class="user">
                    <a title="" class="leftUserDrop"><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/admin/user.png");?>
" alt="" /><span><strong>3</strong></span></a><span>Perfil Usuário</span>
                    <ul class="leftUser">
                        <li><a href="#" title="" class="sProfile">Meu Perfil</a></li>
                        <li><a href="#" title="" class="sMessages">Mensagens</a></li>
                        <li><a href="#" title="" class="sSettings">Configurações</a></li>
                        <li><a href="#" title="" class="sLogout">Sair</a></li>
                    </ul>
                </div>

                <!-- Responsive nav -->

                <!-- Main nav -->
                <ul class="nav">
                    <li><a href="index.html" title=""><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/admin/icons/color/statistics.png");?>
" alt="" /><span>Dashboard</span></a></li>
                </ul>
            </div>

            <!-- Secondary nav -->
            <div class="secNav">
                <div class="secWrapper">
                    <div class="secTop">
                        <div class="balance">
                            <div class="balInfo"><span>Seja Bem-vindo:</span>Nome do Usuário</div>
                        </div>
                        <a href="#" class="triangle-red"></a>
                    </div>

                    <!-- Tabs container -->
                    <div id="tab-container" class="tab-container">
                        <ul class="iconsLine ic3 etabs">
                            <li><a href="#general" title=""><span class="icos-fullscreen"></span></a></li>
                            <li><a href="#alt1" title=""><span class="icos-user"></span></a></li>
                            <li><a href="#alt2" title=""><span class="icos-archive"></span></a></li>
                        </ul>

                        <div class="divider"><span></span></div>

                        <div id="general">
                            <div class="sideWidget">
                                <div class="formRow">
                                    <label>Como deseja ser chamado?</label>
                                    <input type="text" name="regular" placeholder="Saudação" />
                                </div>
                                <div class="formRow">
                                    <label>E-mail para contato</label>
                                    <input type="text" name="regular" placeholder="E-mail" /><span class="note">Confirme seu e-mail de cadastro</span>
                                </div>

                                <div class="divider"><span></span></div>

                                <div class="formRow">
                                    <label>Mudar foto Perfil:</label>
                                    <input type="file" class="fileInput" id="fileInput" />
                                </div>

                                <div class="formRow">
                                    <span class="note">IMAGEM PERFIL	- 195 x 200 px</span>
                                    <p><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/admin/userLogin_195X200.png");?>
" alt="" width="195" height="200" /></p>
                                    <div class="clear"></div>
                                </div>

                                <div class="divider"><span></span></div>

                                <div class="formRow">
                                    <input type="submit" class="buttonS bLightBlue" value="ATUALIZAR MEUS DADOS" />
                                </div>
                            </div>
                        </div>

                        <div id="alt1">
                            <div class="sideWidget">
                                <div class="formRow">
                                    <label>Nova Senha:</label>
                                    <input type="password" name="regular" placeholder="Senha" /> 
                                </div>
                                <div class="formRow">
                                    <label>Confirmar Nova Senha:</label>
                                    <input type="password" name="regular" placeholder="Repetir Senha" /> 
                                </div>

                                <div class="divider"><span></span></div>                    

                                <div class="formRow searchDrop">
                                    <label>País</label>
                                    <select data-placeholder="Escolha o Pais onde Reside" class="select" tabindex="2">
                                        <option value=""></option> 
                                        <option value="Brasil">Brasil</option> 
                                        <option value="Chile">Chile</option> 
                                        <option value="Portugal">Portugal</option> 
                                        <option value="Canada">Canada</option> 
                                        <option value="China">China</option> 
                                        <option value="Colombia">Colombia</option> 
                                        <option value="Costa Rica">Costa Rica</option> 
                                        <option value="Cuba">Cuba</option> 
                                        <option value="Ecuador">Ecuador</option> 
                                    </select>
                                </div>
                                <div class="formRow searchDrop">
                                    <label>Estado</label>
                                    <select data-placeholder="Escolha o Pais onde Reside" class="select" tabindex="2">
                                        <option value=""></option> 
                                        <option value="São Paulo">Brasil</option> 
                                        <option value="Baiha">Cameroon</option> 
                                        <option value="Rio de Janeiro">Canada</option> 
                                    </select>
                                </div>

                                <div class="formRow searchDrop">
                                    <label>Cidade</label>
                                    <select data-placeholder="Escolha a sua Cidade" class="select" tabindex="2">
                                        <option value=""></option> 
                                        <option value="Rio-de-Janeiro">Rio de Janeiro</option> 
                                        <option value="Sao-Paulo">São Paulo</option> 
                                        <option value="Niteroi">Niterói</option> 
                                        <option value="IguabaGr">Iguaba Grande</option> 
                                        <option value="Petrópolis">Petrópolis</option> 
                                    </select>
                                </div>
                                <div class="formRow">
                                    <input type="checkbox" id="check2" name="chbox1" checked="checked" class="check" />
                                    <label for="check2"  class="nopadding">Eu li o <a href="#">Termo de Uso</a></label>
                                    <div class="clear"></div>
                                </div>

                                <div class="formRow">
                                    <input type="submit" class="buttonS bLightBlue" value="ATUALIZAR MEUS DADOS" />
                                </div>
                            </div>
                        </div>                
                        <div id="alt2">
                            <div class="sideWidget">
                                <div class="inlinedate"></div>
                            </div>
                        </div>
                    </div>


                    <!-- Sidebar buttons -->
                    <!-- Sidebar form -->


                    <div class="divider"><span></span></div>

                </div> 
                <div class="clear"></div>
            </div>
        </div>
        <!-- Sidebar ends -->


        <!-- Content begins -->
        <div id="content">
            <div class="contentTop">
                <span class="pageTitle"><span class="icon-home"></span></span>
                <ul class="quickStats">
                    <li>
                        <a href="" class="blueImg"><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/admin/icons/quickstats/video.png");?>
" alt="" /></a>
                        <div class="floatR"><strong class="blue">5489</strong><span>vídeos</span></div>
                    </li>
                    <li>
                        <a href="" class="redImg"><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/admin/icons/quickstats/user.png");?>
" alt="" /></a>
                        <div class="floatR"><strong class="blue">4658</strong><span>usuários</span></div>
                    </li>
                    <li>
                        <a href="" class="greenImg"><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/admin/icons/quickstats/plus.png");?>
" alt="" /></a>
                        <div class="floatR"><strong class="blue">128</strong><span>produtores</span></div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>

            <!-- Breadcrumbs line -->
            <div class="breadLine">
                <div class="bc">
                    <ul id="breadcrumbs" class="breadcrumbs">
                        
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("index","home",array(array("area","admin")));?>
">Página Inicial</a></li>
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("form","media",array(array("area","admin")));?>
" title="">Cadastrando meu Vídeo</a></li>

                    </ul>
                </div>

                <div class="breadLinks">
                    <ul>
                        <li class="has">
                            <a title="">
                                <i class="icos-list"></i><span>Vídeo Cadastrados</span> <strong>(10)</strong> 
                                <span><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/elements/control/hasddArrow.png");?>
" alt="" /></span>
                            </a>
                            <ul>
                                <li><a href="#" title=""><strong>(2)</strong> Mídias Pessoais</a></li>
                                <li><a href="#" title=""><strong>(8)</strong> Mídias Indicadas</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>

            <!-- Main content -->
            <div class="wrapper">
                

    <?php echo $_smarty_tpl->tpl_vars['Html']->value->Partial("_subMenu");?>

    <div class="fluid">
        <form id="validate" class="main" method="post" action="">
            <fieldset>
            </fieldset>
        </form>

        <!-- Usual wizard with ajax -->
        <div class="widget">
            <div class="whead">
                <h6>CADASTRE SUA MÍDIA</h6>
                <div class="clear"></div>
            </div>
            <form id="frm-media" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("save","media",array(array("area","admin")));?>
" class="main">

                <fieldset class="step" id="w1first">
                    <?php echo $_smarty_tpl->tpl_vars['Html']->value->HiddenFor("id");?>

                    <h1>* Campos obrigatórios</h1>
                    <div class="formRow">
                        <div class="grid3">
                            <label>Estou Cadastrando<span class="req">*</span></label>
                        </div>
                        <div class="grid3">
                            <input type="radio" id="radio1" name="question1" />
                            <label for="radio1"  class="mr20">Vídeo</label>
                            <input type="radio" id="radio2" name="question1" checked="checked" />
                            <label for="radio2"  class="mr20">Música</label>
                            <!-- input type="radio" name="question" checked="checked" disabled="disabled" /><label class="labelDisabled">Disabled</label -->
                        </div>

                        <div class="grid3">
                            <input type="checkbox" id="radio1" name="question1" />
                            <label for="radio1"  class="mr20">Por Indicação</label>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3">
                            <label>Nome Artístico<span class="req">*</span></label>
                        </div>

                        <div class="grid3"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("artisticName",array(array("class","required")));?>
<?php echo $_smarty_tpl->tpl_vars['Html']->value->ValidationMessageFor("artisticName");?>
<span class="note">Informe o seu Nome ou da sua Bnada</span></div>
                        <div class="clear"></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3">
                            <label>Nome da Música:<span class="req">*</span></label>
                        </div>
                        <div class="grid6"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("musicName",array(array("class","required")));?>
<?php echo $_smarty_tpl->tpl_vars['Html']->value->ValidationMessageFor("musicName");?>
<span class="note">Ex.: Girassol, Tempos Modernos, Me deixa </span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3">
                            <label>Link do Vídeo:<span class="req">*</span><span class="note">Promova-se agora mesmo!</span></label>
                        </div>
                        <div class="grid6"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("link",array(array("class","required"),array("placeholder","http://")));?>
<?php echo $_smarty_tpl->tpl_vars['Html']->value->ValidationMessageFor("link");?>
<span class="note">Somente links do Youtube. Em breve novos formatos.</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3"><label>Estilo Musical:</label></div>
                        <div class="grid7">
                            <select name="genreIds[]" data-placeholder="Grupo de estilo Mucial" class="fullwidth select" multiple="multiple" tabindex="6">
                                <option value=""></option>
                                <?php $_smarty_tpl->tpl_vars["letter"] = new Smarty_variable("*", null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['genre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['genre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ViewData']->value["genres"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['genre']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['genre']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['genre']->key => $_smarty_tpl->tpl_vars['genre']->value){
$_smarty_tpl->tpl_vars['genre']->_loop = true;
 $_smarty_tpl->tpl_vars['genre']->iteration++;
 $_smarty_tpl->tpl_vars['genre']->last = $_smarty_tpl->tpl_vars['genre']->iteration === $_smarty_tpl->tpl_vars['genre']->total;
?>
                                    <?php if (substr($_smarty_tpl->tpl_vars['genre']->value->name,0,1)!=$_smarty_tpl->tpl_vars['letter']->value){?>
                                        <?php $_smarty_tpl->tpl_vars["letter"] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['genre']->value->name,0,1), null, 0);?>
                                        <?php if (!isset($_smarty_tpl->tpl_vars['letter']->first)){?></optgroup><?php }?>
                                        <optgroup label="<?php echo $_smarty_tpl->tpl_vars['letter']->value;?>
">
                                    <?php }?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['genre']->value->genre_id;?>
"><?php echo $_smarty_tpl->tpl_vars['genre']->value->name;?>
</option>
                                    <?php if ($_smarty_tpl->tpl_vars['genre']->last){?></optgroup><?php }?>
                                <?php } ?>
                            </select>  
                        </div>             
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3"><label>Letra da Música:<span class="req">*</span></label></div>
                        <!-- div class="grid9"><textarea rows="8" cols="" name="textarea" class="validate[required]" id="textareaValid"></textarea></div -->
                        <div class="grid6"><textarea rows="8" cols="" name="textarea" class="auto" id="textareaValid"></textarea></div>                            
                        <div class="clear"></div>
                    </div>
                    <!--                        <div class="formRow">
                                                <div class="grid3">
                                                  <label>TAGS</label>
                                                </div>
                                              <div class="grid6"><input type="text" id="tags" name="tags" class="tags" value="Cantor, Músico" />
                                              <span class="note">Palavras Chave</span></div>
                                                <div class="clear"></div>
                                            </div>
                    -->
                    <div class="formRow">
                        <div class="grid3">
                            <label>De quem é a música?<span class="note">Nome da Banda ou Músico</span></label>
                        </div>
                        <div class="grid6"><input type="text" id="tags" name="tags" class="tags" />
                            <span class="note">Ex.: Arlindo Cruz, Lenine, Cidada Negra, Jota Quest, O Rappa, &quot;Você Mesmo&quot;</span></div>
                        <div class="clear"></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3">
                            <label>Quem Compos esta Letra?<span class="note">Nome dos compositores</span></label>
                        </div>
                        <div class="grid6"><input type="text" id="tags" name="tags" class="tags" />
                            <span class="note">Ex.: Pedro Luís, Toni Garrido, Zélia Duncan, &quot;Você Mesmo&quot;</span></div>
                        <div class="clear"></div>
                    </div>

                    <div class="formRow">
                        <div class="grid3"><label>Algo mais que deseja comenta?</label></div>
                        <div class="grid6"><input type="text" name="smth" id="smth" /></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow"><input type="submit" value="CADASTRAR" class="buttonM bBlack formSubmit" />
                        <div class="clear"></div></div>
                    <div class="clear"></div>
                </fieldset>

            </form>
            <div class="data" id="w1"></div>
        </div>

        <form id="usualValidate" class="main" method="post" action="">
            <fieldset>
            </fieldset>
        </form>
    </div>


            </div>
        </div>
        <!-- Content ends -->    

    </body>
</html><?php }} ?>