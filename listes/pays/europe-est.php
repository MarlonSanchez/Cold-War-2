<?php

include('lang/fr.php');

/*
Stabilité de 0 à 6 // chaos, très faible, faible, moyenne, forte, très forte, exceptionnelle

Ajout de 

existe : booléen
colonie : boléen
telex : liste de strings
guerillas : liste de strings


AJouter ça pour chaque pays avec une fonction

guerillausa --> liste de traits / force / relations usa / relations urss / relations autre
guerillaurss
guerillaautre


coordonnées :
nom :
nom maj :
*/
// relation  : -4 à 4 excécrable / très mauvaise / mauvaise / méfiante / médiocre / bienveillante / bonne / très bonne / excellente
// stabilité : -3 à +3 => chaos / très faible / faible / moyenne / forte / très forte / exceptionnelle
// richesse : de 0 à 3 tiers monde / en développement / moyenne / riche
// économie : collectiviste / capitaliste



$_SESSION['FI']=array('nom' =>$finlande,'points' =>10,'stabilite' =>1, 'sphereurss'=>1, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>1, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe est','europe nord','scandinavie' ),
	'relusa' =>1, 'relurss' =>-3,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/finlande.jpg','miniflag'=>'images/drapeaux/miniflagfinlande.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>5 ,
	 'economie'=>'de marché','richesse'=> 2,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


$_SESSION['PL']=array('nom' =>$pologne,'points' =>30,'stabilite' =>1, 'sphereurss'=>1, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0,
	'geographie'=> array('europe', 'europe est' ),
	'relusa' =>-1, 'relurss' =>2,'relautre' =>-1, 'regime'=>'république populaire',
	'drapeau'=>'images/drapeaux/pologne.jpg','miniflag'=>'images/drapeaux/miniflagpologne.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>30 ,
	 'economie'=>'collectiviste','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );





$_SESSION['RD']=array('nom' =>$rda,'points' =>20,'stabilite' =>1, 'sphereurss'=>1, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe est' ),
	'relusa' =>-1, 'relurss' =>2,'relautre' =>-1, 'regime'=>'république populaire',
	'drapeau'=>'images/drapeaux/rda.jpg','miniflag'=>'images/drapeaux/miniflagrda.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>20 ,
	 'economie'=>'collectiviste','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );



$_SESSION['CZ']=array('nom' =>$tchecoslovaquie,'points' =>10,'stabilite' =>1, 'sphereurss'=>1, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe est' ),
	'relusa' =>-1, 'relurss' =>2,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/tchécoslovaquie.jpg','miniflag'=>'images/drapeaux/miniflagtchécoslovaquie.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>10 ,
	 'economie'=>'collectiviste','richesse'=> 3,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );



$_SESSION['HU']=array('nom' =>$hongrie,'points' =>10,'stabilite' =>1, 'sphereurss'=>1, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('europe', 'europe est' ),
	'relusa' =>-1, 'relurss' =>2,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/hongrie.jpg','miniflag'=>'images/drapeaux/miniflaghongrie.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>10 ,
	 'economie'=>'collectiviste','richesse'=> 2,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


$_SESSION['RO']=array('nom' =>$roumanie,'points' =>20,'stabilite' =>1, 'sphereurss'=>1, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('europe', 'europe est' ),
	'relusa' =>-1, 'relurss' =>2,'relautre' =>-1, 'regime'=>'république populaire',
	'drapeau'=>'images/drapeaux/roumanie.jpg','miniflag'=>'images/drapeaux/miniflagroumanie.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>25 ,
	 'economie'=>'collectiviste','richesse'=> 2,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


$_SESSION['BG']=array('nom' =>$bulgarie,'points' =>10,'stabilite' =>1, 'sphereurss'=>1, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe est','balkans' ),
	'relusa' =>-1, 'relurss' =>2,'relautre' =>-1, 'regime'=>'république populaire',
	'drapeau'=>'images/drapeaux/bulgarie.jpg','miniflag'=>'images/drapeaux/miniflagbulgarie.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>15 ,
	 'economie'=>'collectiviste','richesse'=> 2,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );

$_SESSION['RS']=array('nom' =>$yougoslavie,'points' =>15,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe est','balkans' ),
	'relusa' =>-1, 'relurss' =>1,'relautre' =>-1, 'regime'=>'république populaire',
	'drapeau'=>'images/drapeaux/yougoslavie.jpg','miniflag'=>'images/drapeaux/miniflagyougoslavie.jpg','map'=>'', 'forcearmee'=>15,
	'forcearmeemax'=>20 ,
	 'economie'=>'collectiviste','richesse'=> 1,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );


$_SESSION['AL']=array('nom' =>$albanie,'points' =>5,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe est','balkans','méditerranée' ),
	'relusa' =>-1, 'relurss' =>1,'relautre' =>-1, 'regime'=>'république populaire',
	'drapeau'=>'images/drapeaux/albanie.jpg','miniflag'=>'images/drapeaux/miniflagalbanie.jpg','map'=>'', 'forcearmee'=>3,
	'forcearmeemax'=>5 ,
	 'economie'=>'collectiviste','richesse'=> 0,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );

$_SESSION['GR']=array('nom' =>$grece,'points' =>15,'stabilite' =>-1, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('europe', 'europe est','balkans','méditerranée' ),
	'relusa' =>1, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'monarchie constitutionnelle',
	'drapeau'=>'images/drapeaux/grece2.jpg','miniflag'=>'images/drapeaux/miniflaggrece2.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>15 ,
	 'economie'=>'collectiviste','richesse'=> 0,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>0,

	'troupesalliees'=>array(),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );



?>