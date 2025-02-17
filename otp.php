
<!DOCTYPE html>

<html lang="en">

<head> 
<meta charset="UTF-8"> 

<meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/3ea3574147.js" crossorigin="anonymous"></script>
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Technical Paisa</title> 
    <link rel="stylesheet" href="master.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Righteous&display=swap');

@font-face {
  font-family: Conto-Bold;
  src: url(Conto-Bold.ttf);
}

*{
   margin: 0;
   padding: 0;
   font-family: Conto-Bold;
   box-sizing: border-box;
}

body{
   background-color: rgb(238, 238, 238);
}

.content{
   width: 100%;
   padding: 30px;
}

.content h1{
   font-size: 18px;
   margin-top: 50px;
   margin-bottom: 50px;
   letter-spacing: 1px;
   text-transform: uppercase;
   text-align: center;
   font-family: 'Righteous', cursive;
   font-weight: 100;
   text-shadow: 0px 0px 1px #16161778;
}

.content .input{
   width: 100%;
   height: 60px;
   margin: 10px 0;
   background-color: transparent;
   border: 2px solid #dedede;
   padding: 10px 15px;
   font-family: Conto-Bold;
   border-radius: 10px;
   border-left: 4px solid #d3d3d3;
   border-right: 4px solid #d3d3d3;
   outline: none;
   letter-spacing: 1px;
   transition: 0.5s ease-in-out;
   font-size: 14px;
   background-color: rgb(238, 238, 238);
}

.input:focus{
   border-left: 4px solid rgb(0, 141, 146);
   border-right: 4px solid rgb(0, 141, 146);
}


.content .formBtn{
   position: relative;
   transition: all .25s ease;
   overflow: hidden;
   width: 100%;
   height: 60px;
   margin: 15px 0;
   background-color: rgb(0, 141, 146);
   border: none;
   padding: 10px 15px;
   font-family: Conto-Bold;
   border-radius: 7px;
   outline: none;
   letter-spacing: 1px;
   transition: 0.5s ease-in-out;
   color: #fff;
   box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.582);
   cursor: pointer;
   font-size: 15px;
   border-left: 4px solid rgb(2, 127, 131);
   border-right: 4px solid rgb(2, 127, 131);
}

.content .formBtn:hover{
   background-color: rgb(2, 130, 134);
}

.load {
   position: absolute;
   left: 0px;
   top: 0px;
   width: 100%;
   height: 100%;
   background: inherit;
   display: flex;
   align-items: center;
   justify-content: center;
   border-radius: inherit
}

.load::after {
   content: '';
   position: absolute;
   border-radius: 50%;
   border: 3px solid #fff;
   width: 25px;
   height: 25px;
   border-left: 3px solid transparent;
   border-bottom: 3px solid transparent;
   animation: loading1 1s ease infinite;
   z-index: 10
}

.load::before {
   content: '';
   position: absolute;
   border-radius: 50%;
   border: 3px dashed #fff;
   width: 25px;
   height: 25px;
   border-left: 3px solid transparent;
   border-bottom: 3px solid transparent;
   animation: loading1 2s linear infinite;
   z-index: 5
}

@keyframes loading1 {
   0% {
      transform: rotate(0deg)
   }

   100% {
      transform: rotate(360deg)
   }
}

.shine{
   background-image: linear-gradient(112deg, rgba(255,255,255,0) 0%,rgba(255,255,255,0) 50%, rgba(248, 248, 248, 0.39) 70%, rgba(255,255,255,0) 80%, rgba(255,255,255,0) 100%);
   background-size: 200% 200%;
   background-repeat: no-repeat;
   animation: shine-animation 4s ease-in-out infinite;
 }

@keyframes shine-animation{
   from{
      background-position: 200% 0;
   }to{
      background-position: -200% 0;
   }
}

.content .telBtn{
   width: 100%;
   height: 60px;
   margin-top: 30px;
   background-color: rgb(0, 141, 146);
   border: none;
   padding: 0px 15px;
   font-family: Conto-Bold;
   border-radius: 7px;
   outline: none;
   letter-spacing: 1px;
   transition: 0.5s ease-in-out;
   color: #fff;
   cursor: pointer;
   font-size: 16px;
   display: flex;
   justify-content: space-around;
   align-items: center;
   text-align: center;
   text-transform: capitalize;
   box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.39);
   border-left: 4px solid rgb(2, 127, 131);
   border-right: 4px solid rgb(2, 127, 131);
   position: relative;
   text-decoration: none;
}

.content .telBtn .fa-paper-plane{
   position: absolute;
   left: 20px;
   padding: 15px;
   font-size: 20px;
   border-radius: 0px;
}

.content .telBtn span{
   margin-left: 25px;
}

.logo_text{
   text-align: center;
   font-family: 'Righteous', cursive;
   text-transform: uppercase;
   letter-spacing: 1px;
   font-size: 35px;
   opacity: 0.1;
   user-select: none;
}

