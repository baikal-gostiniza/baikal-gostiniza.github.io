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
        <span class="page-title"><a href="/"><span>Частный Детский Сад &laquo;Алёнушка&raquo;</span></a></span>
        <small>в Улан-Удэ</small>
      </div>

      <div id="menu">
        <ul>
          <li><a href="/">Контактные данные</a></li>
          <li><a href="/nasch-detzki-sad.html">Наш Детский Сад</a></li>
          <li><a href="/rebenka.html">Программа развития ребенка</a></li>
          <li class="selected"><a href="/reschim-dnja.html">Режим дня</a></li>
        </ul>
      </div>

      <div id="content">
        <div id="ad-top">
          <!-- Insert 468x60 banner advertisement -->
        </div>
        <div class="entry">
          <h1 class="entry-title">Режим дня b детсад Улан-Удэ</h1>
            <table class="daily-routine">
              <thead>
                <tr>
                  <th>С - До</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr><th class="col-1">07:00 - 09:00</th><td>Прием детей (в любое удобное для Вас время);</td></tr>
                <tr><th class="col-1">09:00 - 10:00</th><td>Зарядка и завтрак;</td></tr>
                <tr><th class="col-1">10:00 - 11:00</th><td>Программа в кабинете психолога/логопеда; занятия с воспитателем;</td></tr>
                <tr><th class="col-1">11:00 - 12:00</th><td>Прогулка на участке;</td></tr>
                <tr><th class="col-1">12:00 - 12:15</th><td>Водные процедуры;</td></tr>
                <tr><th class="col-1">12:15 - 13:00</th><td>Обед;</td></tr>
                <tr><th class="col-1">13:00 - 15:00</th><td>Сон час;</td></tr>
                <tr><th class="col-1">15:20 - 15:45</th><td>Полдник;</td></tr>
                <tr><th class="col-1">16:00 - 17:00</th><td>Индивидуальная работа с психологом/тибетологом; занятия с воспитателем;</td></tr>
                <tr><th class="col-1">17:00 - 18:00</th><td>Прогулка на участке;</td></tr>
                <tr><th class="col-1">18:00 - 19:00</th><td>Родители забирают детей (в любое удобное для Вас время).</td></tr>
              </tbody>
            </table>
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
