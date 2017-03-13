<?php 

class Calculator{

	public $f_number;
	public $s_number;

	function __construct($f_number, $s_number){


		$this->f_number= $f_number;
		$this->s_number=$s_number;



	}


					public function dijeljenje(){

						if ($this->s_number==0 && is_string($this->s_number)) {
							echo "GREŠKA: nepravilan unos!!!"."<br>";
						}
						
						else {
							echo round($this->f_number/$this->s_number, 2);
						}
						}


								public function mnozenje(){

									if (is_numeric($this->f_number) && is_numeric($this->s_number)) {
										 echo $this->f_number*$this->s_number;
									}
									else {
										echo "GREŠKA: molimo unos cifre!";
									}


								}

								public function sabiranje(){

									if (is_numeric($this->f_number) && is_numeric($this->s_number)) {
										 echo $this->f_number+$this->s_number;
									}
									else {
										echo "GREŠKA: molimo unos cifre!";
									}

								}

								public function oduzimanje(){

									if (is_numeric($this->f_number) && is_numeric($this->s_number)) {
										 echo $this->f_number-$this->s_number;
									}
									else {
										echo "GREŠKA: molimo unos cifre!";
									}


								}

}




 ?>