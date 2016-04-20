<?php
require "header.php"; do_header("Join");
?>
<div id="berniesanders2016">Join the Cause!</div>
<p>Bernie Sanders is amazing, but he can't win the election without your help.</p>
<p>There are many ways to volunteer your time, including:</p>
<ul>
    <li>Run a voter registration station</li>
    <li>Hand out Sanders buttons and stickers</li>
    <li>Volunteer at a Sanders rally</li>
</ul>
<form>
    <p><label for="firstname">First Name: </label><input type="text" id="firstname" name="firstname"></input></p>
    <p><label for="lastname">Last Name: </label><input type="text" id="lastname" name="lastname"></input></p>
    <p><label for="zip">Zip Code: </label><input type="text" id="zip" name="zip"></input></p>
    <p>What would you be willing to volunteer for?</p>
    <p><input type="checkbox" id="registration" name="registration" value="y"></input><label for="registration">Run a voter registration station</label></p>
    <p><input type="checkbox" id="handout" name="handout" value="y"></input><label for="handout">Hand out Sanders buttons and stickers</label></p>
    <p><input type="checkbox" id="volunteer" name="volunteer" value="y"></input><label for="volunteer">Volunteer at a Sanders rally</label></p>
    <p><input type="submit"></submit></p>
</form>
<?php require "footer.php";