<?php
if (isset($_GET['items'])) {
    $items = $_GET['items'];

    // Convert the array of selected items into a comma-separated string
    $items_str = implode(",", $items);

    // Send the selected items as a query parameter to the Python Flask server
    $response = file_get_contents("http://127.0.0.1:5000/?items=" . urlencode($items_str));

    // Display result
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Party Plan Result</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='container mt-5'>
        <h2 class='mb-3'>Party Plan Result</h2>
        <div class='alert alert-success'>$response</div>
        <a href='index.php' class='btn btn-primary'>Back</a>
    </body>
    </html>";
} else {
    // Redirect back if accessed without form submission
    header("Location: index.php");
    exit;
}
