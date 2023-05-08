<?php  

$item = file_get_contents('./data.json');
$phparray = json_decode ($item, true);

if (isset($_POST['newItem'])) {
    $todoItem = $_POST['newItem'];
    array_push($phparray,$todoItem);
    file_put_contents('./data.json', json_encode($phparray));
}

header('Content-Type: application/json');

echo json_encode($phparray);

?>