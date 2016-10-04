
<html>
 <head>
  <title>Get all the Languages from Lingotek JSON</title>
 </head>
 <body>
 
 <h1>Get all the Languages from Lingotek JSON</h1>
 
<?php

$json_file = file_get_contents('http://gmc.lingotek.com/language');
$jfo = json_decode($json_file,true);

  while($item = array_shift($jfo))
{
    foreach ($item as $key => $value)
    {
		if($key == "language"){
			echo $key.' => '.$value. "<br>";
		}
    }
}

$url = "http://gmc.lingotek.com/language";
$handle = curl_init($url);
curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);

/* Get the HTML or whatever is linked in $url. */
$response = curl_exec($handle);

/* Check for 404 (file not found). */
$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);

echo "HTTP Status Code = ".$httpCode;

curl_close($handle);


?>
 
 </body>
</html>