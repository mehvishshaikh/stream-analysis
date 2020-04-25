<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="table.css">
    <title>Student details</title>
    <style>
        tr{
            color: #000;
        }
        table{
            text-align: center;
        }

        th{
            color: #fff;
        }
        td{
            font-size: 14px;
            width: 300px;
        }
    </style>
</head>

<body>
<div class="topnav" id="myTopnav">
                <a href="#" class="active">Stream analysis</a>
                <a href="index.html">Home</a>
                <a href="query.php">Student Reviews</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
                </a>
              </div>
              <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        </script>
              <br></div>
    <div class="container">
       <center><h1>Student Details</h1></center>
     </div><br>
     <section id="table">
        <center><table border = 1>
            <tr><th>ID</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php
            $con=mysqli_connect("localhost","root","","project");
            if($con->connect_error){
                die("connection failed:".$con->connect_error);
             }
             $sql="SELECT ID, Email, Password from user";
             $result=$con->query($sql);
             if($result->num_rows>0){
                 while($rows=$result->fetch_assoc()){
                     echo "<tr><td>".$rows["ID"]."</td><td>".$rows["Email"]."</td><td>".$rows["Password"]."</td></tr>";
                 }
             }
             else{
                 echo "0 result";
             }
             $con-> close()
            ?>
        </table></center>
     </section>
    <div class="footer">
        <h4>&copy;COPYRIGHT <br> All Rights Reserved</h4>
        </div>
       
</body>
</html>