<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Penggajihan</title>
</head>
<body>
    <center>
    <img src="l.png" alt="local image">
    <h2>PENGGAJIHAN<br> GURU / KARYAWAN YAYASAN ASSALAAM</h2>
    </center>
    <table align=center>
        <form action="" method="POST">

            <tr>
                <td>No</td>
                <td></td>
                <td><input type="number" name="no"></td>
            </tr>

            <tr>
                <td>Nama</td>
                <td></td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td>Unit</td>
                <td></td>
                <td>
                    <select name = "unit">
                        <option value = "TK">TK</option>
                        <option value = "SD">SD</option>
                        <option value = "SMP">SMP</option>
                        <option value = "MTS">MTS</option>
                        <option value = "SMA">SMA</option>
                        <option value = "SMK">SMK</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Tanggal</td>
                <td></td>
                <td><input type="date" name="tanggal"></td>
            </tr>

            <tr>
                <td colspan=3 align=center><h3>Gaji</h3></td>
            </tr>

            <tr>
                <td>Jabatan</td>
                <td></td>
                <td>
                    <select name = "jabatan">
                        <option value = "Kepsek">Kepala Sekolah</option>
                        <option value = "Guru">Guru</option>
                        <option value = "Karyawan">Karyawan</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Lama Kerja</td>
                <td></td>
                <td><input type="number" name="lama"></td>
            </tr>

            <tr>
                <td>Status Kerja</td>
                <td></td>
                <td>
                    <select name = "status">
                        <option value = "Tetap">Pegawai Tetap</option>
                        <option value = "Kontrak">Pegawai Kontrak</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan=3 align=center><h3>Potongan</h3></td>
            </tr>

            <tr>
                <td>BPJS</td>
                <td></td>
                <td><input type="number" name="bpjs"></td>
            </tr>

            <tr>
                <td>Pinjaman</td>
                <td></td>
                <td><input type="number" name="pinjaman"></td>
            </tr>

            <tr>
                <td>Tabungan</td>
                <td></td>
                <td><input type="number" name="tabungan"></td>
            </tr>

            <tr>
                <td>Lainnya</td>
                <td></td>
                <td><input type="number" name="lainnya"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="Proses"></td>
            </tr>

        </form>
    </table>
</body>
</html>

<?php 

