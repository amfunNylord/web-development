<!DOCTYPE html>
<html lang="ru">
<!--Убрать head и body, валидатор-->
<head>                    
  <title>form</title>
</head>
<div class="popup">
  <!--Вытащить картинку из формы и из дива-->
  <img src="web/images/close.svg" alt="" class="close-popup" />
  <img src="web/images/welcome.png" alt="" class="welcome-image" id="image" />
  <h2 class="form-title" id="title">Записаться на курс</h2>
  <div class="form">
  <!--Переименовать ownform, БЭМ компоненты-->
    <form method="POST" action="src/form_handler.php" class="form__elements" id="form" >
      <input type="text" name="name" placeholder="Ваше имя" class="form__elements_input-text _req _name" />
      <input type="text" name="email" placeholder="Email" class="form__elements_input-text _req _email" />
      <select name="activity" class="form__elements_input-select">
        <option disabled selected class="form__elements_input-text">Деятельность</option>
        <option class="form__elements_input-text">Программист</option>
        <option class="form__elements_input-text">Дизайнер</option>
        <option class="form__elements_input-text">Маркетолог</option>
      </select>
      <label class="form__elements_custom-checkbox">
        <input name="agreed" type="checkbox" class="form__elements_custom-checkbox_checkbox" />
        <span class="form__elements_custom-checkbox_checkbox-text">Согласен получать информационные материалы о старте курса</span>
      </label>
      <input type="submit" value="Записаться на курс" class="form__elements_submit-button"/>
    </form>
  </div>
</div>
</html>
