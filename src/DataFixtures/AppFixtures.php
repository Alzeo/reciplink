<?php

namespace App\DataFixtures;

use App\Entity\Role;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $adminRole  = new Role();
        $adminRole->setTitle('ROLE_ADMIN');
        $manager->persist($adminRole);

        $adminUser = new User();
        $adminUser->setUsername('rootpreprod')
            ->setEmail('root@root.com')
            ->setPassword($this->encoder->encodePassword('root'));

        $adminRole  = new Role();
        $adminRole->setTitle('ROLE_ADMIN');
        $manager->persist($adminRole);

        $adminUser = new User();
        $adminUser->setUsername('rootpreprod')
            ->setEmail('root@root.com')
            ->setPassword($this->encoder->encodePassword('root'))
            ->addUserRole($adminRole);
        $manager->persist($adminUser);

        $manager->flush();
    }
}
