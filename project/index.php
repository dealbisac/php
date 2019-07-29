<?php
require('connection.php');

//fetching the value of userinfo table
$usersql = "SELECT * FROM `userinfo` WHERE id=1";

$userresult = mysqli_query($connection, $usersql);
if (mysqli_num_rows($userresult) > 0) {
while($row = mysqli_fetch_assoc($userresult)) {
$name       =$row["name"];
$profession =$row["profession"];
$address    =$row["address"];
$email      =$row["email"];
$contact    =$row["contact"];
}
} else {
echo "0 results";
}

//fetching the value of skills table
$skillsql = "SELECT * FROM `skills` WHERE `userid`=1";
$skillresult = mysqli_query($connection, $skillsql);

//fetching the value of langauge table
$langaugesql = "SELECT * FROM `language` WHERE `userid`=1";
$langaugeresult = mysqli_query($connection, $langaugesql);

//fetching the value of workexperience table
$worksql = "SELECT * FROM `work` WHERE `userid`=1";
$workresult = mysqli_query($connection, $worksql);

?>
<!DOCTYPE html>
<html>
<title>CV</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

<!-- The Grid -->
<div class="w3-row-padding">

<!-- Left Column -->
<div class="w3-third">

<div class="w3-white w3-text-grey w3-card-4">
<div class="w3-display-container">
<img src="profile.jpg" style="width:100%" alt="Avatar">
<div class="w3-display-bottomleft w3-container w3-text-black">
<h2><?php echo $name; ?></h2>
</div>
</div>
<div class="w3-container">
<p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $profession; ?></p>
<p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $address; ?></p>
<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?></p>
<p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $contact; ?></p>
<hr>

<p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
<?php
if (mysqli_num_rows($skillresult) > 0) {
while($row = mysqli_fetch_assoc($skillresult)) {
  echo "<p>".$row["skilledon"]."</p>";
  echo "<div class='w3-light-grey w3-round-xlarge w3-small'>";
  echo "<div class='w3-container w3-center w3-round-xlarge w3-teal' style='width:".$row["level"]."'>".$row["level"]."</div>";
  echo "</div>";
}
} else {
echo "0 results";
}

?>
<br>

<p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
<?php
if(mysqli_num_rows($langaugeresult) > 0){
  while($row = mysqli_fetch_assoc($langaugeresult)){
    echo "<p>".$row["language"]."</p>";
    echo "<div class='w3-light-grey w3-round-xlarge'>";
    echo "<div class='w3-round-xlarge w3-teal' style='height:24px;width:".$row["level"]."'></div>";
    echo "</div>";
  }
}else{
  echo "No results found";
}
?>
<br>
</div>
</div><br>

<!-- End Left Column -->
</div>

<!-- Right Column -->
<div class="w3-twothird">

<div class="w3-container w3-card w3-white w3-margin-bottom">
<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
<?php
if(mysqli_num_rows($workresult)>0){
  while($row = mysqli_fetch_assoc($workresult)){
    echo "<div class='w3-container'>";
    echo "<h5 class='w3-opacity'><b>".$row["position"]." - ".$row["company"]."</b></h5>";
    echo "<h6 class='w3-text-teal'><i class='fa fa-calendar fa-fw w3-margin-right'></i>".$row["startdate"]." - "; 
    if($row["enddate"]==NULL){
      echo "<span class='w3-tag w3-teal w3-round'>Current</span></h6>";
    }else{
      echo $row["enddate"]."</span></h6>";
    }
    echo "<p>".$row["description"]."</p>";
    echo "<hr></div>";
  }


}else{
  echo "No results found";
}

?>
</div>

<div class="w3-container w3-card w3-white">
<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
<div class="w3-container">
<h5 class="w3-opacity"><b>W3Schools.com</b></h5>
<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
<p>Web Development! All I need to know in one place</p>
<hr>
</div>
<div class="w3-container">
<h5 class="w3-opacity"><b>London Business School</b></h5>
<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
<p>Master Degree</p>
<hr>
</div>
<div class="w3-container">
<h5 class="w3-opacity"><b>School of Coding</b></h5>
<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
<p>Bachelor Degree</p><br>
</div>
</div>

<!-- End Right Column -->
</div>

<!-- End Grid -->
</div>

<!-- End Page Container -->
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
<p>Find me on social media.</p>
<a href="" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
<i class="fa fa-instagram w3-hover-opacity"></i>
<i class="fa fa-snapchat w3-hover-opacity"></i>
<i class="fa fa-pinterest-p w3-hover-opacity"></i>
<i class="fa fa-twitter w3-hover-opacity"></i>
<i class="fa fa-linkedin w3-hover-opacity"></i>
<p>Powered by <a href="https://dipendrachand.com.np" target="_blank">dealbisac</a></p>
</footer>

</body>
</html>