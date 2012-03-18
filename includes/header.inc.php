  <head>
    <title><?php echo $currpage['title']; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php foreach($currpage['meta'] as $name => $content):?>
    <meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" />
    <?php endforeach; ?>
    <?php if($_SERVER['SERVER_NAME'] == 'www.detsad-alionoschka.de'): ?>
    <meta name='yandex-verification' content='47d5689fa50c0799' />
    <?php elseif ($_SERVER['SERVER_NAME'] == 'ulan-ude.detsad-alionoschka.de'): ?>
    <meta name='yandex-verification' content='6070fa0b8288605d' />
    <?php endif; ?>
    <meta name="google-site-verification" content="esI_R4Mhr9QDY4XYYi3QOGIsaQfEObXRLS5hpccX-VA" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-20712706-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    <!--<script src="http://vkontakte.ru/js/api/xd_connection.js" type="text/javascript"></script>-->
    <script type="text/javascript" src="http://userapi.com/js/api/openapi.js?28"></script>
    <script type="text/javascript" src="/js/fancybox/lib/jquery-1.7.1.min.js"></script>

    <link rel="stylesheet" href="/js/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/js/fancybox/source/jquery.fancybox.pack.js"></script>


    <script type="text/javascript">
      VK.init({
        apiId: 2329090,
        onlyWidgets: true
      });
    </script>
  </head>