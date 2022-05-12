<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body>


    <h3>Nama: Dikdik Muhamad Sadikin</h3>
    <h3>Hari: Jum'at</h3>
    <h3>Tanggal: 29 April 2022</h3>

    <hr>

   
    <p>
    #1. Buatlah fungsi sebagai berikut:
    Apabila terdapat int = 4, maka outputnya 24 (proesesnya: 4*3*2*1), Apabila terdapat int = 8, maka outpunya 40320 (prosesnya: 8*7*6*5*4*3*2*1) 
    </p>
    <p>
 
    </p>



    <?php

     function factorial($n) {

       if ($n <=1) {
           return 1;
       }
       else{
           return $n*factorial($n-1);  
       }
        
     }

     

     echo "1. Hasil factorial dari 4 adalah ". factorial(4) . "<br>";
     echo "2. Hasil factorial dari 8 adalah ". factorial(8);

    
    ?>

    <hr>

    <p>#2. Buatlah fungsi untuk reverse sebuah string
Apabila input = “abcde”, maka outputnya = “edcba”
Dilarang menggunakan function reverse, buatlah logika sendiri</p>

<br>


<?php
    $kalimat = 'abcde';
    $n = strlen($kalimat);

    for ($i = 0; $i <= floor(($n-1)/2); $i++ )
    {
        $temp = $kalimat[$i];
        $kalimat[$i] = $kalimat[$n-1-$i];
        $kalimat[$n-1-$i] = $temp;
    }

    echo $kalimat;
?>

 <p>
 #3. Buatlah fungsi untuk menampilkan jumlah digit angka tergantung dimana posisi atau tempat dari angka dalam sebuah string “9.86-A5.321”! 
Contoh: printDigitValue(‘9.86-A5.321’);
Hasil :
9865321
9000000
800000
60000
5000
300
20
1
 </p>

<script>
    let inputString = "9.86-A5.321";

let reg = /\d+/g;

let rowNum = inputString.match(reg);

var num = [];

for(var i = 0; i < rowNum.length; i++)
{
    
    num += rowNum[i];
}

// console.log(num);


const placeValue = (num, res = [], factor = 1) => {

   
    if(num){
      
    const val = (num % 10) * factor;
    
    res.unshift(val);

      return placeValue(Math.floor(num / 10), res, factor * 10);
   };

   return res;


};

console.log(placeValue(num));
        
</script>


<p>
    #4. Ketik kode untuk swap 2 integer variables tanpa VARIABLE TAMBAHAN 
Contoh : let a = 3, let b = 7 => hasilnya a = 7, b = 3
</p>
        <?php
        
        
        // Koreksi
        echo $a=3;
        echo $b=7;
            
        //Proses swap
        $a=$a + $b;
        $b=$a-$b;
        $a= $a+$b;
        
        //setelah swap
        echo $a;
        echo $b;
        
        
        
        ?>
        




<p>
    #5. Buatlah fungsi sebagai berikut :
int : 4, maka outputnya adalah : empat
int : 20, maka outputnya adalah : dua puluh
int : 39, maka outputnya adalah : tiga puluh sembilan
int : 104, maka outputnya adalah : silahkan masukkan bilangan 1-100
</p>

<?php

