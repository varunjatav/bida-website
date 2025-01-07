<?php
include_once '../config.php';
include_once '../dbcon/db_connect.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



try {
    // Your database query
    $sql = "SELECT SQL_CALC_FOUND_ROWS T1.ID, T1.News
            FROM bida_news T1
            WHERE 1 = 1";
    $sql .= " GROUP BY T1.ID ORDER BY T1.ID DESC";
    
    // Prepare and execute SQL query
    $sql = $db->prepare($sql);
    $sql->execute();

    // Get the total count of rows
    $rs1 = $db->query('SELECT FOUND_ROWS()');
    $total_count = (int) $rs1->fetchColumn();
    
   
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $data = $sql->fetchAll();
    
    header('Content-Type: application/json');

    echo json_encode([
        'total_count' => $total_count,
        'data' => $data
    ]);
    
} catch (Exception $e) {
    // Output error message in case of failure
    header('Content-Type: application/json');

    echo json_encode(['error' => $e->getMessage()]);
}

?>
