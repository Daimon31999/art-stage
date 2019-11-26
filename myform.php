<?php
  $id = "myform";
  $t = '
  <link rel="stylesheet" href="./myform.css">

  <form action="db_myform.php" method="POST" id="myform">
      <h1>Расскажите о себе</h1>
      <label for="name">Имя</label>
      <input type="text" id="name" name="name" required placeholder="Вася">
      <label for="surname">Фамилия</label>
      <input type="text" id="surname" name="surname" required placeholder="Пупкин">
      <label for="sex">Пол</label>
      <span>М	&nbsp;</span><input type="radio" id="sex" name="sex" value="male" required> <span>Ж</span> <input type="radio" id="sex" name="sex" value="female" required>
      <label for="family">Семейное положение</label>
      <select id="family" name="family" size="1" required>
          <option disabled>Выберите свое семейное положение</option>
          <option value="Замужем (женат)">Замужем (женат)</option>
          <option value="Не замужем (холост)" selected>Не замужем (холост)</option>
          <option value="Разведен(а)">Разведен(а)</option>
      </select>
      <label id="date_of_birth">Дата рождения:</label>
      <input id="date_of_birth" type="date" name="date_of_birth" min="1900-01-01" max="2018-01-01" required>
      <label for="address">Адрес</label>
      <textarea name="address" id="address" cols="30" rows="5" required placeholder="Улица, номер дома, квартира"></textarea>
      <label for="city">Город</label>
      <input type="text" id="city" name="city" required placeholder="New York">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required placeholder="vaseapupkin@mail.ru">
      <label for="phone">Телефон</label>
      <input type="text" name="phone" id="phone" placeholder="069699699">
      <label for="hobby">Hobby</label>
      <select multiple name="hobby[]" id="hobby" size="6">
          <option disabled>Выберите свои любимые занятия</option>
          <option value="Спорт">Спорт</option>
          <option value="Музыка">Музыка</option>
          <option value="Лепка">Лепка</option>
          <option value="Танцы">Танцы</option>
          <option value="Рисование">Рисование</option>
          <option value="Книги">Книги</option>
      </select>

      <div class="buttons">
          <input type="submit" name="register" value="Зарегистрироваться" id="submit">
          <input type="reset" value="Сброс" id="reset">
      </div>
  </form>
  ';
  include "template.php";
 ?>
