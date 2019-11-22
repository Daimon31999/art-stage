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
</head>

<body>
    <div class="full-all-wrapper">
        <div class="all-wrapper">
            <nav class="sidebar">
                <a id="sidebar_logo" href="./index.php">
                    <img src="./img/logo.png" alt="">
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
                <header class="page-header">
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
                        <img src="./img/search.png" alt="">
                    </nav>
                </header>
                <main class="page-main">
                    <div>
                        <h1><?=$article["title"]?></h1>
                        <p>
                            <?=$article["text"]?>
                        </p>
                    </div>
                </main>
            </div>
        </div>
        <footer class="page-footer">
            <ul>
                <li><a href="#"><img src="./img/google_maps.png" alt="maps"></a></li>
                <li><a href="./index.php"><img src="./img/logo.png" id="footer_logo" alt="logo"></a></li>
                <li>Копирайт</li>
            </ul>
        </footer>
    </div>
</body>

</html>