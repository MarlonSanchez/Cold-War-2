<?php
session_start();


echo $_POST['datapost']; //Pour récupérer la variable avec le code du pays

$pays=htmlspecialchars($_POST['datapost']);

include('fr.php');
include('lexique.php');



$nompays=$_SESSION[$pays]['nom'];






?>
<div >
	<?php echo('<img src="'.$_SESSION[$pays]['drapeau'].'" style="display:inline-block;width:10%;">')     ?><h1 style="display:inline-block;padding-left: 20%;"><?php echo($nompays); ?></h1><h1 style="display:inline-block;padding-left: 5%;color:green;"><?php echo(ucfirst($points.' : '.$_SESSION[$pays]['points']));  ?></h1>
</div>
<div style="display:inline-block;width:33%;vertical-align: top;padding-top: 2%;">
	<h2 style="text-align: center"><?php echo(ucfirst($etatpays))  ?></h2>
	<br>
	<?php
	
	echo(ucfirst($regime).' : '.$nomregime.'<br>');
	echo(ucfirst($stabilite).' : '.$nomstabilite.'<br>');
	echo(ucfirst($economie).' : '.$nomeconomie.'<br>');
	echo(ucfirst($richesse).' : '.$nomrichesse.'<br>');
	echo(ucfirst($terrain).' : '.$nomterrain.'<br>');
	echo(ucfirst($forcearmee).' : '.$_SESSION[$pays]['forcearmee'].'<br>');
	echo('<br><hr><br>');
	echo('<h2>'.$trouble.'</h2>');
	// Coder tout ça 


	echo(ucfirst($guerilla).' : <br> ');

	foreach ($_SESSION[$pays]['listguerrilla'] as $key => $value) {
		

		$img=$_SESSION[$value]['drapeau'];
		$title=$_SESSION[$value]['nom'];

		echo('<img   src="'.$img.'"    title="'.$title.'"   style="display:inline-block;width:15%;margin-left:1%;" />');
	}




	?>


	<!--

	Regime : république populaire<br>
	Stabilité : forte <br>
	Economie : collectivisée<br>
	Richesse : pauvre<br>
	Forces armées : 33<br>
	<br>
	<hr>
	<br>
	<h2>Troubles </h2>
	Opposition pro soviétique<br>

	Guérillas : <br>
	<img src="images/USA.png" style="display:inline-block;width:5%;">

	-->

</div>
<div style="display:inline-block;width:33%;vertical-align: top;;padding-top: 2%;">
	<h2 style="text-align: center">Vos Actions</h2>
	<br>
	<h3>Diplomatie</h3>
	<h3>Subversion</h3>
	<h3>Action Militaire</h3>
	
</div>
<div style="display:inline-block;width:33%;padding-left: :2%;vertical-align: top;;padding-top: 2%;">
	<h2 style="text-align: center">Actualité</h2>
	<br>
	<ul>
		<li>Décembre 1949 :La CIA finance la guérilla</li>
		<li>Décembre 1949 :La Chine entre au conseil de sécurité de l'ONU</li>
		<li>Janvier 1949 : Visite du pape</li>
	</ul>
</div>
