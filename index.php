<!DOCTYPE html><html lang="en"><head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <title>NOJOTO BY WARFADE</title></head><style>
*{ 
margin: 0; 
padding: 0; 
box-sizing: border-box; 
font-family: 'Bree Serif', serif; 
} 

body{ 
width: 100%; 
height: 100vh; 
text-align: center; 
background-color: rgb(255, 255, 255); /* overflow: hidden; */ 
} 

.limiter{ 
width: 100%; 
padding: 0 25px; 
} 

.limiter h1{ 
font-size: 20px; 
font-family: 'Bree Serif', serif; 
font-weight: 300; 
text-transform: uppercase;
letter-spacing: 1px; 
margin-top: 50px; 
margin-bottom: 50px; 
}

input,button{ font-family: 'Bree Serif', serif; width: 100%; height: 45px; font-weight: 200;
padding: 12px 32px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 14px;
  margin: 5px auto;
border: 2px solid rgb(0, 141, 146);
  border-radius: 5px 5px 5px 5px;
  outline: none;margin-top: 0px; margin-bottom: 25px;
  }
.input{ border: 1.5px solid rgb(211, 211, 211); background-color: transparent; padding: 0 15px; transition: 0.5s; }
 .input:focus{ border: 1.5px solid rgb(0, 141, 146); }
  .submit, button{ margin: 15px 0; border: 2px solid black; background-color: rgb(0, 141, 146); color: #fff; text-transform: uppercase; letter-spacing: 2px; box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.349); transition: 0.5s; } .submit:hover{ background-color: rgb(7, 89, 94); } .telegram{ font-family: 'Bree Serif', serif; width: 100%; height: 65px; font-weight: 200; margin: 30px 0; border-radius: 4px; background-color: rgb(0, 141, 146); display: flex; justify-content: center; align-items: center; box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.349); } .telegram i{ color: #fff; font-size: 30px; margin-left: -30px; } .telegram a{ color: #fff; text-decoration: none; font-weight: 300; letter-spacing: 2px; margin-left: 10px; font-size: 16px; text-transform: uppercase; } .success{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #d1e6dd; color: #105133; border: 1px solid #9fcfba; } .error{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #f7d7da; color: #84200a; border: 1px solid #f5c2c7; } .white{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #e2e3e5; color: #41464a; border: 1px solid #d5dbdb; } .blue{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #cfe2ff; color: #084195; border: 1px solid #d7d4fe; }

 select { 
width: 100%; 
height: 65px; 
margin: 15px 0; 
border-radius: 4px;		
padding:0 20px;		
font-size: 15px;		
outline: none; 
font-family: 'Bree Serif', serif; 
}
</style>
<body> <div class="limiter">
   <h1 class="success">NOJOTO</h1>
   <?php
error_reporting(0);
$url="https://t.me/KhasGiveways";
$refer=$_GET['refer'];
if($refer){
	$file="ab/$refer.txt";
	$s=file_get_contents($file);
	$s1=$s+1;
	if($s>=20){
		echo'<h1 class="error">Your Refer Limit Over</h1>';
		heeader("Refresh:0.1 url=$url");
	}else{
	
	
function Rando($length) {
    $characters = '0123456789abcdefghijklmno';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function httpCall($url, $data = "", $headers = array(), $method = "GET", $headerReturn = 0) {
  if(empty($headers)){
  	$ip = long2ip(rand());
    $headers=["User-Agent: okhttp/3.12.1","Accept-Encoding: gzip, deflate","X-Forwarded-For: $ip"];
  }
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HEADER, $headerReturn);
  curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
  $output = curl_exec($ch);
  return $output;
}
$f = array("Vasu","Nirmal","Akshay","Chander","Rupinder","Akhil","Shanti","Ravi","Kunal","Chandrakant","Sulabha","Mahinder","Swapnil","Deepa","Sulabha","Neelima","Vijaya","Nikhil","Isha","Siddhi","Ajeet","Kshitija","Anila","Jitender","Sumeet","Preethi","Priti","Gayathri","Dhaval","Mukesh","Lalita","Rachana","Rakhi","Harshal","Shekhar","Rajiv","Balakrishna","Ajeet","Tara","Chander","Deepa","Prabhu","Rajendra","Jeetendra","Nandu","Aniket","Sumati","Prabhu","Vimal","Indira","Laxman","Agni","Kapil","Kailash","Puneet","Pratik","Pankaj","Ishore","Swati","Rupa","Hardeep","Prabhu","Khushi","Gurmeet","Nishant","Rishi","Naveen");
$fname = $f[mt_rand(0,60)];
 $l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$lname = $l[mt_rand(0,50)];
$a1=mt_rand(63,99);
$a2=mt_rand(11111111,88888888);
$number="$a1$a2";
$de=Rando(16);
$app_version="2.0.58";
$hash=md5("|njt|-$de-|njt|-$de-|njt|-$app_version-|njt|");
$output=httpCall("https://nojoto.com/api/v1/auth.php?njtDeviceId=$de&njtDeviceName=$de&njtAppVersion=2.0.58&njtSecurityKey=$hash&xtoken=&languageId=");
$xtoken=json_decode($output,1)['result']['xtoken'];
$ip = long2ip(rand());
$headers=["User-Agent: okhttp/3.12.1","Accept-Encoding: gzip, deflate","content-type: application/x-www-form-urlencoded","X-Forwarded-For: $ip"];
$url="https://nojoto.com/api/v1/auth.php";


$data="socialLongLiveAccessToken=EAAaLL7L7Tm0BAIA8Nh1oN5eln0voPadnYZClEWnvEYjIzODZBFjEZCmzW18HB7ZBEN9YSW2F7tM4u8yQYfGqzSweuJiU5wJLYzIYxbOV7zexNZA1hB2YHqkM62oSnVYfru9Pviz9GHYutg8PU3fYZBdZA1Bu5LEa6vm2izZBi636jicCZC1FNhsIr6BZAk7EgzdupVoIH14diP2skLNOteYdix95iGtyk4w9A24rZA9WInpyjKgeCz8ZAq7z&gender=&isSocialEmail=yes&socialUniqueId=14039630".mt_rand(1111111,9999999)."&languageId=1&photo=https%3A%2F%2Fplatform-lookaside.fbsbx.com%2Fplatform%2Fprofilepic%2F%3Fasid%3D140396302038756%26height%3D50%26width%3D50%26ext%3D1667536817%26hash%3DAeQ0ImTiHI8otGOdwcc&type=FB&isMultiAccountLogin=1&socialAccessToken=EAAaLL7L7Tm0BAIA8Nh1oN5eln0voPadnYZClEWnvEYjIzODZBFjEZCmzW18HB7ZBEN9YSW2F7tM4u8yQYfGqzSweuJiU5wJLYzIYxbOV7zexNZA1hB2YHqkM62oSnVYfru9Pviz9GHYutg8PU3fYZBdZA1Bu5LEa6vm2izZBi636jicCZC1FNhsIr6BZAk7EgzdupVoIH14diP2skLNOteYdix95iGtyk4w9A24rZA9WInpyjKgeCz8ZAq7z&dob=&v=1&name=$fname$lname&location=&xtoken=$xtoken&email=$fname$lname$number%40gmail.com";

$output=httpCall($url,$data,$headers,"POST",0);
$headers=["User-Agent: okhttp/3.12.1","Accept-Encoding: gzip, deflate","content-type: application/x-www-form-urlencoded","X-Forwarded-For: $ip"];
$url="https://nojoto.com/api/v1/auth.php";
$data="socialLongLiveAccessToken=EAAaLL7L7Tm0BAIA8Nh1oN5eln0voPadnYZClEWnvEYjIzODZBFjEZCmzW18HB7ZBEN9YSW2F7tM4u8yQYfGqzSweuJiU5wJLYzIYxbOV7zexNZA1hB2YHqkM62oSnVYfru9Pviz9GHYutg8PU3fYZBdZA1Bu5LEa6vm2izZBi636jicCZC1FNhsIr6BZAk7EgzdupVoIH14diP2skLNOteYdix95iGtyk4w9A24rZA9WInpyjKgeCz8ZAq7z&gender=&isSocialEmail=yes&socialUniqueId=14039630".mt_rand(1111111,9999999)."&languageId=1&photo=https%3A%2F%2Fplatform-lookaside.fbsbx.com%2Fplatform%2Fprofilepic%2F%3Fasid%3D140396302038756%26height%3D50%26width%3D50%26ext%3D1667536817%26hash%3DAeQ0ImTiHI8otGOdwcc&type=FB&isMultiAccountLogin=1&socialAccessToken=EAAaLL7L7Tm0BAIA8Nh1oN5eln0voPadnYZClEWnvEYjIzODZBFjEZCmzW18HB7ZBEN9YSW2F7tM4u8yQYfGqzSweuJiU5wJLYzIYxbOV7zexNZA1hB2YHqkM62oSnVYfru9Pviz9GHYutg8PU3fYZBdZA1Bu5LEa6vm2izZBi636jicCZC1FNhsIr6BZAk7EgzdupVoIH14diP2skLNOteYdix95iGtyk4w9A24rZA9WInpyjKgeCz8ZAq7z&dob=&v=1&name=$fname%20$lname&location=&xtoken=$xtoken&email=$fname$lname$number%40gmail.com";

$output=httpCall($url,$data,$headers,"POST",0);
$j=json_decode($output,1);
$cid=$j['cid'];
if($cid){

$output=httpCall("https://nojoto.com/api/v1/referral.php?cid=$cid&xtoken=$xtoken&rewardCode=$refer&isManualScratch=1",'','',"GET",0);
$j=json_decode($output,1)["message"];
if($j=="Reward Redeemed Successfully"){
	echo'<h1 class="success">Refer Dn</h1>';
	
	mkdir("ab");
	file_put_contents($file,$s1);
	header("Refresh:0.1");
}else{
	echo'<h1 class="error">Refer Failed</h1>';
	header("Refresh:0.1");
}
}else{
	echo'<h1 class="error">Refer Failed</h1>';
	header("Refresh:0.1");
}

}
}else{
	echo '	
	<form action="" method="GET">
	<input type="text" name="refer" placeholder="Enter Refer Code" required>
	<input type="submit" class="submit">
		  
		  </form>
		  
	  ';
}
?>
<br>
	<button onClick="window.location='https://tttttt.me/KhasGiveways'">JOIN TELEGRAM</button>

<div class="success">By ==> WarFade</div>
