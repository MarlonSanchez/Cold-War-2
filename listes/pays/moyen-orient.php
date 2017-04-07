<?php


include('lang/fr.php');

/*
Stabilitéde 0 é6 // chaos, tré faible, faible, moyenne, forte, tré forte, exceptionnelle

Ajout de 

existe : boolén
colonie : bolén
telex : liste de strings
guerillas : liste de strings


AJouter é pour chaque pays avec une fonction

guerillausa --> liste de traits / force / relations usa / relations urss / relations autre
guerillaurss
guerillaautre


coordonnés :
nom :
nom maj :
*/
// relation  : -4 é4 excérable / tré mauvaise / mauvaise / méiante / méiocre / bienveillante / bonne / tré bonne / excellente
// stabilité: -3 é+3 => chaos / tré faible / faible / moyenne / forte / tré forte / exceptionnelle
// richesse : de 0 é3 tiers monde / en déeloppement / moyenne / riche
// éonomie : collectiviste / capitaliste



$_SESSION['TR']=array('nom' =>$turquie,'points' =>50,'stabilite' =>2, 'sphereurss'=>1, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('moyen orient','méditerranée'),
	'relusa' =>1, 'relurss' =>-1,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/turquie.jpg','miniflag'=>'images/drapeaux/miniflagturquie.jpg','map'=>'', 'forcearmee'=>15,
	'forcearmeemax'=>30 ,
	 'economie'=>'de marché','richesse'=> 1,
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


$_SESSION['CY']=array('nom' =>$chypre,'points' =>5,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>1 , 'colonisateur'=>'GB',
	'terrain' =>'montagne','bombe'=>0, 
	'geographie'=> array('moyen orient','méditerranée'),
	'relusa' =>1, 'relurss' =>-1,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/turquie.jpg','miniflag'=>'images/drapeaux/miniflagturquie.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>2 ,
	 'economie'=>'de marché','richesse'=> 1,
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

$_SESSION['SY']=array('nom' =>$syrie,'points' =>25,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>1 , 'colonisateur'=>'FR',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('moyen orient',),
	'relusa' =>0, 'relurss' =>0,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/syrie.jpg','miniflag'=>'images/drapeaux/miniflagsyrie.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>20 ,
	 'economie'=>'de marché','richesse'=> 0,
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


$_SESSION['IQ']=array('nom' =>$irak,'points' =>30,'stabilite' =>-2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('moyen orient',),
	'relusa' =>0, 'relurss' =>0,'relautre' =>0, 'regime'=>'monarchie',
	'drapeau'=>'images/drapeaux/irak.jpg','miniflag'=>'images/drapeaux/miniflagirak.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>25 ,
	 'economie'=>'de marché','richesse'=> 0,
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

$_SESSION['LB']=array('nom' =>$liban,'points' =>5,'stabilite' =>-2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('moyen orient','méditerranée'),
	'relusa' =>0, 'relurss' =>0,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/liban.jpg','miniflag'=>'images/drapeaux/miniflagliban.jpg','map'=>'', 'forcearmee'=>2,
	'forcearmeemax'=>5 ,
	 'economie'=>'de marché','richesse'=> 1,
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

$_SESSION['JO']=array('nom' =>$jordanie,'points' =>5,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('moyen orient',),
	'relusa' =>1, 'relurss' =>0,'relautre' =>0, 'regime'=>'monarchie constitutionnelle',
	'drapeau'=>'images/drapeaux/jordanie.jpg','miniflag'=>'images/drapeaux/miniflagjordanie.jpg','map'=>'', 'forcearmee'=>2,
	'forcearmeemax'=>5 ,
	 'economie'=>'de marché','richesse'=> 0,
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


$_SESSION['SA']=array('nom' =>$arabie,'points' =>50,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('moyen orient',),
	'relusa' =>3, 'relurss' =>0,'relautre' =>0, 'regime'=>'monarchie',
	'drapeau'=>'images/drapeaux/arabie-saoudite.jpg','miniflag'=>'images/drapeaux/miniflagarabie-saoudite.jpg','map'=>'', 'forcearmee'=>2,
	'forcearmeemax'=>8 ,
	 'economie'=>'de marché','richesse'=> 0,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>1,  'accordecousa'=>1, 
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