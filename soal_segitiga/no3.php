<?php
for( $a=6;$a>0;$a--) {
	for($b=1; $b<=$a; $b++){
		echo "&nbsp ";
	}
	for($c=6;$c>$a;$c--){
		echo "*";
	}
	echo "<br/> ";
}