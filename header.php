<?php
function do_header($this,$script="")
{
    $pages=["index.html"=>"Home","blog.html"=>"Blog","donate.html"=>"Donate"];
    ?><html>
    <head>
        <title>Bernie Sanders 2016</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script>
            /* global $ */
            $(function(){
                <?= $script; ?>
            });
        </script>
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
                echo "<li><a href=\"$page\"".$class.">$name</a></li>";
            }?>
        </ul><?php
}