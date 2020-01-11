<?php

namespace App\DataFixtures;

use App\Entity\Food;
use App\Entity\Recipe;
use App\Entity\Role;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Faker\Factory;

class RecipeFixtures extends Fixture
{
    private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        $foods = new Food();
        $foods->setName($faker->sentence(6))
            ->setQuantity(300)
            ->setQuantityUnity('gr');

        for($i = 1; $i <= 10; $i++) {
            $user = new User();
            $username = $faker->firstNameMale;
            $password = $this->encoder->encodePassword($user, 'lol');
            $role = new Role();
            $role->setTitle('ROLE_USER');
            $user->addUserRole($role)
                ->setUsername($username)
                ->setEmail($faker->email)
                ->setPassword($password);
            $manager->persist($role, $user);
        }

            for($j = 1; $j <= 10; $j++) {
                $recipe = new Recipe();

                $recipe->setName('Paléo Crust')
                    ->setRegime('Paléo')
                    ->setType('Petit déjeuner')
                    ->setDificulty('Facile')
                    ->setTime(20)
                    ->setTimeUnity('Minutes')
                    ->setPart(3)
                    ->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores fugit incidunt mollitia sapiente similique sunt vero! Dolorem magnam minus sapiente velit. Eius maxime nemo nisi pariatur provident ratione repudiandae.')
                    ->setProtein(20)
                    ->setGlucide(20)
                    ->setLipide(20)
                    ->setCalorie(220)
                    ->addFood($foods)
                    ->setPublish(true)
                    ->setPicture('externalcontentduckduckgocom-5e05dda7b3a94.jpeg')
                    ->setCreatedAt(new \DateTime('now'))
                    ->setUser($user);

                $manager->persist($recipe, $foods);
            }

        $manager->flush();
    }
}
