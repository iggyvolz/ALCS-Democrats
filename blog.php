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
$blogposts=[new blogpost("Bernie Sanders Stuns the Nation by Winning 90% of Delegates in New York","4/20/2016 6:31:42 AM","Bernie Sanders shocks everyone and takes the lead in delegates for the Presidential nomination.  By virtue of agressive campaigning within the state, Sanders wins 90% of delegates in his home state.  By taking 262 delegates, Sanders sends a powerful message to the American public that not only can he win, but can win big."),new blogpost("Bernie Wins Big Again","4/26/2016 8:07:42 PM","By winning all 5 states in today's primaries, Bernie Sanders has once again shown his momentum going into the 2016 election.  Winning 305 out of 392 delegates of the delegates, including the majority from each state, Sanders is only 732 delegates away from clinching the nomination.  Counting superdelegates, 42% of which now pledge to support Sanders, he is only 521 delegates from the nomination."),new blogpost("Bernie Sanders now Carries 25% of Superdelegates","5/1/2016 5:29:23 PM","Superdelegates, Hillary Clinton's way to exaggerate her lead in the primaries, are now switching camps and Feeling the Bern.  25% of superdelegates now support Bernie Sanders.  They are starting to recognize Sanders' momentum, and this shows that Hillary's election is not as much of a shoe-in as it would seem"),new blogpost("Bernie Sanders Reaches Magic Number - Clinches Nomination","6/7/2016 11:34:39 PM","By winning California, Sanders reaches the magic number of 2,383 delegates, clinching the nomination of the Democratic National Convention.  Sanders has defied all odds and beat the establishment to win in the primaries.  Sanders will use this momentum to bring about a win in November over the eventual Republican nominee."),new blogpost("Hillary Clinton Suspends Campaign, Concedes Nomination","6/8/2016 5:31:05 PM","The first battle has officially been won - Bernie Sanders is now all but officially the Democratic Nominee, as the only active candidate to have delegates.  It is important now for the Democratic Party to come together against the Republicans.  We now have a distinct advantage - we are now more organized than the  Republicans as we are the first to decide a nominee.")];
?>
<div id="blogpost">
    <?php foreach($blogposts as $blogpost)
    { 
        list($title,$date,$contents)=[$blogpost->title,$blogpost->date->format("l, F j Y - g:i A \E\D\T"),$blogpost->contents];
        echo "<h3 class=\"blogtitle\">$title</h3><h4 class=\"blogdate\">$date</h4><p class=\"blogtext\">$contents</p>";
    }?>
</div>
<?php require "footer.php";