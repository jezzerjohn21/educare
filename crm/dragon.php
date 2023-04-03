<?php

/**
 * Do not forget to set these to your Account credentials.
 * It would be better to store these as an admin setting.
 **/
define('MERCHANT_ID', 'LEADSAPCORP');
define('MERCHANT_PASSWORD', 'weCibL4kbqu9abW');

define('ENV_TEST', 0);
define('ENV_LIVE', 1);

$environment = ENV_TEST;

?>

  <?php

  $errors = array();
  $is_link = false;

  $parameters = array(
      'merchantid' => MERCHANT_ID,
      'txnid' => $_GET['invoice'],
      'amount' => $_GET['total'],
      'ccy' => 'PHP',
      'description' => 'Loyaleadsta Crm Order',
      'email' => $_GET['email'],
  );

  $fields = array(
      'txnid' => array(
          'label' => 'Transaction ID',
          'type' => 'text',
          'attributes' => array(),
          'filter' => FILTER_SANITIZE_STRING,
          'filter_flags' => array(FILTER_FLAG_STRIP_LOW),
      ),
      'amount' => array(
          'label' => 'Amount',
          'type' => 'number',
          'attributes' => array('step="0.01"'),
          'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
          'filter_flags' => array(FILTER_FLAG_ALLOW_THOUSAND, FILTER_FLAG_ALLOW_FRACTION),
      ),
      'description' => array(
          'label' => 'Description',
          'type' => 'text',
          'attributes' => array(),
          'filter' => FILTER_SANITIZE_STRING,
          'filter_flags' => array(FILTER_FLAG_STRIP_LOW),
      ),
      'email' => array(
          'label' => 'Email',
          'type' => 'email',
          'attributes' => array(),
          'filter' => FILTER_SANITIZE_EMAIL,
          'filter_flags' => array(),
      ),
  );

  if (isset($_POST['submit'])) {
    // Check for set values.
    foreach ($fields as $key => $value) {
      // Sanitize user input. However:
      // NOTE: this is a sample, user's SHOULD NOT be inputting these values.
      if (isset($_POST[$key])) {
          $parameters[$key] = filter_input(INPUT_POST, $key, $value['filter'],
            array_reduce($value['filter_flags'], function ($a, $b) { return $a | $b; }, 0));
      }
    }

    // Validate values.
    // Example, amount validation.
    // Do not rely on browser validation as the client can manually send
    // invalid values, or be using old browsers.
    if (!is_numeric($parameters['amount'])) {
      $errors[] = 'Amount should be a number.';
    }
    else if ($parameters['amount'] <= 0) {
      $errors[] = 'Amount should be greater than 0.';
    }

    if (empty($errors)) {
      // Transform amount to correct format. (2 decimal places,
      // decimal separated by period, no thousands separator)
      $parameters['amount'] = number_format($parameters['amount'], 2, '.', '');
      // Unset later from parameter after digest.
      $parameters['key'] = MERCHANT_PASSWORD;
      $digest_string = implode(':', $parameters);
      unset($parameters['key']);
      // NOTE: To check for invalid digest errors,
      // uncomment this to see the digest string generated for computation.
      // var_dump($digest_string); $is_link = true;
      $parameters['digest'] = sha1($digest_string);
      $url = 'https://gw.dragonpay.ph/Pay.aspx?';
      if ($environment == ENV_TEST) {
        $url = 'http://test.dragonpay.ph/Pay.aspx?';
      }

      $url .= http_build_query($parameters, '', '&');

      if ($is_link) {
        echo '<br><a href="' . $url . '">' . $url . '</a>';
      }
      else {
        header("Location: $url");
      }
    }
  }
  ?>


<!DOCTYPE html>
<html>
<head>
  <style>
  label {width: 130px; float: left;}
  input {width: 250px;}
  </style>
