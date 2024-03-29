<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <title>Frontend Mentor | Newsletter sign-up form with success message</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

body {
    font-family: 'Roboto', sans-serif;
    background-color: rgba(4, 4, 63, 0.626);
    /* Additional styles for your body */
}
 li{
list-style: none;
}
    .container{
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      background-color: rgb(255, 255, 255);
      margin: 20px auto;
      width: 70%;
      
      padding: 20px;
      border-radius: 30px;
    }
    .img {
      order: 2;
    border-radius: 20px;
    overflow: hidden; /* Ensures that the border-radius is applied to the image */
}
/* label{
  margin: 0px;
  
} */
input[type="email"],[type="username"]{
  /* margin: 25px; */
  margin-top: 0px;
  /* height: 15%; */
  padding: 10px;
  border-radius: 10px;
  width: 60%;
  height: 30px;
}
.btn{
  /* margin: 25px; */
  margin-top: 10px;
  padding: 15px;
  background-color: rgb(15, 7, 50);
  color:white;
  border-radius: 8px;
  width: 65%;
  font-size: 0.8em;
font-weight: bolder;
  text-align: center;
}
    .content{
      margin: 35px;
     margin-bottom:40px;
     order: 1;
    }
    .content li{
      margin-bottom: 16px;
    
    }

    @media screen and (max-width: 768px) {
      .container {
        flex-direction: column;
        width: 90%;
      }
      .content ul li p {
        margin-bottom: 20px;
}
      .img {
        order: 1;
        margin-top: 20px;
        width: 100%;
      }

      .content {
        
        margin: 20px;
        order: 2;
      }
      
.content p{
  font-size: 1rem;
}
      input[type="email"] {
        width: 90%;
      }

      .btn {
        width: 100%;
        font-size: 0.8em;
        font-weight: bolder;
      }
      .img{
       
       
      }
    }

    /* .msg{
      background-color: rgb(255, 255, 255);
      align-items: center;
      justify-content: center;
      width: 30%;
      padding: 30px;
      margin: 20px auto;
      border-radius: 25px
    }
    .msg .btn{
      padding: 16px;
      width: 100%;
    } */
    /* .content ul{
      margin-bottom:30px;
      margin: 10px;
      padding:0px;
    }
    .content ul li{
      margin:10px;
    }
    .content h1{
      font-family: 'Roboto', sans-serif;
      font-size:2.5rem;
    } */
    /* .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); } */

  </style>
</head>
<body>

  <!-- Sign-up form start -->

 <div class="container">
<div class="content">
<h1>Stay Updated !</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quia magni asperiores?</p>
<ul>
  <li>
    
      <i class="fa-solid fa-circle-check" style="color: #fd5858; display: inline-block; margin-right: 10px;"></i>
    <p style="display: inline;">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
    
  </li>

  <li>
    <i class="fa-solid fa-circle-check" style="color: #fd5858; display: inline-block; margin-right: 10px;"></i>
    <p style="display: inline;">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
    
  </li>

  <li>
    <i class="fa-solid fa-circle-check" style="color: #fd5858; display: inline-block; margin-right: 10px;"></i>
    <p style="display: inline;">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
  </li>
  
</ul>
<form action="" method="post">
<label for="email">Email Address</label><br><br>
<input type="email" placeholder="Enter Email.." name="email" value="email"><br><br>

<label for="username">User Name</label><br><br>
<input type="text" placeholder="Enter username.." name="username" value="username">
<button class="btn" type="submit" name="submit">Subscribe to monthly newsletter</button>
</form>
</div>

<div class="img">
<img src="desktop-design.jpg" alt="">
</div>

 </div>
 

  <?php
  echo"hi";
       if(isset($_POST['submit'])){
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $username=isset($_POST['username'])? $_POST['username']:'';
        if($email == ""){
            echo("<script>alert('Fill all info')</script>");
        } else {
          $con=mysqli_connect("localhost","root","","sam");
          if(!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $email=mysqli_real_escape_string($con,$email);
           
$query="INSERT INTO register  (username,email) VALUES  ('$username',$email')";
try{
  if(mysqli_query($con, $query)){
    echo ("<script>alert('Successfully created!')</script>");
  }
  else{
  echo ("<script>alert(' unable to created!')</script>");
  }
}
catch(mysqli_sql_exception $e){
  echo ("<script>alert(' unable to created!')</script>");

}
    }}
  ?>
</body>
</html>