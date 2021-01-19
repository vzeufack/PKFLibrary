<?php

// src/AppBundle/DataFixtures/ORM/LoadCategoryData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Category;

class LoadCategoryData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setCategoryCode('000');
        $category1->setCategoryName('Computer science, information and general works');

        $category2 = new Category();
        $category2->setCategoryCode('100');
        $category2->setCategoryName('Philosophy and Psychology');

        $category3 = new Category();
        $category3->setCategoryCode('200');
        $category3->setCategoryName('Religion');

        $category4 = new Category();
        $category4->setCategoryCode('300');
        $category4->setCategoryName('Social Sciences');

        $category5 = new Category();
        $category5->setCategoryCode('400');
        $category5->setCategoryName('Language');

        $category6 = new Category();
        $category6->setCategoryCode('500');
        $category6->setCategoryName('Science');

        $category7 = new Category();
        $category7->setCategoryCode('600');
        $category7->setCategoryName('Technology');

        $category8 = new Category();
        $category8->setCategoryCode('700');
        $category8->setCategoryName('Arts and Recreation');

        $category9 = new Category();
        $category9->setCategoryCode('800');
        $category9->setCategoryName('Literature');

        $category10 = new Category();
        $category10->setCategoryCode('900');
        $category10->setCategoryName('History & Geography');


        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category3);
        $manager->persist($category4);
        $manager->persist($category5);
        $manager->persist($category6);
        $manager->persist($category7);
        $manager->persist($category8);
        $manager->persist($category9);
        $manager->persist($category10);

        $manager->flush();
    }
}