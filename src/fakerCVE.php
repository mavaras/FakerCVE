<?php
namespace Faker\Provider;
require('src/fakerCVEmodels.php');
use Faker\Generator;

class FakerCVE extends \Faker\Provider\Base {
    public static function CVEId() : string {
        return (string) CVEData::getCVEId()[array_rand(CVEData::getCveId())];
    }
}
?>