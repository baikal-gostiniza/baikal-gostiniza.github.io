<?php
$currpage = array(
  'title' => 'Частный Детсад Улан-Удэ - Режим дня &laquo;Алёнушка&raquo; ',
  'meta' => array(
    'language'     => 'ru',
    'title'        => 'Режим дня - Частный Детский Сад &laquo;Алёнушка&raquo; в Улан-Удэ',
    'keywords'     => 'Детсад,Режим дня,Улан-Удэ,Детский Сад,Сад,Улан-Удэ',
    //'description'  => 'В нашем детском садике работают опытные специалисты. Три воспитательницы,  психолог и тибетолог  не только ответственно заботятся и играют с Вашим ребенком но и,что самое главное, целенаправленно занимаются развитием физических и умственных способностей Вашего Чада по методике Домана-Маниченко. Данная программа позволяет стимулировать внимание, память, речь - в результате ребенок входит в скорочтение и скоромыслие.',
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
          <h1 class="entry-title">Адрес</h1>
          <p>
              Баргузинский р-н, поселок Максимиха, ул.Байкальская, д.14 (в 235 км от г.Улан-Удэ, столица Бурятия),
              Россия.
              <br/>т.89246559199 т.647687
              <br/>
              Проезд с автовокзала г. Улан-Удэ маршрутными такси.
              <br/>Время отправления из г. Улан-Удэ: Ежедневно в 8:00,
              17:00.<br/>
              Время в пути: 4 часа.<br/>
              Стоимость билета: 400 руб.
          </p>
        </div>
      </div>

      <div class="sidebar-images">
        <div id="vk_like"></div>

        <script type="text/javascript">
        VK.Widgets.Like("vk_like", {
          width: 150,
          type: "button",
          pageTitle: 'Частный Детсад Улан-Удэ - "Алёнушка"',
          pageUrl: 'http://ulan-ude.detsad-alionoschka.de/'
        });
        </script>
        <div class="image">
          <!--<img src="images/kinder/kinder_1.jpg" alt="Kinder 1"/>-->
        </div>
      </div>

      <?php include 'includes/footer.inc.php'; ?>

    </div>

  </body>
</html>
