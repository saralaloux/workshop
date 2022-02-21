<?php 
    $type="category";
    include('../../request/request.php');
    $tag_to_kill = array("<h1>", "</h1>", "<h2>", "</h2>", "<h3>", "</h3>");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $result_category['name'];?></title>
    <meta name="description" content="<?php echo $result_category['description'];?>" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body{
            font-family: 'Roboto', sans-serif;
        }
        /********** navbar ***********/
        nav {
            text-align: center;
            border-bottom: 25px solid #5270ff;
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
    /********** content ***********/

    main{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        align-content: center;
        width: 100%;
    }
    article{
        width: 450px;
        height: 550px;
        margin: 60px;
        background-color: rgb(245, 245, 245);
        border-bottom: 15px solid #5270ff;
    }
    section {
        text-align: center;
        margin: 50px 30px 0 30px;
        padding-bottom: 50px;
    }
    .img_articles{
        text-align: center;

    }
    .header{
        width:100%;
    }
     /********** text ***********/
    h1{
        /* padding-top: 120px; */
       font-size: 80px;
       text-align: center;
       /* color: #5270ff; */
       color: grey;
       font-weight: 900;
       text-transform: uppercase;
    }
     h2{
        text-align: center;
        font-size: 20px;
        text-transform: uppercase;
        color: #5270ff !important;
        padding: 30px 50px;
    }
    p{
        font-weight: 300;
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
    <header>
        <?php 
            include('../../component/navbar.php');
        ?>
        <h1>
            <?php 
                echo $result_category['name'];
            ?>
        </h1>
    </header>
    <main>
        <?php
            while ($show_article = $req_article_from_category->fetch()){
                ?>
                <article>
                    <h2>
                        <a href="<?php echo $server_url."otherPage/articles/article.php?id=".$show_article['id']; ?>">
                            <?php 
                            echo $show_article['title']; 
                            ?>
                        </a>
                    </h2>
                    <div class="img_articles">
                        <img src="<?php echo $server_url;?>assets/<?php echo $show_article['image_url']; ?>" alt="<?php echo $show_article['image_alt']; ?>" />
                    </div>
                    <section>
                        <?php 
                            echo substr(str_replace($tag_to_kill, "", $show_article['content']), 0, 300); 
                        ?>
                        ...
                    </section>
                </article>
                <?php
            }
        ?>
    </main>
    <footer></footer>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>