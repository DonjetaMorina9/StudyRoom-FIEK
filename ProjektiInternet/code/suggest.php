<?php

$people[]="Donjeta";
$people[]="Elma";
$people[]="Diellza";
$people[]="Blinera";
$people[]="Adisa";
$people[]="Erza";
$people[]="Blerand";
$people[]="Agron";
$people[]="Alban";
$people[]="Anesa";
$people[]="Bleon";
$people[]="Jon";
$people[]="Besart";
$people[]="Buna";
$people[]="Blini";
$people[]="Loris";
$people[]="Arta";
$people[]="Vanesa";
$people[]="Vlera";
$people[]="Qendresa";
$people[]="Anite";
$people[]="Gresa";
$people[]="Riga";
$people[]="Zanita";
$people[]="Orkida";


$q = $_REQUEST['q'];

$suggestion = "";


if($q !== "" ){
        if($q!==""){
            $q=strtolower($q);
            $len = strlen($q);
            foreach($people as $person){
                if(stristr($q, substr($person,0,$len))){
                    if($suggestion == ""){
                        $suggestion = $person;
                    }else{
                        $suggestion .=", $person";
                    }
                }
            }
        }
    }








?>