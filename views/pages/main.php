<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content=
          "width=device-width,
          user-scalable=no,
          initial-scale=1.0,
          maximum-scale=1.0,
          minimum-scale=1.0"
    >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/navbar.css">
    <link rel="stylesheet" href="public/css/main_page.css">
    <title>Main</title>
</head>
<body>
<?php include_once 'views/dependencies/navbar.php';?>
<div class="comment-section">
    <?php
    if(!isset($_COOKIE['user'])):
        echo "Login to submit a comment!";
    else:{
        $db = new Database();
        $result = $db -> findComment($_COOKIE['user'] / 234);
        if(!$result){
            echo 'Your comment is submitted!';
        }else{
    ?>
    <div class="header">
        <div>Post comment</div>
    </div>
    <div class="body">
        <textarea id="comment"></textarea>
    </div>
    <div class="footer">
        <div class="btn" id="addComment">
            Post
            <div></div>
        </div>
    </div>
    <?php
        }
    }
    endif;
    ?>
</div>
<div class="container">
    <div class="header">
        <div>Comment Section</div>
    </div>
    <div class="body">

        <?php
        $db = new Database();
        $result = $db ->getAllData("comments");
        while($posts = $result -> fetch_assoc()){
                echo '
            <div class="comment">
             <div class="comment__header">
                 '.$posts['name'].',
             </div>
             <div class="comment__body">
             '.$posts['comment'].'               
             </div>
             <div class="comment__footer">
                 <div class="comment__data">
                     Data: '.$posts['data'].'
                 </div>
                 <div class="comment__post">
                     '.$posts['id'].'
                 </div>
             </div>
         </div>
            ';
        }

        ?>

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="public/js/comments.js"></script>
</body>
</html>