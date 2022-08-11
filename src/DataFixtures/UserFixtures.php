<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixtures extends Fixture
{
  

    public function __construct(UserPasswordHasherInterface $passwordHasher)
	{
		$this->passwordHasher= $passwordHasher;

	}
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin')
             ->setPassword($this->passwordHasher->hashpassword($user,'admin',$user,'awa'));

        $manager->persist($user);     
        $manager->flush();
    }
}
