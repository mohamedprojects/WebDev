


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
  <a href="./p.php" >Population</a>
  <a href="./education.php" class="active">Education</a>
  <a href="./index.php" >Home</a>
</div>


<div class="row">

  <div class="main">
      <?php
        $cn = mysqli_connect("localhost", "root", "","site") or die('error');
        $sql= "SELECT * FROM education";
        $r = mysqli_query($cn,$sql)or die(mysqli_error($cn));
        
		?>
         
        <table class="tab">
                <tr>
                    <td>id</td>
                    <td>Provinces</td>
                    <td>Garçons</td>
					<td>Filles</td>

                    <td>Modifier</td>
					<td>Supprimer</td>
                </tr>
            <?php
            while($donnees = mysqli_fetch_array($r, MYSQLI_ASSOC)){
            ?>
			<tr>
                <td><?php echo $donnees['id'];?></td>
                <td><?php echo $donnees['provinces'];?></td>
                <td><?php echo $donnees['garcon'];?></td>
				<td><?php echo $donnees['fille'];?></td>
				<td><a href="modifiere.php?num=<?php echo $donnees['id'] ?>" ><input type="submit" value="modifier" class="fakeimg1"></a></td>
			    <td><a href="supprimere.php?num=<?php echo $donnees['id'] ?>" ><input type="submit" value="supprimer" class="fakeimg1"></a></td>

			</tr>
			<?php
                  }
			
            ?>

        </table>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="footer">
  <h2>HCP-SM</h2>
</div>

</body>
</html>
