<?php 
$headerstuff = NULL;
$pageTitle = "MPA Robotics - The Team";
include('header.php');
?>

<div id="content" class="navDisabled">

<div class="interactive" id="team1">
    <img src="images/MPAror/logo.svg" class="logo" alt="Logo" style="width: 500px;" />
    <a href="#team2" onclick="interactiveArrow('team',2,1);"><img src="images/MPAror/arrowwhite.svg" id="team1arrow" alt="Next Slide" style="float: right; width: 200px;" /></a>
</div>
    
<div class="interactive" id="team2">
    <img src="images/MPAror/logo.svg" alt="Logo" />
    <a href="#team3" onclick="interactiveArrow('team',3,2);"><img src="images/MPAror/arrowwhite.svg" id="team2arrow" alt="Next Slide" /></a>
</div>
    
<div class="interactive" id="team3">
    <img src="images/MPAror/logo.svg" alt="Logo" />
    <a href="#team4" onclick="interactiveArrow('team',4,3);"><img src="images/MPAror/arrowwhite.svg" id="team3arrow" alt="Next Slide" /></a>
</div>
    
<div class="interactive" id="team4">
    <img src="images/MPAror/logo.svg" alt="Logo" />
    <a href="#team1" onclick="interactiveArrow('team',1,4);"><img src="images/MPAror/arrowwhite.svg" id="team4arrow" alt="Next Slide" /></a>
</div>

</div>
<?php 
$footerstuff = NULL;
include('footer.php');
?>