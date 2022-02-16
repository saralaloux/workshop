<?php 
    $type="index";
    include('./request/request.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="SEO, seo, search engine optimization, google, rédaction, copywriting">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Documents</title>

    <style>
        #img1{
            width: 100%;
        }
        body{
            font-family: 'Roboto', sans-serif;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            /* width: 1200px; */
        }
        /********** navbar ***********/
        nav {
            text-align: center;
        }
        .menu {
            display: inline-flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
            list-style-type: none;
        }
        .menu > li {
        text-transform: uppercase;
        padding-top: 20px;
        width: 140px;
        height: 40px;
        cursor: pointer;
        /* font-size: 18px; */
        font-weight: 300;
        text-decoration: none;
        margin-top: 20px;
        margin-bottom: 30px;
     }
    .sub-menu {
        transform: scale(0);
        transform-origin: top center;
        transition: all 300ms ease-in-out;
    }
    .sub-menu li {
        list-style-type: none;
        font-size: 14px;
        background: rgba(0, 0, 0, 0.8);
        padding: 30px 0px;
        width: 150px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        transform: scale(0);
        transform-origin: top center;
        transition: all 300ms ease-in-out;
    }
    .sub-menu li a{
        color: white;
        text-decoration: none;
    }
    a{
        color: grey;
        text-decoration: none;
    }
    .sub-menu li:last-child {
        border-bottom: 0;
    }
    .sub-menu li:hover {
        background: black;
    }
     .menu > li:hover .sub-menu li {
        transform: scale(1);
    }
    .menu > li:hover .sub-menu {
        transform: scale(1);
    }
    /********** main ***********/

    .inside{
        width: 1000px;
        display: block;
        margin:  0 auto;
    }
    .inside img{
        width: 450px;
        margin: 0px 50px;
    }
    .inside ul{
        margin: 40px 0px;
    }
    .inside li{
        margin: 20px 0px;
        font-size: 20px;
    }
    /* .img1{
        width: 450px;
        margin-right: 50px;
    } */
    .block-flex{
        display: flex;
        align-items: center;
        border-bottom: 2px solid #5270ff;
        padding-bottom: 50px;
    }
    .block-right{
        display: flex;
        align-items: center;
        border-bottom: 2px solid #5270ff;
        padding-bottom: 50px;
    }
    .block{
        /* display: flex;
        flex-direction: column;
        align-items: center; */
        border-bottom: 2px solid #5270ff;
        padding-bottom: 50px;
    }
    .icons{
        display: flex;
        justify-content: space-around;

    }
    .icons > img{
        padding: 35px 0px;
        width: 120px;
    }


    /********** text ***********/

    h2{
        text-align: center;
        font-size: 45px;
        color: grey;
        font-weight: 900;
        padding: 30px 0px;
    }
    p{
        font-weight: 200;
        font-size: 18px;
        line-height: 25px;
    }
    span{
        color: #5270ff;
    }
    strong{
        color: #5270ff;
        font-weight: 500;
    }

    /********** footer ***********/
    footer{
        width:100%;
        height: 150px;
        background-color: #5270ff;
    }

    </style>
</head>

<body>
    <div class="header">
        <?php 
            include('./component/navbar.php'); 
        ?>
        <img id="img1" src="./assets/header_accueil.jpg">
    </div>
    <div class="inside">
        <?php
            echo $result['content'];
        ?>
    </div>
    <footer></footer>
</body>
</html>