<?php
require_once('SDK-PHP/src/APIAutoloader.php');

$client = new OntraportAPI\Ontraport("2_186126_xDklkgrgi","zhu5Ezge5Cs4Sv7");
/*
$requestParams = array(
#	"firstname" => "tim",
 # "lastname" => "lincecum",
  #"email" => "eidtest@tested.com",
	#	"f1560" => "12345",
	"id" => "1",
	"contact_cat"=> "2"  
);


$response = $client->contact()->update($requestParams);
#$response = $client->contact()->retrieveCollectionInfo($requestParams);
print_r($response);
/*
$json_output = json_decode($response); 
if(array_key_exists("attrs",$json_output->data))
{
	echo "duiplicate";
	echo $json_output->data->attrs->id;
}
else{
	print_r($json_output);}
 use OntraportAPI\Ontraport;

$client = new Ontraport("2_AppID_12345678","Key5678");
 */
$conditions = new OntraportAPI\Criteria("email", "=", "indianaoutlaws13u@gmail.com");
$requestParams = array(
    "condition" => $conditions->fromArray()
);
$response = $client->contact()->retrieveMultiple($requestParams);
#$response = $client->message()->retrieveCollectionInfo($requestParams);
$json_output = json_decode($response);
print_r($json_output);
exit;

?>
