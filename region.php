<?php
$currpage = array(
  'title' => 'Частный Детсад Улан-Удэ - &laquo;Алёнушка&raquo;',
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
          <h1 class="entry-title">Контактные данные</h1>
          <!--<p id="vk_like"></p>-->
          <p>
            На южном побережье Баргузинского залива, в 235 км от города Улан -Удэ располагается поселок Максимиха. 
            Место очень удобно для отдыха: вода здесь теплее, чем во многих местах Байкала ( в августе температура
            воды достигает +14+16С), здесь хороший пляж и отмель, рядом с селом высокие склоны гор, покрытые
            хвойным лесом, в которых осенью можно собирать лесную ягоду и грибы. В этом месте два красивейших
            залива Байкала - Баргузинский и Чивыркуйский разделены полуостровом Святой Нос. Вода в заливах
            теплее, чем в открытом Байкале, конец июля - начало августа здесь лучшее время для отдыха. Мелкий
            песок и чистейшая вода привлекают сюда многочисленных туристов. Берега покрыты густым хвойным и
            лиственным лесом, спускающимся прямо к кромке воды, прямо под ногами растет брусника и шикша, в
            августе в обилии появляются грибы. Прямо с берега можно ловить рыбу, здесь водятся омуль, хариус,
            сиг, сорога, окунь и другие виды. Недалеко от деревни Максимиха есть небольшое лесное озеро Духовое,
            где можно отлично порыбачить.
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
