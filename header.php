<div class="row justify-content-end" style="padding: 10px;">
	<?php if(!$_SESSION['user']){ ?>
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color: white; color: gray;"><img src="pic/login.png" width="25">&nbsp;เข้าสู่ระบบ</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
    <button onclick="document.getElementById('id02').style.display='block'" style="width:auto; background-color: white; color: gray;"><img src="pic/ris.png" width="25">&nbsp;สมัครสมาชิก</button>
    <?php }else{ ?>
    	<div class="dropdown">
		  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 110%; background-color: white; color: gray; font-size: 15pt; border-color: white; padding: 0; font-weight: bold;">
		    <?php echo $_SESSION['user']; ?>
		  </button>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		    <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
		  </div>
		</div>
    <?php } ?>
</div>