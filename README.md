
# Faker CVE
Common Vulnerability and Exposures provider for [Faker](https://github.com/fzaninotto/Faker).
 
(WIP) adding more data to model & adding new fields to retrieve

Any contributions are welcomed :)

## Installation
```sh
composer require mavaras/faker-cve
```


## Basic Usage
```php
$faker = Faker\Factory::create();
$faker->addProvider(new \Faker\Provider\FakerCVE($faker));

echo $faker->CVEId;  // CVE-2019-17601
echo $faker->CVEComplexity;  // CVE-2019-17601
echo $faker->CVEAuthentication;  // CVE-2019-17601
echo $faker->CVEDescription;  // UPX 3.95 is affected by: Integer Overflow. The impact is: attacker can cause a denial of service. The component is: src/p_lx_elf.cpp PackLinuxElf32::PackLinuxElf32help1() Line 262. The attack vector is: the victim must open a specially crafted ELF file.
echo $faker->CVEAccess;  // Local
echo $faker->CVEVulnType;  // Sql Injection
```