function terbilang ($angka) {
    $angka = abs($angka);
    $baca  = array('', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas');
    $terbilang = '';

    if ($angka < 12) { // 0 - 11
        $terbilang = ' ' . $baca[$angka];
    } elseif ($angka < 20) { // 12 - 19
        $terbilang = terbilang($angka -10) . ' belas';
    } elseif ($angka < 100) { // 20 - 99
        $terbilang = terbilang($angka / 10) . ' puluh' . terbilang($angka % 10);
    } elseif ($angka < 104) { // 100 - 199
        $terbilang = ' seratus' . terbilang($angka -100);
    }else{
        $terbilang = ' silahkan masukkan bilangan 1-100';


    }

    return $terbilang;
}

$angka = 0;

echo "hasil ". $angka. " adalah". terbilang(200);
?>
       

<p>#6 Apabila terdapat sebuah data : 
array data =  [1,4,7,9,12], 
int low = 2,
int high = 15,
maka akan menghasilkan ouput [4,7,9,12]</p>


 <script>
var data = [1,4,7,9,12,14];

var panjang = data.length;

var low = 2;
var high = 15;

// console.log(data);
// console.log(panjang);

const minMax=function(min, max, arr, val=[]) {

   
// Mencari nilai Min dan Max
    for(var i = 0; i <= panjang; i++){
        
        if(data[i] == low) {
            min = data[i];
        }else if(data[i] < low){
            min = data[i+1];
        }

        for(var j = min; j < panjang; j++){
            if(data[i] == high) {
                
                max = data[i];
            }else if(data[i] < high){
                max = data[i];
            }
        }
    }


// Menguraikan array berdasarkan nilai min dan max
// dan minginputnya kedalam variabel val
    for(h=0; h < panjang ; h++) {
  
        if(data[h] >= min && data[h] <= max) {

            val.push(data[h]);
            
        }

        
    }

    
    return val;
 
}

console.log(minMax(2,15,data));
                                           
</script>
        
        #7. Dari soal nomor 6, buatlah juga untuk menghasilkan output total ada berapa angka
yg termasuk dari bagian low dan high
array data = [1,4,7,9,12],
int low = 2,
int high = 15,
maka akan menghasilkan output = 4
        
        
         <script>
            var data = [1,4,7,9,12,14];

            var panjang = data.length;

            var low = 2;
            var high = 15;

            // console.log(data);
            // console.log(panjang);

            const minMax=function(min, max, arr, val=[]) {


            // Mencari nilai Min dan Max
                for(var i = 0; i <= panjang; i++){

                    if(data[i] == low) {
                        min = data[i];
                    }else if(data[i] < low){
                        min = data[i+1];
                    }

                    for(var j = min; j < panjang; j++){
                        if(data[i] == high) {

                            max = data[i];
                        }else if(data[i] < high){
                            max = data[i];
                        }
                    }
                }


            // Menguraikan array berdasarkan nilai min dan max
            // dan minginputnya kedalam variabel val
                for(h=0; h < panjang ; h++) {

                    if(data[h] >= min && data[h] <= max) {

                        val.push(data[h]);

                    }


                }

            //tambahan length untuk menghitung isi array
                return val.length;

            }

            console.log(minMax(2,15,data));
            
        
        </script>        

        
        
      #8.
        Apabila terdapat int = 15, maka akan mencetak output berikut :
        1
        2
        Edu
        4
        Work
        6
        7
        8
        Edu
        10
        11
        Edu
        13
        14
        EduWork

        keterangan : string edu untuk kelipatan 3, string work untuk kelipatan 5, string eduwork untuk kelipatan 3 dan 5
        <?php
        function eduwork($angka)
        {
            // Jika angka kelipatan 3, tampilkan Edu
            if ($angka % 3 == 0) {
                echo "Edu\n";
            // Jika angka kelipatan 5, tampilkan Work
            } elseif ($angka % 5 == 0) {
                echo "Work\n";
            // Jika bukan kelipatan 3 atau 5, tampilkan angka sebenarnya
            } else {
                echo $angka . "\n";
            }
        }
        ?>
      #9. Buatlah fungsi untuk menentukan bilangan terkecil dan terbesar dari sebuah array
            Contoh : array [4,2,6,88,3,11]
            Maka outputnya adalah low : 2, high : 88
            dilarang menggunakan built in function
        
         <h4>Mencari Nilai Max dan Min</h4>
    <?php 
      $nilaiArray = [1,4,7,9,12];
      for($i = 1; $i <= count($nilaiArray); $i++){
          // untuk hasil sisa bagi 2
          if($i % 2 === 0) { 
              echo ' '.$i ;
              //untuk push nilai ke array kosong
              array_push($nilaiArray, $i);  
          }
      };
      echo "<br>";
      $nilMax = 0;
      $nilMin = 99999;

      // melakukan perulangan pada array menggunakan foreach
      foreach ($nilaiArray as $nilArr) {
        if($nilArr > $nilMax) {
            $nilMax = $nilArr;
        }

        if($nilArr < $nilMin) {
            $nilMin = $nilArr;
        }
    }

    echo 'nilai terbesar adalah '.$nilMax;
    echo "<br>";
    echo 'nilai terkecil adalah '.$nilMin;

    $hasil=0;
    for ($i=0; $i < $nilaiArray; $i++) { 
        
        if($nilaiArray == $nilMax || $nilaiArray == $nilMin)
        {
            return;
        }else{
            return $hasil= $hasil + $nilaiArray[$i];
        }

    }


    echo $hasil;
    ?>
        

      #10. Buatlah fungsi untuk mengecek tahun kabisat
            input : 2021
            output : 2021 bukan tahun kabisat

            input : 2024
            output : 2024 adalah tahun kabisat
        
         <form method="post" action=""> 
    Masukkan tahun <input type="text" name="bil" /><br />
    <input type="submit" name="submit" value="Submit" /> 
    </form> 

        <?php
        if(isset($_POST['submit'])){
        $TAHUN = $_POST['bil'];
        if ($TAHUN%4==0)
        {
            echo "$TAHUN TAHUN KABISAT"; 
        }
        else if($TAHUN%4!=0)
        {
            echo "$TAHUN BUKAN TAHUN KABISAT"; 
        }
        }
        ?>



    </body>
</html>
