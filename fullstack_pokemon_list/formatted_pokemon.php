<?php

    $page_number = $_GET['page'];

    $data = file_get_contents('data.json');

    $formatted_data = json_decode($data, true);

    $results = $formatted_data['results'];

    if ($page_number >= 0 && $page_number < (ceil(count($results)/50))) {
        $formatted_results = array();

    for ($i = 0; $i < count($results); $i++){

        $formatted_results[$i]['name'] = strtoupper($results[$i]['name']);
        $formatted_results[$i]['url'] = $results[$i]['url'];
    }

    $chunked_formatted_results = array_chunk($formatted_results, 50);
    $results_to_be_returned = $chunked_formatted_results[$page_number];

    $json_formatted_results = json_encode($results_to_be_returned);
    echo $json_formatted_results;

    $write_file_result = file_put_contents('formatted_data.json', $json_formatted_results);

} else {
    $error_response = array('status' => 500, 'message' => 'An error has occurred');
    $json_error_response = json_encode($error_response);
    echo $json_error_response;
}


?>

    
