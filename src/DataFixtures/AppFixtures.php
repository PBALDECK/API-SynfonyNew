<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use Faker\Provider\DateTime;


class AppFixtures extends Fixture
 {
     public function load(ObjectManager $manager)
      {
       $faker = Faker\Factory::create('fr_FR');
           
           $users = Array();
           for ($i = 0; $i < 10; $i++) {
               $users[$i] = new User();
               $users[$i]->setEmail($faker->email);
               $users[$i]->setLastname($faker->lastName);
               $users[$i]->setFirstname($faker->firstName);
               $users[$i]->setPassword($faker->password());

               $manager->persist($users[$i]);
           }
       

       $posts = Array();

       for ($i = 0; $i < 20; $i++) {
               $posts[$i] = new Post();
               $posts[$i]->setTitle($faker->sentence($nbWords = 6, $variableNbWords = true));
               $posts[$i]->setContent($faker->sentence($nbWords = 20, $variableNbWords = true));
               $posts[$i]->setUsers($users[$i % 3]);
               $posts[$i]->setCreatedAt($faker->dateTimeThisMonth());
               $posts[$i]->setStatus($faker->randomElement(['DRAFT','PUBLISHED','DELETED']));
               

               $manager->persist($posts[$i]);
           }

           $manager->flush();
       }
   }

