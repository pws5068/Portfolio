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
            <h2>{$header_text}</h2>
            {include file=$page_content}
          </div>
          <div class="span4">
            {include file="right_content.tpl"}
          </div>
        </div>
      </div>

      <footer>
        <p>&copy; Paul Silvis 2011</p>
      </footer>

    </div> <!-- /container -->
  </body>
</html>
