<?php
namespace Faker\Tests\Provider;
require('src/fakerCVE.php');

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\CVEData;
use Faker\Provider\FakerCVE;
use PHPUnit\Framework\TestCase;

class FakerCVETest extends TestCase {

    private $faker;

    protected function setUp() {
        $faker = Factory::create();
        $faker->addProvider(new \Faker\Provider\FakerCVE($faker));
        $this->faker = $faker;
    }

    public function testCVEId() {
        $this->assertContains(
            $this->faker->CVEId,
            CVEData::getCVEId()
        );
    }

    public function testCVEComplexity() {
        $this->assertContains(
            $this->faker->CVEComplexity,
            CVEData::getCVEComplexity()
        );
    }

    public function testCVEAuthentication() {
        $this->assertContains(
            $this->faker->CVEAuthentication,
            CVEData::getCVEAuthentication()
        );
    }

    public function testCVEConf() {
        $this->assertContains(
            $this->faker->CVEConf,
            CVEData::getCVEConf()
        );
    }

    public function testCVEDescription() {
        $this->assertContains(
            $this->faker->CVEDescription,
            CVEData::getCVEDescription()
        );
    }

    public function testCVEAccess() {
        $this->assertContains(
            $this->faker->CVEAccess,
            CVEData::getCVEAccess()
        );
    }

    public function testCVEVulnType() {
        $this->assertContains(
            $this->faker->CVEVulnType,
            CVEData::getCVEVulnType()
        );
    }
}
?>