.bg_image{
   width: 100%;
   height: 100vh;
   position: absolute;
   top: 30%;
   background-image: url('http://ind-scripter.000.pe/indian.jpg');
   background-size: 80px;
   position: absolute;
   top: 0px;
   z-index: 1;
   opacity: 0.2;
   background-position: center;
}

.success{
   font-size: 13px;
   letter-spacing: 1px;
   padding: 18px 10px;
   margin: 10px 0;
   border-radius: 7px;
   background-color: #d1e6dd;
   color: #105133;
   border: 1px solid #9fcfba;
   text-align: center;
}

 .success_text{
   font-size: 13px;
   letter-spacing: 1px;
   padding: 18px 10px;
   margin: 10px 0;
   border-radius: 50px;
   color: #105133;
   text-align: center;
 }

.error{
   font-size: 13px;
   letter-spacing: 1px;
   background-color: #f7d7da;
   color: #84200a;
   border: 1px solid #f5c2c7;
   padding: 18px 10px;
   margin: 10px 0;
   border-radius: 7px;
   text-align: center;
}

.error_text{
   font-size: 13px;
   letter-spacing: 1px;
   padding: 18px 10px;
   margin: 10px 0;
   border-radius: 50px;
   color: #84200a;
   text-align: center;
}

.white{
   font-size: 13px;
   letter-spacing: 1px;
   margin: 10px 0;
   background-color: #e2e3e5;
   color: #41464a;
   border: 1px solid #d5dbdb;
   padding: 18px 10px;
   border-radius: 7px;
   text-align: center;
}

.blue{
   font-size: 13px;
   letter-spacing: 1px;
   margin: 10px 0;
   background-color: #cfe2ff;
   color: #084195;
   border: 1px solid #d7d4fe;
   padding: 18px 10px;
   border-radius: 7px;
   text-align: center;
}

select, option{
   width: 100%;
   height: 65px;
   margin: 10px 0;
   background-color: transparent;
   border: 2px solid #dedede;
   padding: 10px 25px;
   font-family: Conto-Bold;
   border-radius: 10px;
   border-left: 4px solid #d3d3d3;
   border-right: 4px solid #d3d3d3;
   outline: none;
   letter-spacing: 1px;
   transition: 0.5s ease-in-out;
   font-size: 13px;
}
</style>
    </head>
    <body> <div class="content">
    
     <h1>Bank Booster Script</h1>
		
