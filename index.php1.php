<?php

class motor {
	public $jumlah_cc, $merek_motor, $kenalpot;
}
	
	function model_kenalpot(){
		return "racing";
}

class ninja extends motor {
	function model_kenalpot(){
		return "racing";
	}
}

class ktm_duke extends motor {
	function model_kenalpot(){
		return "sstandar";
	}
}

class harley_davidson extends motor {
	function model_kenalpot(){
		return "standar";
	}
}

class ducati extends motor {
	function model_kenalpot(){
		return "racing";
	}
}

$ninja = new ninja;
$ninja->jumlah_cc = 1000;
echo "ninja Adalah motor keluaran yamaha <br>";
echo "mempunyai besar cc dari 150 s/d 1000cc : ".$ninja->jumlah_cc."<br>";
     $ninja->merek_motor = "yamaha";
echo $ninja->merek_motor."<br>";
     $ninja->kenalpot = "akraprovic";
echo "kenalpot : ".$ninja->model_kenalpot()."<br>";

echo "<hr>";


$ktm_duke = new ktm_duke;
$ktm_duke->jumlah_cc = 750;
echo "ktm duke adalah motor naked <br>";
echo "mempunyai besaran cc hingga 1000 : ".$ktm_duke->jumlah_cc."<br>";
     $ktm_duke->merek_motor = "ktm";
echo $ktm_duke->merek_motor."<br>";
     $ktm_duke->kenalpot = "sc project";
echo "kenalpot : ".$ninja->model_kenalpot();

echo "<hr>";


$harley_davidson = new harley_davidson;
$zya->jumlah_cc = 2000;
echo "harley_davidson adalah motor yang mempunyai cc yang sangat besar <br>";
echo "mempunyai cc hingga 10000 : ".$harley_davidson->jumlah_kaki."<br>";
     $harley_davidson->merek_motor = "harley";
echo $harley_davidson->merek_motor."<br>";
     $harley_davidson->kenalpot = "no merk";
echo "kenalpot : ".$zya->model_kenalpot();

echo "<hr>";


$ducati = new ducati;
$ducati->jumlah_cc = 1000;
echo "ducati adalah motor eropa <br>";
echo "mempunyai cc hingga 1000 : ".$ducati->jumlah_cc."<br>";
     $ducati->merek_motor = "ducati";
echo $ducati->merek_motor."<br>";
     $masha->kenalpot = "akraprovic";
echo "kenlapot : ".$masha->model_kenalpot();

echo "<hr>";