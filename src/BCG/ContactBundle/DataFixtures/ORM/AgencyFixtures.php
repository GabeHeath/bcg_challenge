<?php

namespace BCG\ContactBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BCG\ContactBundle\Entity\Agency;

class BlogFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
    * {@inheritDoc}
    */
    public function load(ObjectManager $manager)
    {
        $agency1 = new Agency();
        $agency1->setName('Ogilvy & Mather');
        $agency1->setEstablished(new \DateTime('1-1-1948'));
        $agency1->setPhone('555-555-5551');
        $agency1->setEmail('contact@om.com');
        $agency1->setAddress('636 Eleventh Avenue, New York, NY 10036');
        $agency1->setCreated(new \DateTime());
        $agency1->setUpdated($agency1->getCreated());
        $manager->persist($agency1);

        $agency2 = new Agency();
        $agency2->setName('IDEO');
        $agency2->setEstablished(new \DateTime('2-2-1991'));
        $agency2->setPhone('555-555-5552');
        $agency2->setEmail('contact@ideo.com');
        $agency2->setAddress('626 West Jackson Blvd, Chicago, IL 60661');
        $agency2->setCreated(new \DateTime());
        $agency2->setUpdated($agency1->getCreated());
        $manager->persist($agency2);

        $agency3 = new Agency();
        $agency3->setName('McCann Erickson');
        $agency3->setEstablished(new \DateTime('3-3-1930'));
        $agency3->setPhone('555-555-5553');
        $agency3->setEmail('contact@mcann.com');
        $agency3->setAddress('622 3rd Avenue, New York, NY 10017');
        $agency3->setCreated(new \DateTime());
        $agency3->setUpdated($agency1->getCreated());
        $manager->persist($agency3);

        $agency4 = new Agency();
        $agency4->setName('JWT');
        $agency4->setEstablished(new \DateTime('4-4-1864'));
        $agency4->setPhone('555-555-5554');
        $agency4->setEmail('contact@jwt.com');
        $agency4->setAddress('466 Lexington Avenue New York, NY 10017');
        $agency4->setCreated(new \DateTime());
        $agency4->setUpdated($agency1->getCreated());
        $manager->persist($agency4);

        $agency5 = new Agency();
        $agency5->setName('Wieden + Kennedy');
        $agency5->setEstablished(new \DateTime('4-1-1982'));
        $agency5->setPhone('555-555-5555');
        $agency5->setEmail('contact@wieken.com');
        $agency5->setAddress('150 Varick Street, New York, NY 10013');
        $agency5->setCreated(new \DateTime());
        $agency5->setUpdated($agency1->getCreated());
        $manager->persist($agency5);

        $manager->flush();

        $this->addReference('agency-1',  $agency1);
        $this->addReference('agency-2', $agency2);
        $this->addReference('agency-3', $agency3);
        $this->addReference('agency-4', $agency4);
        $this->addReference('agency-5', $agency5);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }

}