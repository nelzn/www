<?php $this->pageTitle = 'Юпи! | О проекте'; ?>

<h1><?php echo CHtml::encode(Yii::app()->name); ?> - cms на Yii!</h1>

<b>!!!ВНИМАНИЕ!!! <br/><br/> Юпи! пока не готов для "промышленного"
    использования, но мы делаем все для этого! Поддержите нас!</b>
<br/><br/>

<p><b>Юпи!</b> - блого-социальный движок (CMS) на замечательном фреймворке <a
    href="http://yiiframework.ru">Yii</a> !</p>

<p><b>Юпи!</b> можно использовать и для создания простых сайтов!</p>

<p>Хотите создать сайт-визитку со всеми "плюшками" Yii !? Нет проблем! </p>

<p>Хотите создать блоговое сообщество !? И это возможно! </p>

<p>Используя <b>Юпи!</b>, Вы сможете развернуть сайт или блог, работающий на
    фреймворке <b>Yii</b> всего за 5 минут !
</p>

<p>Основные возможности:</p>

<ul>
    <li>Управление пользователями (регистрация и авторизация, в том числе и через соц. сети)</li>
    <li>Персональные и коллективные блоги (хотите свой хабрахабр на Yii ?)</li>
    <li>Управления разделами/категориями (пока в самом простом виде)</li>
    <li>Создание "статических" страниц ("О нас", "О проекте" и т.д. - такие странички создаются очень легко =))</li>
    <li>Добавление и публикация новостей (современный сайт без новостей существовать не может)</li>
    <li>Обратная связь с пользователем (вдруг кто-то что-то Вам захочет написать)</li>
    <li>Комментарии (комментируйте что угодно, модуль очень гибкий)</li>
</ul>

<p><b>Юпи!</b> - это <b>НЕ</b> универсальный конструктор сайтов типа Drupal или Joomla.</p>

<p> Вы просто берете готовый  функционал и используете его!</p>

<p>Наш твиттер - <a href="https://twitter.com/#!/YupeCms">https://twitter.com/#!/YupeCms</a></p>

<p>Форум поддержки - <a href='http://yupe.ru/talk/'>http://yupe.ru/talk/</a></p>

<p><b><h2>Хочешь помочь? <?php echo CHtml::link('Жми сюда!', array('/site/page/', 'view' => 'help'));?></h2></b></p>

<div style="float:left">
    <div style="float:left;padding-right:5px">
        <?php
            $this->widget('application.modules.social.widgets.ysc.yandex.YandexShareApi', array(
              'type' => 'button',
              'services' => 'all',
            ));
        ?>
    </div>
</div>