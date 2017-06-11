<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'fairowner';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
    $query = $db->query("SELECT distinct locality FROM property_details WHERE locality LIKE '%".$searchTerm."%' ORDER BY locality ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['locality'];
    }
    
    //return json data
    echo json_encode($data);
?>