<?php 
	namespace App\Repository;

	class Jogfol{
		public function test(){
			$a=100;
			$b=20;
			$c=$a+$b;
			echo $c;
		}

		public function taxCalculate(){
			$a = 100;
			$b = $a/10;
			dd("Tax calculate result is: ".$b);
		}
	}

?>