
    <?php


    
    $address ="manila"; // Google HQ
    $prepAddr = str_replace(' ','+',$address);
    $apiKey = 'AIzaSyD81NpDEo8-FiZpbR5_Q56jCvpEbk_gU7I'; // Google maps now

    $geocode=file_get_contents('https://maps.googleapis.com/maps/api/geocode/json? 
   address='.urlencode($address).'&sensor=false&key='.$apiKey);

    print_r($geocode);

    $output= json_decode($geocode);
    $latitude = $output->results[0]->geometry->location->lat;
    $longitude = $output->results[0]->geometry->location->lng;
    ?>
    
    
    <script src="https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyD81NpDEo8-FiZpbR5_Q56jCvpEbk_gU7I"></script>
    
    