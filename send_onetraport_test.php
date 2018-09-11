<?php
require_once('SDK-PHP/src/APIAutoloader.php');

$client = new OntraportAPI\Ontraport("2_186126_xDklkgrgi","zhu5Ezge5Cs4Sv7");
$requestParams = array(
	"firstname" => "tim",
  "lastname" => "lincecum",
   "email" => "lin@test.com",                     
);


$response = $client->contact()->saveOrUpdate($requestParams);
#$response = $client->contact()->retrieveCollectionInfo($requestParams);

$json_output = json_decode($response); 
if(array_key_exists("attrs",$json_output->data))
{
	echo "duiplicate";
	echo $json_output->data->attrs->id;
}
else{
echo $json_output->data->id;}
?>
