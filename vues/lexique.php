<?php


if ($_SESSION[$pays]['regime']=='monarchie constitutionnelle') {
	$nomregime=$monarchieconstitutionnelle;
} 
elseif ($_SESSION[$pays]['regime']=='république') 
{
 	$nomregime=$republique;
} 
elseif ($_SESSION[$pays]['regime']=='dictature') 
{
 	$nomregime=$dictature;
} 
elseif ($_SESSION[$pays]['regime']=='république populaire') 
{
 	$nomregime=$republiquepopulaire;
} 
elseif ($_SESSION[$pays]['regime']=='monarchie') 
{
 	$nomregime=$monarchie;
} 


if ($_SESSION[$pays]['economie']=='de marché') {
	$nomeconomie=$demarche;
} 
elseif ($_SESSION[$pays]['economie']=='collectivisée' || $_SESSION[$pays]['economie']=='collectiviste' ) 
{
 	$nomeconomie=$collectivisee;
} 




if ($_SESSION[$pays]['stabilite']==3) {
	$nomstabilite=$exceptionnelle;
} 
elseif ($_SESSION[$pays]['stabilite']==2) 
{
 	$nomstabilite=$tresforte;
} 
elseif ($_SESSION[$pays]['stabilite']==1) 
{
 	$nomstabilite=$forte;
} 
elseif ($_SESSION[$pays]['stabilite']==0) 
{
 	$nomstabilite=$moyenne;
} 
elseif ($_SESSION[$pays]['stabilite']==-1) 
{
 	$nomstabilite=$faible;
} 
elseif ($_SESSION[$pays]['stabilite']==-2) 
{
 	$nomstabilite=$tresfaible;
} 
elseif ($_SESSION[$pays]['stabilite']==-3) 
{
 	$nomstabilite=$chaos;
} 



if ($_SESSION[$pays]['richesse']==3) {
	$nomrichesse=$riche;
} 
elseif ($_SESSION[$pays]['richesse']==2) 
{
 	$nomrichesse=$moyenne;
} 
elseif ($_SESSION[$pays]['richesse']==1) 
{
 	$nomrichesse=$endeveloppement;
} 
elseif ($_SESSION[$pays]['richesse']==0) 
{
 	$nomrichesse=$tiersmonde;
} 


if ($_SESSION[$pays]['terrain']=="normal") {
	$nomterrain=$normal;
} 
elseif ($_SESSION[$pays]['terrain']=="montagne" || $_SESSION[$pays]['terrain']=="montagneux") 
{
 	$nomterrain=$montagne;
} 
elseif ($_SESSION[$pays]['terrain']=="jungle") 
{
 	$nomterrain=$jungle;
} 



?>