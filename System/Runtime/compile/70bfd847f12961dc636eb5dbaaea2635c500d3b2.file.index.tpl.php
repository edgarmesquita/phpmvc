<?php /* Smarty version Smarty-3.1.13, created on 2013-09-13 14:55:04
         compiled from "D:\Edgar\eQuantic\Projetos\OlheiroMusical\trunk\web\Areas\admin\Views\profile\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:924052334ef591b481-83015461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70bfd847f12961dc636eb5dbaaea2635c500d3b2' => 
    array (
      0 => 'D:\\Edgar\\eQuantic\\Projetos\\OlheiroMusical\\trunk\\web\\Areas\\admin\\Views\\profile\\index.tpl',
      1 => 1379094898,
      2 => 'file',
    ),
    '3eaaec5f5d92ff85079b22c8704cd8a53cc38fcf' => 
    array (
      0 => 'D:\\Edgar\\eQuantic\\Projetos\\OlheiroMusical\\trunk\\web\\Areas\\admin\\Views\\shared\\_layout.tpl',
      1 => 1378757646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '924052334ef591b481-83015461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52334ef5c5ba00_09823241',
  'variables' => 
  array (
    'Url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52334ef5c5ba00_09823241')) {function content_52334ef5c5ba00_09823241($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                <span class="pageTitle"><span class="icon-home"></span>Meu Perfil</span>
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
    <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("index","profile",array(array("area","admin")));?>
" title="">Meu Perfil</a></li>

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
                <div class="widget">
                    <div class="whead">
                        <h6>DADOS CADASTRAIS</h6><div class="clear"></div></div>
                    <div class="formRow">
                        <div class="grid3">
                            <label>Seu Nome<span class="req"></span></label>
                            :</div>
                        <div class="grid4"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("firstName");?>
<span class="note">Seu Primeiro Nome.</span></div>
                        <div class="grid4"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("lastName");?>
<span class="note">Seu Segundo Nome ou Sobrenome.</span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3"><label>Sua Senha:<span class="req">*</span></label></div>
                        <div class="grid4"><?php echo $_smarty_tpl->tpl_vars['Html']->value->PasswordFor("password");?>
<span class="note">Cadastre um senha</span></div>
                        <div class="grid4"><?php echo $_smarty_tpl->tpl_vars['Html']->value->PasswordFor("passwordConfirm");?>
<span class="note">Confime a senha cadastrada.</span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3">
                            <label>E-mail de Cadastro:<span class="req">*</span></label></div>
                        <div class="grid4"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("email");?>
<span class="note">Informe seu e-mail para cadastro.</span></div>
                        <div class="grid4"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("emailConfirm");?>
<span class="note">Confirme seu e-mail de cadastro.</span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3"><label>Data de nascimento:</label></div>
                        <div class="grid4"><?php echo $_smarty_tpl->tpl_vars['Html']->value->TextBoxFor("birthDate",array(array("class","maskDate")));?>
<span class="note">99/99/9999</span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3"><label>Sexo:<span class="req">*</span></label></div>
                        <div class="grid9">
                            <select name="selectReq" id="selectReq" class="validate[required]" >
                                <option value="">Selecione</option>
                                <option value="opt2">Masculino</option>
                                <option value="opt3">Feminino</option>
                                <option value="opt4">Outro</option>
                            </select>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow"><input type="submit" value="ATUALIZAR" class="buttonM bBlack formSubmit" /><div class="clear"></div></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>

        <form id="usualValidate" class="main" method="post" action="">
            <fieldset>
                <div class="widget">
                    <div class="whead"><h6>COMPLEMENTO CADASTRAL</h6><div class="clear"></div></div>
                    <div class="formRow">
                        <div class="grid3"><label>Nome Artístico:<span class="req">*</span></label></div>
                        <div class="grid6"><input type="text" class="required" name="firstname" id="firstname"/><span class="note">Como gostaria de apresentado? Por apelido, Nome artístico, etc </span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3"><label>E-mail de Segurança<span class="req">*</span></label></div>
                        <div class="grid6"><input type="text" class="required" name="emailField" id="emailField"/><span class="note">E-mail utilizado para recebimento de notificação, promoção e atualização.</span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3">
                            <label>Site Pessoal ou Blog:<span class="req">*</span></label></div>
                        <div class="grid6"><input type="text" class="required" name="urlField" id="urlField"/></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3"><label>Mesnagem, frase ou Ditado:<span class="req">*</span></label></div>
                        <div class="grid6"><input type="text" class="required" name="customMessage" id="customMessage"/><span class="note">Escreva uma mensagem que serve de inspiração em sua vida.</span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3"><label>Telefone para contato 01:</label></div>
                        <div class="grid6"><input type="text" class="maskPhone" value="" /><span class="note">Tel.: Tradicional ou celular(999) 999-9999</span></div>
                        <div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3"><label>Telefone para contato 02:</label></div>
                        <div class="grid6"><input type="text" class="maskPhoneExt" value="" /><span class="note">Ex.: Nextel (999) 999-9999? x99999</span></div>
                        <div class="clear"></div>
                    </div>

                    <div class="formRow"><input type="submit" value="ATUALIZAR" class="buttonM bBlack formSubmit" /><div class="clear"></div></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>

        <form id="usualValidate" class="main" method="post" action="">
            <fieldset>
                <div class="widget">
                    <div class="whead"><h6>REDES SOCIAIS</h6><div class="clear"></div></div>
                    <div class="formRow">
                        <div class="grid3">
                            <select name="selectReq" id="selectReq" class="validate[required]" >
                                <option value="">Selecione</option>
                                <option value="facebook">Facebook</option>
                                <option value="flickr">Flickr</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Youtube">Youtube</option>
                                <option value="Orkut">Orkut</option>
                                <option value="Blogs">Blogs</option>
                                <option value="Pinterest">Pinterest</option>
                                <option value="linkedIn">linkedIn</option>
                                <option value="Multiply">Multiply</option>

                            </select>
                        </div>
                        <div class="grid6"><input type="text" class="required" name="redesocial" id="redesocial" value="http://" /><span class="note">Informe o link completo</span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3">
                            <select name="selectReq" id="selectReq" class="validate[required]" >
                                <option value="">Selecione</option>
                                <option value="facebook">Facebook</option>
                                <option value="flickr">Flickr</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Youtube">Youtube</option>
                                <option value="Orkut">Orkut</option>
                                <option value="Blogs">Blogs</option>
                                <option value="Pinterest">Pinterest</option>
                                <option value="linkedIn">linkedIn</option>
                                <option value="Multiply">Multiply</option>

                            </select>
                        </div>
                        <div class="grid6"><input type="text" class="required" name="redesocial" id="redesocial" value="http://" /><span class="note">Informe o link completo</span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3">
                            <select name="selectReq" id="selectReq" class="validate[required]" >
                                <option value="">Selecione</option>
                                <option value="facebook">Facebook</option>
                                <option value="flickr">Flickr</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Youtube">Youtube</option>
                                <option value="Orkut">Orkut</option>
                                <option value="Blogs">Blogs</option>
                                <option value="Pinterest">Pinterest</option>
                                <option value="linkedIn">linkedIn</option>
                                <option value="Multiply">Multiply</option>

                            </select>
                        </div>
                        <div class="grid6"><input type="text" class="required" name="redesocial" id="redesocial" value="http://" /><span class="note">Informe o link completo</span></div><div class="clear"></div>
                    </div>
                    <div class="formRow">
                        <div class="grid3">
                            <select name="selectReq" id="selectReq" class="validate[required]" >
                                <option value="">Selecione</option>
                                <option value="facebook">Facebook</option>
                                <option value="flickr">Flickr</option>
                                <option value="Twitter">Twitter</option>
                                <option value="Youtube">Youtube</option>
                                <option value="Orkut">Orkut</option>
                                <option value="Blogs">Blogs</option>
                                <option value="Pinterest">Pinterest</option>
                                <option value="linkedIn">linkedIn</option>
                                <option value="Multiply">Multiply</option>

                            </select>
                        </div>
                        <div class="grid6"><input type="text" class="required" name="redesocial" id="redesocial" value="http://" /><span class="note">Informe o link completo</span></div><div class="clear"></div>
                    </div>
                    <div class="formRow"><input type="submit" value="ATUALIZAR" class="buttonM bBlack formSubmit" /><div class="clear"></div></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>

    </div>

            </div>
        </div>
        <!-- Content ends -->    

    </body>
</html><?php }} ?>