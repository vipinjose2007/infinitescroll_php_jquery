<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
<title>Simple Infinite Scrolling - PHP and JQuery</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Simple Infinite Scrolling - PHP and JQuery" />
<meta name="keywords" content="Simple Infinite Scrolling - PHP and JQuery"/>
<!--  Infinite scrolling is based on the JQuery library and a custom jquery script , include these files --> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<script type="text/javascript" src="javascript/controller.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
<link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
        <div id="content">
       
            <h1>Simple Infinite Scrolling  </h1>
            <p class="subline">List of Latest Google Owesome Fonts </p>
            <p class="meta">Scroll Down</p>
            <div class="article">
<div id="postedComments">

<!--  Include the following PHP include line to start the infinite scrolling functionality  -->
<?php require_once 'initialLoad.php' ;  ?>
</div>
<div id="loadMoreComments" style="display:none;" > <center>test for hidden field</center></div>    
            </div>           
        </div>      
    </body>
</html>