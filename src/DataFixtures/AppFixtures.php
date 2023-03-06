<?php

namespace App\DataFixtures;
use App\Entity\Curso;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

/**
 * Summary of AppFixtures
 */
class AppFixtures extends Fixture
{
    /**
     * Summary of load
     * @param ObjectManager $manager
     * @return void
     */
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $roles=["consumidor","creador"];
        for($i =0; $i<5; $i++){
            $curso = new Curso();
            $curso -> setEstado($roles(random_int(0,1)));
            $curso -> setDuración(random_int(10,120));
            #$curso -> setPrecio(10.25.strval($i));
            $manager -> persist($curso);
            $manager -> flush();
        };
    }

    /**
     */
    public function __construct() {
    }
}
