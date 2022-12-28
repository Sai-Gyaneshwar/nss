<?php
session_start();
if(!isset($_SESSION["name"])) {
  header("Location:index.php");
  }




$con = mysqli_connect('localhost','root','','nss1');

$text="";
if(isset($_POST['editor1']))
{
  $text=strip_tags($_POST['editor1']);
  echo "1";
}
echo "2";
echo "$text";

$que="select * from numbers1 ;";
$res=mysqli_query($con,$que);
$phnos="";
while($row = mysqli_fetch_assoc($res)) {
    if($row["Number"]!="")
    {
    if ($phnos=="")
    {
        $phnos=$row["Number"].",";
    }
    $phnos=$phnos.$row["Number"].",";
    }
   //echo "Owner name: " . $val."<b>";
 }

 $ph=substr($phnos,0,strlen($phnos)-1);

echo"$ph";
echo "$text";

$fields = array(
    "sender_id" => "TXTIND",
    "message" => $text,
    "route" => "v3",
    "numbers" => $ph,
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization: oJ5R3VXu8rGdqYHlEOmiKAF7yTb0gWZCtwPcIUhpa1DkesLx9zr9f1K5zcqMsu3xXWBoVmLlYS6P7HGD",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
  
curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  
  echo "<script>alert('Messeage sent Successfully')</script>";
  //echo $response;
}
?>