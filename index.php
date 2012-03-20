<?php
$currpage = array(
  'title' => 'Super Site',
  'meta'  => array(
    'language'     => 'ru',
    'title'        => 'Контактные данные - Частный Детский Сад &laquo;Алёнушка&raquo; в Улан-Удэ',
    'keywords'     => 'Детсад, Улан-Удэ, Сотовый тел,Тел, Детский Сад,Сад,Улан-Удэ',
    'description'  => 'Наш Детский Сад- это центр радости для малышей и их родителей! Тел.(круглосуточно): 42-78-82; Сотовый тел: 8-924-655-91-99;  8-909-591-49-34. ',
    'robots'       => 'index,follow',
    'date'         => date('Y-m-d h:i', filemtime(__FILE__)),
  ),
);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" dir="ltr">
  
  <?php include ('includes/header.inc.php');  ?>

  <body>

    <div id="wrapper">

      <div id="header">
        <span class="page-title"><a href="/"><span>Святой Нос - Райский уголок</span></a></span>
        <br/><small>база отдыха в Максимихе</small>
      </div>

      <div id="menu">
        <?php include ('includes/navigation.inc.php'); ?>
      </div>

      <div id="content">
        <div id="ad-top">
          <!-- Insert 468x60 banner advertisement -->
        </div>
        <div class="entry">
          <p>
              Звоните, мы будем рады видеть Вас!
          </p>
          <ul>
            <li>Тел.(круглосуточно): 42-78-82</li>
            <li>Сотовый тел: 8-924-655-91-99</li>
          </ul>
        </div>
        <div class="entry">
          <h1 class="entry-title">комфортабельные номера по приемлимым ценам</h1>
          <p>
              База отдыха "Святой Нос - Райский уголок" располагается в одном из самых красивейших заливов Байкала -
              Баргузинский залив. Чистые воды Священного моря, отмели, лучшие белоснежные песчаные пляжи, их еще
              называют "Шагающие пляжи" - создали условия для приятного отдыха.
          </p>
          <h1 class="entry-title">Отдыхайте у нас прямо на берегу байкала!</h1>
          <div class="entry">
              <a href="/images/baikal/y_2aeb36ca.jpg" class="fancybox" rel="gallery2" title="Sample title 1"><img width="100" height="100" src="/images/baikal/y_2aeb36ca.jpg" /></a>
              <a href="/images/baikal/y_52362f2a.jpg" class="fancybox" rel="gallery2" title="Sample title 2"><img width="100" height="100" src="/images/baikal/y_52362f2a.jpg" /></a>
          </div>
        </div>

<!--        <div class="entry">

          <h2>Адрес</h2>
          <div class="vcard">
            <div class="fn org"><b>Частный детский сад Алёнушка</b></div>
            <div class="adr">
              <span class="country-name">Россия</span>,
              <span class="locality">город Улан-Удэ</span>,
              <span class="street-address">улица Шумяцкого</span><br />
              <span>время работы: <span class="workhours">пн-пт 7:00-19:00</span></span>
            </div>
            <div><span class="category">Детские сады</span></div>
            <div><span class="tel"><i class="value">+7 (3012) 42-78-82</i></span></div>
            <a class="url" href="http://ulan-ude.detsad-alionoschka.de">http://ulan-ude.detsad-alionoschka.de</a>
          </div>
        </div>-->
      </div>

<!--        <div id="sidebar">
            <ul>
                <li><a href="http://ru.wikipedia.org/wiki/Педагогика_Монтессори" title="Марией Монтессори">Unterkünfte</a></li>
                <li><a href="http://www.umnitsa.ru/metodiki_umnicy/metodika_domana-manichenko/" title="Домана-Маниченко">Umgebung</a></li>
                <li><a href="http://ru.wikipedia.org/wiki/Тест_Равена" title="методика &laquo;Равена&raquo;">Aktivitäten</a></li>
            </ul>
            <div id="sidebar-bottom"></div>
        </div>-->

      <div class="sidebar-images">
          <div>
            <a href="/images/baikal/y_2aeb36ca.jpg" class="fancybox" rel="gallery2" title="Sample title 1"><img width="100" height="100" src="/images/baikal/y_2aeb36ca.jpg" /></a>
          </div>

<!--        <script type="text/javascript">
        VK.Widgets.Like("vk_like", {
          width: 150,
          type: "button",
          pageTitle: 'Частный Детсад Улан-Удэ - "Алёнушка"',
          pageUrl: 'http://ulan-ude.detsad-alionoschka.de/'
        });
        </script>-->

        <div class="image">
          <!--<img src="images/kinder/kinder_1.jpg" alt="Kinder 1"/>-->
        </div>
      </div>

      <?php include 'includes/footer.inc.php'; ?>

    </div>

  </body>
</html>
