<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <!-- CSS -->
    <link rel="stylesheet" href="public/css/navbar.css">
    <link rel="stylesheet" href="public/css/portfolio.css">
    <title>Portfolio</title>
</head>
<body>
<?php include_once './views/dependencies/navbar.php';?>
<div class="container">
    <div class="left-side">
        <div class="profile-text">
            <div class="img-box">
                <img src="../public/img/profile_img.jpeg" alt="">
            </div>
            <h2>Vladislavs Andrejevs <br><span>Web Developer</span></h2>
        </div>
        <div class="contact-info">
            <h3 class="title">Contact Info</h3>
            <ul>
                <li>
                    <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                    <span class="text">+371 26094042</span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <span class="text">chewdisout@gmail.com</span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
                    <span class="text"><a href="https://www.youtube.com/channel/UCfAQ2js0NiJOmmtWaftYMCw" style="color: white; text-decoration: none;"><span style="color: red">You</span>Tube</a></span>
                </li>
                <li>
                    <span class="icon"><i class="fa fa-github" aria-hidden="true"></i></span>
                    <span class="text"><a href="https://github.com/chewdisout/">gitHub</a></span>
                </li>
            </ul>
        </div>
        <div class="contact-info education">
            <h3 class="title">Education</h3>
            <ul>
                <li>
                    <h5>2020-2023</h5>
                    <h4>Bachelor degree in Computer Science</h4>
                    <h4>Rīgas Tehniska Universitate</h4>
                </li>
            </ul>
        </div>
        <div class="contact-info language">
            <h3 class="title">Languages</h3>
            <ul>
                <li>
                    <span class="text">English</span>
                    <span class="percent">
                        <div style="width: 70%"></div>
                    </span>
                </li>
                <li>
                    <span class="text">Latvian</span>
                    <span class="percent">
                        <div style="width: 70%"></div>
                    </span>
                </li>
                <li>
                    <span class="text">Russian</span>
                    <span class="percent">
                        <div style="width: 100%"></div>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="right-side">
        <div class="about">
            <h2 class="title">Profile</h2>
            <p>
                Hello there!<br>
                You have already seen my introduction work, that display only half of my skills. I can offer you
                much more than one-page website or low functionality website. My main priority is to make quality websites with
                trendy design and help costumers to choose YOU between other companies.
            </p>
        </div>
        <div class="about">
            <h2 class="title">
                Experience
            </h2>
            <div class="box">
                <div class="year-company">
                    <h5>2020 - Present</h5>
                    <h5>Self Studying</h5>
                </div>
                <div class="text">
                    <h4>WebDevelopment</h4>
                    <p>
                        Already for a year i am learning programming languages such as PhP, JavaScript,
                        HTML/CSS, node.js, different frameworks and now i am ready to make complicated
                        websites. My task is to code full webapp which will be able to register users, modify
                        profiles and work with DB.
                    </p>
                </div>
            </div>
        </div>
        <div class="about skills">
            <h2 class="title">Professional Skills</h2>
            <div class="box">
                <h4>Html/Css</h4>
                <div class="percent">
                    <div style="width: 90%"></div>
                </div>
            </div>
            <div class="box">
                <h4>PhP</h4>
                <div class="percent">
                    <div style="width: 69%"></div>
                </div>
            </div>
            <div class="box">
                <h4>JavaScript</h4>
                <div class="percent">
                    <div style="width: 78%"></div>
                </div>
            </div>
            <div class="box">
                <h4>NODE.js</h4>
                <div class="percent">
                    <div style="width: 37%"></div>
                </div>
            </div>
            <div class="box">
                <h4>Sony Vegas</h4>
                <div class="percent">
                    <div style="width: 50%"></div>
                </div>
            </div>
            <div class="box">
                <h4>Adobe Photoshop</h4>
                <div class="percent">
                    <div style="width: 60%"></div>
                </div>
            </div>
        </div>
        <div class="about interest">
            <h2 class="title">Interests</h2>
            <ul>
                <li><i class="fa fa-headphones" aria-hidden="true"></i>Gaming</li>
                <li><i class="fa fa-bolt" aria-hidden="true"></i>Skating</li>
                <li><i class="fa fa-btc" aria-hidden="true"></i>Crypto</li>
                <li><i class="fa fa-camera" aria-hidden="true"></i>Montage</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>