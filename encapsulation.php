<?php
//class manusia

//class manusia{
    //prop
  //  public $nama;

    // method manusia
   // public function tampilkan_nama(){
   //     echo "Nama Saya Usus";
   // }
   // public function biodata(){
   //     echo $this->tampilkan_nama();
 //   }

//}

//$manusia = new manusia();

//echo $manusia->tampilkan_nama();

//class manusia

//class manusia{
    //menentukan property dengan private
    //private $nama = "malas ngoding";    
    
    //method public
    //private function tampilkan_nama(){
      //  return "Nama saya " .$this->nama;
    //}
    //public function output(){
     //   echo $this->tampilkan_nama();
   // }
    
    
//}
//instansiasi class manusia
//$manusia = new manusia();

//memanggil method public tampilkan_nama dari class manusia
//echo $manusia->output();


//class manusia

class manusia{
    //menentukan property dengan protected
    protected $nama = "malas ngoding";

    public function nama(){
        return "Nama Saya".$this->nama;
    }
    public function tampilkan_nama(){
        return $this->nama;
    }
}
$manusia = new manusia();
echo $manusia->tampilkan_nama(); 
?>