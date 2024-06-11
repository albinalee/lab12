<p align = "center">МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ<br>
РОССИЙСКОЙ ФЕДЕРАЦИИ<br>
ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ<br>
ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ОБРАЗОВАНИЯ<br>
«САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»</p>
<br><br><br><br><br><br>
<p align = "center">Институт естественных наук и техносферной безопасности<br>Кафедра информатики<br>Ли Альбина Тевоновна</p>
<br><br><br>
<p align = "center"><br><strong>Лабораторная работа №12. «PHP»</strong><br>01.03.02 Прикладная математика и информатика</p>
<br><br><br><br><br><br><br><br><br><br><br><br>
<p align = "right">Научный руководитель<br>
Соболев Евгений Игоревич</p>
<br><br><br>
<p align = "center">г. Южно-Сахалинск<br>2024 г.</p>
<br><br><br><br><br><br><br><br><br><br><br><br>

<h1 align = "center">Введение</h1>

<p><b>Веб-разработка</b> — процесс создания веб-сайта или веб-приложения. Основными этапами процесса являются: </p>

<ul>
<li>Проектирование сайта или веб-приложения (сбор и анализ требований, разработка технического задания, проектирование интерфейсов);</li>
<li>Создание дизайн-концепции сайта;</li>
<li>Создание страниц;</li>
<li>Программирование;</li>
<li>Оптимизация и размещение материалов сайта;</li>
<li>Тестирование и внесение корректировок;</li>
<li>Публикация проекта на хостинге;</li>
<li>Обслуживание работающего сайта.</li>
</ul>

<br>

<h1 align = "center">Цели и задачи</h1>


<p>Цель: ознакомиться со скриптовым языком PHP</p>

<p>Задачи:</p>

<ul>
<li>Изучить синтаксис PHP</li>
<li>Научиться писать скрипты для решения постановленных задач на PHP</li>
<li>Изучить функции для работы с массивами</li>
</ul>

<p></p>

<h1 align = "center">Решение</h1>

<p>Для выполнения этой лабораторной работы, я пользовалась лекционным материалом и интернет-ресурсами для поиска решений задач оформления и для поиска медиаресурсов:</p>

<ul>
<li><a href="https://www.php.net/">PHP website</a></li>
<li><a href="https://stackoverflow.com/">Stack Overflow</a></li>
</ul>

<p>Примеры кода:</p>
<code>$arr = array('a' => 1, 'b' => 2, 'c' => 3);
print_r($arr);
$arr = array_flip($arr);
print_r($arr);</code>
</br>
</br>
<code>$num = range(1, 5);
print_r($num);
$num = array_reverse($num);
print_r($num);</code>
</br>
</br>
<code>$arr = range('a', 'd');
$arr = str_split(join('-', $arr));
print_r($arr);
$i = array_search('-', $arr);
print $i . "\n";
array_splice($arr, $i, 1);
print_r($arr);</code>
</br>
</br>
<code>$arr = range('a', 'e');
print_r($arr);
$arr[0] = '!';
$arr[3] = '!!';
print_r($arr);</code>
</br>
</br>
<code>$arr = array(3 => 'a', 1 => 'c', 2 => 'e', 4 => 'b');
print_r($arr);
array_multisort($arr);
print_r($arr);
array_multisort($arr, SORT_DESC);
print_r($arr);
array_multisort($arr, SORT_STRING);
print_r($arr);</code>
</br>
</br>
<code>$arr = array('a' => 1, 'b' => 2, 'c' => 3);
print_r($arr);
print array_rand($arr) . "\n";
print $arr[array_rand($arr)];</code>
</br>
</br>
<code>$arr = range('a', 'e');
print_r($arr);
shuffle($arr);
print_r($arr);</code>
</br>
</br>
<code>$arr = range(1, 25);
print_r($arr);
shuffle($arr);
print_r($arr);</code>
</br>
</br>
<code>$arr = range('a', 'z');
shuffle($arr);
$str = substr(join($arr), 0, 6);
print $str;</code>
</br>
</br>
<code>$arr = array('a', 'b', 'c', 'b', 'a');
print_r($arr);
$arr = array_unique($arr);
print_r($arr);</code>
</br>
</br>
<code>$num = range(1, 5);
print_r($num);
print array_shift($num) . "\n";
print array_pop($num) . "\n";
print_r($num);</code>
</br>
</br>
<code>$num = range(1, 5);
print_r($num);
array_unshift($num, 0);
array_push($num, 6);
print_r($num);</code>
</br>
</br>
<code>$num = range(1, 8);
print_r($num);
while (count($num) != 0)
{
    print array_shift($num);
    print array_pop($num);
}</code>
</br>
</br>
<code>$arr = range('a', 'c');
print_r($arr);
$arr = array_merge($arr, array_fill(0, 3, '-'));
print_r($arr);</code>
</br>
</br>
<code>$arr = array_fill(0, 10, 'x');
print_r($arr);</code>
</br>
</br>
<code>$num = range(1, 20);
print_r($num);
print_r(array_chunk($num, 4, true));</code>
</br>
</br></br>
<h1 align = "center">Вывод</h1>
<p>В результате проделанной лабораторной работы, я познакомилась с новыми элементами языка PHP и попрактиковалась в работе с массивами.</p>
