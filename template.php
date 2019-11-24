<?php 
    $lang;
    $article;
    include 'init.php';
    init($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?=$lang->get("TITLE_MAIN")?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styleshet02.css" />
    <script type="text/javascript" src="scripts/jscript.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=c9df9525-e54e-436f-b283-015a4cc132cc&lang=ru_RU"
  type="text/javascript"></script>
  <script src="scripts/map.js" type="text/javascript"></script>
</head>

<body>
    <div class="full-all-wrapper">
        <div class="all-wrapper">
            <nav class="sidebar colored">
                <a id="sidebar_logo" href="./index.php">
                </a>
                <ul>
                    <li>
                        <a href="#">
                        <?=$lang->get("SIDEBAR_NEWS")?>
                        </a>
                    </li>
                    <li><a href="#">
                        <?=$lang->get("SIDEBAR_SECTIONS")?>
                        </a>
                    </li>
                    <li><a href="#">
                        <?=$lang->get("SIDEBAR_ABOUT_US")?>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="wrapper">
                <header class="page-header colored">
                    <nav>

                        <form action="language.php" method="POST">
                            <ul>
                            <li>
                                <input type="submit" name="lan" value="ru_<?=$id?>" id="ru">
                            </li>
                            <li>
                                <input type="submit" name="lan" value="en_<?=$id?>" id="en">
                            </li>
                        </ul>
                        </form>
                        <div class="search_wrapper">
                            <form action="search.php">
                                <input type="text">
                                <input type="submit">
                            </form>
                        </div>
                        <ul>
                            <li>
                                <button class="color" id="white" onclick="switch_color('white')">white</button>
                            </li>
                            <li>
                                <button class="color" id="black" onclick="switch_color('black')">black</button>
                            </li>
                        </ul>
                    </nav>
                </header>
                <main class="page-main">
                        <h1 id="mytitle"><?=$article["title"]?></h1>
                        
                            <?php
                            switch ($id) {
                                case 'main':
                                    echo $main_slider;
                                    echo '<div class="text">'.$article["text"].'</div>';
                                    break;
                                case 'news':

                                    break;
                            }
                        ?>
                        
                </main>
            </div>
        </div>
        <footer class="page-footer colored">
            <ul>
                <li><div id="map"></div></li>
                <li id="footer_copyright">
                    <a href="./index.php" id="footer_logo"></a>
                    Copyright
                </li>
                <li id="phone">
                    Телефон: (+373)68007942 <br>
                    Email: artstage@gmail.com
                </li>
            </ul>
        </footer>
    </div>
</body>

</html>