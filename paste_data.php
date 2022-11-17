<?php      
    include('connection.php');  

 $data= $_POST['data'] ;
echo var_dump($data);
      $sql = "INSERT  INTO paste_data VALUES ('$data ')"; 

       if($conn->query($sql)==TRUE)
         { 

              echo  "  record added";
                  
           }
          else
          {
                  echo "Error:".$sql."<br>".$conn->error;
           }
         $conn->close();
    ?>