<?php

session_start();
if(!isset($_SESSION["name"])) {
  header("Location:index.php");
  }



$con = mysqli_connect('localhost','root','','nss1');

$text="";



echo "$text";

$que="select * from numbers1 ;";
$res=mysqli_query($con,$que);
$phnos="";
$count=0;
while($row = mysqli_fetch_assoc($res)) {
    if($row["Number"]!="")
    {
    
        $phno=$row["Number"];
        $taxvalue=$row["Tax"];
        $text = "Tax value of Rs.".$taxvalue." should be pay before this month.Ignore if paid.";
        // echo"$phno";
        // echo "$text";
        $fields = array(
            "sender_id" => "TXTIND",
            "message" => $text,
            "route" => "v3",
            "numbers" => $phno,
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
          //echo "cURL Error #:" . $err;
          echo '
          <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
          <div class="modal-dialog modal-dialog-scrollable modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="color: green;"><b>SMS Sent Successfully</b></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" >
                <p><b>Messages eroor to n numbers successfully</b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
              </div>
            </div>
          </div>

        </div>
          ';
          contine;
        } else {
          $count++;
          //echo $response.'<br>';
          echo '
          <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
          <div class="modal-dialog modal-dialog-scrollable modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" style="color: green;"><b>SMS Sent Successfully</b></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" >
                <p><b>Messages sent to n numbers successfully</b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">OK</button>
              </div>
            </div>
          </div>

        </div>
          ';
        }

    
    }
   //echo "Owner name: " . $val."<b>";
 }


 echo "<br> The message has sent ".$count." villagers successfully";

//  $ph=substr($phnos,0,strlen($phnos)-1);



?>