if (isset($_POST['proses'])){
    $no = @$_POST['no'];
    $nama = @$_POST['nama'];
    $unit = @$_POST['unit'];
    $tanggal = @$_POST['tanggal'];
    $jabatan = @$_POST['jabatan'];
    $lama = @$_POST['lama'];
    $status = @$_POST['status'];
    $bpjs = @$_POST['bpjs'];
    $pinjaman = @$_POST['pinjaman'];
    $tabungan = @$_POST['tabungan'];
    $lainnya = @$_POST['lainnya'];

    class penggajihan{

        public $totalgaji;
        public $potongan;

        public function data($no,$nama,$unit,$tanggal){
            $this->no = $no;
            $this->nama = $nama;
            $this->unit = $unit;
            $this->tanggal = $tanggal;
        }

        public function tampilkan(){
            echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
            echo "<h2><i><b><center>Struk Gaji Guru/Karyawan Yayasan Assalaam</center></h2></i></b><br>";
            echo "----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br>";
            //echo "-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
            echo 
            "
            <tr>
                <td colspan=3><h3>Data Diri</h3></td>
            </tr>
            ";
            echo 
            "
            <tr>
                <td>No</td>
                <td>:</td>
                <td>". $this->no ."</td>
            </tr>
            <br>
            ";
            echo 
            "
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>". $this->nama ."</td>
            </tr>
            <br>
            ";
            echo 
            "
            <tr>
                <td>Unit</td>
                <td>:</td>
                <td>". $this->unit ."</td>
            </tr>
            <br>
            ";
            echo 
            "
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>". $this->tanggal ."</td>
            </tr>
            <br>
            ";
            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            <br>
            ";
        }
    }

    class gaji extends penggajihan{

        public function tampunggaji($jabatan,$lama,$status){
            
            $this->jabatan = $jabatan;
            $this->lama = $lama;
            $this->status = $status;
        }

        public function tampung_data($no,$nama,$unit,$tanggal){
            echo $this->data($no,$nama,$unit,$tanggal);
            echo $this->tampilkan();
        }

        public function tampilkangaji(){

            if ($this->jabatan == "Kepsek"){
                $jabatan = 5000000;
            }
            else if ($this->jabatan == "Guru"){
                $jabatan = 3000000;
            }
            else if ($this->jabatan == "Karyawan"){
                $jabatan = 1500000;
            }

            if ($this->lama >= 0 && $this->lama < 6){
                $lama = 250000;
            }
            else if ($this->lama > 5 && $this->lama < 11){
                $lama = 500000;
            }
            else if ($this->lama > 10){
                $lama = 1000000;
            }

            if ($this->status == "Tetap"){
                $status = 500000;
            }
            else if ($this->status == "Kontrak"){
                $status = 0;
            }

            $this->totalgaji = $jabatan + $lama + $status;

            echo 
            "
            <tr>
                <td colspan=3><h3>Gaji</h3></td>
            </tr>
            <br>
            ";
            
            echo 
            "
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>". $this->jabatan ."</td>
            </tr>
            <br>
            ";
            
            echo 
            "
            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td>$jabatan</td>
            </tr>
            <br>
            ";
            
            echo 
            "
            <tr>
                <td>Lama Kerja</td>
                <td>:</td>
                <td>". $this->lama ."</td>
            </tr>
            <br>
            ";
            
            echo 
            "
            <tr>
                <td>Bonus Lama Kerja</td>
                <td>:</td>
                <td>$lama</td>
            </tr>
            <br>
            ";
            
            echo 
            "
            <tr>
                <td>Status Kerja</td>
                <td>:</td>
                <td>". $this->status ."</td>
            </tr>
            <br>
            ";

            echo 
            "
            <tr>
                <td>Tunjangan Status Kerja</td>
                <td>:</td>
                <td>$status</td>
            </tr>
            <br>
            ";

            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            <br>
            ";

            echo 
            "
            <tr>
                <td><b><i>Total Gaji</i></b></td>
                <td><b><i>:</i></h3></b>
                <td><b><i>Rp.". $this->totalgaji ."</i></b></td>
            </tr>
            <br>
            ";
            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            <br>
            ";
        }
    }

    class potongan extends gaji{
        public function tampung_potongan($bpjs,$pinjaman,$tabungan,$lainnya){
            
            $this->bpjs = $bpjs;
            $this->pinjaman = $pinjaman;
            $this->tabungan = $tabungan;
            $this->lainnya = $lainnya;
        }

        public function tampung_gaji($jabatan,$lama,$status){
            echo $this->tampunggaji($jabatan,$lama,$status);
            echo $this->tampilkangaji();
        }

        public function tampilkan_potongan(){

            $this->totalpotongan = $this->bpjs + $this->pinjaman + $this->tabungan + $this->lainnya;

            echo 
            "
            <tr>
                <td colspan=3><h3>Potongan</h3></td>
            </tr>
            <br>
            ";

            echo 
            "
            <tr>
                <td>BPJS</td>
                <td>:</td>
                <td>". $this->bpjs ."</td>
            </tr>
            <br>
            ";

            echo 
            "
            <tr>
                <td>Pinjaman</td>
                <td>:</td>
                <td>". $this->pinjaman ."</td>
            </tr>
            <br>
            ";

            echo 
            "
            <tr>
                <td>Tabungan</td>
                <td>:</td>
                <td>". $this->tabungan ."</td>
            </tr>
            <br>
            ";

            echo 
            "
            <tr>
                <td>Lainnya</td>
                <td>:</td>
                <td>". $this->lainnya ."</td>
            </tr>
            <br>
            ";

            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            <br>
            ";

            echo 
            "
            <tr>
                <td><b><i>Total Potongan</i></b></td>
                <td><b><i>:</i></h3></b>
                <td><b><i> Rp.". $this->totalpotongan ."</i></b></td>
            </tr>
            <br>
            ";
            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            <br>
            ";
        }

        public function sisa(){
            $sisa = $this->totalgaji - $this->totalpotongan;
            echo 
            "
            <tr>
                <td><h4><i>Gaji Yang Diterima</i></h4></td>
                <td><h4><i>:</i></h4></td>
                <td><h4><i>Rp.$sisa</i></h4></td>
            </tr>
            ";

            echo 
            "
            <tr>
                <td colspan=3><hr></td>
            </tr>
            ";
        }
    }

    $out = new potongan();
    $out->tampung_data($no,$nama,$unit,$tanggal);
    $out->tampung_gaji($jabatan,$lama,$status);
    $out->tampung_potongan($bpjs,$pinjaman,$tabungan,$lainnya);
    $out->tampilkan_potongan();
    $out->sisa();
}

?>
</table>