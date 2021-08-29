<?php

namespace App\DataFixtures;

use App\Entity\Brand;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BrandFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i<=5; $i++) {
            $brand = new Brand();
            $brand->setName("Brand $i");
            $brand->setDescription("This is detail info about brand $i");
            $manager->persist($brand);
            $manager->flush();
        }

        $manager->flush();
    }
}
