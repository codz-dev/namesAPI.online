<?php
require_once 'NamesAPI.php';

// Create an instance of the NamesAPI class
$namesAPI = new NamesAPI();

// Use the getGender method to get the gender and probability of a name
$name = 'Ahmed';
$result = $namesAPI->getGender($name);

// Display the result
echo 'Name: ' . $name . '<br>';
echo 'Gender: ' . $result['gender'] . '<br>';
echo 'Probability: ' . $result['probability'] . '<br>';
?>
