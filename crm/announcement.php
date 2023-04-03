<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>LOYALEADSTA POS</title>
		<style id="applicationStylesheet" type="text/css">
			@font-face {
				font-family: "Inter-SemiBold";
				src: url("Inter-SemiBold.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 08. POS_Dashboard_Announcement - rev1;
				--web-view-id: T_08_POS_Dashboard_Announcement_-_rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_08_POS_Dashboard_Announcement_-_rev1;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
				font-family: "Inter-SemiBold" !important;
			}
			#T_08_POS_Dashboard_Announcement_-_rev1 {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(246,255,246,1);
				overflow-y: scroll;
				overflow-x: hidden;
				--web-view-name: [T] 08. POS_Dashboard_Announcement - rev1;
				--web-view-id: T_08_POS_Dashboard_Announcement_-_rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			#Group_2003 {
				position: absolute;
				width: 100%;
				height: 100%;
				left: 0px;
				top: 0px;
				overflow: visible;
			}
			#Mask_Group_6 {
				position: absolute;
				width: 100%;
				height: 100%;
				left: 0px;
				top: 0px;
				overflow: visible;
				filter: blur(10px) brightness(0.89);
				-webkit-filter: blur(10px) brightness(0.89);
			}
			#Mask_Group_3 {
				position: absolute;
				width: 342px;
				height: 519px;
				left: 0;
				right: 0;
				top: 20%;
				margin: 0 auto;
			}
			#FREE_SHIPPING {
				left: 0;
				right: 0;
				margin: 0 auto;
				top: 186px;
				position: absolute;
				overflow: visible;
				width: 286px;
				white-space: nowrap;
				text-align: left;
				font-family: Inter;
				font-style: normal;
				font-weight: normal;
				font-size: 38px;
				color: rgba(255,255,255,1);
			}
			#FOR_P1000_AND_ABOVE {
				left: 0;
				right: 0;
				margin: 0 auto;
				top: 233px;
				position: absolute;
				overflow: visible;
				width: 284px;
				white-space: nowrap;
				text-align: left;
				font-family: Inter;
				font-style: normal;
				font-weight: normal;
				font-size: 24px;
				color: rgba(255,255,255,1);
			}
			#Shop_Now {
				left: 0;
				right: 0;
				margin: 0 auto;
			    top: 620px;
				position: absolute;
				overflow: visible;
				width: 210px;
				height: 50px;
				white-space: nowrap;
				line-height: 40px;
				margin-top: -11.5px;
				text-align: center;
				font-style: normal;
				font-weight: bold;
				font-size: 17px;
				color: rgba(255,255,255,1);
				background-color: #289b2a;
				cursor: pointer;
				border-radius: 8px;
			}
			#x-circle {
				position: absolute;
				width: 20px;
				height: 20px;
				left: 61%;
				top: 16%;
				overflow: visible;
			}
			#Ellipse_336 {
				fill: transparent;
				stroke: rgba(255,255,255,1);
				stroke-width: 2px;
				stroke-linejoin: round;
				stroke-linecap: round;
				stroke-miterlimit: 4;
				shape-rendering: auto;
			}
			.Ellipse_336 {
				position: absolute;
				overflow: visible;
				width: 22px;
				height: 22px;
				left: 0px;
				top: 0px;
			}
			#Line_992 {
				fill: transparent;
				stroke: rgba(255,255,255,1);
				stroke-width: 2px;
				stroke-linejoin: round;
				stroke-linecap: round;
				stroke-miterlimit: 4;
				shape-rendering: auto;
			}
			.Line_992 {
				overflow: visible;
				position: absolute;
				width: 8.829px;
				height: 8.828px;
				left: 5px;
				top: 5px;
				transform: matrix(1,0,0,1,0,0);
			}
			#Line_993 {
				fill: transparent;
				stroke: rgba(255,255,255,1);
				stroke-width: 2px;
				stroke-linejoin: round;
				stroke-linecap: round;
				stroke-miterlimit: 4;
				shape-rendering: auto;
			}
			.Line_993 {
				overflow: visible;
				position: absolute;
				width: 8.829px;
				height: 8.828px;
				left: 5px;
				top: 5px;
				transform: matrix(1,0,0,1,0,0);
			}
			#Lorem_ipsum_dolor_sit_amet_con {
				left: 0;
				right: 0;
				margin: 0 auto;
				top: 283px;
				position: absolute;
				overflow: visible;
				width: 266px;
				height: 69px;
				line-height: 25px;
				margin-top: -5px;
				text-align: center;
				font-family: Inter;
				font-style: normal;
				font-weight: normal;
				font-size: 15px;
				color: rgba(255,255,255,1);
			}

			/* tablet */
			@media (min-width: 760px) and (max-width: 1023px) {
				#x-circle {
					left: 69%;
				}
			}

			/* phones */
			@media (max-width: 575px){
				#x-circle {
					left: 88%;
				}
			}

		</style>

	</head>
	<body>

		<div id="T_08_POS_Dashboard_Announcement_-_rev1">

		<div id="Group_2003">
				<img id="Mask_Group_6" src="../pos/Mask_Group_6.png" alt="Mask_Group_6.png 1x, Mask_Group_6@2x.png 2x">
			</div>
		
		
		                         
                           				<?php

         include('../dist/dbcon.php');
$date=date("Y-m-d");
session_start();
$ii=$_GET['login'];

$query=mysqli_query($con,"select * from  announcement")or die(mysqli_error());
$row=mysqli_fetch_array($query);


$rows=mysqli_num_rows($query);

if($rows<=0){
    	  echo "<script>document.location='dashboard.php?login=$ii'</script>";
    
}
    
    ?>
		
		
		
		
		
		
		
			<img id="Mask_Group_3" src="../auth/users/uploads/<?php echo $row['desc1'];?>" >
			
		
<br><br><br><br><br><br><br><br><br><br>
	

			<a style="padding:5px" id="Shop_Now" ><?php echo $row['button_name'];?></a>

			<a href="dashboard.php?login=<?php echo $_GET['login'];?>">	<div id="x-circle">
				<svg class="Ellipse_336">
					<ellipse id="Ellipse_336" rx="10" ry="10" cx="10" cy="10">
					</ellipse>
				</svg>
				<svg class="Line_992" viewBox="0 0 6 6">
					<path id="Line_992" d="M 6 0 L 0 6">
					</path>
				</svg>
				<svg class="Line_993" viewBox="0 0 6 6">
					<path id="Line_993" d="M 0 0 L 6 6">
					</path>
				</svg>
			</div></a>



		</div>

	</body>
</html>