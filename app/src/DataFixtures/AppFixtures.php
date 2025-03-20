<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Music;
use Faker\Factory;
use App\Entity\Category;
use App\Entity\Tag;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

            // Créer des catégories
        $categories = [];
        for ($i = 1; $i <= 3; $i++) {
            $category = new Category();
            $category->setName('Catégorie ' . $i);
            $manager->persist($category);
            $categories[] = $category;
        }

            // Créer des tags
        $tags = [];
        for ($i = 1; $i <= 10; $i++) {
            $tag = new Tag();
            $tag->setName('Tag ' . $i);
            $manager->persist($tag);
            $tags[] = $tag;
        }


        $faker = Factory::create();

        for ($i = 1; $i <= 10; $i++){
            $music = new Music();
            $music->setName("Music".$i);
            $music->setUrl("url" .$i);
            $music->setAuteur($faker->name());

            // Associer une catégorie aléatoire à la musique
            $music->setCategory($categories[array_rand($categories)]);

            $manager->persist($music);
        }
        

        $manager->flush();
    }
}
