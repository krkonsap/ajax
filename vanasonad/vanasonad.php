<?php
// vanasõnade array
// vanasõnad pärinevad: https://et.wikiquote.org/wiki/Eesti_vanas%C3%B5nad
$a[] = "Aasta pärast kiida noorikut, nädala pärast hoost";
$a[] = "Aasta teeb mehe vanaks, kaks lapse kavalaks";
$a[] = "Aastad pole vennaksed";
$a[] = "Abi aiast, vari võrgust";
$a[] = "Aeg aitab arstida";
$a[] = "Aeg aitab konna mättäle ja kehva kannikale";
$a[] = "Aeg annab head nõu";


// q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $sona) {
        if (stristr($q, substr($sona, 0, $len))) {
            if ($hint === "") {
                $hint = $sona;
            } else {
                $hint .= ", $sona";
            }
        }
    }
}

// no suggestion output
echo $hint === "" ? "paraku soovitus puudub" : $hint;
?>