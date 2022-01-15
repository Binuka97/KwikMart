<link rel="stylesheet" href="comments.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<?php 

//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=comments', 'root', '');

$query = "
SELECT * FROM tbl_comments
WHERE parent_comment_id = '0'
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach ($result as $row) {
    $output .= '
    <div class="comment-card">
        <div class="panel-heading">
            <img
            src="../../assets/images/comment-user.png"
            class="comment-user"
            alt="profile-picture"
        />
            <b class="commentor-name">' . $row["comment_sender_name"] . '</b> 
        
    <div class="panel-body">' . $row["comment"] . '</div>
    </div>
    <div class="reply-button" align="right">
        <button type="button" class="reply" id="' . $row["comment_id"] . '"><i class="fa fa-reply" aria-hidden="true" ></i> Reply</button>
    </div>
</div>
 ';
    $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parentId = 0, $marginleft = 0)
{
    $query = "
 SELECT * FROM tbl_comments WHERE parent_comment_id = '" . $parentId . "'
 ";
    $output = '';
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $count = $statement->rowCount();
    if ($parentId == 0) {
        $marginleft = 0;
    } else {
        $marginleft = $marginleft + 48;
    }
    if ($count > 0) {
        foreach ($result as $row) {
            $output .= '
   <div class="reply-comment-card" style="margin-left:' . $marginleft . 'px">
    <div class="panel-heading">
    <img
    src="../../assets/images/reply-comment-user.png"
    class="comment-user"
    alt="profile-picture"
    />
    <b class="commentor-name">' . $row["comment_sender_name"] . '</b>
    <div class="reply-panel-body">' . $row["comment"] . '</div>
    </div>
    <div class="reply-comment-button" align="right">
        <button type="button" class="reply" id="' . $row["comment_id"] . '"><i class="fa fa-reply" aria-hidden="true" ></i> Reply</button>
    </div>
   </div>
   ';
            $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
        }
    }
    return $output;
}

