<?php
namespace Faker\Provider;
require('src/fakerCWEmodels.php');
use Faker\Generator;


class FakerCWE extends \Faker\Provider\Base {

    public static function CWEId() : string {
        return (string) CWEData::getCWEId()[array_rand(CWEData::getCWEId())];
    }

    public static function CWEDescription() : string {
        return (string) CWEData::getCWEDescription()[array_rand(CWEData::getCWEDescription())];
    }

    public static function CWERecommendation() : string {
        return (string) CWEData::getCWERecommendation()[array_rand(CWEData::getCWERecommendation())];
    }

    public static function CWERequirements() : string {
        return (string) CWEData::getCWERequirements()[array_rand(CWEData::getCWERequirements())];
    }

    public static function CWETitle() : string {
        return (string) CWEData::getCWETitle()[array_rand(CWEData::getCWETitle())];
    }

    public static function getCWEType() : string {
        return (string) CWEData::getCWEType()[array_rand(CWEData::getCWEType())];
    }
}
?>