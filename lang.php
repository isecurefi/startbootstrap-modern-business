<?php
require('vendor/autoload.php');

use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Parser;
//var_dump($texts);

function get_text($id)
{
    global $lang;

    if ($lang != "fi" ||
        $lang != "se") {
        // "en" is so far not supported yet
        $lang = "fi";
    }
    $yaml = new Parser();
    try {
        $texts = $yaml->parse(file_get_contents('texts.yml'));
    } catch (ParseException $e) {
        printf("Unable to parse the YAML string: %s".PHP_EOL,
               $e->getMessage());
    }

    $change = ['ä','ö','å','Ä','Ö','Å'];
    $to = ['&auml;','&ouml;','&aring;','&Auml;','&Ouml;','&Aring;']; 
    return str_replace($change, $to, $texts['texts'][$id][$lang]);
}