<?php 

   if (isset($_GET['submit'])) {              error_reporting(0);
   $mo=$_GET['mo'];
   $email=$_GET['email'];
   $refer=$_GET['refer'];
   $otp=$_GET['otp'];
        
function RandomNumber($length){
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}

$f = array("Aadarsh","Abhay","Abhijeet","Abhimanu","Abhinav","Abhishek","Akhil","Aman","Ambuj","Amit","Anand","Anil","Ankit","Ankush","Anuj","Arjun","Ashish","Atul","Avdesh","Ayush","Bhanu","Bhavesh","Chandan","Deepak","Dev","Devbrat","Dipu","Ganesh","Gaurav","Gopal","Hariom","Harshit","Himanshu","Jatin","Kapil","Karan","Kanhiya","Krish","Krishna","Kunal","Manish","Mangal","Mohan","Mohit","Monu","Nishant","Nitish","Lav","Parmod","Parth","Praduman","Prashant","Prem","Raghu","Rahul","Raj","Rakesh","Rambhu","Ramesh","Ravi","Ravindra","Rishabh","Rishi","Rohan","Ronak","Roshan","Sachin","Sagar","Sanjit","Samar","Sameer","Sant","Sanju","Satish","Satya","Shivam","Shirshant","Shrikant","Sohan","Sonu","Sonal","Sourabh","Sudhanshu","Sudheer","Sujeet","Sumit","Sunil","Sushil","Suraj","Suresh","Umesh","Vijay","Vikram","Vinay","Vinod","Vishal","Vishu","Virat","Vivek","Yash","Yogesh");

$fname = $f[mt_rand(0,100)];

$l = array("Aarya","Agarwal","Ahir","Akela","Arora","Awasthi","Banerjee","Bhaduriya","Bhatt","Chakra","Chakarvarti","Chattarjee","Chaubey","Chaturvedi","Chandravanshi","Chauhan","Choudhary","Dhawal","Dhawan","Deshmukh","Dubey","Dokhle","Gandhi","Gokhil","Ghoshal","Gokul","Gond","Goswami","Gupta","Hooda","Jaat","Jain","Jatara","Jayes","Jugi","Kapoor","Kumar","Kharwar","Kesari","Kohli","Kumhaar","Kurmi","Kushwaha","Lala","Lakhani","Lohar","Lokhande","Malhotra","Marvare","Maurya","Maali","Mauryavanshi","Mehra","Mital","Modi","Naidu","Naveen","Nehru","Patani","Paatil","Pal","Pandey","Paneri","Panjiwan","Pathak","Patel","Pele","Prajapati","Prashad","Prabhu","Raghuwanshi","Raj","Rajput","Raja","Ram","Ramdin","Raydu","Rotle","Roy","Sardar","Seikh","Seth","Sharma","Singh","Singhania","Sukla","Shinghle","Surya","Survanshi","Suryavanshi","Swasthi","Talpade","Talwar","Tahrik","Tilakdhari","Tiwari","Tripathi","Trivedi","Verma","Yadav","Yaduvanshi");
$lname = $l[mt_rand(0,100)];

$no = rand(1,999);

function rando($length) {
    $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$name=''.$fname.''.$lname.''.$no.'';
function useragent(){
$l6 = array("5","6","7","8","9","10","11","12");
$d1=$l6[mt_rand(0,7)];
 $l64 = array("0","1");
$d2=$l64[mt_rand(0,1)];
$d="$d1.$d2.0";
 $de1 = array("Redmi","Realme","Oppo","Vivo","Google","Samsung","Xiomi","mi","Techno","Nokia","Oneplus","Reno");
$de11=$de1[mt_rand(0,11)];
 $de2 = array("Y1","Y2","Y3","Y5","X1","X2","1","3","5","7","8","9","6","C12","C15","Note2","Note5","Pixle3","Pixel5","Reno5","Reno2","Galaxy 4","Galaxy 5");
$de12=$de2[mt_rand(0,22)];
$dname="$de11 $de12";
$iip = long2ip(rand());
return$u='Mozilla/5.0 (Linux; Android '.$d.'; '.$dname.') AppleWebKit/537.36 (KHTML, like Gecko) Chrome/'.$iip.' Mobile Safari/537.36';
}
$u=useragent();
$one=RandomNumber(1);
$two=RandomNumber(2);
$three=RandomNumber(3);
$four=RandomNumber(4);
$fiwe=RandomNumber(5);
$imo=RandomNumber(15);
$dev=rando(16);
$imei=RandomNumber(21);
$number='9738'.$numb.'';
$i6=RandomNumber(8);

    ### STEP 1: OTP Verification
    $url1 = "https://api.auragold.in/api/auth/v1/verify-otp";
    $data1 = json_encode(["otp" => $otp, "phone" => $mo, "source" => ""]);

    $headers1 = [
        'Host: api.auragold.in',
        'Accept: application/json',
        'Authorization: Bearer null',
        'Content-Type: application/json',
        'Connection: Keep-Alive',
        'User-Agent: okhttp/4.12.0'
    ];

    $curl1 = curl_init();
    curl_setopt_array($curl1, [
        CURLOPT_URL => $url1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data1,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => $headers1
    ]);

    $output1 = curl_exec($curl1);
    $json1 = json_decode($output1, true);
    curl_close($curl1);

    $message = $json1["message"] ?? "";
    $new_user = $json1["data"]["new_user"] ?? false;
    $token = $json1["data"]["access_token"] ?? '';

    $message2 = ''; 
    
    if ($message == 'OTP verified successfully' && $new_user == true && !empty($token)) {
        $url2 = "https://api.auragold.in/api/profile/v1/update";
        $data2 = json_encode([
            "first_name" => $fname,
            "last_name" => $lname,
            "dob" => "10-11-2000",
            "email" => null,
            "state" => "Maharashtra"
        ]);

        $headers2 = [
            'Host: api.auragold.in',
            'Accept: application/json',
            "Authorization: Bearer $token",
            'Content-Type: application/json',
            'Connection: Keep-Alive',
            'User-Agent: okhttp/4.12.0'
        ];

        $curl2 = curl_init();
        curl_setopt_array($curl2, [
            CURLOPT_URL => $url2,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data2,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => $headers2
        ]);

        $output2 = curl_exec($curl2);
        $json2 = json_decode($output2, true);
        curl_close($curl2);

        $message2 = $json2["message"] ?? "";
    }

    
    if ($message == 'OTP verified successfully' || $message2 == 'Profile updated successfully.') {
        echo "<div class='success' role='alert'>OTP Verification Successfully.</div>";
        
        if ($new_user == true) {
            echo "<div class='success' role='alert'>Profile Updated Successfully.</div>";
        }

echo "<form action='claim.php' method='get'>
<center><input type='tel' class='input' name='acc' placeholder='Enter Account Number' required></center>

<center><input type='text' class='input' name='ifsc' placeholder='Enter IFSC Code' required></center>

<input type='hidden' name='token' value='$token'>
            <center><input type='submit' class='formBtn' name='submit' value='Verify'></center>
        </form>";
    } else {
        echo '<div class="error" role="alert">' . $message . '</div>';
        
echo"<meta http-equiv='refresh' content=1;url=tg://resolve?domain=IndianScripters>";
    }
}
?>
<a href="https://telegram.dog/tp_xyz" class="telBtn shine">
    <i class="fa-regular fa-paper-plane"></i>
    <span>Join Telegram Channel ?</span>
</a>
<center>
</body>
</html>
