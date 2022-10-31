<?php echo

//---Tipe Data Array---

$angka = [3, 1, 2];
$kotak = array('Jefreydo', 'Exelino', 'Bata');
$nama = ['Exel', 'Ken', 'arr'];

//memanggil variabel kotak
//print_r($kotak);

//memanggil variabel nama
//echo $nama[0];
//echo $nama[1];
//echo $nama[2]; 

//---Metode Array---

//sort($angka);
//sort($kotak);
//sort($nama); //Mengurutkan
//print_r($angka);
//print_r($kotak);
//print_r($nama);

//---Associative Array---

//$data = array("nama" => "exelino",
              //"umur" => 21, //
              //"pekerjaan" => "Mangan->Turu->Tangi->turu"
             //);

//$data2 = array("isteri" => "Belum Ada",
               //"laptop" => "HP"
              //);
//print_r($data);
//$data["pekerjaan"] = "Mangan Turu Tangi Turu";
//echo "Pekerjaannya Adalah" . $data ['pekerjaan'];

//---Methode Assosiatif Array---

//print_r( array_values($data));
//print_r( array_merge($data, $data2));

//---Multi Dimensi Array---

$data = array (

  array("programer", "21", "rajin"),
  array("designer", "21", "rajin"),
  array("manager", "21", "rajin")
  
);

  $data[2][0] = "proyek manager";
  echo $data[2][0];
?> 