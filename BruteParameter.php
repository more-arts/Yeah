<?php 

$c = "abcdefghijklmnopqrstuvwxyz"; //charset
$l = 4; // jumlah

for($t='',$cl=strlen($c),$s=array_fill(0,$l,0),$i=pow($cl,$l);$a=0,$i--;) {
    for($t&&$t.="\n";$a<$l;$t.=$c[$s[$a++]]);
    for(;$a--&&++$s[$a]==$cl;$s[$a]=0);
};
$f = fopen("list.txt", "w") or die("Unable to open file!");
fwrite($f, $t);
fclose($f);

echo "Berhasil Membuat\n";
