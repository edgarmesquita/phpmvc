<?php /* Smarty version Smarty-3.1.13, created on 2013-09-09 17:15:11
         compiled from "areas\admin\views\media\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22653522de022dfa382-91897219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a5b06580f7a2e54129555998579425a3321e225' => 
    array (
      0 => 'areas\\admin\\views\\media\\index.tpl',
      1 => 1378745912,
      2 => 'file',
    ),
    'dc10dbecc57ed92376216986eac0f83762c1bc91' => 
    array (
      0 => 'areas\\admin\\views\\shared\\_layout.tpl',
      1 => 1378757646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22653522de022dfa382-91897219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522de0230d4327_61483114',
  'variables' => 
  array (
    'Url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522de0230d4327_61483114')) {function content_522de0230d4327_61483114($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <div class="wrapper">
            <!-- Media table -->
            <div class="widget check">
                <div class="whead"><span class="titleIcon">
                        <input type="checkbox" id="titleCheck" name="titleCheck" />
                    </span>
                    <h6>Galeria de Vídeo</h6>
                    <div class="clear"></div>
                </div>
                <table cellpadding="0" cellspacing="0" width="100%" class="tDefault checkAll tMedia" id="checkAll">
                    <thead>
                        <tr>
                            <td><img src="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Content("~/content/img/elements/other/tableArrows.png");?>
" alt="" /></td>
                            <td width="50">Play</td>
                            <td class="sortCol"><div>Descrição<span></span></div></td>
                            <td width="140">Arquivo</td>
                            <td width="100">Ação</td>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="5"><div class="itemActions">
                                    <label>Apply action:</label>
                                    <select name="select">
                                        <option value="">Select action...</option>
                                        <option value="Edit">Edit</option>
                                        <option value="Delete">Delete</option>
                                        <option value="Move">Move somewhere</option>
                                    </select>
                                </div>
                                <div class="tPages">
                                    <ul class="pages">
                                        <li class="prev"><a href="#" title=""><span class="icon-arrow-14"></span></a></li>
                                        <li><a href="#" title="" class="active">1</a></li>
                                        <li><a href="#" title="">2</a></li>
                                        <li><a href="#" title="">3</a></li>
                                        <li><a href="#" title="">4</a></li>
                                        <li>...</li>
                                        <li><a href="#" title="">20</a></li>
                                        <li class="next"><a href="#" title=""><span class="icon-arrow-17"></span></a></li>
                                    </ul>
                                </div></td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Model']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars["info"] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value->GetVideoInfo(), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars["idx"] = new Smarty_variable(0, null, 0);?>
                        <tr>
                            <td><input type="checkbox" name="checkRow" /></td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->link;?>
" rel="prettyPhoto" title="" class="lightbox"><img src="<?php echo $_smarty_tpl->tpl_vars['info']->value->data->thumbnail->sqDefault;?>
" alt="" /></a></td>
                            <td valign="top" class="textL"><strong>Música: </strong><a href="#" title=""><?php echo $_smarty_tpl->tpl_vars['item']->value->music_name;?>
</a><br />
                                <strong>Banda/Músico:</strong> <?php echo $_smarty_tpl->tpl_vars['item']->value->artistic_name;?>
<br />
                                <strong>Compositor: </strong> <?php  $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['person']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value->persons; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['person']->key => $_smarty_tpl->tpl_vars['person']->value){
$_smarty_tpl->tpl_vars['person']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['person']->value->person_type_id==2){?><?php if ($_smarty_tpl->tpl_vars['idx']->value>0){?>, <?php }?><?php echo $_smarty_tpl->tpl_vars['person']->value->name;?>
<?php $_smarty_tpl->tpl_vars["idx"] = new Smarty_variable($_smarty_tpl->tpl_vars['idx']->value+1, null, 0);?><?php }?><?php } ?><br /></td>
                            <td class="fileInfo"><span><strong>Data:</strong> <?php echo gmdate("d.M.Y",strtotime($_smarty_tpl->tpl_vars['info']->value->data->uploaded));?>
</span><!--span><strong>Size:</strong> 215 Kb</span--><span><strong>Duração:</strong> <?php echo gmdate("i:s",$_smarty_tpl->tpl_vars['info']->value->data->duration);?>
</span><span><strong>Assistido:</strong> <?php echo number_format($_smarty_tpl->tpl_vars['info']->value->data->viewCount,0,',','.');?>
</span></td>
                            <td class="tableActs"><a href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("form","media",array(array("area","admin"),array("id",$_smarty_tpl->tpl_vars['item']->value->media_id)));?>
" class="tablectrl_small bDefault tipS" title="Edit"><span class="iconb" data-icon=""></span></a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['Url']->value->Action("delete","media",array(array("area","admin"),array("id",$_smarty_tpl->tpl_vars['item']->value->media_id)));?>
" class="tablectrl_small bDefault tipS" title="Remove"><span class="iconb" data-icon=""></span></a>
                                <a href="#" class="tablectrl_small bDefault tipS" title="Options"><span class="iconb" data-icon=""></span></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Main content ends -->
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