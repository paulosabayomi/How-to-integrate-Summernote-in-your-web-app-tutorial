<?php

$host = "localhost";
$db = "summernote_db";
$user = "root";
$pwd = "";

$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn) {
    die("Could not connect because " . mysqli_error($conn));
}

if (isset($_POST["editordata"])) {
    $post = filter_var(htmlentities($_POST["editordata"]), FILTER_SANITIZE_STRING);

    $sql = "INSERT INTO posttable (post)VALUE(?)";

    $stmt = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($stmt, $sql);

    mysqli_stmt_bind_param($stmt, "s", $post);

    if(mysqli_stmt_execute($stmt)){
        echo json_encode(["status"=>0, "saved successfully!"]);
    }else{
        echo json_encode(["status"=>1, "could not save!"]);

    }

}