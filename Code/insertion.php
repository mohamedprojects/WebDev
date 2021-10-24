<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=site','root','');
$pdoStat = $objetPdo->prepare('INSERT INTO population VALUES (:provinces, :population,NULL)');
$pdoStat->bindValue(':provinces', $_POST['provinces'], PDO::PARAM_STR);
$pdoStat->bindValue(':population', $_POST['population'], PDO::PARAM_STR);
$insertIsOk = $pdoStat->execute();
if($insertIsOk){
	$message = 'La statisque est ajoutée avec succès';
}
else{
	$message = 'Echec de enregistrement';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>

<style>
* {
  box-sizing: border-box;
}

.logo{
	width: 10px;
	height: 1px;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
    background-image: url("image/e.jpg");
  background-color: #008080;
  background-size: cover;
}


.navbar {
  overflow: hidden;
  background-color: #00b3b3;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: right;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
    margin:60px;
}


/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 133px;
}

/* Fake image, just for this example */
.fakeimg {

  display: flex;

width: -webkit-fit-content;
width: -moz-fit-content;
width: fit-content;
align-items: center;
justify-content: center;
text-align: center;
padding: 18px 40px;
color: #fff;
text-decoration: none;
background: -webkit-gradient(linear,left top,right top,from(#99ccff),to(#008080));
background: linear-gradient(90deg,#99ccff,#008080);
border-radius: 45px;
border: 0;
min-width: 140px;
margin: 1rem;
    margin-left: 1rem;
cursor: pointer;
float:left;
}
.fakeimg1 {

  display: flex;

width: -webkit-fit-content;
width: -moz-fit-content;
width: fit-content;
align-items: center;
justify-content: center;
text-align: center;
padding: 18px 40px;
color: #fff;
text-decoration: none;
background: -webkit-gradient(linear,left top,right top,from(#99ccff),to(#008080));
background: linear-gradient(90deg,#99ccff,#008080);
border-radius: 45px;
border: 0;
min-width: 140px;
margin: 1rem;
    margin-left: 1rem;
cursor: pointer;
float:right;
}
.img {
  float:center;
  margin: 0 0px 0 200px;

}
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #00b3b3;
}

@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>
<div class="logo">
  
</div>
<div class="navbar">
  <div class="logo">
  <img src="image/logo.png" width="140" height="45">
  </div>
  <a href="./about.php" >About</a>
  <a href="./population.php" class="active">Population</a>
  <a href="./education.php">Education</a>
  <a href="./index.php" >Home</a>
</div>


<div class="row" >

  <div class="main" >
    
    <h2> Enregistrement</h2>
	
	<p><?php echo $message ?></p>


  </div>
</div>
<br>
<br>
<br>
<br>
<div class="footer">
  <h2>HCP-SM</h2>
</div>

</body>
</html>
