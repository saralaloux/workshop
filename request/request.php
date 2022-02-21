<?php
$server_url = "http://localhost:8888/workshop/";
$carac_to_kill = array(" ", "’", "'");

try{
    $bdd = new PDO('mysql:host=localhost; dbname=SEO_articles', 'root', 'root');
}
catch(Exception $e){
    die('Erreur :'.$e->getMessage());
}

$_ENV['id'] = 13;

if(isset($_GET['id']) && intval($_GET['id'])) {
    $_ENV['id'] = $_GET['id'];
}

if ($type=="category") {
    $req = $bdd -> query("SELECT id, name, description, content, parent_id 
                          FROM category 
                          WHERE id=" .$_ENV['id']);  
    $result_category = $req -> fetch();

    $article_from_category="category_id=".$result_category['id'];

    if ($result_category['parent_id']==0) {
        $req = $bdd -> query("SELECT id
                          FROM category 
                          WHERE parent_id=" .$result_category['id']); 
        while ($result_child_category = $req->fetch()){
            $article_from_category = $article_from_category . " OR category_id=".$result_child_category['id'];
        }
    }

    if ($result_category['parent_id']!=0) {
        $req = $bdd -> query("SELECT name 
                              FROM category 
                              WHERE id=" .$result_category['parent_id']);  
    }

    $req_article_from_category = $bdd -> query("SELECT id, title, subtitle, content, image_url, image_alt, rewriting_url 
                          FROM article 
                          WHERE " .$article_from_category. "
                          ORDER BY id desc
                          LIMIT 10");
}

if ($type=="article") {
    $req = $bdd -> query("SELECT id, title, subtitle, category_id, content, image_url, image_alt, rewriting_url 
                          FROM article 
                          WHERE id=" .$_ENV['id']);
    $result = $req -> fetch();
}

if ($type=="index") {
    $req = $bdd -> query("SELECT content 
                          FROM article 
                          WHERE id=" .$_ENV['id']);
    $result = $req -> fetch();
}