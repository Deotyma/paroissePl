<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{

    const NB_USERS = 20;

    const GROUPS = [
        'Różaniec',
        'Ministranci',
        'Chór',
        'Grupa biblijna'
    ];

    const VOLUNTEERS = [
        'Rada parafialna',
        'Diakonia porządkowa',
        'Diakonia informacji',
        'Diakonia kwiatowa'
    ];

    public function load(ObjectManager $manager)
    {
        for($i=0; $i<self::NB_USERS; $i++) {
            $user = new User();
            $c=random_int(0, count(self::GROUPS)-1);
            $b=random_int(0, count(self::VOLUNTEERS)-1);

            if ($i === 0) {
                $user ->setEmail("prenom$i@test.com")
                    ->setFirstname("Prenom $i")
                    ->setLastname("Nom $i")
                    ->setRoles(["ROLE_ADMIN", "ROLE_USER"])
                    ->setTelephone("0000000000")
                    ->setGroups(self::GROUPS[$c])
                    ->setVolunteer(self::VOLUNTEERS[$b])
                    ->setPassword( "password$i");

                $manager->persist($user);
            } else {
                $user->setEmail("prenom$i@test.com")
                    ->setFirstname("Prenom $i")
                    ->setLastname("Nom $i")
                    ->setRoles(["ROLE_USER"])
                    ->setTelephone("0000000000")
                    ->setGroups(self::GROUPS[$c])
                    ->setVolunteer(self::VOLUNTEERS[$b])
                    ->setPassword( "password$i");

                $manager->persist($user);
            }
        }
        $manager->flush();
    }
}
