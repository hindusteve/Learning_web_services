    <?php
     
    //--- Set the parameters --------------//
    $url    = "http://abhijitkhanna.getforge.io";
    $apikey = "abedeaf7a920345cc6d57ee8466dbf8c181be24d95dd"; /* FILL IN YOUR FREE API KEY, GET ONE AT thumbnail.ws */
    $width  = 500;
     
    //--- Make the call -------------------//
    $fetchUrl = "https://api.thumbnail.ws/api/".$apikey ."/thumbnail/get?url=".urlencode($url)."&width=".$width;
    $jpeg = file_get_contents($fetchUrl);
     
    //--- Do something with the image -----//
    /* file_put_contents("screenshot.jpg", $jpeg); */
    header("Content-type: image/jpeg");
    echo $jpeg;
    exit(0);
     
    ?>