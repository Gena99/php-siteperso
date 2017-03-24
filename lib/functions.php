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
