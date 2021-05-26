<?php include_once 'includes/classes/Database.php';?>

<div class="navbar">
    <div class="navbar__logo">
        chewDisout
        <div></div>
    </div>
    <ul class="navbar__items">
        <li>
            <a href="/">Home</a>
            <div></div>
        </li>
        <li>
            <a href="/portfolio">Portfolio</a>
            <div></div>
        </li>
        <li>
                <?php

                if(!isset($_COOKIE['user'])) echo "<a href='/login'>Login</a>";
                else{
                    $db = new Database();

                    $userId = $_COOKIE['user'] / 234;

                    $dataArray = $db -> getById("name", $userId);

                    $name = $dataArray -> fetch_assoc()['name'];

                    echo "Hello, ".$name;
                }
                ?>
            <div></div>
        </li>
    </ul>
</div>

