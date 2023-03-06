<?php

namespace App\DataFixtures;
use App\Entity\Curso;
use App\Entity\Usuario;
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
        $estados=["activo", "inactivo", "en construcción"];
        for($i =0; $i<5; $i++){
            $curso = new Curso();
            $curso -> setEstado($estados(random_int(0,1)));
            $curso -> setDuración(random_int(10,120));
            #$curso -> setPrecio(10.25.strval($i));

            $usuario = new Usuario();
            $usuario -> setNombres("Usuario ".strval($i));
            $usuario -> setApellidos("Apellido ".strval($i));
            $usuario -> setEmail("Email ".strval($i));
            $usuario -> setTipo($roles(random_int(0,1)))
            $manager -> persist($usuario);
            $manager -> persist($curso);
            $manager -> flush();
        };
    }

    /**
     */
    public function __construct() {
    }
}