</head>
<body>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>LOYALEADSTA</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style id="applicationStylesheet" type="text/css">
			@font-face {
				font-family: "Inter-SemiBold";
				src: url("./Inter-SemiBold.ttf");
			}
			.mediaViewInfo {
				--web-view-name: [T] 12 CRM_Popup_success;
				--web-view-id: T__12A__CRM_Popup_success;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			:root {
				--web-view-ids: T__12A__CRM_Popup_success;
			}
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				border: none;
			}
			#T__12A__CRM_Popup_success {
				position: absolute;
				width: 100%;
				height: 100%;
				background-color: rgba(243,243,243,1);
				overflow-y: auto;
				overflow-x: hidden;
				--web-view-name: [T] 12 CRM_Popup_success;
				--web-view-id: T__12A__CRM_Popup_success;
				--web-scale-on-resize: true;
				--web-enable-deep-linking: true;
			}
			.col-sm,
			.col-sm-auto,
			.col-sm-12,
			.col-sm-11,
			.col-sm-10,
			.col-sm-9,
			.col-sm-8,
			.col-sm-7,
			.col-sm-6,
			.col-sm-5,
			.col-sm-4,
			.col-sm-3,
			.col-sm-2,
			.col-sm-1,
			.col,
			.col-auto,
			.col-12,
			.col-11,
			.col-10,
			.col-9,
			.col-8,
			.col-7,
			.col-6,
			.col-5,
			.col-4,
			.col-3,
			.col-2,
			.col-1 {
				position: relative;
				width: 100%;
				padding-right: 15px;
				padding-left: 15px;
			}
			.row {
				display: flex;
				flex-wrap: wrap;
				margin-right: -15px;
				margin-left: -15px;
			}
			.col-auto {
				flex: 0 0 auto;
				width: auto;
				max-width: 100%;
			}
			.col-1 {
				flex: 0 0 8.3333333333%;
				max-width: 8.3333333333%;
			}
			.col-2 {
				flex: 0 0 16.6666666667%;
				max-width: 16.6666666667%;
			}
			.col-3 {
				flex: 0 0 25%;
				max-width: 25%;
			}
			.col-4 {
				flex: 0 0 33.3333333333%;
				max-width: 33.3333333333%;
			}
			.col-5 {
				flex: 0 0 41.6666666667%;
				max-width: 41.6666666667%;
			}
			.col-6 {
				flex: 0 0 50%;
				max-width: 50%;
			}
			.col-7 {
				flex: 0 0 58.3333333333%;
				max-width: 58.3333333333%;
			}
			.col-8 {
				flex: 0 0 66.6666666667%;
				max-width: 66.6666666667%;
			}
			.col-9 {
				flex: 0 0 75%;
				max-width: 75%;
			}
			.col-10 {
				flex: 0 0 83.3333333333%;
				max-width: 83.3333333333%;
			}
			.col-11 {
				flex: 0 0 91.6666666667%;
				max-width: 91.6666666667%;
			}
			.col-12 {
				flex: 0 0 100%;
				max-width: 100%;
			}
			.mt-p5{
				margin-top: 0.5rem;
			}
			.mt-1 {
				margin-top: 1rem;
			}
			.mt-2 {
				margin-top: 2rem;
			}
			.mt-3 {
				margin-top: 3rem;
			}
			.mb-1 {
				margin-bottom: 1rem;
			}
			.mb-2 {
				margin-bottom: 2rem;
			}
			.ml-2 {
				margin-left: 2rem;
			}
			.text-center {
				text-align: center !important;
			}
			.text-right {
				text-align: right !important;
			}
			.w-100 {
				width: 100%;
			}
			.h-100 {
				height: 100% !important;
			}
			.wrapper {
				height: 100%;
				display: flex;
				align-items: center;
			}
			.sticky {
				position: sticky;
			}
			.z-index-100 {
				z-index: 100;
			}
			.d-block {
				display: block;
			}
			.bg-white {
				background-color: white !important;
			}
			.gray {
				color: rgba(155,155,155,1);
			}
			.gold {
				color: rgba(224,194,26,1);
			}
			.bold {
				font-weight: bold;
			}
			.mobile-view {
				display: none;
			}
			.big-screen-view {
				display: block;
			}
			.d-table {
				display: table;
			}

			/* The Modal (background) */
			.success-modal, .failed-modal {
				display: none; /* Hidden by default */
				position: absolute; /* Stay in place */
				z-index: 1; /* Sit on top */
				left: 0;
				top: 0;
				width: 100%; /* Full width */
				height: 100%; /* Full height */
				overflow-y: auto;
				overflow-x: hidden;
				background-color: rgb(0,0,0); /* Fallback color */
				background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
				font-family: "Inter-SemiBold";
			}

			/* Modal Content */
			.success-modal-content, .failed-modal-content {
				background-color: #fefefe;
				margin: 0 auto;
				padding: 20px;
				margin-top: 48px;
				border: 1px solid #888;
				width: 50%;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
				-webkit-animation-name: animateright;
				-webkit-animation-duration: 0.4s;
				animation-name: animateright;
				animation-duration: 0.4s;
				border-radius: 20px;
			}

			/* Add Animation */
			@-webkit-keyframes animateright {
				from {right:-300px; opacity:0} 
				to {right:0; opacity:1}
			}

			@keyframes animateright {
				from {right:-300px; opacity:0}
				to {right:0; opacity:1}
			}

			/* The Close Button */
			.success-modal-close, .failed-modal-close {
				color: white;
				font-size: 32px;
				font-weight: bold;
				position: absolute;
				top: 120px;
				right: 368px;
			}
			.success-modal-close:hover,
			.success-modal-close:focus,
			.failed-modal-close:hover,
			.failed-modal-close:focus {
				text-decoration: none;
				cursor: pointer;
			}
			.success-modal-body, .failed-modal-body {padding: 2px 16px;}
			.success-text, .failed-text {
				font: 20px "Inter-SemiBold";
				font-weight: bolder;
				letter-spacing: 1px;
			}
			.success-message, .failed-message {
				font: 16px "Inter-SemiBold";
				font-weight: 100;
			}
			.success-btn, .failed-btn {
				background-color: rgba(40,155,42,1);
				color: white;
				font: 20px "Inter-SemiBold";
				height: 56px;
				width: 35%;
				border-radius: 8px;
				cursor: pointer;
			}

			@media (min-width: 576px) {
				.col-sm {
					flex-basis: 0;
					flex-grow: 1;
					max-width: 100%;
				}

				.col-sm-auto {
					flex: 0 0 auto;
					width: auto;
					max-width: 100%;
				}

				.col-sm-1 {
					flex: 0 0 8.3333333333%;
					max-width: 8.3333333333%;
				}

				.col-sm-2 {
					flex: 0 0 16.6666666667%;
					max-width: 16.6666666667%;
				}

				.col-sm-3 {
					flex: 0 0 25%;
					max-width: 25%;
				}

				.col-sm-4 {
					flex: 0 0 33.3333333333%;
					max-width: 33.3333333333%;
				}

				.col-sm-5 {
					flex: 0 0 41.6666666667%;
					max-width: 41.6666666667%;
				}

				.col-sm-6 {
					flex: 0 0 50%;
					max-width: 50%;
				}

				.col-sm-7 {
					flex: 0 0 58.3333333333%;
					max-width: 58.3333333333%;
				}

				.col-sm-8 {
					flex: 0 0 66.6666666667%;
					max-width: 66.6666666667%;
				}

				.col-sm-9 {
					flex: 0 0 75%;
					max-width: 75%;
				}

				.col-sm-10 {
					flex: 0 0 83.3333333333%;
					max-width: 83.3333333333%;
				}

				.col-sm-11 {
					flex: 0 0 91.6666666667%;
					max-width: 91.6666666667%;
				}

				.col-sm-12 {
					flex: 0 0 100%;
					max-width: 100%;
				}
			}

			/* tablet */
			@media (min-width: 760px) and (max-width: 1023px) {
				.success-modal-close, .failed-modal-close {
					top: 75px !important;
					right: 180px !important;
				}
				.success-modal-content, .failed-modal-content {
					padding: 10px 20px !important;
					width: 60% !important;
				}
				.success-btn, .failed-btn {
					height: 50px !important;
					width: 70% !important;
				}
			}

			/* phones */
			@media (max-width: 575px){
				.success-modal-close, .failed-modal-close {
					top: 113px !important;
					right: 62px !important;
				}
				.success-modal-content, .failed-modal-content {
					padding: 10px 20px !important;
					width: 80% !important;
				}
				.success-text, .failed-text {
					font: 18px "Inter-SemiBold" !important;
				}
				.success-message, .failed-message {
					font: 14px "Inter-SemiBold";
				}
				.success-btn, .failed-btn {
					font: 18px "Inter-SemiBold" !important;
					height: 50px !important;
					width: 100% !important;
				}
			}

		</style>

		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>

	</head>
	<body>


 	<?php
         include('../dist/dbcon.php');
  $business_name=$_GET['business_name'];
  
  
