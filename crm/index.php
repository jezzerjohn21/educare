<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Loyaleadsta</title>
		<style id="applicationStylesheet" type="text/css">
			@font-face {
				font-family: "Inter-SemiBold";
				src: url("Inter-SemiBold.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 01. CRM_LandingPage - rev1;
				--web-view-id: T_01_CRM_LandingPage_-_rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T_01_CRM_LandingPage_-_rev1;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
				font-family: "Inter-SemiBold" !important;
			}
			#T_01_CRM_LandingPage_-_rev1 {
				background-image: linear-gradient(#00853f, #004320);
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(255,255,255,1);
				overflow-y: scroll;
				overflow-x: hidden;
				--web-view-name: [T] 01. CRM_LandingPage - rev1;
				--web-view-id: T_01_CRM_LandingPage_-_rev1;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			#POS {
				margin-top: 10%;
			}
			#Loyaleadsta {
				overflow: visible;
				width: 100%;
				white-space: nowrap;
				line-height: 33px;
				margin-top: -3px;
				text-align: center;
				font-family: Inter;
				font-style: normal;
				font-weight: bold;
				font-size: 27px;
				color: rgba(255,255,255,1);
				letter-spacing: 3px;
				text-transform: uppercase;
			}
			#Sign_Up {
				overflow: visible;
				width: 342px;
				height: 56px;
				font-family: Inter;
				white-space: nowrap;
				text-align: center;
				font-style: normal;
				font-weight: bold;
				font-size: 17px;
				letter-spacing: 1px;
				color: rgba(255,255,255,1);
				background-color: rgba(218,186,0,1);
				border-radius: 8px;
				cursor: pointer;
				margin: 0 auto;
				display: block;
				margin-top: 50px;
			}
			#Log_In {
				overflow: visible;
				width: 342px;
				height: 56px;
				font-family: Inter;
				white-space: nowrap;
				text-align: center;
				font-style: normal;
				font-weight: bold;
				font-size: 17px;
				letter-spacing: 1px;
				color: rgba(255,255,255,1);
				background-color: rgba(40,155,42,1);
				border-radius: 8px;
				cursor: pointer;
				margin: 0 auto;
				display: block;
				margin-top: 15px;
			}
			.img-holder {
				text-align: center;
			}
			.buttons_holder {
				text-align: center;
				width: 100%;
			}

			@media (max-width: 575px){
				#POS {
					margin-top: 35%;
				}
				#Loyaleadsta {
					margin-top: 10px;
				}
				.buttons_holder {
					margin-top: 20%;
					margin-bottom: 20%;
				}
				#Sign_Up,  #Log_In{
					width: 85% !important;
				}
			}
		</style>
	</head>
	<body>
		<div id="T_01_CRM_LandingPage_-_rev1">
			<div class="img-holder">
				<img id="POS" src="POS.png" alt="POS.png 1x, POS@2x.png 2x">
			</div>
			<div id="Loyaleadsta">
				<span>Loyaleadsta</span>
			</div>
			<!-- if you have functions for signup and login just change the function inside the onclick -->
			<div class="buttons_holder">
					<button id="Sign_Up" onclick="window.location.href='signup.php';">Sign Up</button>
			<button id="Log_In" onclick="window.location.href='login.php';">Log In</button>
			</div>
		</div>
	</body>
</html>












