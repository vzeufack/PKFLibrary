<?php

// src/AppBundle/DataFixtures/ORM/LoadCategoryData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use UserBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setFirstName('Vannel');
        $admin->setFamilyName('Zeufack');
        $admin->setPhoneNumber('691009095');
        $admin->setAddress('Yaounde - Mendong');
        $admin->setBatch('Junior');
        $admin->setEntranceYear('2012');
        $admin->setFieldOfStudy('Computer Science');
        $admin->setDepartment('CS & IT');
        $admin->setPhoto('My Picture');
        $admin->setProfession('Undergraduate');
        $admin->setUserName('admin');
        $admin->setEmail('zvanel@live.fr');
        $admin->setRoles(array('ROLE_ADMIN'));
        $admin->setEnabled(true);
        $admin->setPlainPassword("*vanGOD93*");
        

        $manager->persist($admin);
        $manager->flush();
    }
}