$queryttw=mysqli_query($con,"select * from  customer where id='$user_id' ")or die(mysqli_error());
$rowuser=mysqli_fetch_array($queryttw); 
$id_numbe2=$rowuser['id_number'];

    
    


$user_id=$_GET['login'];
$ii=$_GET['store'];


$date=date("Y-m-d H:i");




  	$querycate2splace=mysqli_query($con,"select distinct store from  temp_prod  where user_id='$user_id' and status='Pending' and store='$ii' order by store asc ")or die(mysqli_error());
      	while($rowplace=mysqli_fetch_array($querycate2splace)){
$store=$rowplace['store'];
$rand=$_GET['invoice'];



$payment=$_GET['pmode'];
$querytt=mysqli_query($con,"select sum(total) as total from  temp_prod where store='$store' and user_id='$user_id' and status='Pending' ")or die(mysqli_error());
$rowtt=mysqli_fetch_array($querytt); 

$total2=$rowtt['total'];


		mysqli_query($con,"update pending_points set status='1' where user='$id_numbe2'")or die(mysqli_error());



	mysqli_query($con,"update temp_prod set status='On-processing', invoice='$rand' where user_id='$user_id' and store='$store' and status='Pending'")or die(mysqli_error());
	
		  mysqli_query($con,"INSERT INTO sales_crm(payment,user_id,store,invoice,total,status,date_added) VALUES('$payment','$user_id','$store','$rand','$total2','On-processing','$date')")or die(mysqli_error($con));
	
	
      	}
	
	
	
