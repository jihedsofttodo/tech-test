<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    const CATEGORIES = ["Finance","Tips","Cryptocurrency", "Technology"];
    const AUTHORS    = ["Richard Roe","Average Joe","Joe Citizen","John Doe","Jane Doe"];
    private $faker;
    public function __construct()
    {
        $this->faker = \Faker\Factory::create();
    }
    public function load(ObjectManager $manager): void
    {
        for ($i=0; $i < 10; $i++) { 
            $blog = new BlogPost();
            $blog->setTitle($this->faker->realText(mt_rand(20, 30)))
                 ->setContent($this->faker->realText(mt_rand(300, 500)))
                 ->setCategory(self::CATEGORIES[mt_rand(0,count(self::CATEGORIES) - 1)])
                 ->setAuthor(self::AUTHORS[mt_rand(0, count(self::AUTHORS) - 1)])
                 ->setCreatedAt($this->faker->dateTimeBetween('-2 years','now'));
            $manager->persist($blog);
        }

        $manager->flush();
    }
}
