<?php 
// Load the database configuration file 
include "../config/database.php";
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "report_grade" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('ID', 'NAME', 'COURSE', 'SECTION', 'YEAR LEVEL', 'CODE', 'DESCRIPTION', 'TIME','GRADE'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 

session_start();
// Check if the user is logged in
if (isset($_SESSION["username"])) {
$faculty_name = $_SESSION["username"];


 
// Fetch records from database 
$query = $conn->query("SELECT * FROM grades"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['id'], $row['name'], $row['course'], $row['section'], $row['year'], $row['code'], $row['description'],$row['time'],$row['grade']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
}
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;