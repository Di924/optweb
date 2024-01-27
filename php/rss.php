<?php

function get_content()
{
    // Формируем сегодняшнюю дату
    $date = date("d/m/Y");
    // Формируем ссылку
    $link = "http://www.cbr.ru/scripts/XML_daily.asp?date_req=$date";
    
    // Загружаем HTML-страницу
    $fd = fopen($link, "r");
    $text = "";
    
    if (!$fd) {
        echo "Запрашиваемая страница не найдена";
        return false;
    } else {
        // Чтение содержимого файла в переменную $text
        while (!feof($fd)) {
            $text .= fgets($fd, 4096);
        }
        // Закрыть открытый файловый дескриптор
        fclose($fd);

        // Преобразование кодировки, если сервер возвращает не UTF-8
        $text = iconv("windows-1251", "utf-8", $text);
    }
    
    return $text;
}

// Получаем текущие курсы валют в rss-формате с сайта cbr.ru
$content = get_content();

if ($content === false) {
    // Handle the error or return a default value
    exit;
}

// Разбираем содержимое, при помощи регулярных выражений
$pattern = "/<Valute.*?ID=\"([^\"]+)\".*?>.*?<CharCode>([^<]+).*?<Value>([^<]+)/is";
preg_match_all($pattern, $content, $out, PREG_SET_ORDER);

$dollar = $euro = $yen = $cny = $kzt =  $uzs = null;

foreach ($out as $cur) {
    // Сопоставление валюты без учета регистра
    $currencyCode = strtoupper($cur[2]);

    if (strpos($currencyCode, "USD") !== false && $dollar === null) $dollar = str_replace(",", ".", $cur[3]);
    if (strpos($currencyCode, "EUR") !== false && $euro === null) $euro = str_replace(",", ".", $cur[3]);
    if (strpos($currencyCode, "JPY") !== false && $yen === null) $yen = str_replace(",", ".", $cur[3]);
    if (strpos($currencyCode, "CNY") !== false && $cny === null) $cny = str_replace(",", ".", $cur[3]);
    if (strpos($currencyCode, "KZT") !== false && $kzt === null) $kzt = str_replace(",", ".", $cur[3]);
    if (strpos($currencyCode, "KZT") !== false && $kzt === null) $kzt = str_replace(",", ".", $cur[3]);
    if (strpos($currencyCode, "UZS") !== false && $uzs === null) $uzs = str_replace(",", ".", $cur[3]);
}

$dat = date("d/m/Y");
$dat = str_replace("/", ".", $dat);
$kurs = [
    'Доллар - ' => $dollar,
    'Евро - ' => $euro,
    'Йена - ' => $yen,
    'Юань -' => $cny,
    'Тенге -' => $kzt,
    'Сум -' => $uzs,
];

?>
