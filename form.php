<?php

//file koneksi database
include_once("koneksi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
 <div class="mb-6">
           <label for="username-success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Your name</label>
           <input  name="nama" type="text" id="name" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" >
           
       </div>
       <div class="mb-6">
        <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Nomor Identitas</label>
            <input name="nik" type="number"  class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400" >
          
       </div> 
       <div class="mb-6">
           <label for="username-success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Nomor Handphone</label>
           <input   name="noHp" type="text" class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" >
          
       </div>
       
       <div class="mb-6">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Tempat Wisata</label>
            <select value="" name="tempatWisata"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Choose here</option>
                <?php
                    foreach ($harga as $key) { 
                        $keyy = $key['tempat_wisata'];
                        $hargaTiket = $key['harga_tiket'];
                        
                        echo "
                        <option onclick='getHargaTiket($hargaTiket)'>$keyy</option>
                        

                        ";
                           
                    }
                ?>
            </select>
           
           
       </div>

       <div class="mb-6">
           <label for="username-success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Tanggal Kunjungan</label>
           <input  name="tanggal" type="date"  class="bg-green-50 border border-green-500 text-green-900 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-green-100 dark:border-green-400" >
          
       </div>
       
       <div class="mb-6">
           <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Pengunjung Dewasa</label>
           <input name="pengunjung-dewasa" type="number" id="pengunjung-dewasa" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400" >
           <p class="hidden text-red-600" id="show-eror-dewasa">Jumlah Tidak Boleh Kosong</p>
       </div>

       <div class="mb-6">
           <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Pengunjung Anak Anak</label>
           <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Usia Dibawah 12 Tahun</label>
           <input   name="pengunjungAnakanak" type="number" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400" >
          
       </div>

       
       <div class="mb-6">
           <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Harga Tiket</label>
           <p class="" ></p>
           
       </div>

       <div class="mb-6">
           <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Total Bayar</label>
           <input  type="text" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-red-100 dark:border-red-400">
           
         
           
       </div>

       <div class="flex items-center mb-4">
           <input  name=""  type="checkbox"  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
           <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"> Saya dan / rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
       </div>

       <div>
           <div class="flex">
               
                


                <div class="m-4">
                    <button id="button-disble"  type="submit" name="submit" class="cursor-not-allowed relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            Pesan Tiket
                        </span>
                    </button>
                </div>

                
           </div>
       </div>
</body>
</html>


<?php



if(isset($_POST['pemesanan'])) {


    //$_POST['samain sama yg name di form html nya']


    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $noHp = $_POST['noHp'];
    $tempatWisata = $_POST['tempatWisata'];
    $tanggalKunjungan = $_POST['tanggalKunjungan'];
    $pengunjung_dewasa = $_POST['pengunjung-dewasa'];
    $pengunjungAnakanak = $_POST['pengunjungAnakanak'];

    //                              samain sama yg di database nya         samain sama varible diatas

    $sql = "INSERT INTO `pemesanan` (``, ``, ``, ``, ``, ``, ``) VALUES ('$nama', '$nik', '$noHp', '$tempatWisata', '$tanggalKunjungan', '$pengunjungDewasa', '$pengunjungAnakanak');"; // samain sama varible diatas


                        //$db smain sama varible di koneksi database
    $query = mysqli_query($db, $sql);


    if( $query ) {
        
        //ini klo berhasil lu mau nya kemana samain direktori file nya
        
        header('Location: ../../public/view-user-input.php');
    } else {

        //ini kalau gagal ngisi form nya lu mau kemana ganti aja 
        header('Location: ../../public/from-pemesanan.php');
    }


}

?>