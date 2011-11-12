<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Paul Silvis - Developer Portfolio</title>
    <meta name="description" content="Online Portfolio for Paul Silvis, a developer in San Francisco with roots in Pennsylvania.">
    <meta name="keywords" content="programmer,developer,san francisco,silicon valley,paul silvis,objective c,iphone,php,entrepreneur">
    <meta name="author" content="Paul Silvis">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style2.css">
    <script type="text/javascript" src="/js/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/js/jquery.cycle.all.latest.js"></script>
	<script type="text/javascript" src="/js/bootstrap-alerts.js"></script>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    {foreach from=$js_files item=filename}
    <script type="text/javascript" src="{$filename}.js"></script>
    {/foreach}
    
    {foreach from=$stylesheets item=filename}
    <link rel="stylesheet" href="{$filename}.css">
    {/foreach}
    
{if $jquery_onload neq ''}
	<script type="text/javascript">$(document).ready(function() {ldelim}{$jquery_onload}{rdelim});</script>
{/if}
  </head>
  <body>