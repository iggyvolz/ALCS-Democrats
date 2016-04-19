<?php require "header.php"; do_header("Donate",'$("#custombutton").click(function(){$("#custombutton").hide();$("#customamount").show();$("#customamount").focus();$("#customamount").val("$")});$("#customamount").keydown(function(){setTimeout(function(){if($("#customamount").val()[0]!=="$"){$("#customamount").val("$"+$("#customamount").val())}},1)})');
define("DONATION_AMOUNTS",serialize([5,10,20,100,null]));
?>
<?php
    foreach(unserialize(DONATION_AMOUNTS) as $amount)
    {
        if(is_null($amount))
        {
            echo "<input type=\"text\" class=\"hidden\" id=\"customamount\"></input><button id=\"custombutton\">$?</button>";
        }
        else
        {
            echo "<button class=\"amount\">$$amount</button>";
        }
    }
?>
</ul>
<?php require "footer.php";