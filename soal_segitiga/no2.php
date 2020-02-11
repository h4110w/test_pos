<?php
$jumlah=4;

for( $a=5;$a>0;$a--) {
	for($b=1; $b<=$a; $b++){
		echo "&nbsp ";
	}
	for($c=5;$c>$a;$c--){
		echo "*";
	}
	echo "<br/> ";
}
for($a=1; $a<=$jumlah; $a++){
    for($b=-2; $b<=$a; $b++){
        echo '&nbsp';
    }
    for($c=1;$c>$a;$c--){
		echo "*";
	}
    for($c=3; $c>=$a; $c-=1){
        echo '*';
    }
    echo "<br/>";
}