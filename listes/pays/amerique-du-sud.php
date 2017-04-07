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



$_SESSION['AR']=array('nom' =>$argentine,'points' =>15,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>1,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>-3, 'relurss' =>-3,'relautre' =>-2, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/argentine.jpg','miniflag'=>'images/drapeaux/miniflagargentine.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>20 ,
	 'economie'=>'de marché','richesse'=> 2,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>1, 'oppositionurss'=>1,'oppositionchine'=>0,

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


$_SESSION['BO']=array('nom' =>$bolivie,'points' =>5,'stabilite' =>-1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagneux','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>1, 'relurss' =>-1,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/bolivie.jpg','miniflag'=>'images/drapeaux/miniflagbolivie.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>15 ,
	 'economie'=>'de marché','richesse'=> 1,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>1, 'oppositionurss'=>1,'oppositionchine'=>0,

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


$_SESSION['BR']=array('nom' =>$bresil,'points' =>35,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>2, 'relurss' =>-4,'relautre' =>0, 'regime'=>'dictature',
	'drapeau'=>'images/drapeaux/bresil.jpg','miniflag'=>'images/drapeaux/miniflagbresil.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>30 ,
	 'economie'=>'de marché','richesse'=> 2,
	'corruption'=>1, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>1,'oppositionchine'=>0,

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


$_SESSION['CL']=array('nom' =>$chili,'points' =>15,'stabilite' =>0, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagneux','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>0, 'relurss' =>0,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/chili.jpg','miniflag'=>'images/drapeaux/miniflagchili.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>20 ,
	 'economie'=>'de marché','richesse'=> 1,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>1,'oppositionchine'=>0,

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


$_SESSION['CO']=array('nom' =>$colombie,'points' =>15,'stabilite' =>-2, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagneux','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>1, 'relurss' =>-1,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/colombie.jpg','miniflag'=>'images/drapeaux/miniflagcolombie.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>20 ,
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


$_SESSION['PY']=array('nom' =>$paraguay,'points' =>5,'stabilite' =>-3, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>4, 'relurss' =>-2,'relautre' =>0, 'regime'=>'dictature',
	'drapeau'=>'images/drapeaux/paraguay.jpg','miniflag'=>'images/drapeaux/miniflagparaguay.jpg','map'=>'', 'forcearmee'=>0,
	'forcearmeemax'=>15 ,
	 'economie'=>'de marché','richesse'=> 0,
	'corruption'=>1, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array("colorados" , "bleus"),

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

$_SESSION['PE']=array('nom' =>$perou,'points' =>15,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagneux','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>1, 'relurss' =>0,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/perou.jpg','miniflag'=>'images/drapeaux/miniflagperou.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>20 ,
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


$_SESSION['UY']=array('nom' =>$uruguay,'points' =>5,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'normal','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>0, 'relurss' =>0,'relautre' =>0, 'regime'=>'dictature',
	'drapeau'=>'images/drapeaux/uruguay.jpg','miniflag'=>'images/drapeaux/miniflaguruguay.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>15 ,
	 'economie'=>'de marché','richesse'=> 1,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>1, 'oppositionurss'=>1,'oppositionchine'=>0,

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


$_SESSION['VE']=array('nom' =>$venezuela,'points' =>15,'stabilite' =>0, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>2, 'relurss' =>-1,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/venezuela.jpg','miniflag'=>'images/drapeaux/miniflagvenezuela.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>20 ,
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


$_SESSION['EC']=array('nom' =>$equateur,'points' =>5,'stabilite' =>1, 'sphereurss'=>0, 'sphereusa'=>1,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>0, 'protectorat'=>0 , 'colonisateur'=>'',
	'terrain' =>'montagneux','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>0, 'relurss' =>0,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/equateur.jpg','miniflag'=>'images/drapeaux/miniflagequateur.jpg','map'=>'', 'forcearmee'=>5,
	'forcearmeemax'=>15 ,
	 'economie'=>'de marché','richesse'=> 1,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>1, 'oppositionurss'=>1,'oppositionchine'=>0,

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


$_SESSION['SR']=array('nom' =>$suriname,'points' =>5,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>1, 'protectorat'=>0 , 'colonisateur'=>'Pays-Bas',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>0, 'relurss' =>0,'relautre' =>0, 'regime'=>'monarchie constitutionelle',
	'drapeau'=>'images/drapeaux/suriname.jpg','miniflag'=>'images/drapeaux/miniflagsuriname.jpg','map'=>'', 'forcearmee'=>0,
	'forcearmeemax'=>15 ,
	 'economie'=>'de marché','richesse'=> 1,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>5,

	'troupesalliees'=>array("Pays-bas"),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );



$_SESSION['GY']=array('nom' =>$guyana,'points' =>5,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>1, 'protectorat'=>0 , 'colonisateur'=>'Royaumes-Unis',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>0, 'relurss' =>0,'relautre' =>0, 'regime'=>'monarchie constitutionelle',
	'drapeau'=>'images/drapeaux/guyana.jpg','miniflag'=>'images/drapeaux/miniflagguyana.jpg','map'=>'', 'forcearmee'=>0,
	'forcearmeemax'=>15 ,
	 'economie'=>'de marché','richesse'=> 1,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>5,

	'troupesalliees'=>array("Royaumes-Unis"),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );

$_SESSION['GYF']=array('nom' =>$guyane,'points' =>5,'stabilite' =>2, 'sphereurss'=>0, 'sphereusa'=>0,
 	'spherechine'=>0, 'finlandisation'=>0, 'exist'=>1, 'nonalign'=>0,
 	'colonie'=>1, 'protectorat'=>0 , 'colonisateur'=>'France',
	'terrain' =>'jungle','bombe'=>0, 
	'geographie'=> array('amérique', 'amérique sud' ),
	'relusa' =>0, 'relurss' =>0,'relautre' =>0, 'regime'=>'république',
	'drapeau'=>'images/drapeaux/guyane.jpg','miniflag'=>'images/drapeaux/miniflagguyane.jpg','map'=>'', 'forcearmee'=>0,
	'forcearmeemax'=>15 ,
	 'economie'=>'de marché','richesse'=> 1,
	'corruption'=>0, 'paranoia'=>0, 'oppositionusa'=>0, 'oppositionurss'=>0 ,'oppositionchine'=>0,

	'listguerrilla'=>array(),

	'baseusa'=>0, 'instructeurusa'=>0,'accorddefusa'=>0,  'accordecousa'=>0, 
	'missilesusa'=>0, 'troupesallieesusa'=>0,

	'baseurss'=>0, 'instructeururss'=>0,'accorddefurss'=>0, 'accordecourss'=>0, 
	'missilesurss'=>0,'troupesallieesurss'=>0,

	'baseautre'=>0, 'instructeurautre'=>0,'accorddefautre'=>0, 'accordecoautre'=>0, 
	'missilesautre'=>0,'troupesallieesusa'=>0,'troupesallieesautre'=>5,

	'troupesalliees'=>array("France"),'corpexpedition' => array(), 'guerre'=>array(),

	'telex'=>array(),

	'coordonnees'=>""

	 );



?>