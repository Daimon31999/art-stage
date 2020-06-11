<?php
    $article_count=0;
    $article = array();
    function switch_language($lan)
    {
      $lan === 'ru' ? $lan = 'en' : $lan = 'ru';
        return $lan;
    }
    //Возвращяет: 0-не найденно; 1-найденно; -1-ошибка
    function search($search){
        global $article_count;
        global $article;
        $language = $_COOKIE['language'];
        $another_language = switch_language($language);
        $mysqli=new mysqli("localhost", "root", "", "creative_center");
        $mysqli->set_charset("utf8");
        if($search===""){
          echo '<div class="link"><p>Введите что-нибудь!!!</p></div>';
          return;
        }
        $result_set=$mysqli->query("SELECT * FROM `articles_$language` WHERE MATCH(title, body) AGAINST ('$search') OR title LIKE '%$search%' OR body LIKE '%$search%'");
        // Если нет ошибок SQL
        if($result_set)
        {
            // Если ничего не найденно
            if($result_set->num_rows === 0)
            {
                //Поменять язык и искать заново
                $result_set=$mysqli->query("SELECT * FROM `articles_$another_language` WHERE MATCH(title, body) AGAINST ('$search') OR title LIKE '%$search%' OR body LIKE '%$search%'");
                // Если не найденно на двух языках
                if($result_set->num_rows === 0)
                {
                    return 0;
                }
                //Если найденно на another_language
                else
                {
                    while($row = $result_set->fetch_assoc()) {
                      array_push($article, $row['id']);
                    }
                    return 1;
                }

            }
            //Если найденно на language
            else
                {
                  while($row = $result_set->fetch_assoc()) {
                    array_push($article, $row['id']);
                  }
                    return 1;
                }

        }
        else
        {
            return -1;
        }
        $mysqli->close();
    }

    $search = $_POST['search'];
    
    $b_result = search($search);
    if($b_result===1){
      for ($i=0; $i < count($article); $i++) {
        $page = explode('_', $article["$i"])[0];
        $language = explode('_', $article["$i"])[1];
        $_COOKIE['language'] = $language;
        switch ($page) {
            case 'main':
                echo '<div class="link"><a href="index.php">'.($language==='ru' ? 'Главная страница' : 'Main page').'</a></div>';
                break;
            case 'news':
                echo '<div class="link"><a href="news.php">'.($language==='ru' ? 'Новости' : 'News').'</a></div>';
                break;
            case 'sections':
                echo '<div class="link"><a href="sections.php">'.($language==='ru' ? 'Секции' : 'Sections').'</a></div>';
                break;
            case 'aboutus':
                echo '<div class="link"><a href="aboutus.php">'.($language==='ru' ? 'О нас' : 'About us').'</a></div>';
                break;
        }
      }
    }
    elseif ($b_result===0){
        echo '<div class="link"><p>Совпадений нет!!!</p></div>';
    }
    elseif ($b_result===-1){
        echo '<div class="link"><p>Ошибка</p></div>';
    }
?>

<style>
  .link{
    display: flex;
    width: 500px;
    height: 50px;
    border-radius: 20px;
    background: rgba(0,0,255,0.4);
    margin: 40px;
  }

  a,p {
    text-decoration: none;
    color: cyan;
    font-size: 38px;
    margin: 0 auto;
  }
</style>
