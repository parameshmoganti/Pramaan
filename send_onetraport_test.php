<?php
require_once('SDK-PHP/src/APIAutoloader.php');

$client = new OntraportAPI\Ontraport("2_186126_xDklkgrgi","zhu5Ezge5Cs4Sv7");
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
 */
?>
