<!--Kyle Osborne exams.php connects to SQL database and returns JSON-->
<?php
    include 'config.php';
    $coursename = $_GET['course'];
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Connection failed: ' . mysqli_connect_error());
    }
    
    # SQL query that selects every column from the table courses 
    $sql = "SELECT * FROM courses WHERE course LIKE '" . $coursename . "%'"; 
    $result = mysqli_query($conn, $sql);
    $exams = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $exams[] = $row;
    }
    $data = json_encode($exams); 
    echo $data; # echo JSON 
    mysqli_close($conn);
?>
