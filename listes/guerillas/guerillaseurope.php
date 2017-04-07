<?php

include('lang/fr.php');
// traits : urbaine, rurale, soutien populaire, dissentions internes, leader charismatique, fanatisme, corrompue, maffieuse,
// islamique, indépendentiste, tribale, négociations, sanctuaire, base extra territoriale, marxiste, maoiste, anti-communiste



$_SESSION['agrupaciones']=array(

		'nom'=>'agrupaciones guerrilleras',
		'drapeau'=>'images/drapeaux/revolte.png',
		'regime'=>'république',
		'guerilla'=>2, 'forceguerrillamax'=>15, 'traitsguerrilla'=>array('rurale','dissentions internes','marxiste'),
	    'relguerillausa'=>-4,'relguerillaurss'=>3, 'relguerillaautre'=>-1,

	);

























?>