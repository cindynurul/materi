<?php
class manusia{
	public $teman ="Cindy";
 
 	// method pada class manusia
	protected function berinama(){
		echo "Nama Saya Dinda <br>";
	}
	
}

// class turunan 
class teman extends manusia{

 
 	// method pada class teman
	public function berinamateman(){
    
		echo " Nama Teman Saya ".$this->teman;
	}
}

// instansiasi class teman
$malasngoding = new teman;

// menampilkan isi property
;
$malasngoding->berinamateman();
 
?>