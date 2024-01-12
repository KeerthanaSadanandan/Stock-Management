<?php
function getdb()
{
  $servername = "localhost";
  $username = "keerthana@";
  $password = "123456";
  $dbname="testDB";
  
  try {
     
      $conn = mysqli_connect($servername, $username, $password,$dbname);
       //echo "Connected successfully"; 
      }
  catch(exception $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }
      return $conn;
  }
 if(isset($_POST["Import"])){
    
    $filename=$_FILES["file"]["f_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 100, ",")) !== FALSE)
           {
             $sql = "INSERT into stock (No_,Brand,Category,Product_name,Stock,Price,Date_time) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."')";
                   $result1 = mysqli_query($con, $sql);
      
           }
      
           fclose($file);  
     }
  } 
  
  //sales

  if(isset($_POST["sales"])){
    
    $filename=$_FILES["file"]["f_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 100, ",")) !== FALSE)
           {
            $sql="UPDATE  stock
                 SET Stock=Stock-.$getData[4]" ;
             
                   $result2 = mysqli_query($con, $sql);
      
           }
      
           fclose($file);  
     }
  }   

  //sales return
  if(isset($_POST["s_r"])){
    
    $filename=$_FILES["file"]["f_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 100, ",")) !== FALSE)
           {
            $sql="UPDATE  stock
            SET Stock=Stock+$getData[4]" ;
        
              $result3 = mysqli_query($con, $sql);
      
           }
      
           fclose($file);  
     }
  }   

  //purchase

  if(isset($_POST["purchase"])){
    
    $filename=$_FILES["file"]["f_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 100, ",")) !== FALSE)
           {
            $sql="UPDATE  stock
            SET Stock=Stock+$getData[4]" ;
                   $result4 = mysqli_query($con, $sql);
      
           }
      
           fclose($file);  
     }
  } 

  //purchase return

  if(isset($_POST["p_r"])){
    
    $filename=$_FILES["file"]["f_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($getData = fgetcsv($file, 100, ",")) !== FALSE)
           {
            $sql="UPDATE  stock
            SET Stock=Stock+$getData[4]" ;
                   $result5 = mysqli_query($con, $sql);
      
           }
      
           fclose($file);  
     }
  } 
  if(isset($_POST["History"])){
    echo $result1;
    echo $result2; 
    echo $result3;
    echo $result4;
    echo $result5;
   }
  

 ?>
      
           fclose($file);  
     }
  }   
 ?>