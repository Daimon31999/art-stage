<?php 
    class Language {
        private $data;
        public function __construct($language) {
            $this->data = parse_ini_file("system_$language.ini");
        }
        public function get ($name) {
            return $this->data[$name];
        }
    }
    function getLanguage() {
        preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]), $matches); // Получаем массив $matches с соответствиями
        $langs = array_combine($matches[1], $matches[2]); // Создаём массив с ключами $matches[1] и значениями $matches[2]
        foreach ($langs as $n => $v)
        $langs[$n] = $v ? $v : 1; // Если нет q, то ставим значение 1
        arsort($langs); // Сортируем по убыванию q
        $default_lang = key($langs); // Берём 1-й ключ первого (текущего) элемента (он же максимальный по q)
        if (strpos($default_lang, "ru" !==false)) return "ru";
        elseif (strpos($default_lang, "en") !==false) return "en";
    }
    function init($id)
    {
        global $lang;
        global $article;
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
        ini_set("display_startap_errors", 1);
        if(!isset($_COOKIE['language']))
            setcookie('language', getLanguage());
        $tmp="$id"."_".$_COOKIE['language'];
        $tmp1 = $_COOKIE['language'];
        #**************     language    *******************
        $lang=new Language($_COOKIE['language']);
        $mysqli=new mysqli("localhost", "root", "", "creative_center");
        $mysqli->set_charset("utf8");
        $result_set=$mysqli->query("SELECT * FROM `articles_$tmp1` WHERE `id` = '$tmp'");
        $article=$result_set->fetch_assoc();
        $mysqli->close();
    }
?>