<?php

//add_comment.php

//make db connection
$connect = new PDO('mysql:host=localhost;dbname=comments', 'root', '');

//define variables with blank values
$error = '';
$comment_name = '';
$comment_content = '';

//if the name field is empty
if (empty($_POST["comment_name"])) {
    $error .= '<p class="text-danger">Name is required</p>';
} else {
    $comment_name = $_POST["comment_name"];
}
//if content field is empty
if (empty($_POST["comment_content"])) {
    $error .= '<p class="text-danger">Comment is required</p>';
} else {
    $comment_content = $_POST["comment_content"];
}
//if no error
if ($error == '') {
    $query = "
 INSERT INTO tbl_comments
 (parent_comment_id, comment, comment_sender_name)
 VALUES (:parent_comment_id, :comment, :comment_sender_name)
 ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':parent_comment_id' => $_POST["comment_id"],
            ':comment' => $comment_content,
            ':comment_sender_name' => $comment_name,
        )
    );
    $error = '<label class="text-success">Comment added Successfully</label>';
}

$data = array(
    'error' => $error,
);

echo json_encode($data);
