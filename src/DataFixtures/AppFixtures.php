<?php
// Run $ bin/console doctrine:fixtures:load
// to populate database with faker data
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
//use Doctrine\DBAL\Driver\IBMDB2\Exception\Factory;
//use Faker\Factory;
class AppFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $vehicles = new Vehicles();
            $vehicles->setDateAdded($faker->date_added);
            $vehicles->setRandType();
            $vehicles->setMsrp($faker->msrp);
            $vehicles->setYear($faker->year);
            $vehicles->setMake($faker->make);
            $vehicles->setModel($faker->model);
            $vehicles->setMiles($faker->miles);
            $vehicles->setVin($faker->vin);
            $vehicles->setDeleted($faker->deleted);
            $manager->persist($vehicles);
        }

        $manager->flush();
    }
}
