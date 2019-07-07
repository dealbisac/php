<html>
<head>
<title>Use of Function</title>
</head>
<body>
<?php
$a =5;
$b = 6;

function add( $a, $b){
    $c = $a+$b;
return $c;

    
}
$c=add($a,$b);
echo $c;

$msg1 = "Ram is hero";
$msg2 = "Shyam is hero";
$msg3 = "Manish is hero";
$msg4 = "Bijaya is hero";

function transformintohero($name, $place){
    echo $name." is hero of      kl asog[ioarg[oiqerg[ekgnq3     um,-e zx5".$place;
}

transformintohero("Sachina", "Baniyatar");
echo "<br>";
transformintohero("Prerana", "Gongabu");
?>
</body>
</html>