<!DOCTYPE html>
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
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
{if $jquery_onload neq ''}
	<script type="text/javascript">$(document).ready(function() {ldelim}{$jquery_onload}{rdelim});</script>
{/if}
  </head>
  <body>
    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="">Paul Silvis</a>
          <ul class="nav">
            <li><a href="/">Home</a></li>
            <li><a href="/professional">Professional</a></li>
            <li><a href="#/education">Education</a></li>
			<li><a href="#/adventures">Adventures</a></li>
            <li><a href="#/contact">Contact</a></li>
          </ul>
          
        </div>
      </div>
    </div>

    <div class="container">

      <div class="content">
        <div class="page-header">
          <h2>{ldelim} {$large_header_text} {rdelim} <small>{$small_header_text}</small></h2>
        </div>
        <div class="row">
          <div class="span10">
            {include file=$page_content}
          </div>
          <div class="span4">
            {include file="right_content.tpl"}
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; Paul Silvis 2011 - <a href="http://www.paulsilvis.com/">PaulSilvis.com</a></p>
      </footer>

    </div> <!-- /container -->
  </body>
</html>
