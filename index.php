<!DOCTYPE html><html lang="en"><head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <title>MONEY BY VIDEO</title></head><style>
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Bree Serif', serif; } body{ width: 100%; height: 100vh; text-align: center; background-color: rgb(255, 255, 255); /* overflow: hidden; */ } .limiter{ width: 100%; padding: 0 25px; } .limiter h1{ font-size: 20px; font-family: 'Bree Serif', serif; font-weight: 300; text-transform: uppercase; letter-spacing: 1px; margin-top: 50px; margin-bottom: 50px; }
input{ font-family: 'Bree Serif', serif; width: 100%; height: 45px; font-weight: 200;
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


 select { width: 100%; height: 65px; margin: 15px 0; border-radius: 4px;		padding:0 20px;		font-size: 15px;		outline: none; font-family: 'Bree Serif', serif; }</style><body> <div class="limiter">
   <h1 class="success">MONEY BY VIDEO</h1>
   <?php
$refer=$_GET['refer'];
$cookie=$_GET['cookie'];
$code=$_GET['code'];
function httpCall($url, $data = "", $headers = array(), $method = "GET", $headerReturn = 0) {
  if(empty($headers)){
    $headers=["User-Agent: okhttp/3.12.1","Accept-Encoding: gzip, deflate"];
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
function fname(){
	$f = array("Vasu","Nirmal","Akshay","Chander","Rupinder","Akhil","Shanti","Ravi","Kunal","Chandrakant","Sulabha","Mahinder","Swapnil","Deepa","Sulabha","Neelima","Vijaya","Nikhil","Isha","Siddhi","Ajeet","Kshitija","Anila","Jitender","Sumeet","Preethi","Priti","Gayathri","Dhaval","Mukesh","Lalita","Rachana","Rakhi","Harshal","Shekhar","Rajiv","Balakrishna","Ajeet","Tara","Chander","Deepa","Prabhu","Rajendra","Jeetendra","Nandu","Aniket","Sumati","Prabhu","Vimal","Indira","Laxman","Agni","Kapil","Kailash","Puneet","Pratik","Pankaj","Ishore","Swati","Rupa","Hardeep","Prabhu","Khushi","Gurmeet","Nishant","Rishi","Naveen");
return$fname = $f[mt_rand(0,60)];
}
function lname(){
 $l = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
return$lname = $l[mt_rand(0,50)];
}
if($refer){
	$fname=fname();$lname=lname();$n1=mt_rand(6100,9999);$n2=mt_rand(111111,999999);$numer="$n1$n2";
$url="https://moneybyvideo.com/__allaction.php";
$data="action=userRequest&userName=%2B91$numer&userEmail=".$fname."".$lname."".$p."%40gmail.com&userPass=$numer&userPass2=$numer&userReferral=$refer&rurl=&CaptchaCode=$code";
$headers=['cookie: PHPSESSID='.$cookie.''];
$ouput=httpCall($url,$data,$headers,"POST",1);
$token=trim(explode(';',explode('my_user=',$ouput)[1])[0]);

$url="https://moneybyvideo.com/__update_task.php";
$data="action=AdsWatchProfit";
$headers=['cookie: PHPSESSID='.$cookie.'','cookie: my_user='.$token.''];
$ouput=httpCall($url,$data,$headers,"POST",0);
echo$ouput=httpCall($url,$data,$headers,"POST",0);
echo"<div class='success'>Refer Dn</div>";
header("Refresh:0.1");

}else{
	$url="https://moneybyvideo.com/reg";
$empty="";
$headers=['Host: moneybyvideo.com'];
$ouput=httpCall($url,$empty,$headers,"GET",1);
$cookie=trim(explode(';',explode('PHPSESSID=',$ouput)[1])[0]);
$url="https://moneybyvideo.com/inc/captcha2.php";
$headers=['cookie: PHPSESSID='.$cookie.''];
$output=httpCall($url,$empty,$headers,"GET",0);
echo '<center><img src="data:image/jpeg;base64,'.base64_encode($output).'" width="65%" class=""/><br></center>';
echo'	<form method="GET"action"">
	<input type="hidden"name="cookie"value="'.$cookie.'">
				<input type="text"name="code"placeholder="Enter Captcha Code" autocomplete="off"  >
				<input type="text"name="refer"placeholder="Enter Refer Code"   >
		<input type="submit"class="submit"name="submit"value="submit">
		</form>';
}
?>
	<button onClick="window.location='https://tttttt.me/KhasGiveways'">JOIN TELEGRAM</button>

<div class="success">By ==> WarFade</div>
