<?php
require "header.php"; do_header("Register",'
    $(".state").hide();
    $("#stateselect").change(function(){
        $(".state").hide();
        $("#state_"+$("#stateselect").val()).show();
    });');
?>
<p class="registerintro">Please select your state below for information on how to register to vote:</p>
<select id="stateselect">
    <option>---</option>
    <option value="NY">New York</option>
    <option value="OT">Other</option>
</select>
<div id="registerinfo">
    <span id="state_NY" class="state">
        <p>You may register to vote in New York either online through the DMV, or by form through mail or in person.</p>
        <p>If you wish to register online, please use the <a href="https://dmv.ny.gov/mydmv/mydmv">DMV form</a>.</p>
        <p>You may also <a href="http://www.elections.ny.gov/NYSBOE/download/voting/voteform.pdf">mail in the form</a> to your <a href="http://www.elections.ny.gov/CountyBoards.html">County Board of Elections</a> or request a form by calling (800) FOR-VOTE.</p>
    </span>
    <span id="state_OT" class="state">
        <p>Sorry, we have not yet compiled information on how to vote in your state.</p>
    </span>
</div>
<?php require "footer.php";
