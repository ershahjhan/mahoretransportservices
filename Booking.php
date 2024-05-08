<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sjtransportservices</title>

	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	    $("#myheading").click(function(){
	    $("#myheading").html("thanks for visiting our side");
	    $("#myheading").css("color","red");
	    $("#myheading").css("backgroundColor","orange");
	    $("#myheading").css("marquee","blue");
	    });
		});
	</script>
	<style type="text/css">
		#mainpage{
			width: 1500px;
			height: 120px;
			position: relative;
			left: 15px;
			background-color: skyblue;
		}
		#mainpage>#heading{
			position: fixed;
			left: 20px;
			z-index: 5;
		}
       #mainpage>#heading>ul{
       	margin: 0px;
            	padding: 0px;
            	list-style-type: none;
       }
       #mainpage>#heading>ul>li{
       margin: 0;
            	padding: 0;
            	width: 265px;
			line-height: 60px;
			background-color: purple;
			/*background-image: url("bgmenu.jpg");*/
			float: left;
			border: 2px blueviolet;
			/*text-align: center;
			position: fixed;*/

     }
      #mainpage>#heading>ul>li>a{
      	text-decoration: none;
			display: block;
			font-size: 30px;
			color: white;
			text-align: center;

      }
      #mainpage>#heading>ul>li>a:hover{
      	background-color:  ;
      	/*font-family: Webdings;*/
      	font-style: italic;
      	color: blue;
		border-bottom: solid yellow 4px;

      }
            
           /* #veh
            {
            	width: 400px;
      	        height: 300px;
      	        margin-left: 50px;
      			float: left;
      			border: solid 4px white;
            }*/
            #form{
			height: 100px;
			width: 400px;
			}
		
	</style>


	<style type="text/css">
		 
		#form{
			height: 100px;
			width: 400px;

		}

		#design{
			background-color: orangered;
			text-decoration: revert;
		}
	</style>

	<script type="text/javascript">
		function f1(){
			
			var email=document.getElementsByTagName('input')[0];
			var pass=document.getElementsByTagName('input')[1];
			var indexofat=email.value.indexOf("@");
			var indexofdot=email.value.lastIndexOf(".");
			alert(indexofdot);
			alert(email.value.length-4);
			if(email.value.length==0)
			{
				alert("Email should not be empty");
				return false;
			}
			else if(indexofat<0 || indexofat==0 || indexofat==email.value.length-1)
			{
				alert("@ is missing or at wrong position");
				return false;
			}
			else if(indexofdot!=email.value.length-4 && indexofdot!=email.value.length-3)
			{
				
				
				alert("dot is missing or at wrong position");
				return false;
				
			}
			else if(pass.value.length<6)
			{
				alert("Password should be more then 6 characters");
				return false;
			}
			else
			{
				return true; 
			}

		}
	</script>
	<script type="text/javascript" src="jquery.js.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		$("h2").click(function(){
		$("h2").html("thanks for visiting web");
		$("h2").css("color","red");
		$("h2").css("backgroundColor");
		});
		});
		
	</script>
</head>
<body>
	<div id="mainpage">
		<div id="heading">
			<ul>
			<li><a href=""> Home       </a></li>
			<li><a href=""> About us   </a></li>
			<li><a href=""> Contact us </a></li>
			<li><a href=""> Privacy    </a></li>
			<li><a href=""> Policy     </a></li>
		</ul>
		
	</div>
	<h1><marquee align="center">introduction to our services</marquee></h1>
	<h3></h3>

	
</div>

	
	<h1 id="myheading" align="center"border="2">introduction to our services</h1><br>

	<h3>we provide sevices in only jammu and kashmir state ,in all our distt.and ground lavel our company and business in this field more then 10years but now we will provide servises in all disst. and tehsils and also in villages lavel our stand of vehicles in all tehsils of every disst. and all villages of every blocks we provide 24*7 services in all j&k all commercial vehicles and drivers are already connected with us .we provide all vehicles like four seeters to mini busses and alse busses are connected with us thanks for visit our site you can book the vehicle for any route of jammu and kahmir 
	special discount for events and merriages booking.</h3>
	<h1 align="center"> thank you dear have a nice day we will contact you soon</h1><br>


	<form>
		<table  border="2" align="center" cellpadding="10" cellspacing="5" bgcolor="lightgreen">
			<th colspan="4"bgcolor="red">
				<h2>Mention  your route<h2> </th>

			<tr><td>Route</td><td><input type="text" placeholder="FROM" name=""></td>
				<td>end route</td><td><input type="text" placeholder="TO" name=""></td></tr>
			<tr><td>Vehicle type</td><td><input type="vehicle type.." placeholder="" name=""></td><td>No of passernger</td><td><input type="number" placeholder="" name=""></td></tr>
			
			
		</table>
	</form>

	<form action="process.php" method="get" onsubmit="return f1()">
		<table  border="2" align="center" cellpadding="10" cellspacing="5" bgcolor="orange">
			<th colspan="4"bgcolor="red">submit form </th>
			<tr></td><td>address from<td><input type="text" placeholder="Disst." name=""></td><td><input type="text" placeholder="Teh." name=""></td><td><input type="text" placeholder="Village" name=""></td></tr>
			<tr></td><td>End location <td><input type="text" placeholder="Disst." name=""></td><td><input type="text" placeholder="Teh." name=""></td><td><input type="text" placeholder="Village" name=""></td></tr>
			
			<tr><td>Enter your name:<input type="text" placeholder="" name=""></td>
				<td>Mobiile number:<input type="number" placeholder="" name=""></td>
			<td>user name:<input type="text" placeholder="Enter your email" name=""></td> 
			<td>pasword:<input type="number" placeholder="password" name=""></td></tr>
				<tr><td>No-of-Km<input type="number" placeholder="Totel kilometer route" name=""></td><td>Payment mode</td><td><input type="radio" name="payment">online</td>
	 			<td> <input type="radio" name="payment">offline</td></tr>
	 			 <tr>
			   <td align="center" colspan="4"><input type="submit" name=""></td></tr>
			 

		
	</table>
</form>
<h2 id="design"> <marquee>developed by Er.Shahjhan Qureshi web developer corporation pvt.ltd jammu +916005875909 contact us for more </marquee></h2 >



              


	

</body>
</html>