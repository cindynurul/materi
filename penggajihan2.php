<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>
                <h1>Soal no 4</h1>
            </legend>

            <table>
                <tr>
                    <td>
                        <label for="nama">
                            Nama Bendahara
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="nama" id="nama" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="nama">
                            Nama Pekerja
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="nama" id="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Masukan Jenis Kelamin
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <label for="l">
                            <input type="radio" name="jk" id="l" value="Laki-laki" >
                            Laki-laki
                        </label>

                        <label for="p">
                            <input type="radio" name="jk" id="p" value="Perempuan" >
                            Perempuan
                        </label>
                    </td>
                </tr>

                <td>Tanggal Gaji  </td>
            <td>: </td>
            <td><input type ='date' name = 'tanggal'> </td>
            </tr>
                <tr>
                    <td>
                       Jabatan
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="jabatan" required>
                            <option value="">Pilih Jawaban</option>
                            <option value="direktur">Direktur</option>
                            <option value="manager">Manager</option>
                            <option value="karyawan">Karyawan</option>
                            <option value="ob">OB</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        Pendidikan Terakhir
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="pendidikan" required>
                            <option value="">Pilih Pendidikan</option>
                            <option value="sd"> SD</option>
                            <option value="smp">Smp</option>
                            <option value="sma">Sma</option>
                            <option value="S1"> s1</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="jamkerja">
                            Lembur
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="number" name="jamKerja" id="jamkerja" value="173" min="173" required>
                    </td>
                </tr>

            </table>

            <button type="submit" name="hitung">
                Hitung
            </button>

        </fieldset>

    </form>


</body>

</html>

<?php 
    if(isset($_POST['hitung'])){
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $jabatan = $_POST['jabatan'];
        $pendidikan = $_POST['pendidikan'];
        $jamKerja = $_POST['jamKerja'];
        $jamLembur = 0;
        $gajiLembur = 0;
        $totalPajak = 0;

        //menghitung jam lembur
        $jamLembur = $jamKerja-173;
        
        //menambahkan jam lebur setiap jam nya
        // for($i = 0; $i<=$jamLembur; $i++){
             $gajiLembur = $jamLembur*20000;
        // }

        //menentukan gaji dan tunjangan berdasarkan golongan
        if($direktur == sd){
            $gajiPokok = 1500000;
            $tunjangan = 150000;
        }else if($manager == smp){
            $gajiPokok = 2000000;
            $tunjangan = 200000;
        }else if($karyawan == sma){
            $gajiPokok = 2500000;
            $tunjangan = 250000;
        }else if($ob == s1){
            $gajiPokok = 3000000;
            $tunjangan = 300000;
        }else{
            echo "Anda bukan golongan kami";
        }

        //menghitung pajak gaji pokok dan lembur
        $pajakGajiPokok = $gajiPokok * 0.05;
        $pajakGajiLembur = $gajiLembur * 0.05;
        
        //menghitung total Pajak
        $totalPajak = $pajakGajiLembur+$pajakGajiPokok;

        //mengitung total gaji
        $totalGaji = $gajiPokok+$gajiLembur-$totalPajak;

        //menampilkan
        echo "Nama : <b>$nama</b> <br>
        Jenis Kelamin : <b>$jk </b> <br>
        Agama : <b>$agama</b> <br>
        Gaji Pokok : <b>$gajiPokok</b> <br>
        Gaji Lembur : <b>$gajiLembur</b> <br>
        Pajak Gaji Pokok : <b>$pajakGajiPokok</b>  <br>
        Pajak Gaji Lembur : <b>$pajakGajiLembur</b> <br>
        Total Pajak : <b>$totalPajak</b> <br>
        Tunjangan Pengabdian: <b>$tunjangan</b> <br>
        Gaji Yang Diterima: <b>$totalGaji</b><br>";
    }
    ?>