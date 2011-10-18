<?php /*%%SmartyHeaderCode:10119209254e9cec61da1412-80282683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5da34b253835ca4b970f45c7ec1d6725514096fb' => 
    array (
      0 => 'application/views/template.tpl',
      1 => 1318799027,
      2 => 'file',
    ),
    '804179150a7dd5d96dc8e0becb2e23ab0963df04' => 
    array (
      0 => 'application/views/toplevel/adventures.tpl',
      1 => 1318240057,
      2 => 'file',
    ),
    '377a8600aea947a339f911ec9a622617d79c6738' => 
    array (
      0 => 'application/views/right_content.tpl',
      1 => 1318906750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10119209254e9cec61da1412-80282683',
  'variables' => 
  array (
    'jquery_onload' => 0,
    'large_header_text' => 0,
    'small_header_text' => 0,
    'error_dialog' => 0,
    'success_dialog' => 0,
    'page_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_4e9cec61f1031',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4e9cec61f1031')) {function content_4e9cec61f1031($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Paul Silvis - Developer Portfolio</title>
    <meta name="description" content="Online Portfolio for Paul Silvis, a developer in San Francisco with roots in Pennsylvania.">
    <meta name="keywords" content="programmer,developer,san francisco,silicon valley,paul silvis,objective c,iphone,php,entrepreneur">
    <meta name="author" content="Paul Silvis">
    <link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>
	<script type="text/javascript" src="/js/bootstrap-alerts.js"></script>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
	<script type="text/javascript">$(document).ready(function() {$("#toplevel_adventures").addClass("active");});</script>
  </head>
  <body>
    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="/">Paul Silvis</a>
          <ul class="nav">
            <li id="toplevel_home"><a href="/">Home</a></li>
            <li id="toplevel_professional"><a href="/professional">Professional</a></li>
            <li id="toplevel_education"><a href="/education">Education</a></li>
			<li id="toplevel_adventures"><a href="/adventures">Adventures</a></li>
            <li id="toplevel_contact"><a href="/contact">Contact</a></li>
          </ul>
          
        </div>
      </div>
    </div>

    <div class="container">
      <div class="content">
        <div class="page-header">
          <h2>{ Hobbies &amp; Adventures } <small>Personal Life</small></h2>
        </div>
        <div class="row">
          <div class="span10">
                      Showcase of Climbing & outgoing info / photos
          </div>
          <div class="span4">
            <h3>What's to know?</h3>
<ul class="media-grid">
<li><a href="#"><img class="thumbnail" src="/image/content/me.png" alt="Paul Silvis"></a></li>
</ul>
<p>
	<ul id="right_col_list">
		<li class="clear">
			I'm an entreprenurial-minded developer with a passion for consumer-facing applications, 
			specifically mobile and web.
		</li>
		<li>Twitter: <a href="http://www.twitter.com/paulsilvis">@PaulSilvis</a></li>
	</ul>
</p>

<p class="quotes"><span class="title">Random Quote:</span><br>The man who has no imagination has no wings.<br><br>- Muhammad Ali</p>
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; Paul Silvis 2011 - <a href="http://www.paulsilvis.com/">PaulSilvis.com</a></p>
      </footer>

    </div> <!-- /container -->
  </body>
</html>
<?php }} ?>