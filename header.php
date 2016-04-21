<?php
function do_header($this,$script="")
{
    $pages=["index.html"=>"Home","blog.html"=>"Blog","donate.html"=>"Donate","register.html"=>"Register","join.html"=>"Join"];
    ?><html>
    <head>
        <title>Bernie Sanders 2016</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script>
        window.variables=[]
        var query = window.location.search.substring(1);
        var vars = query.split("&");
        for (var i=0;i<vars.length;i++) {
            var pair = vars[i].split("=");
            window.variables[pair[0]]=pair[1];
        }

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
        </ul>
        <a href="twitter.html"><img src="img/twitter_letter-512.png" id="twitterlogo" /></a><a href="facebook.html"><img src="img/facebook_93482.jpg" id="fblogo" /></a><?php
}
