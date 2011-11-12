{include file='page_elements/head.tpl'}
<div class="template2">
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
          
        </div><!--div:container-->
      </div><!--div:fill-->
    </div><!--div:topbar-->
    
    <div class="blue_header">
          <h1>{ldelim} {$large_header_text} {rdelim} <small>{$small_header_text}</small></h1>
    </div><!--div:blue_header-->
    <div class="container">
	    <div class="content">
	        <div class="row">
	          <div class="span10">
	          {if isset($error_dialog) && $error_dialog neq ''}
	        <div id="alert_div" class="alert-message warning">
			  <p><strong>Sorry: </strong> {$error_dialog}</p>
			</div>
			{elseif isset($success_dialog) && $success_dialog neq ''}
			<div id="alert_div" class="alert-message success">
			  <p>{$success_dialog}</p>
			</div>
			{/if}
	            {include file=$page_content}
	          </div>
	          <div class="span4">
	            {include file="page_elements/right_content.tpl"}
	          </div>
	        </div><!--div:row--> 
	      </div><!--div:content--> 
	 </div>
</div><!--div:template2--> 
{include file='page_elements/footer.tpl'}