<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>

<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background-image: url("image/e.jpg");
  background-color: #008080;
  background-size: cover;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
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
}

/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #b3ffec;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}
.img {
  float:center;
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
  <a href="./about.html" >About</a>
  <a href="./p.php" class="active">Population</a>
  <a href="./education.html">Education</a>
  <a href="./index.html" >Home</a>
</div>
<div class="header">
  <h1>HCP souss-massa</h1>
  <p>A <b>responsive</b> website created by me.</p>
</div>



<div class="row">
  <div class="side">
    <div class="img"><img src="image/hcp.jpg" alt="HCP" width="360px"  align="center"/></div>
    <h3>Statistique sur la r??gion:</h3>
    <div class="fakeimg" style="height:60px;">La population : +2,896,150 (2020) 	</div><br>
    <div class="fakeimg" style="height:60px;">Taux d'activit?? : 41,5% (entre 2019 et 2020) </div><br>
	<div class="fakeimg" style="height:60px;">Taux de travail : 36,6% (entre 2019 et 2020)</div><br>
    <div class="fakeimg" style="height:60px;">Taux de ch??mage : 11,8% (entre 2019 et 2020)</div>
  </div>
  <div class="main">
    <h2>Population l??gale selon provinces et pr??fectures de la r??gion</h2>
    <div class="img"><img src="image/p.png"  width="800px" height="350px"/></div>
	
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>Entrer nouvelles statiques</h2>
	<form action="insertion.php" method="post">
	Provinces et pr??fectures :   <input type="text" name="provinces">        Population :   <input type="number" name="population" > <input type="submit" value="Envoyer"><br>
	</form>
	<form action="g.php" method="post">

	<input type="submit" value="Convertir">

	</form>
    <h5>Title description, Sep 2, 20</h5>
  </div>
</div>

<div class="footer">
  <h2>Footer</h2>
</div>

</body>
</html>
