<?php
require_once('SDK-PHP/src/APIAutoloader.php');

$client = new OntraportAPI\Ontraport("2_186126_xDklkgrgi","zhu5Ezge5Cs4Sv7");
$requestParams = array(
"firstname" => "tim",
   "lastname" => "lincecum",
   "email" => "t.lincecum@test.com",
   "contact_cat" => "*/*55*/*",
   "updateSequence" => "*/*97*/*"
);

$response = $client->contact()->saveOrUpdate($requestParams);
print_r($response);
?>
