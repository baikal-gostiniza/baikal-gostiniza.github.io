<?php
$navigation = array(
    '/'                   => 'Главная',
    '/nomera-u-zeny.html' => 'Номера и цены',
    '/kak-dobratza.html'  => 'Как добраться',
    '/rasvlecheniya.html' => 'Развлечение',
    '/region.html'        => 'Регион',
);
?>

<ul>
    <?php foreach($navigation as $url => $title): ?>
    <li><a href="<?php echo $url; ?>"><?php echo $title; ?></a></li>
    <?php endforeach; ?>
</ul>