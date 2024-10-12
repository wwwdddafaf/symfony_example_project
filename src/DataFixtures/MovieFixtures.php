<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('EndGame');
        $movie->setDescription('This is the description of EndGame');
        $movie->setReleaseYear(2008);
        $movie->setImagePath('C:\Users\Admin\Project\movies\public\img\EndGame.jfif');
        $manager->persist($movie);

        $movie1 = new Movie();
        $movie1->setTitle('Minion');
        $movie1->setDescription('This is the description of Minion');
        $movie1->setReleaseYear(2009);
        $movie1->setImagePath('C:\Users\Admin\Project\movies\public\img\Minion.jfif');
        $manager->persist($movie1);
        $manager->flush();
    }
}
