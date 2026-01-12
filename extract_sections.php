<?php
require_once __DIR__ . '/config/config.php';

/**
 * Выполняет PHP-файл и возвращает HTML-строку
 */
function getRenderedHtml($file) {
    if (!file_exists($file)) {
        error_log("❌ Файл не найден: $file");
        return '';
    }

    ob_start();
    include $file;
    return ob_get_clean();
}

/**
 * Загружает DOMDocument из HTML-строки
 */
function loadDomFromHtml($html) {
    if (empty(trim($html))) {
        error_log("❌ Пустой HTML передан в loadDomFromHtml()");
        return new DOMDocument(); // Возвращаем пустой DOM, чтобы не падало
    }

    $dom = new DOMDocument();
    libxml_use_internal_errors(true);
    @$dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();
    return $dom;
}

/**
 * Извлекает первый HTML-тег по имени (head, header, footer и т.д.)
 */
function extractHtmlSection($htmlFile, $tagName) {
    $html = getRenderedHtml($htmlFile);
    if (empty(trim($html))) {
        return "<!-- $tagName не найден: $htmlFile вернул пустой HTML -->";
    }

    $dom = loadDomFromHtml($html);
    $elements = $dom->getElementsByTagName($tagName);
    return ($elements->length > 0) ? $dom->saveHTML($elements->item(0)) : "<!-- <$tagName> не найден -->";
}

function extractHeadSection($htmlFile) {
    return extractHtmlSection($htmlFile, 'head');
}

function extractHeader($htmlFile) {
    return extractHtmlSection($htmlFile, 'header');
}

function extractFooter($htmlFile) {
    return extractHtmlSection($htmlFile, 'footer');
}

/**
 * Извлекает все <style> и <link rel="stylesheet">
 */
function extractAllStyles($htmlFile) {
    $html = getRenderedHtml($htmlFile);
    if (empty(trim($html))) return "<!-- Стили не найдены: пустой HTML -->";

    $dom = loadDomFromHtml($html);
    $output = '';

    foreach ($dom->getElementsByTagName('style') as $style) {
        $output .= $dom->saveHTML($style) . "\n";
    }

    foreach ($dom->getElementsByTagName('link') as $link) {
        if (strtolower($link->getAttribute('rel')) === 'stylesheet') {
            $output .= $dom->saveHTML($link) . "\n";
        }
    }

    return $output;
}

/**
 * Извлекает все <script>
 */
function extractAllScripts($htmlFile) {
    $html = getRenderedHtml($htmlFile);
    if (empty(trim($html))) return "<!-- Скрипты не найдены: пустой HTML -->";

    $dom = loadDomFromHtml($html);
    $output = '';

    foreach ($dom->getElementsByTagName('script') as $script) {
        $output .= $dom->saveHTML($script) . "\n";
    }

    return $output;
}

/**
 * Извлекает <div> или любой элемент по ID (например: login, cookiePopup)
 */
function extractPopupById($htmlFile, $id) {
    $html = getRenderedHtml($htmlFile);
    if (empty(trim($html))) return "<!-- Popup $id не найден: пустой HTML -->";

    $dom = loadDomFromHtml($html);
    $xpath = new DOMXPath($dom);
    $node = $xpath->query("//*[@id='$id']")->item(0);
    return $node ? $dom->saveHTML($node) : "<!-- Popup #$id не найден -->";
}

/**
 * Извлекает сразу несколько попапов по ID
 */
function extractAllPopups($htmlFile, $ids = ['login', 'register', 'cookiePopup', 'loginModal', 'registerModal']) {
    $result = '';
    foreach ($ids as $id) {
        $popup = extractPopupById($htmlFile, $id);
        if ($popup) {
            $result .= "\n<!-- Popup: $id -->\n" . $popup;
        }
    }
    return $result;
}
