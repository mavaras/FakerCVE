
# Faker CWE
Common Weakness Enumeration (CWE) provider for [Faker](https://github.com/fzaninotto/Faker) (Spanish only for the time). Also features Common Vulnerability and Exposures (CVE) (English).
 
(WIP) adding more data to model & adding new fields to retrieve

Any contributions are welcomed :)

## Installation
```sh
composer require mavaras/faker-cwe
```


## Basic Usage
```php
$faker = Faker\Factory::create();
$faker->addProvider(new \Faker\Provider\FakerCWE($faker));
$faker->addProvider(new \Faker\Provider\FakerCVE($faker));

echo $faker->CWEId;
echo $faker->CWEDescription;
echo $faker->CWERecommendation;
echo $faker->CWERequirements;
echo $faker->CWETitle;
echo $faker->CWEType;

echo $faker->CVEId;
echo $faker->CVEComplexity;
echo $faker->CVEAuthentication;
echo $faker->CVEDescription;
echo $faker->CVEAccess;
echo $faker->CVEVulnType;
```
