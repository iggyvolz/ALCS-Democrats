<?php require "header.php"; do_header("Blog");
class blogpost
{
    public $title;
    public $date;
    public $contents;
    public $fdate;
    public function __construct($_title,$_date,$_contents)
    {
        list($this->title,$this->date,$this->contents)=[$_title,new DateTime($_date),$_contents];
    }
}
$blogposts=[new blogpost("Bernie Sanders Stuns the Nation by Winning 90% of Delegates in New York","4/20/2016 6:31:42 AM","Bernie Sanders shocks everyone and takes the lead in delegates for the Presidential nomination.  By virtue of agressive campaigning within the state, Sanders wins 90% of delegates in Hillary Clinton's home state.  By winning 262 delegates, Sanders sends a powerful message to the American public that he is not only electable, but is electable even in the home state of his opponents."),new blogpost("Bernie Wins Big Again","4/26/2016 8:07:42 PM","By winning all 5 states in today's primaries, Bernie Sanders has once again shown his momentum going into the 2016 election.  Winning 305 out of 392 delegates of the delegates, including the majority from each state, Sanders is only 732 delegates away from clinching the nomination.  Counting superdelegates, 42% of which now pledge to support Sanders, he is only 521 delegates from the nomination.")];
?>
<div id="blogpost">
    <?php foreach($blogposts as $blogpost)
    { 
        list($title,$date,$contents)=[$blogpost->title,$blogpost->date->format("l, F j Y - g:i A \E\D\T"),$blogpost->contents];
        echo "<h3 class=\"blogtitle\">$title</h3><h4 class=\"blogdate\">$date</h4><p class=\"blogtext\">$contents</p>";
    }?>
</div>
<?php require "footer.php";