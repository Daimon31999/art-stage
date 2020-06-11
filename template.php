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
    <title>ArtStage</title>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slider.css" />
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
                        <a href="news.php">
                        <?=$lang->get("SIDEBAR_NEWS")?>
                        </a>
                    </li>
                    <li><a href="sections.php">
                        <?=$lang->get("SIDEBAR_SECTIONS")?>
                        </a>
                    </li>
                    <li><a href="aboutus.php">
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
                            <form action="search.php" method="POST">
                                <input type="text" name="search" id="search_text">
                                <input type="submit" id="search_button"value="go">
                            </form>
                        </div>
                        <ul id="ul_opinion">
                            <li id="li_opinion">
                              <a href="./myform.php"><?=$lang->get("REGISTRATION")?></a>
                            </li>
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
                            $language = $_COOKIE["language"];
                            switch ($id) {
                                case 'main':
                                    echo $main_slider;
                                    echo '<div class="text">'.$article["body"].'</div>';
                                    break;
                                case 'news':
                                    echo $article["body"];
                                    break;
                                case 'aboutus':
                                    echo $article["body"];
                                    break;
                                case 'sections':
                                    if($language==='ru')
                                        echo '<h1 id="mytitle">Секции</h1>';
                                    elseif($language==='en')
                                        echo '<h1 id="mytitle">Sections</h1>';
                                    echo '
                                    <div class="sections_wrapper">
                                        <div class="sections_image">
                                        <a href="drawing.php"> <img src="./img/photos/drawing_'.$language.'.png" alt=""></a>
                                        <a href="modeling.php">
                                            <img src="./img/photos/modeling_'.$language.'.png" alt=""></a>
                                            <a href="music.php">
                                            <img src="./img/photos/music_'.$language.'.png" alt="">
                                            </a>
                                        </div>
                                    </div>  ';
                                    case 'myform':
                                      if(isset($t))
                                        echo $t;
                                      break;
                                    case 'drawing':
                                      echo $drawing_slider;
                                      echo '<div class="text">'.$article["body"].'</div>';
                                    break;
                                    case 'music':
                                      echo $music_slider;
                                      echo '<div class="text">'.$article["body"].'</div>';
                                    break;
                                    case 'modeling':
                                      echo $modeling_slider;
                                      echo '<div class="text">'.$article["body"].'</div>';
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
                    ArtStage&copy
                </li>
                <li id="phone">
                    (+373)68007942 <br>
                    artstage@gmail.com
                </li>
            </ul>
        </footer>
    </div>
    <script type="text/javascript" src="./scripts/switch_color.js"></script>
</body>
</html>
