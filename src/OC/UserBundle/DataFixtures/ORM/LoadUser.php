<?php
// src/OC/UserBundle/DataFixtures/ORM/LoadUser.php

namespace OC\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\UserBundle\Entity\User;

class LoadUser implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Les noms d'utilisateurs à créer
    $listNames = array('Bo', 'No');

    foreach ($listNames as $name) {
      $user = new User;

      $user->setUsername($name);
      $user->setPassword($name);
      $user->setAge(12);
      $user->setEmail('test@test.Com');
      $user->setNourriture('Bannane');

      $user->setSalt('');
      $user->setRoles(array('ROLE_USER'));
      $manager->persist($user);
    }

    // enregistrement
    $manager->flush();
  }
}