?>







<?php



	     
	     
	     

		  





?>						



	<div class="row h-100">

				<div class="col-sm-12 col-12">
					<!-- Modal content -->
					<div class="wrapper">

						<span class="success-modal-close"><i class="fa fa-times-circle-o"></i></span>

						<div class="success-modal-content">
							
							<div class="success-modal-body">

								<div class="row mt-2 mb-2">

									<div class="col-12 text-center">
										<img src="./check.svg" class="success-icon" alt="check">
									</div>
									
									
									
									
									
									<div class="col-12 mt-1 text-center">
										<span class="success-text">Online Payment</span>
									</div>
									  <hr>
    <br><br>  <hr>
    <br><br>
	    <br><br>    <br><br>								
								
  <?php if (!empty($errors)): ?>
  
  
  <center>  <div class="errors">
    <div class="error">
        
        		
									<div class="col-12 mt-1">
									    <center>
										<p class="success-message"><?php echo implode('</div><div class="error">', $errors); ?></p></center>
									</div>
        
        
    
    </div>
  </div>
  <?php endif; ?>

    <form method="post" style="width:100%">
    <?php foreach ($fields as $key => $value): ?>
    <div class="input">
      <span class="label"><label for="<?php echo $key; ?>">
        <?php echo $value['label']; ?>:</label></span>
      <input type="<?php echo $value['type']; ?>"
        <?php echo implode(' ', $value['attributes']); ?>
        name="<?php echo $key; ?>" value="<?php echo $parameters[$key]; ?>">
    </div>
    <?php endforeach; ?><br>
    <hr>
    <br><br>
      <input class="success-btn" style="width:100%" type="submit" name="submit" value="Pay Now">
    </form>
 
									
									
							
						

								</div>

							</div>
							
						</div>

					</div>
					
				</div>


		
		</div>



