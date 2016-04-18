<?php
define("BASE","/ALCS-Republicans/build");
function do_header($this)
{
    $pages=["index.html"=>"Home","blog.html"=>"Blog"];
    ?><html>
    <head>
        <title>Bernie Sanders 2016</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
        <ul id="navbar">
            <?php foreach($pages as $page=>$name)
            {
                if($name==$this)
                {
                    $class=" class=\"active\"";
                }
                else {
                    $class="";
                }
                echo "<li><a href=\"".BASE."/$page\"".$class.">$name</a></li>";
            }?>
        </ul><?php
}