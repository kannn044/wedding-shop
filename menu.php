<div class="menu">
	<p style="font-size: 25pt; font-weight: bold; color: gray; padding: 15px;">W e d d i n g D r e s s</p>
	<nav class="navigation">
	  <ul class="mainmenu">
	    <li><a href="">หมวก</a></li>
	    <li><a href="">เครื่องประดับ</a></li>
	    <li><a href="">ชุดแต่งงาน</a></li>
	    <li><a href="">รองเท้า</a></li>
	  </ul>
	</nav>
</div>
<style type="text/css">
	.menu{
		background-image: url('pic/bg.jpg');
		background-size: cover;
		/*background: #FEE5C4;*/
		font-weight: bold;
		position: fixed;
		width: 20%;
		height: 100%;
		float: left;
	}
	.navigation{
		margin-top: 20%;
	}
	.mainmenu, .submenu {
	  list-style: none;
	  padding: 0;
	  margin: 0;
	}

	/* make ALL links (main and submenu) have padding and background color */
	.mainmenu a {
	  display: block;
	  background-color: white;
	  text-decoration: none;
	  padding: 10px;
	  color: gray;
	}

	/* add hover behaviour */
	.mainmenu a:hover {
	    background-color: #FFF2E1;
	}


	/* when hovering over a .mainmenu item,
	  display the submenu inside it.
	  we're changing the submenu's max-height from 0 to 200px;
	*/

	.mainmenu li:hover .submenu {
	  display: block;
	  max-height: 200px;
	}

	/*
	  we now overwrite the background-color for .submenu links only.
	  CSS reads down the page, so code at the bottom will overwrite the code at the top.
	*/

	.submenu a {
	  background-color: #999;
	}

	/* hover behaviour for links inside .submenu */
	.submenu a:hover {
	  background-color: #666;
	}

	/* this is the initial state of all submenus.
	  we set it to max-height: 0, and hide the overflowed content.
	*/
	.submenu {
	  overflow: hidden;
	  max-height: 0;
	  -webkit-transition: all 0.5s ease-out;
	}
</style>