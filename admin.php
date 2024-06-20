<?php
  include "header.php";
?>

<table>
  <th>الرقم</th>
  <th>الاسم</th>
  <th>رقم الهاتف</th>
  <th>البريدالالكتروني</th>
  <th>التاريخ</th>

<?php

  $host     ="localhost";
  $user     ="root";
  $password ="";
  $dbName   ="hospital";

  $conn = mysqli_connect($host,$user,$password,$dbName);


  //عرض البينات 


  $query = "SELECT*FROM patients";
  $result = mysqli_query($conn,$query);

  
  if ($result){
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr><td>" .$row['id']."</td><td>" .$row['name']."</td><td>" .$row['phone']."</td><td>" .$row['email']."</td><td>" .$row['date']."</td></tr>";
    }
    echo "</table>";
  }
  else{
    echo "يوجد خطا";
  }

  ?>
  


