<?php
namespace Faker\Provider;
require('src/fakerCVEmodels.php');
use Faker\Generator;


class FakerCVE extends \Faker\Provider\Base {

    public static function CVEId() : string {
        return (string) CVEData::getCVEId()[array_rand(CVEData::getCveId())];
    }

    public static function CVEComplexity() : string {
        return (string) CVEData::getCVEComplexity()[array_rand(CVEData::getCVEComplexity())];
    }

    public static function CVEAuthentication() : string {
        return (string) CVEData::getCVEAuthentication()[array_rand(CVEData::getCVEAuthentication())];
    }

    public static function CVEConf() : string {
        return (string) CVEData::getCVEConf()[array_rand(CVEData::getCVEConf())];
    }

    public static function CVEDescription() : string {
        return (string) CVEData::getCVEDescription()[array_rand(CVEData::getCVEDescription())];
    }

    public static function CVEAccess() : string {
        return (string) CVEData::getCVEAccess()[array_rand(CVEData::getCVEAccess())];
    }

    public static function CVEVulnType() : string {
        return (string) CVEData::getCVEVulnType()[array_rand(CVEData::getCVEVulnType())];
    }
}
?>