<?php
include_once ("commentaires.php");
include_once ("commentairesC.php");
include_once "BlogC.php";
include_once "Blog.php";
$Blog1C=new BlogC();
$listeBlog=$Blog1C->recupererBlog($_GET["numero"]);
foreach($listeBlog as $Brow){}
$commentaire1C=new commentaireC();
$listecommentaire=$commentaire1C->recuperercommentaire($_GET["numero"]);
$lundi=0;
$mardi=0;
$mercredi=0;
$jeudi=0;
$vendredi=0;
$samedi=0;
$dimanche=0;
foreach($listecommentaire as $row){
	$dateJ=date("D",strtotime($row['dates']));
	switch ($dateJ) {
	case 'Mon':
		$lundi++;
		break;
	case 'Tue':
		$mardi++;
		break;
	case 'Wed':
		$mercredi++;
		break;
	case 'Thu':
		$jeudi++;
		break;
	case 'Fri':
		$vendredi++;
		break;
	case 'Sat':
		$samedi++;
		break;
	case 'Sun':
		$dimanche++;
		break;
}
}
?>