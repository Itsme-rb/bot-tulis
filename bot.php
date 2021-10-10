<?php
//Aku Sayang ArmelLia <3
//Love You Mell
//Mwahh

if (isset($_POST['submit'])) {
	$nulis = $_POST['nulis'];
	$hasil = str_replace(' ', '%20', $nulis);


$url = "https://st4rz.herokuapp.com/api/nulis?text=".$hasil;
$json = file_get_contents($url);

$data_json = json_decode($json, true);

$image = $data_json['result'];

define('UPLOAD_DIR', 'images/');
$img = $image;
$img = str_replace('data:image/jpeg;base64,', '', $img);
$img =  str_replace(' ', '+',$img);
$data = base64_decode($img);
$upload = UPLOAD_DIR . uniqid() . '.jpeg';

$success = file_put_contents($upload, $data);

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Bot</title>
</head>
<body bgcolor="gray">
 <link rel="icon" type="image/x-icon" href="https://e.top4top.io/p_2070xmvb11.jpg">
 <meta name="description" content="BOT TULIS">
 <link href="https://fonts.googleapis.com/css?family=Mali:400i,700i" rel="stylesheet" type="text/css">
 <style>
			h1{
		margin-top: 0%;
		font-family: "Mali";
        font-size: 2em;
    	font-weight: bold;
    	margin-bottom: 0%;
	}
   h3{
    margin-top: 0%;
    font-family: "Mali";
        font-size: 2em;
      font-weight: bold;
      margin-bottom: 0%;
  }
   .button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: #4CAF50;
  border: none;
  border-radius: 20px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

	</style>
<center>
  <h1 class="text-center"><font color="red">BOT RAJIN NULIS</h1></font>
  <h1><font color="white">BUAT KLEAN YANG MAGER NULIS</h1></font>
  <hr>
<form action="" method="post">

 <div class="container">
  <div class="row">
  	<div class="col">
  	<textarea name="nulis" style="width: 1167px; height: 150px;"></textarea>
  	</div>

   <div class="col">
   	<button name="submit" type="submit" class="button">Submit</button>
   </div>
   </div>
  </div>
 </form>

<hr>
  <div class="container">
  	<h1 class="text-center"><font color="white">HASIL GAMBAR DIBAWAH INI</h1>
  		<hr>
  		<center>
  	<img src="<?= $upload ?>">
  	<hr>
  	<h3><font color="green">@RazzorBack - 2021</h3></font>
  </div>
</center>
<audio src="https://b.top4top.io/m_2082nhz3c0.mp3" autoplay="autoplay" hidden="hidden"></audio>
</body>
</html>
