<?php
// Construct contact data in XML format
$data ="
<contact>
    <Group_Tag name='Contact Information'>
        <field name='First Name'>test</field>
        <field name='Last Name'>data</field>
        <field name='Email'>test@test.com</field>
    </Group_Tag>
</contact>";
$data = urlencode(urlencode($data));
// Replace the strings with your API credentials located in Admin > OfficeAutoPilot API Instructions and Key Manager
$appid = "2_186126_xDklkgrgi";
$key = "zhu5Ezge5Cs4Sv7";
//Set your request type and construct the POST request
$reqType= "add";
$postargs = "appid=".$appid."&key=".$key."&return_id=1&reqType=".$reqType."&data=".$data;
$request = "http://api.ontraport.com/cdata.php";
//Start the curl session and send the data
$session = curl_init($request);
curl_setopt ($session, CURLOPT_POST, true);
curl_setopt ($session, CURLOPT_POSTFIELDS, $postargs);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
//Store the response from the API for confirmation or to process return data
$response = curl_exec($session);
print_r($response);
//Close the session
curl_close($session);
?>

