
<?php


        $locations=array(); 
        $uname="loyaleadsta";
        $pass="loyaleadsta";
        $servername="localhost";
        $dbname="loyaleadsta";
        $db=new mysqli($servername,$uname,$pass,$dbname);
        $reg=$_POST['region'];
        
        
        if($reg=="All"){
         $query =  $db->query("SELECT * FROM user  where account_type!=''");
        }else{
            
             $query =  $db->query("SELECT * FROM user where region='$reg' and account_type!=''");
        }
        //$number_of_rows = mysql_num_rows($db);  
        //echo $number_of_rows;

        while( $row = $query->fetch_assoc() ){
            
            if($row['longitude']!=''){
                $id=$row['id'];
        $db2=new mysqli($servername,$uname,$pass,$dbname);
         $query2 =  $db2->query("SELECT sum(grand_total) as tot FROM sales where cust_id='$id'");
        //$number_of_rows = mysql_num_rows($db);  
        //echo $number_of_rows;

        $row2 = $query2->fetch_assoc();
                
  
                
            $name = $row['business_name'];
            $longitude = $row['longitude'];                              
            $latitude = $row['latitude'];
            $link=$row['business_name'];
            $tot=$row2['tot'];
            /* Each row is added as a new array */
            $locations[]=array( 'name'=>$name, 'lat'=>$latitude, 'lng'=>$longitude, 'lnk'=>$link , 'tot'=>$tot );
            }
            
        }


        //echo $locations[0]['name'].": In stock: ".$locations[0]['lat'].", sold: ".$locations[0]['lng'].".<br>";
        //echo $locations[1]['name'].": In stock: ".$locations[1]['lat'].", sold: ".$locations[1]['lng'].".<br>";
    ?>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD81NpDEo8-FiZpbR5_Q56jCvpEbk_gU7I"></script> 
    <script type="text/javascript">
    var map;
    var Markers = {};
    var infowindow;
    var locations = [
        <?php for($i=0;$i<sizeof($locations);$i++){ $j=$i+1;?>
        [
            'Sales Total',
            '<p><?php echo $locations[$i]['name'];?> ST: &#8369;<?php echo number_format($locations[$i]['tot'],2);?></p>',
            <?php echo $locations[$i]['lat'];?>,
            <?php echo $locations[$i]['lng'];?>,
            0
        ]<?php if($j!=sizeof($locations))echo ","; }?>
    ];
    var origin = new google.maps.LatLng(locations[0][2], locations[0][3]);

    function initialize() {
      var mapOptions = {
        zoom: 8,
        center: origin
      };

      map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

        infowindow = new google.maps.InfoWindow();

        for(i=0; i<locations.length; i++) {
            var position = new google.maps.LatLng(locations[i][2], locations[i][3]);
            var marker = new google.maps.Marker({
                position: position,
                map: map,
            });
            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][1]);
                    infowindow.setOptions({maxWidth: 200});
                    infowindow.open(map, marker);
                }
            }) (marker, i));
            Markers[locations[i][4]] = marker;
        }

        locate(0);

    }

    function locate(marker_id) {
        var myMarker = Markers[marker_id];
        var markerPosition = myMarker.getPosition();
        map.setCenter(markerPosition);
        google.maps.event.trigger(myMarker, 'click');
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    </script>

    <style type="text/css">
        #map-canvas {
            width: 100%;
            height: 800px;
        }
    </style>
              

        
        <?php

include('header.php');

?>
      <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-body">
              
              
              
              
            <div class="row">
        
              
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                 
               <?php
        $query1 =  $db->query("SELECT * FROM user where region='$reg' and account_type!=''");
      

      $row1 = $query1->fetch_assoc();
               
               if($row1['business_name']!=""){
               ?>
                 
                                  
    <div id="map-canvas" >   </div>    
        <?php
               }else{
        
        ?>
        <center>
            <br>
                 <h4>No Dealer/Distributor found in this region.</h4>
               <br> 
                 </center>
                  <?php
               }
        
        ?>       
                 
                 
                 
                 
                 
                 
              </div>
            
              
              
              
              
              
             
            </div>
            
            
                  
            </div>
            
            
            
            
          </div>
        </section>
       
      </div>
     <?php
     
     include('footer.php');
     
     ?>
        
        
        
        
        