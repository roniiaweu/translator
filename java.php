<?php
/**
* @author 			 : Ardan (Ardzz) [Z0NK3X]
*/

@error_reporting(0);
@ini_set('display_errors', 0);
@error_reporting(0);
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
$green  = "\e[92m";
$red    = "\e[91m";
$yellow = "\e[93m";
$blue   = "\e[36m";
system("clear");
sleep(1);
function banner(){
	system('clear');
	echo "

     [ Translator Jawa ]   
         
	\n";
}
banner();
sleep(1);

//echo basename(__FILE__)."\n";
echo "1) Bahasa Indonesia ke Jawa\n";
sleep(1);
echo "2) Jawa ke Bahasa Indonesia\n";
sleep(1);
echo "3) Bahasa Indonesia ke Krama\n";
sleep(1);
echo "4) Krama ke Bahasa Indonesia\n";
sleep(1);
echo "5) Bahasa Indonesia ke Krama Halus\n";
sleep(1);
echo "6) Krama Halus ke Bahasa Indonesia\n";
sleep(1);
echo "7) Terjemahkan Dari File teks (txt)\n";
sleep(1);
echo "10) Keluar\n";
echo "Pilih salah satu opsi : ";
$id = trim(fgets(STDIN, 1024));
echo 
if (empty($id)) {
	echo "Opsi Tidak Boleh Kosong!\n";
	exit();
}
if ($id == "1") {
echo "Kata/Kalimat Bahasa Indonesia 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "\nKata/Kalimat Bahasa Indonesia Tidak Boleh Kosong!\n";
	return;
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'jv-NG',
			'from' => 'id-ID',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
// Hasil Terjemahan Dari \n$indo 	: 
if ($id == "2") {
	echo "Kata/Kalimat Bahasa Jawa 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "\nKata/Kalimat Jawa Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'id-ID',
			'from' => 'jv-NG',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "5") {
	echo "Kata/Kalimat Bahasa Indonesia 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "$red\nKata/Kalimat Bahasa Indonesia Tidak Boleh Kosong!\n$white";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'jv-KI',
			'from' => 'id-ID',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "6") {
		echo "Kata/Kalimat Krama Halus 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "\nKata/Kalimat Krama Halus Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'id-ID',
			'from' => 'jv-KI',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "3") {
			echo "Kata/Kalimat Bahasa Indonesia 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "$red\nKata/Kalimat Bahasa Indonesia Tidak Boleh Kosong!\n$white";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'jv-KR',
			'from' => 'id-ID',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "4") {
			echo "Kata/Kalimat Krama 		: ";
$indo = trim(fgets(STDIN, 1024));
if (empty($indo)) {
	echo "\nKata/Kalimat Krama Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'id-ID',
			'from' => 'jv-KR',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);
	if ($result['_meta']['status'] == "SUCCESS") {	
	echo "Hasil Terjemahan Dari \n$indo 	: ".$result['content']['model']['basic']."\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "8") {
	system("clear");
	sleep(1);
	echo "Recoded by majestic";
        exit();
}
if ($id == "10") {
	system('clear');
	echo "Tunggu sebentar...\n";
	sleep(3);
	exit();
}
if ($id == "7") {
	system("clear");
sleep(1);
$batas = " ";
banner();
sleep(1);
//echo " \n";

//echo basename(__FILE__)."\n";
echo "1) Bahasa Indonesia ke Jawa\n";
sleep(1);
echo "2) Jawa ke Bahasa Indonesia\n";
sleep(1);
echo "3) Bahasa Indonesia ke Krama\n";
sleep(1);
echo "4) Krama ke Bahasa Indonesia\n";
sleep(1);
echo "5) Bahasa Indonesia ke Krama Halus\n";
sleep(1);
echo "6) Krama Halus ke Bahasa Indonesia\n";
sleep(1);
echo "7) About Me :)\n";
sleep(1);
echo "8) Keluar :(\n";
sleep(1);
echo "Pilih salah satu opsi : ";
$id = trim(fgets(STDIN, 1024));
echo "\n \n";
if (empty($id)) {
	echo "Opsi Tidak Boleh Kosong!\n";
	exit();
}
if ($id == "1") {
echo "File teks yang akan diterjemahkan		: ";
$nama_file = trim(fgets(STDIN, 1024));
echo "File teks hasil terjemahan yang akan disimpan 	 : ";
$save = trim(fgets(STDIN, 1024));
//system('clear');
//$nama_file = "kata.txt";
$myfile = fopen($nama_file, "r") or die("file tidak ada!\n");
$indo = fread($myfile,filesize($nama_file));
$jumlah = count(file($nama_file));
echo "Total Baris Kalimat ($jumlah)\n";
echo "Sedang Menerjemahkan.....";
if (empty($indo)) {
	echo "\nKata/Kalimat Bahasa Indonesia Tidak Boleh Kosong!\n";
	return;
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'jv-NG',
			'from' => 'id-ID',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);

	if ($result['_meta']['status'] == "SUCCESS") {	
	system('clear');
	echo "Hasil Terjemahan :\n$batas\n".$result['content']['model']['basic']."\n";
	$cpr = "   Diterjemahkan Dengan Translator Jawa CLI Based\n.:. TERIMAKASIH TELAH MENGGUNAKAN TRANSLATOR INI .:.\n\n    ~Ardan [https://www.instagram.com/ar_dhann]\n    ~Blog  [https://bac0ders.me]\n";
	//$save = "hasil_terjemahan.txt";
	$jud = fopen($save, "a");
	fwrite($jud, $result['content']['model']['basic']."\n\n".$cpr);
	fclose($jud);
	echo "$batas\nTerjemahan Telah disimpan! di File $save\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
// Hasil Terjemahan Dari \n$indo 	: 
if ($id == "2") {
echo "File teks yang akan diterjemahkan		: ";
$nama_file = trim(fgets(STDIN, 1024));
echo "File teks hasil terjemahan yang akan disimpan 	 : ";
$save = trim(fgets(STDIN, 1024));
//system('clear');
//$nama_file = "kata.txt";
$myfile = fopen($nama_file, "r") or die("file tidak ada!\n");
$indo = fread($myfile,filesize($nama_file));
$jumlah = count(file($nama_file));
echo "Total Baris Kalimat ($jumlah)\n";
echo "Sedang Menerjemahkan.....";
if (empty($indo)) {
	echo "\nKata/Kalimat Jawa Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'id-ID',
			'from' => 'jv-NG',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);

	if ($result['_meta']['status'] == "SUCCESS") {	
	system('clear');
	echo "Hasil Terjemahan :\n$batas\n".$result['content']['model']['basic']."\n";
	$cpr = "   Diterjemahkan Dengan Translator Jawa CLI Based\n.:. TERIMAKASIH TELAH MENGGUNAKAN TRANSLATOR INI .:.\n\n    ~Ardan [https://www.instagram.com/ar_dhann]\n    ~Blog  [https://bac0ders.me]\n";
	//$save = "hasil_terjemahan.txt";
	$jud = fopen($save, "a");
	fwrite($jud, $result['content']['model']['basic']."\n\n".$cpr);
	fclose($jud);
	echo "$batas\nTerjemahan Telah disimpan! di File $save\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "5") {
echo "File teks yang akan diterjemahkan		: ";
$nama_file = trim(fgets(STDIN, 1024));
echo "File teks hasil terjemahan yang akan disimpan 	 : ";
$save = trim(fgets(STDIN, 1024));
//system('clear');
//$nama_file = "kata.txt";
$myfile = fopen($nama_file, "r") or die("file tidak ada!\n");
$indo = fread($myfile,filesize($nama_file));
$jumlah = count(file($nama_file));
echo "Total Baris Kalimat ($jumlah)\n";
echo "Sedang Menerjemahkan.....";
if (empty($indo)) {
	echo "\nKata/Kalimat Bahasa Indonesia Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'jv-KI',
			'from' => 'id-ID',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);

	if ($result['_meta']['status'] == "SUCCESS") {	
	system('clear');
	echo "Hasil Terjemahan :\n$batas\n".$result['content']['model']['basic']."\n";
	$cpr = "   Diterjemahkan Dengan Translator Jawa CLI Based\n.:. TERIMAKASIH TELAH MENGGUNAKAN TRANSLATOR INI .:.\n\n    ~Ardan [https://www.instagram.com/ar_dhann]\n    ~Blog  [https://bac0ders.me]\n";
	//$save = "hasil_terjemahan.txt";
	$jud = fopen($save, "a");
	fwrite($jud, $result['content']['model']['basic']."\n\n".$cpr);
	fclose($jud);
	echo "$batas\nTerjemahan Telah disimpan! di File $save\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "6") {
echo "File teks yang akan diterjemahkan		: ";
$nama_file = trim(fgets(STDIN, 1024));
echo "File teks hasil terjemahan yang akan disimpan 	 : ";
$save = trim(fgets(STDIN, 1024));
//system('clear');
//$nama_file = "kata.txt";
$myfile = fopen($nama_file, "r") or die("file tidak ada!\n");
$indo = fread($myfile,filesize($nama_file));
$jumlah = count(file($nama_file));
echo "Total Baris Kalimat ($jumlah)\n";
echo "Sedang Menerjemahkan.....";
if (empty($indo)) {
	echo "\nKata/Kalimat Krama Halus Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'id-ID',
			'from' => 'jv-KI',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);

	if ($result['_meta']['status'] == "SUCCESS") {	
	system('clear');
	echo "Hasil Terjemahan :\n$batas\n".$result['content']['model']['basic']."\n";
	$cpr = "   Diterjemahkan Dengan Translator Jawa CLI Based\n.:. TERIMAKASIH TELAH MENGGUNAKAN TRANSLATOR INI .:.\n\n    ~Ardan [https://www.instagram.com/ar_dhann]\n    ~Blog  [https://bac0ders.me]\n";
	//$save = "hasil_terjemahan.txt";
	$jud = fopen($save, "a");
	fwrite($jud, $result['content']['model']['basic']."\n\n".$cpr);
	fclose($jud);
	echo "$batas\nTerjemahan Telah disimpan! di File $save\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "3") {
echo "File teks yang akan diterjemahkan		: ";
$nama_file = trim(fgets(STDIN, 1024));
echo "File teks hasil terjemahan yang akan disimpan 	 : ";
$save = trim(fgets(STDIN, 1024));
//system('clear');
//$nama_file = "kata.txt";
$myfile = fopen($nama_file, "r") or die("file tidak ada!\n");
$indo = fread($myfile,filesize($nama_file));
$jumlah = count(file($nama_file));
echo "Total Baris Kalimat ($jumlah)\n";
echo "Sedang Menerjemahkan.....";
if (empty($indo)) {
	echo "\nKata/Kalimat Bahasa Indonesia Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'jv-KR',
			'from' => 'id-ID',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);

	if ($result['_meta']['status'] == "SUCCESS") {	
	system('clear');
	echo "Hasil Terjemahan :\n$batas\n".$result['content']['model']['basic']."\n";
	$cpr = "   Diterjemahkan Dengan Translator Jawa CLI Based\n.:. TERIMAKASIH TELAH MENGGUNAKAN TRANSLATOR INI .:.\n\n    ~Ardan [https://www.instagram.com/ar_dhann]\n    ~Blog  [https://bac0ders.me]\n";
	//$save = "hasil_terjemahan.txt";
	$jud = fopen($save, "a");
	fwrite($jud, $result['content']['model']['basic']."\n\n".$cpr);
	fclose($jud);
	echo "$batas\nTerjemahan Telah disimpan! di File $save\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "4") {
echo "File teks yang akan diterjemahkan		: ";
$nama_file = trim(fgets(STDIN, 1024));
echo "File teks hasil terjemahan yang akan disimpan 	 : ";
$save = trim(fgets(STDIN, 1024));
//system('clear');
//$nama_file = "kata.txt";
$myfile = fopen($nama_file, "r") or die("file tidak ada!\n");
$indo = fread($myfile,filesize($nama_file));
$jumlah = count(file($nama_file));
echo "Total Baris Kalimat ($jumlah)\n";
echo "Sedang Menerjemahkan.....";
if (empty($indo)) {
	echo "\nKata/Kalimat Krama Tidak Boleh Kosong!\n";
	exit();
}

$header = array(
	'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36',
	'Cookie: PHPSESSID=obt0l8put2bm7ishdb7d6bmdj6',
	'Content-Type: application/x-www-form-urlencoded'
);
// Set the POST data
	$postdata = http_build_query(
		array(
			'to' => 'id-ID',
			'from' => 'jv-KR',
			'source' => $indo
		)
	);
 
	// Set the POST options
	$opts = array('http' => 
		array (
			'method' => 'POST',
			'header' => $header,
			'content' => $postdata
		)
	);
 
	// Create the POST context
	$context  = stream_context_create($opts);
 
	// POST the data to an api
	$url = 'http://mongosilakan.net/api/v1/translate/translate';
	$result = file_get_contents($url, false, $context);
	$result = json_decode($result, TRUE);

	if ($result['_meta']['status'] == "SUCCESS") {	
	system('clear');
	echo "Hasil Terjemahan :\n$batas\n".$result['content']['model']['basic']."\n";
	$cpr = "   Diterjemahkan Dengan Translator Jawa CLI Based\n.:. TERIMAKASIH TELAH MENGGUNAKAN TRANSLATOR INI .:.\n\n    ~Ardan [https://www.instagram.com/ar_dhann]\n    ~Blog  [https://bac0ders.me]\n";
	//$save = "hasil_terjemahan.txt";
	$jud = fopen($save, "a");
	fwrite($jud, $result['content']['model']['basic']."\n\n".$cpr);
	fclose($jud);
	echo "$batas\nTerjemahan Telah disimpan! di File $save\n";
}
else {
	echo "Gagal Menerjemahkan :(  $indo\n";
}
}
if ($id == "7") {
	system("clear");
	sleep(1);
	echo "Recoded by majest1c";
        exit();
}
if ($id == "8") {
	system('clear');
	echo "Kamu akan segera keluar... :(\n";
	sleep(5);
	exit();
}
}
?>
