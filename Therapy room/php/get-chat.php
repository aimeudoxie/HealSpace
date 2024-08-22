<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $output = "";
    $mess = "";

    function str_openssl_dec($str, $iv)
    {
        $key = '1234567890vishal%$%^%$$#$#';
        $chiper = "AES-128-CTR";
        $options = 0;
        $str = openssl_decrypt($str, $chiper, $key, $options, $iv);
        return $str;
    }

    $sql = "SELECT * FROM messages 
            LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
            WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
            OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id})
            ORDER BY msg_id";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $iv = hex2bin($row['iv']);
            $mess = str_openssl_dec($row['msg'], $iv);

            // Check if the outgoing message is from the user or therapist
            if ($row['outgoing_msg_id'] === $outgoing_id) {
                // Fetch the therapist's image
                $img_query = "SELECT img FROM users WHERE unique_id = {$row['outgoing_msg_id']}";
                $img_result = mysqli_query($conn, $img_query);
                $img_row = mysqli_fetch_assoc($img_result);
                $img_path = $img_row['img'];

                $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>' . $mess . '</p>
                                </div>
                                <img src="php/images/' . $img_path . '" alt="">
                            </div>';
            } else {
                // Fetch the user's image
                $img_query = "SELECT img FROM therapists WHERE unique_id = {$row['outgoing_msg_id']}";
                $img_result = mysqli_query($conn, $img_query);
                $img_row = mysqli_fetch_assoc($img_result);
                $img_path = $img_row['img'];

                $output .= '<div class="chat incoming">
                                <img src="../Therapist/php/images/' . $img_path . '" alt="">
                                <div class="details">
                                    <p>' . $mess . '</p>
                                </div>
                            </div>';
            }
        }
    } else {
        $output .= '<div class="text">Messages are end-to-end encrypted. No one outside of this chat can read them.<br>Your messages will appear here as you start chatting</div>';
    }
    echo $output;
} else {
    header("location: ../login.php");
}
?>
