<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Draggable - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  #draggable { width: 150px; height: 150px; padding: 0.5em; }
  </style>
</head>
<body>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/beginning.php';
$str='<h2>Как работает функция СУММЕСЛИ в Excel?</h2>
<p>Рассмотрим простейший пример, который наглядно продемонстрирует, как использовать функцию СУММЕСЛИ и насколько удобной она может оказаться при решении определенных задач.</p>
<p>Имеем таблицу, в которой указаны фамилии сотрудников, их пол и зарплата, начисленная за январь-месяц. Если нам нужно просто посчитать общее количество денег, которые требуется выдать работникам, мы используем функцию СУММ, указав диапазоном все заработные платы.</p>
<p>Но как быть, если нам нужно быстро посчитать заработные платы только продавцов? В дело вступает использование функции СУММЕСЛИ.</p>
<p>Прописываем аргументы.
  <ul>
    <li>Диапазоном в данном случае будет являться список всех должностей сотрудников, потому что нам нужно будет определить сумму заработных плат. Поэтому проставляем E2:E14.</li>
    <li>Критерий выбора в нашем случае – продавец. Заключаем слово в кавычки и ставим вторым аргументом.</li>
    <li>Диапазон суммирования – это заработные платы, потому что нам нужно узнать сумму зарплат всех продавцов. Поэтому F2:F14.</li>
  </ul>
</p>'."\r\n";
echo $str;
$crypto = new Cypher($str);
$crypto_text = $crypto->cripto();
echo '<h4>'.$crypto_tex.'</h4>'."\r\n";
$deCode = new Cypher();
echo $deCode->deCripto($crypto_tex)."\r\n";//*/
?>

</body>
</html>