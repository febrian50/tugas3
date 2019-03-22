<?php
include'koneksi.php';

$hasil  = mysqli_query($kon,"select*from siswa_6771");



if(mysqli_num_rows($hasil) > 0 ){
  $response = array();
  $response["data"] = array();
  while($x = mysqli_fetch_array($hasil)){
    $h['nis'] = $x["nis"];
    $h['nama'] = $x["nama"];
    $h['no_telp'] = $x["no_telp"];
    $h['alamat'] = $x["alamat"];
    array_push($response["data"], $h);
  }
  echo json_encode($response);
}else {
  $response["message"]="tidak ada data";
  echo json_encode($response);
}
?>
