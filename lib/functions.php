<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(empty($_GET)){
		include __DIR__.'/../pages/home.php';
	}
	if(isset($_GET['bio'])){
		include __DIR__.'/../pages/bio.php';
	}
	if(isset($_GET['home'])){
		include __DIR__.'/../pages/home.php';
	}
	if(isset($_GET['contact'])){
		include __DIR__.'/../pages/contact.php';
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}
function getUserData(){
	$utilisateurJson = file_get_contents('../data/user.json');
	$utilisateur = json_decode ($utilisateurJson, true);
	//var_dump($utilisateur);
	echo('Nom : '.$utilisateur['name'].'<br />');
	echo('Prénom : '.$utilisateur['first_name'].'<br />');
	echo('Poste : '.$utilisateur['occupation'].'<br />');
	echo('Expériences : '.'<br />');
	foreach ($utilisateur['experiences'] as $indexTableau => $experience) {
		//var_dump($experiences);
		echo($experience['year'].' : '.$experience['company'].'<br />');
	}
}
function writeFormData($form){
	$formJson = json_encode ($form);
	file_put_contents('../data/last_message.json', $formJson);
	
}
