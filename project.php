<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <style>
     .navbar{
         background-color: whitesmoke;
         border-radius: 30px;
         margin: -33px 2px;
     }
     .navbar ul{
     overflow: auto;
     
     
     }
     .navbar li{
        
         float: left;
         list-style: none;
         padding: 12px 32px;
          margin: 0px 21px;
     }
     ul li a{
     text-decoration: none;
     color: black;
     }
     ul li a:hover{
        
        color: rgb(182, 107, 107);
        
     }
     .search{
         
         float: right;
         color: white;
         padding: 0px 96px;
         
     }
     .navbar input{
         border: 4px solid rgb(182, 107, 107);
         border-radius: 7px;
         padding: 3px 12px;
     }
     img{
         height: 40px;
         width: 50px;
         
     }
     .logo li{
         margin: 2px;
         padding: 2px 2px;

     }
     .navbar1{
        margin-top: 0px;
         
     }
     .navbar1 ul{
     overflow: auto;
     
     
     }
     .navbar1 li{
        
         float: left;
         list-style: none;
         padding: 0px 34px;
          margin: -10px 25px;
     }
    
     
     .super{
        border: 8px solid black;
         height: 106px;
         background-color: whitesmoke;
         border-radius: 25px;
     }
     #but1{
        border: 3px solid rgb(10, 10, 10);
         border-radius: 9px;
         padding: 1px 16px;
         margin: 0px 12px;

     }
     .search input:hover{
         
         background-color: silver;
     }
	 .form-box{
	 width:380px;
	 height:480px;
	 position:relative;
	 margin:6% auto;
	 backgroung:#fff;
	 padding:5px;
	 overflow:hidden;
	 }
	 .button-box{
	 width:220px;
	 margin:35px auto;
	 position:relative;
	 box-shadow:0 0 20px 9px #ff61241f;
	 border-radius:30px;
	 }
	 .toggle-btn{
	 padding:10px 30px;
	 cursor:pointer;
	 background:transparent;
	 border:0;
	 outline:none;
	 position:relative;
	 }
	 #btn{
	 top:0;
	 lefy:0;
	 position:absolute;
	 width:110px;
	 height:100%;
	 background:linear-gradient(to right,#ff105f,#ffad06);
	 border-radius:30px;
	 transition:.5s;
	 }
	 .social-icons{
	 margin:30px auto;
	 text-align:center;
	 }
	 .social-icons img{
	   width:30px;
	   margin:0,120px;
	   box-shadow:0 0 20px 0 #7f7f7f3d;
	   cursor:pointer;
	   border-radius: 50%;
	 }
	 .input-group{
	 top:180px;
	 position:absolute;
	 width:280px;
	 transition:.5s;
	 }
	 .input-field{
	 width:100%;
	 padding:10px 0;
	 margin:5px 0;
	 border-left:0;
	 border-top:0;
	 border-right:0;
	 border-bottom:1px solid #999;
	 outline:none;
	 background:transparent;
	 }
	.submit-btn{
	width:85%;
	padding: 10px 30px;
	cursor: pointer;
	display:block;
	margin:auto;
	background:linear-gradient(to right,#ff105f,#ffad06);
	border:0;
	outline:none;
	border-radius:30px;
	}
	.check-box{
	margin: 30px 10px 30px 0;
	}
	.span{
	color:#777;
	font-size: 12px;
	bottom:68px;
	position:absolute;
	}
	#login{
	left:50px;
	}
	#register{
	left:450px;
	}

    </style>
</head>
<body>
<nav class="super">
    <nav class="navbar1">
        <ul>
            <li><img src="/carlogo2.png" alt="error"></li>
            <li><img src="/airplanelogo2.png" alt="error" ></li>
            <li><img src="/hotel3.png" alt="error"></li>
            <li><img src="/railwaylogo.png" alt="error"></li>
        </ul>
    </nav>
    <nav class="navbar">
        <ul>
            <li><a href="#" id="a1" >Cars</a></li>
            <li><a href="#" id="a2" >Airplane</a></li>
            <li><a href="#" id="a3" >Hotel</a></li>
            <li><a href="#" id="a4" >Railway</a></li>
            <div class="search">
                <input type="text" name="s1" id="search1" placeholder="Search Here">
                <input type="button" value="Search" >
            </div>
        </ul>
    </nav>
</nav>
     <div class="form-box">
	     <div class ="button-box">
		    <div id="btn"></div>
	        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
			<button type="button" class="toggle-btn" onclick="register()">Register</button>
	     </div>
		 <div class="social-icons">
	      <img src="fb.jpeg">
		  <img src="tw.jpeg">
		  <img src="gp.jpeg">
	     </div>
		 <form id="login" class="input-group" action="login.php" method="POST">
		   <input type="email" name="u" class="input-field" placeholder="Email" required>
		   <input type="password" name="p" class="input-field" placeholder="Enter Password" required>
		   <input type="checkbox" class="check-box"><span>Remember Password</span>
		   <button type="submit" class="submit-btn">Log In</button>
		 </form>
		 <form  id="register" class="input-group" action="signup.php" method="POST">
		   <input type="text"  class="input-field" placeholder="User Id" required>
		   <input type="email"  name="u" class="input-field" placeholder="Email Id" required="required"/>
		   <input type="password"  name="p" class="input-field" placeholder="Enter Password" required="required"/>
		   <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
		   <button type="submit" class="submit-btn">Register</button>
		 </form>
	 </div>
<script>
var x=document.getElementById("login");
var y=document.getElementById("register");
var z=document.getElementById("btn");
function register(){
    x.style.left="-400px";
	y.style.left="50px";
	z.style.left="110px";
}
function login(){
    x.style.left="50px";
	y.style.left="450px";
	z.style.left="0px";
}
</script>
    
</body>
</html>