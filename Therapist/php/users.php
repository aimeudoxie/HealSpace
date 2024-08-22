<?php
    session_start();
    include_once "config.php";

    $outgoing_id = $_SESSION['unique_id'];
    $sql = "SELECT users.*
    FROM users
    JOIN messages
    ON users.unique_id = messages.outgoing_msg_id OR users.unique_id = messages.incoming_msg_id
    WHERE users.role = 'user'
    AND (messages.incoming_msg_id = {$outgoing_id} OR messages.outgoing_msg_id = {$outgoing_id})
    GROUP BY users.user_id;
    ";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No messages from patients available";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?>