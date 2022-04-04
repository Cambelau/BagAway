<?php
/*This file should receive a link somethong like this: http://noobix.000webhostapp.com/TX.php?unit=1&b1=1
If you paste that link to your browser, it should update b1 value with this TX.php file. Read more details below.
The ESP will send a link like the one above but with more than just b1. It will have b1, b2, etc...
*/

//We loop through and grab variables from the received the URL
foreach($_REQUEST as $key => $value)   //Save the received value to the hey variable. Save each cahracter after the "&"
{
    
    if($key =="id")
    {
       $id_casier = $value;
    }	
    if($key =="lat"){
		$lat = $value;
	}
	if($key =="lon"){
		$long = $value;
	}
	if($key =="sta"){
		$sta = $value;
	}
	
}//End of foreach


include("conn.php"); 	//We include the database_connect.php which has the data for the connection to the database


// Check  the connection
/*if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Now we update the values in database
		
		//udpdate gps
		//mysqli_query($conn,"INSERT INTO ESPtable2 (SENT_NUMBER_1,SENT_NUMBER_2,SENT_NUMBER_3,SENT_NUMBER_4,RECEIVED_BOOL1,TEXT_1) VALUES ('$sent_nr_1', '$sent_nr_2', '$sent_nr_3', '$sent_nr_4',0,'Nom')");
		       
	         $result = mysqli_query($conn,$sql = "SELECT 'Ouverture' FROM 'casier' WHERE 'id_casier' = $id_casier)";
		

//Loop through the table and filter out data for this unit id equal to the one taht we've received. 
if($row = mysqli_fetch_array($result)) {

	
		$statut = $row['Ouverture'];	
		
	echo "transmission ok  $statut ";
}// End of the if*/

//echo "transmission ok  $statut ";
?>








