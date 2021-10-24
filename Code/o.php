


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

table{
	border-collapse : collapse;
	
}
td {
	border: 1px solid black;
	padding : 10px;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
    background-image: url("image/e.jpg");
  background-color: #008080;
  background-size: cover;
}


/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
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

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */


/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 65px;
}
.main img{
	float:right;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
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

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
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
  <a href="./p.php" class="active">Population</a>
  <a href="./education.php">Education</a>
  <a href="./index.php" >Home</a>
</div>


<div class="row">

  <div class="main">
      <?php
        $cn = mysqli_connect("localhost", "root", "","site") or die('error');
        $sql= "SELECT * FROM population";
        $r = mysqli_query($cn,$sql)or die(mysqli_error($cn));
        
		?>
         
        <table class="tab">
                <tr>
                    <td>id</td>
                    <td>Provinces</td>
                    <td>Population</td>
                   
                </tr>
            <?php
            while($donnees = mysqli_fetch_array($r, MYSQLI_ASSOC)){
            ?>
			<tr>
                <td><?php echo $donnees['id'];?></td>
                <td><?php echo $donnees['Provinces'];?></td>
                <td><?php echo $donnees['Populations'];?></td>
			</tr>
			<?php
                  }
			
            ?>
			<img src="g.php">

        </table>
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
