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



/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

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


.hcp{
	style:center;
	margin:0 0px 10px 400px;
	
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



<div class="navbar">
  <div class="logo">
  <img src="image/logo.png" width="140" height="45">
  </div>
  <a href="./about.php" class="active">About</a>
  <a href="./population.php">Population</a>
  <a href="./education.php">Education</a>
  <a href="./index.php" >Home</a>
</div>

<div class="row">
  
  <div class="main">
     <div class="hcp">
     <img src="image/hcp.jpg" width="400" height="200">
     </div>
    <h2> Présentation générale de la Direction Régionale du Haut-Commissariat Au Plan d’Agadir</h2>
    <h3> Historique :</h3>
    <p>La direction régionale du HCP d’Agadir a été créée le 19 Août 1975, sa zone d’action
couvre le territoire de la région Souss-Massa qui est composée de 2 préfectures (AgadirIdaoutanane et Inezgane-Ait Melloul) et de 4 provinces (Chtouka-Aït Baha, Taroudant,
Tiznit et Tata)</p>
    <br>
    <h3>Attributions de la DRA :</h3>
    <p>D’après l’Arrêté du chef du Gouvernement N°3.186.16 du 29 juillet 2016 (24
Chaoual 1437) fixant les attributions et l’organisation des services déconcentrés du
Haut-Commissariat au Plan, il charge la direction régionale du HCP d’exécuter, dans le
cadre de ses limites territoriales (selon la nouvelle répartition régionale : Les deux
Préfectures d’Agadir-Ida Outanane et d’Inezgane-Ait Melloul, Province de Chtouka-Ait
Baha, Province de Taroudant, Province de Tiznit, Province de Tata) , les missions
suivantes :</p>
    <ul>
	   <li> La collecte d’information et réalisation des enquêtes dans les domaines de la
statistique tout en assurant l’exploitation des résultats.</li>
       <li>Réaliser des études d’ordre économique, social et démographique, dans la
perspective de participer au processus de développement régional et local</li>
	   <li>Edifier et divulguer des annuaires statistiques et des monographies régionales et
provinciales.</li>
	   <li>Contribuer à la préparation, au suivi et à l’évaluation des programmes de
développement régionaux, provinciaux, locaux et sectoriels en collaborations
avec les autorités régionales, provinciales et locales compétentes ainsi que les
services déconcentrés des différents ministères concernés.</li>
	   <li>Assurer le suivi et l’analyse de la conjoncture économique, y compris la situation
du marché du travail, l’inflation et les prix.</li>
	   <li>Aider à l’élaboration des comptes régionaux et comptes satellitaires.</li>
	   <li>Assurer l’entretien et la maintenance des bâtiments administratifs dans la limite
de leurs prérogatives ainsi que la gestion des ressources humaines et financières.</li>
	</ul> 
    <h3>L’organisation administrative de la direction régionale :</h3>
    <p>La Direction régionale du HCP d’Agadir peut être représentée selon
l’organigramme suivant :</p>
    <img src="image/capture.png" alt="HCP-services" width="1000px"  align="center"/>
	<h4>La direction :</h4>
	<p>La direction est dirigée par le directeur régional Mr. Lahoucine AL AARABIOU qui se charge de la supervision des activités et du personnel de chaque service soit de
manière directe ou à travers des comptes rendus des chefs de service. Le directeur donne
aussi les directives aux chefs de services qui les transmettent à leur tour à l’ensemble du
personnel. La direction régionale comprend 57 personnes (66,7% hommes, 33,3%
femmes) dont 52,6% d’ingénieurs et d’administratifs, 26.3% de techniciens et 24.6% de
secrétaires et de chauffeurs.</p>
    <h4>Le service de la planification :</h4>
	<p>Le service de la planification a pour principales missions de :</p>
	<p>- Contribuer, en collaboration avec les autorités régionales, préfectorales et provinciales
compétentes, à la préparation, au suivi et à l'évaluation des plans locaux et régionaux de
développement économique et social ;</p>
	<p>- Effectuer des études d'ordre économique, social et démographique, en vue de
promouvoir le développement régional et local ;</p>
	<p>- Elaborer des monographies régionales et provinciales et analyse de la situation
économique et sociale.</p>
    <h4>Service de la statistique :</h4>
	<p>La mission principale du service de la statistique porte sur la réalisation des
enquêtes statistiques et toute opération de collecte des données à caractère économique,
social et culturel. Cette collecte est généralement faite par le biais des enquêtes
(permanentes ou périodiques), qui sont ventilées comme suit :</p>
    <ol>
	  <li>Enquêtes auprès des entreprises</li>
	  <li>Enquêtes auprès des administrations publiques et des collectivités
locales</li>
	  <li>Enquêtes auprès des ménages</li>
	  <li>Statistiques sous produites</li>
	</ol>
	<h4>Service de la gestion des moyens :</h4>
	<p>Le service de la gestion des moyens a pour mission d’assurer le suivi de la
gestion quotidienne des ressources humaines et des moyens généraux de la direction
régionale. A cet effet, il est chargé de :</p>
	<ol>
	  <li>La gestion des ressources humaines</li>
	  <li>La comptabilité publique et Régie</li>
	  <li>La gestion du matériel</li>
	  <li>La gestion du parc auto</li>
	</ol>
	<h4>Service de la documentation :</h4>
	<p>Le service de la documentation a pour tâches principales :</p>
	<ol>
	  <li>La gestion du fonds documentaire</li>
	  <li>La gestion de la bibliothèque et l’information des intéressés</li>
	  <li>La diffusion des publications du HCP</li>
	</ol>
  </div>
</div>

<div class="footer">
  <h2>HCP-SM</h2>
</div>

</body>
</html>
