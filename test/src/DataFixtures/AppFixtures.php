<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $faker;
    private $hasher;
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->faker = \Faker\Factory::create();
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $this->loadAdminUser($manager);
        $this->loadUser($manager);
        $manager->flush();
    }

    public function loadAdminUser(ObjectManager $manager){
        $admin = new User();
        $admin->setEmail("admin@blogs.com")
              ->setFirstName($this->faker->firstNameMale)
              ->setLastName($this->faker->lastName)
              ->setPassword($this->hasher->hashPassword($admin,"secret123"))
              ->setRoles(["ROLE_ADMIN"])
              ->setBirthDay(new \DateTime('-30 years'));
        $manager->persist($admin);
    }

    public function loadUser(ObjectManager $manager){
        $user = new User();
        $user->setEmail("user@blogs.com")
              ->setFirstName($this->faker->firstNameMale)
              ->setLastName($this->faker->lastName)
              ->setPassword($this->hasher->hashPassword($user,"secret123"))
              ->setBirthDay(new \DateTime('-15 years'));
        $manager->persist($user);
    }
}
