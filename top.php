<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
b {
	font-weight: bold;
}
button {
    background-color: white;
    color: gray;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    font-weight: bold;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<!-- <button" style="width:auto;">Login</button> -->

<div id="id01" class="modal">
  <form class="modal-content animate" action="#" method="post">
    <div class="imgcontainer">
      <span class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>ชื่อผู้ใช้งาน</b></label>
      <input type="text" placeholder="ชื่อผู้ใช้งาน" name="user" required>

      <label><b>รหัสผ่าน</b></label>
      <input type="password" placeholder="รหัสผ่าน" name="pass" required>
      <center>
        <input style="border: 1px solid gray;" type="submit" name="submit" value="เข้าสู่ระบบ" class="btn">
      </center>
    </div>
  </form>
</div>

<div id="id02" class="modal">
  <form class="modal-content animate" action="dologin.php">
    <div class="imgcontainer">
      <span class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container" style="font-size: 12pt;">
      <label><b>ชื่อผู้ใช้งาน</b></label>
      <input type="text" placeholder="ชื่อผู้ใช้งาน" name="user" required style="height: 35px;">

      <label><b>รหัสผ่าน</b></label>
      <input type="password" placeholder="รหัสผ่าน" name="pass" required style="height: 35px;">
      <label><b>ยืนยันรหัสผ่าน</b></label>
      <input type="password" placeholder="ยืนยันรหัสผ่าน" name="cpass" required style="height: 35px;">

      <label><b>ที่อยู่</b></label>
      <input type="text" placeholder="ที่อยู่" name="address" required style="height: 35px;">

      <label><b>เบอร์โทรศัพท์</b></label>
      <input type="text" placeholder="เบอร์โทรศัพท์" name="tel" required style="height: 35px;">
       
      <center><button style="border: 1px solid gray;" type="submit">สมัครสมาชิก</button></center>
    </div>
  </form>
</div>

<div id="id03" class="modal">
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<?php 
  if(isset($_POST['submit'])) {
    $result = $conn->query('select * from user');
    while ($rs = mysqli_fetch_array($result)) {
      if ($rs['username']==$_POST['user']&&$rs['password']==$_POST['pass']) {
        $_SESSION['user'] = $rs['username'];
        echo "<script>window.location.assign('index.php')</script>";
      }else{
        echo "<script>alert('ชื่อผู้ใช้งาน/รหัสผ่านไม่ถูกต้อง !')</script>";
        echo "<script>window.location.assign('index.php')</script>";
      }
    }
  }
 ?>