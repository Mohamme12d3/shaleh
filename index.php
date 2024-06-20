<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shalh aden</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="JannaLTRegular.css">
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="images/logo1.png">
            <h2>شالية عدن</h2>
        </div>
        <div class="book">
          <p>أهلا وسهلاً بك في شاليه عدن للحجز املا الاستماره ادناة</p>
          <form action="index.php" method="post">
            <input type="text" placeholder="أدخال الاسم" name="name"/>
            <input type="text" placeholder="أدخال البريد الالكتروني" name="email"/>
            <input type="number" placeholder="أدخال رقم الهاتف" name="phone"/>
            <input type="date" name="date"/>
            <input type="submit"value="أحجز الان" name="send"/>
          </form>

          <?php
        //الاتصال بالسيرفر او قاعدة البيانات
        
            $host     ="localhost";
            $user     ="root";
            $password ="";
            $dbName   ="hospital";

            $conn = mysqli_connect($host,$user,$password,$dbName);


         //ارسال المعلومات المدخلة بواسطة صاحب الحجز الي قاعدة البيانات 

         
        

              $pName = $_POST['name'];
              $pEmail = $_POST['email'];
              $pPhone = $_POST['phone'];
              $pDate = $_POST['date'];
              $pSend = $_POST['send'];

              if($pSend){
                $query = "INSERT INTO patients(name,email,phone,date)VALUE('$pName','$pEmail','$pPhone','$pDate')";
                $result = mysqli_query($conn,$query);

                echo "<p style='color:green'>"."تم الحجز"."</p>";
              }
              else{
                echo "<p style='color:red'>"." عفواً حدث خطأ ما حاول مجدداً "."</p>";
              }

           


        
            ?>    


        </div>
      </div>   
</body>
</html>