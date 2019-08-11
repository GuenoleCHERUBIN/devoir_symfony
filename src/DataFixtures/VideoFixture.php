<?php

namespace App\DataFixtures;

use App\Entity\Video;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class VideoFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {


        $video = new Video();
        $video->setTitle("SYMFONY 1/4 : 1H POUR COMPRENDRE LE FRAMEWORK"),
        $video->setCreatedAt(2019-8-11 10:10:35);
        $video->setPublished(true);
        $video->setUrl("https://www.youtube.com/watch?v=UTusmVpwJXo&t=329s");

        $manager->flush();
    }
}
