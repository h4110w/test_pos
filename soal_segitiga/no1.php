<?php
for( $a=10;$a>0;$a--) {
	for($b=1; $b<=$a; $b++){
		echo "&nbsp";
	}
	for($c=10;$c>$a;$c--){
		echo "*";
	}
	echo "<br/> ";
}
