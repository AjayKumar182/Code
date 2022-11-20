<?php      
    include('connection.php');  

 $url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$url2=basename($_SERVER['REQUEST_URI']);
    
echo "<br>";
$id=$_SERVER['QUERY_STRING']; //to get the value from the url
 $sql = "select * from paste_data where uri= '$id' ";  
        $result = mysqli_query($conn, $sql);  

?>
<html>
<head>
  <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>
<body>
<div id=frm2>

<form >  

<?php
while($row=mysqli_fetch_array($result))
{
?>
<textarea rows="30" cols="60"  >
<?php
echo  $row['data']; 
}
?>    
</textarea>
 
 
</form>
</div>
</body>
</html>
