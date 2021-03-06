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
    <h2> Pr??sentation g??n??rale de la Direction R??gionale du Haut-Commissariat Au Plan d???Agadir</h2>
    <h3> Historique :</h3>
    <p>La direction r??gionale du HCP d???Agadir a ??t?? cr????e le 19 Ao??t 1975, sa zone d???action
couvre le territoire de la r??gion Souss-Massa qui est compos??e de 2 pr??fectures (AgadirIdaoutanane et Inezgane-Ait Melloul) et de 4 provinces (Chtouka-A??t Baha, Taroudant,
Tiznit et Tata)</p>
    <br>
    <h3>Attributions de la DRA :</h3>
    <p>D???apr??s l???Arr??t?? du chef du Gouvernement N??3.186.16 du 29 juillet 2016 (24
Chaoual 1437) fixant les attributions et l???organisation des services d??concentr??s du
Haut-Commissariat au Plan, il charge la direction r??gionale du HCP d???ex??cuter, dans le
cadre de ses limites territoriales (selon la nouvelle r??partition r??gionale : Les deux
Pr??fectures d???Agadir-Ida Outanane et d???Inezgane-Ait Melloul, Province de Chtouka-Ait
Baha, Province de Taroudant, Province de Tiznit, Province de Tata) , les missions
suivantes :</p>
    <ul>
	   <li> La collecte d???information et r??alisation des enqu??tes dans les domaines de la
statistique tout en assurant l???exploitation des r??sultats.</li>
       <li>R??aliser des ??tudes d???ordre ??conomique, social et d??mographique, dans la
perspective de participer au processus de d??veloppement r??gional et local</li>
	   <li>Edifier et divulguer des annuaires statistiques et des monographies r??gionales et
provinciales.</li>
	   <li>Contribuer ?? la pr??paration, au suivi et ?? l?????valuation des programmes de
d??veloppement r??gionaux, provinciaux, locaux et sectoriels en collaborations
avec les autorit??s r??gionales, provinciales et locales comp??tentes ainsi que les
services d??concentr??s des diff??rents minist??res concern??s.</li>
	   <li>Assurer le suivi et l???analyse de la conjoncture ??conomique, y compris la situation
du march?? du travail, l???inflation et les prix.</li>
	   <li>Aider ?? l?????laboration des comptes r??gionaux et comptes satellitaires.</li>
	   <li>Assurer l???entretien et la maintenance des b??timents administratifs dans la limite
de leurs pr??rogatives ainsi que la gestion des ressources humaines et financi??res.</li>
	</ul> 
    <h3>L???organisation administrative de la direction r??gionale :</h3>
    <p>La Direction r??gionale du HCP d???Agadir peut ??tre repr??sent??e selon
l???organigramme suivant :</p>
    <img src="image/capture.png" alt="HCP-services" width="1000px"  align="center"/>
	<h4>La direction :</h4>
	<p>La direction est dirig??e par le directeur r??gional Mr. Lahoucine AL AARABIOU qui se charge de la supervision des activit??s et du personnel de chaque service soit de
mani??re directe ou ?? travers des comptes rendus des chefs de service. Le directeur donne
aussi les directives aux chefs de services qui les transmettent ?? leur tour ?? l???ensemble du
personnel. La direction r??gionale comprend 57 personnes (66,7% hommes, 33,3%
femmes) dont 52,6% d???ing??nieurs et d???administratifs, 26.3% de techniciens et 24.6% de
secr??taires et de chauffeurs.</p>
    <h4>Le service de la planification :</h4>
	<p>Le service de la planification a pour principales missions de :</p>
	<p>- Contribuer, en collaboration avec les autorit??s r??gionales, pr??fectorales et provinciales
comp??tentes, ?? la pr??paration, au suivi et ?? l'??valuation des plans locaux et r??gionaux de
d??veloppement ??conomique et social ;</p>
	<p>- Effectuer des ??tudes d'ordre ??conomique, social et d??mographique, en vue de
promouvoir le d??veloppement r??gional et local ;</p>
	<p>- Elaborer des monographies r??gionales et provinciales et analyse de la situation
??conomique et sociale.</p>
    <h4>Service de la statistique :</h4>
	<p>La mission principale du service de la statistique porte sur la r??alisation des
enqu??tes statistiques et toute op??ration de collecte des donn??es ?? caract??re ??conomique,
social et culturel. Cette collecte est g??n??ralement faite par le biais des enqu??tes
(permanentes ou p??riodiques), qui sont ventil??es comme suit :</p>
    <ol>
	  <li>Enqu??tes aupr??s des entreprises</li>
	  <li>Enqu??tes aupr??s des administrations publiques et des collectivit??s
locales</li>
	  <li>Enqu??tes aupr??s des m??nages</li>
	  <li>Statistiques sous produites</li>
	</ol>
	<h4>Service de la gestion des moyens :</h4>
	<p>Le service de la gestion des moyens a pour mission d???assurer le suivi de la
gestion quotidienne des ressources humaines et des moyens g??n??raux de la direction
r??gionale. A cet effet, il est charg?? de :</p>
	<ol>
	  <li>La gestion des ressources humaines</li>
	  <li>La comptabilit?? publique et R??gie</li>
	  <li>La gestion du mat??riel</li>
	  <li>La gestion du parc auto</li>
	</ol>
	<h4>Service de la documentation :</h4>
	<p>Le service de la documentation a pour t??ches principales :</p>
	<ol>
	  <li>La gestion du fonds documentaire</li>
	  <li>La gestion de la biblioth??que et l???information des int??ress??s</li>
	  <li>La diffusion des publications du HCP</li>
	</ol>
  </div>
</div>

<div class="footer">
  <h2>HCP-SM</h2>
</div>

</body>
</html>
