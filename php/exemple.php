<?php
require_once 'NamesAPI.php';

// Create an instance of the NamesAPI class
$namesAPI = new NamesAPI();

// Use the getGender method to get the gender and probability of a name
$name = 'Ahmed';
$result = $namesAPI->getGender($name);

    if (isset($result['gender']) && isset($result['probability'])) {
        echo 'Gender: ' . $result['gender'] . '<br>';
        echo 'Probability: ' . $result['probability'] . '<br>';
    } else {
        echo 'Error: ' . $result['error'] . '<br>';
    }

?>
