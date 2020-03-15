<?php
namespace Faker\Tests\Provider;

use Faker\Factory;
use Faker\Generator;
use Faker\Provider\Youtube;
use PHPUnit\Framework\TestCase;

class FakerCVETest extends TestCase {

    private $faker;

    protected function setUp() {
        $faker = Factory::create();
        $faker->addProvider(new Youtube($faker));
        $this->faker = $faker;
    }
}
?>