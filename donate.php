<?php require "header.php"; do_header("Donate",'$("#custombutton").click(function(){$("#submit").prop("disabled",false);$(".selected").removeClass("selected");$("#custombutton").hide();$("#customamount").show();$("#customamount").focus();});$(".amount").click(function(){$("#submit").prop("disabled",false);$(".selected").removeClass("selected");$(this).addClass("selected");$("#custombutton").show();$("#customamount").hide()});$("#submit").click(function(){alert("Thank you for your donation!");window.location="index.html"})');
define("DONATION_AMOUNTS",serialize([5,10,20,100,null]));
?>
<?php
    foreach(unserialize(DONATION_AMOUNTS) as $amount)
    {
        if(is_null($amount))
        {
            echo "<input type=\"number\" class=\"hidden\" id=\"customamount\"></input><button id=\"custombutton\">$?</button>";
        }
        else
        {
            echo "<button class=\"amount\">$$amount</button>";
        }
    }
?>
<p><button disabled id="submit">Submit</button></p>
<?php require "footer.php";
