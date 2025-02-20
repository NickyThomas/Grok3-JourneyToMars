<?php
// save_score.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    if ($data) {
        file_put_contents('scores.txt', $data, FILE_APPEND);
        echo "Score saved successfully";
    } else {
        echo "No data received";
    }
} else {
    echo "Invalid request method";
}
?>