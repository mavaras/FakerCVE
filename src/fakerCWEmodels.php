<?php
namespace Faker\Provider;


class CWEData {

    protected static $cweId_models = array();
    protected static $cweDescription_models = array();
    protected static $cweRecomendation_models = array();
    protected static $cweRequirements_models = array();
    protected static $cweTitle_models = array();
    protected static $cweType_models = array();

    function __construct() {
        $cwe_file = file_get_contents('res/cwe.json');
        $cwe_json = json_decode($cwe_file, true);

        foreach ($cwe_json as &$cwe) {
            array_push(static::$cweId_models, $cwe['cwe']);
            array_push(static::$cweDescription_models, $cwe['description']);
            array_push(static::$cweRecomendation_models, $cwe['recommendation']);
            array_push(static::$cweRequirements_models, $cwe['requirements']);
            array_push(static::$cweTitle_models, $cwe['title']);
            array_push(static::$cweType_models, $cwe['type']);
        }
    }
}
?>