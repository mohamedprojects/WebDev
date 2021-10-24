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
}


/* Header/logo Title */
.header {
  padding: 100px;
  background-image: url("image/e.jpg");
  background-color: #008080;
  background-size: cover;
  color: white;
}
/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
  float: right;
 
}

.log {
	align:left;
	margin: 0px 30px 0px 0px;
	
}
.log h1 {
	align:right;
	margin: 0px 0px 0px 0px;
	
}

.log input{
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

<div class="navbar">
  <div class="logo">
  <img src="image/logo.png" width="140" height="45">
  </div>
  <a href="./about.php" >About</a>
  <a href="./population.php">Population</a>
  <a href="./education.php">Education</a>
  <a href="./index.php" class="active">Home</a>
</div>
<div class="header">
    <img src="image/logo.png" alt="HCP" width="400px"  />
    
<div class="log">
      <h1 style="margin-right:100px;">HCP Souss-Massa</h1>

  <form action="about.php">
  <br><input type="submit" value="HCP" width="100px" style="margin-left:100px; ">
  </form> 
 </div>
  

  <br>
  <br>
  <br>
  <br>
  <h3 style="text-align:center">La région de Souss-Massa en Chiffres:</h3>
  <table>
	<tr>
	
    <td><div class="fakeimg" style="height:60px;">La population : +2,896,150 (2020) 	</div></td>
	<td><div class="fakeimg" style="height:60px;">Taux de travail : 36,6% (entre 2019 et 2020)</div></td>
    <td><div class="fakeimg" style="height:60px;">Taux de chômage : 11,8% (entre 2019 et 2020)</div></td>
    </tr>
	</table>
</div>

</body>
</html>
