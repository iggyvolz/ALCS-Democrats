<?php
require "header.php"; do_header("Join",'$("#submit").click(function(){alert("Thank you for joining to help Bernie Sanders!");window.location="index.html"})');
?>
<img src="http://www.betterworld.net/quotes/bernie/tweets/Bernie-PoliticalRevolution6.png" id="bernieimg"></img>
<p>Bernie Sanders is amazing, but he can't win the election without your help.</p>
<p>There are many ways to volunteer your time, including:</p>
<ul>
    <li>Run a voter registration station</li>
    <li>Hand out Sanders buttons and stickers</li>
    <li>Volunteer at a Sanders rally</li>
</ul>
    <p><label for="firstname">First Name: </label><input type="text" id="firstname" name="firstname"></input></p>
    <p><label for="lastname">Last Name: </label><input type="text" id="lastname" name="lastname"></input></p>
    <p><label for="zip">Zip Code: </label><input type="text" id="zip" name="zip"></input></p>
    <p>What would you be willing to volunteer for?</p>
    <p><input type="checkbox" id="registration" name="registration" value="y"></input><label for="registration">Run a voter registration station</label></p>
    <p><input type="checkbox" id="handout" name="handout" value="y"></input><label for="handout">Hand out Sanders buttons and stickers</label></p>
    <p><input type="checkbox" id="volunteer" name="volunteer" value="y"></input><label for="volunteer">Volunteer at a Sanders rally</label></p>
    <p><button id="submit">Submit</button></p>
<?php require "footer.php";
