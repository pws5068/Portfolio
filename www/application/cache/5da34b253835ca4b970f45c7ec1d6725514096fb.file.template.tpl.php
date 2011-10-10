<?php /* Smarty version Smarty-3.1.3, created on 2011-10-10 03:53:11
         compiled from "application/views/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20965175794e926c274454d8-57438774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5da34b253835ca4b970f45c7ec1d6725514096fb' => 
    array (
      0 => 'application/views/template.tpl',
      1 => 1318211549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20965175794e926c274454d8-57438774',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header_text' => 0,
    'page_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_4e926c274fce6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e926c274fce6')) {function content_4e926c274fce6($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Paul Silvis - Developer Portfolio</title>
    <meta name="description" content="Online Portfolio for Paul Silvis, a developer in San Francisco with roots in Pennsylvania.">
    <meta name="keywords" content="programmer,developer,san francisco,silicon valley,paul silvis,objective c,iphone,php,entrepreneur">
    <meta name="author" content="Paul Silvis">
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="">Paul Silvis</a>
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#professional">Professional</a></li>
            <li><a href="#about">Education</a></li>
			<li><a href="#about">Adventures</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h1>Mobile &amp; Web Developer <small>San Francisco</small></h1>
        </div>
        <div class="row">
          <div class="span10">
            <h2><?php echo $_smarty_tpl->tpl_vars['header_text']->value;?>
</h2>
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['page_content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          </div>
          <div class="span4">
            <?php echo $_smarty_tpl->getSubTemplate ("right_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

          </div>
        </div>
      </div>

      <footer>
        <p>&copy; Paul Silvis 2011</p>
      </footer>

    </div> <!-- /container -->
  </body>
</html>
<?php }} ?>