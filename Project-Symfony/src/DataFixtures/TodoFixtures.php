<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Todo;

class TodoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $todo = new Todo();
            $todo->setName('Task ' . $i);
            $todo->setAa('Detail for aa ' . $i);
            $todo->setBbb('Detail for bbb ' . $i);

            $manager->persist($todo);
        }

        $manager->flush();
    }
}
