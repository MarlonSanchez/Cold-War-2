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



$_SESSION['CA']=array('nom' =>$canada,'points' =>35,'stabilite' =>3, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique nord' ),
	'relusa' =>3, 'relurss' =>-2,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/canada2.jpg','miniflag'=>'images/drapeaux/miniflagcanada2.jpg','map'=>'', 'forcearmee'=>2,
	'forcearmeemax'=>15 ,
	 'economie'=>'de marché','richesse'=> 3,
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



$_SESSION['MX']=array('nom' =>$mexique,'points' =>35,'stabilite' =>0, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale' ),
	'relusa' =>2, 'relurss' =>1,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/mexique.jpg','miniflag'=>'images/drapeaux/miniflagmexique.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>25 ,
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


$_SESSION['GT']=array('nom' =>$guatemala,'points' =>5,'stabilite' =>0, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale' ),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/guatemala.jpg','miniflag'=>'images/drapeaux/miniflagguatemala.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>3 ,
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

$_SESSION['BZ']=array('nom' =>$belize,'points' =>5,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>1 , 'colonisateur'=>'GB',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale' , 'caraibe'),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/belize.png','miniflag'=>'images/drapeaux/miniflagbelize.png','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>1 ,
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


$_SESSION['SV']=array('nom' =>$salvador,'points' =>5,'stabilite' =>-1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale'),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'dictature',
	'drapeau'=>'images/drapeaux/el-salvador.jpg','miniflag'=>'images/drapeaux/miniflagel-salvador.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>1 ,
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


$_SESSION['HN']=array('nom' =>$honduras,'points' =>5,'stabilite' =>-1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale','caraibe'),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/honduras.jpg','miniflag'=>'images/drapeaux/miniflaghonduras.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>3 ,
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



$_SESSION['NI']=array('nom' =>$nicaragua,'points' =>5,'stabilite' =>-1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale','caraibe'),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>-1, 'regime'=>'dictature',
	'drapeau'=>'images/drapeaux/nicaragua.jpg','miniflag'=>'images/drapeaux/miniflagnicaragua.jpg','map'=>'', 'forcearmee'=>1,
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


$_SESSION['CR']=array('nom' =>$costarica,'points' =>5,'stabilite' =>3, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale','caraibe'),
	'relusa' =>3, 'relurss' =>1,'relautre' =>1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/costa-rica.jpg','miniflag'=>'images/drapeaux/miniflagcosta-rica.jpg','map'=>'', 'forcearmee'=>0,
	'forcearmeemax'=>1 ,
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

$_SESSION['PA']=array('nom' =>$panama,'points' =>50,'stabilite' =>0, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale','caraibe'),
	'relusa' =>2, 'relurss' =>0,'relautre' =>1, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/panama.jpg','miniflag'=>'images/drapeaux/miniflagpanama.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>3 ,
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

$_SESSION['CU']=array('nom' =>$cuba,'points' =>25,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale','caraibe'),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/cuba.jpg','miniflag'=>'images/drapeaux/miniflagcuba.jpg','map'=>'', 'forcearmee'=>3,
	'forcearmeemax'=>15 ,
	 'economie'=>'de marché','richesse'=> 0,
	'corruption'=>1, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

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


$_SESSION['JM']=array('nom' =>$jamaique,'points' =>5,'stabilite' =>-2, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>1 , 'colonisateur'=>'GB',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale','caraibe'),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/jamaique.png','miniflag'=>'images/drapeaux/miniflagjamaique.png','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>2 ,
	 'economie'=>'de marché','richesse'=> 0,
	'corruption'=>1, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

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

$_SESSION['HT']=array('nom' =>$haiti,'points' =>5,'stabilite' =>-2, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale','caraibe'),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/haiti.jpg','miniflag'=>'images/drapeaux/miniflaghaiti.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>1 ,
	 'economie'=>'de marché','richesse'=> 0,
	'corruption'=>1, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

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

$_SESSION['DO']=array('nom' =>$dominique,'points' =>5,'stabilite' =>3, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale','caraibe'),
	'relusa' =>2, 'relurss' =>-3,'relautre' =>-2, 'regime'=>'dictature',
	'drapeau'=>'images/drapeaux/dominique.png','miniflag'=>'images/drapeaux/miniflagdominique.png','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>2 ,
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


	$_SESSION['BS']=array('nom' =>$bahamas,'points' =>5,'stabilite' =>3, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1,
 	'colonie'=>0, 'protectorat'=>1 , 'colonisateur'=>'GB',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique centrale','caraibe'),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/bahamas.jpg','miniflag'=>'images/drapeaux/miniflagbahamas.jpg','map'=>'', 'forcearmee'=>1,
	'forcearmeemax'=>2 ,
	 'economie'=>'de marché','richesse'=> 0,
	'corruption'=>1, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

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