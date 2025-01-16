<?php

$lang = $_GET['lang'] ?? 'it';

function selectField(string $fieldLang): string
{
    global $lang;

    return $lang === $fieldLang ? 'selected' : '';
}

function createLangFields(): string
{

    include "./languaged/lang.php";
    $fieldsArray = '';

    foreach ($translations as $key => $translation) {
        $selected = selectField($key);
        $fieldsArray .= "<option $selected value=\"$key\">{$translation['name']}</option>";
    }

    return $fieldsArray;
}

function crateContent($nameOfPage, $nameOfTag)
{
    global $lang;
    include "./languaged/lang.php";
    return $translations[$lang][$nameOfPage][$nameOfTag];
}
