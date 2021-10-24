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
  padding: 20px;
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
  <a href="./population.php" >Population</a>
  <a href="./education.php" class="active">Education</a>
  <a href="./index.php" >Home</a>
</div>


<div class="row">

  <div class="main">
         <div class="img"><img src="image/agadir.png" alt="HCP" width="800px" height="500px"/></div>
    <a href="https://www.hcp.ma/region-agadir/attachment/2179533/" style="color:#11cccc">Télécharger l'annuaire statistique régional 2019.pdf </a>&nbsp;
    <a href="https://www.hcp.ma/region-agadir/attachment/1779904/" style="color:#11cccc">Télécharger l'annuaire statistique régional 2018.pdf </a>&nbsp;
    <a href="https://www.hcp.ma/region-agadir/attachment/1467599/" style="color:#11cccc">Télécharger l'annuaire statistique régional 2017.pdf </a><br>
    <a href="https://www.hcp.ma/region-agadir/attachment/952770/" style="color:#11cccc">Télécharger l'annuaire statistique régional 2016.pdf </a>&nbsp;
    <a href="https://www.hcp.ma/region-agadir/attachment/829124/" style="color:#11cccc">Télécharger l'annuaire statistique régional 2015.pdf </a>&nbsp;
    <a href="https://www.hcp.ma/region-agadir/attachment/536498/" style="color:#11cccc">Télécharger l'annuaire statistique régional 2013.pdf </a><br>
    <a href="https://www.hcp.ma/region-agadir/attachment/536500/" style="color:#11cccc">Télécharger l'annuaire statistique régional 2012.pdf </a>

    <h2>Population légale selon provinces et préfectures de la région 2019/2020</h2>
    
	<div class="img"><img src="image/e.png"  width="800px" height="350px"/>
	<img src="eg1.php" width="800px" height="350px"/>
    </div>
	<table>
	<tr>
		<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td><p style="color:#cc1111">Garçons</td>
	<td><p style="color:#11cccc">/ Filles</p></td>
	</tr>
    </table>
    <br>
    <h2>Entrer nouvelles statiques</h2>
	<form action="insertione.php" method="post">
	Provinces et préfectures :   <input type="text" name="provinces">  Garçons :   <input type="number" name="garcon" > Filles :   <input type="number" name="fille" ><br><input type="submit" value="Envoyer" class="fakeimg">
	</form>
		<form action="modife.php" method="post"> <input type="submit" value="modifier" class="fakeimg1"></form>

	<form action="e.php" method="post">

	<input type="submit" value="Convertir" class="fakeimg1">

	</form>
  </div>
</div>

<div class="footer">
  <h2>HCP-SM</h2>
</div>

</body>
</html>
