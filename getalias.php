<?php

// get the PAN parameter from URL
$pan = $_REQUEST["pan"];

// convert PAN to alias
$alias = strrev($pan);

// set up response array
$response = [
	'status' => 'OK',
	'alias' => $alias
];

// output response as JSON
echo json_encode($response);

?>