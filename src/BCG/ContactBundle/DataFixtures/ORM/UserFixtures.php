<?php

namespace BCG\ContactBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use BCG\ContactBundle\Entity\User;
use BCG\ContactBundle\Entity\Agency;

class UserFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
    * {@inheritDoc}
    */
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setUsername('BillA');
        $user1->setEmail('billa@domain.com');
        $user1->setPlainPassword('password');
        $user1->setEnabled(true);
        $user1->setName('Bill Adama');
        $user1->setPhone('555-124-1234');
        $user1->setAddress('123 Main St., Charlottesville, VA 22902');
        $user1->setAgency($this->getReference('agency-1'));
        $manager->persist($user1);

        $user2 = new User();
        $user2->setUsername('KaraT');
        $user2->setEmail('karat@domain.com');
        $user2->setPlainPassword('password');
        $user2->setEnabled(true);
        $user2->setName('Kara Thrace');
        $user2->setPhone('555-124-1334');
        $user2->setAddress('242 14th St., Virginia Beach, VA 22342');
        $user2->setAgency($this->getReference('agency-1'));
        $manager->persist($user2);

        $user3 = new User();
        $user3->setUsername('LauraR');
        $user3->setEmail('laurar@domain.com');
        $user3->setPlainPassword('password');
        $user3->setEnabled(true);
        $user3->setName('Laura Roslin');
        $user3->setPhone('555-114-7389');
        $user3->setAddress('63 Blue Ridge St., Roanoke, VA 41122');
        $user3->setAgency($this->getReference('agency-1'));
        $manager->persist($user3);

        $user4 = new User();
        $user4->setUsername('GaiusB');
        $user4->setEmail('gaiusb@domain.com');
        $user4->setPlainPassword('password');
        $user4->setEnabled(true);
        $user4->setName('Gaius Baltar');
        $user4->setPhone('555-224-1456');
        $user4->setAddress('123 14th St., Harrisonburg, VA 22801');
        $user4->setAgency($this->getReference('agency-1'));
        $manager->persist($user4);

        $user5 = new User();
        $user5->setUsername('SharonV');
        $user5->setEmail('sharonv@domain.com');
        $user5->setPlainPassword('password');
        $user5->setEnabled(true);
        $user5->setName('Sharon Valerii');
        $user5->setPhone('555-992-8642');
        $user5->setAddress('10 Glade Rd, Danville, VA 99394');
        $user5->setAgency($this->getReference('agency-1'));
        $manager->persist($user5);

        $user6 = new User();
        $user6->setUsername('LeeA');
        $user6->setEmail('leea@domain.com');
        $user6->setPlainPassword('password');
        $user6->setEnabled(true);
        $user6->setName('Lee Adama');
        $user6->setPhone('555-124-1334');
        $user6->setAddress('124 Main St., Charlottesville, VA 22903');
        $user6->setAgency($this->getReference('agency-2'));
        $manager->persist($user6);

        $user7 = new User();
        $user7->setUsername('KarlA');
        $user7->setEmail('karla@domain.com');
        $user7->setPlainPassword('password');
        $user7->setEnabled(true);
        $user7->setName('Karl Agathon');
        $user7->setPhone('555-143-3321');
        $user7->setAddress('444 Madison Ave., Alexandria, VA 44233');
        $user7->setAgency($this->getReference('agency-2'));
        $manager->persist($user7);

        $user8 = new User();
        $user8->setUsername('GalenT');
        $user8->setEmail('galent@domain.com');
        $user8->setPlainPassword('password');
        $user8->setEnabled(true);
        $user8->setName('Galen Tyrol');
        $user8->setPhone('555-111-3452');
        $user8->setAddress('232 Rhody Creek Loop., Orange, VA 25563');
        $user8->setAgency($this->getReference('agency-2'));
        $manager->persist($user8);

        $user9 = new User();
        $user9->setUsername('AnastasiaD');
        $user9->setEmail('anastasiad@domain.com');
        $user9->setPlainPassword('password');
        $user9->setEnabled(true);
        $user9->setName('Anastasia Dualla');
        $user9->setPhone('555-929-1221');
        $user9->setAddress('8 Deep Creek Rd., Wise, VA 44092');
        $user9->setAgency($this->getReference('agency-2'));
        $manager->persist($user9);

        $user10 = new User();
        $user10->setUsername('SamuelA');
        $user10->setEmail('samuela@domain.com');
        $user10->setPlainPassword('password');
        $user10->setEnabled(true);
        $user10->setName('Samuel Anders');
        $user10->setPhone('555-329-4323');
        $user10->setAddress('16 S Main St., Lynchburg, VA 55905');
        $user10->setAgency($this->getReference('agency-3'));
        $manager->persist($user10);

        $user11 = new User();
        $user11->setUsername('FelixG');
        $user11->setEmail('felixg@domain.com');
        $user11->setPlainPassword('password');
        $user11->setEnabled(true);
        $user11->setName('Felix Gaeta');
        $user11->setPhone('555-223-7293');
        $user11->setAddress('200 S Mason St., Staunton, VA 92031');
        $user11->setAgency($this->getReference('agency-3'));
        $manager->persist($user11);

        $user12 = new User();
        $user12->setUsername('CallyT');
        $user12->setEmail('callyt@domain.com');
        $user12->setPlainPassword('password');
        $user12->setEnabled(true);
        $user12->setName('Cally Tyrol');
        $user12->setPhone('555-883-2163');
        $user12->setAddress('882 Ott St., Floyd, VA 88392');
        $user12->setAgency($this->getReference('agency-3'));
        $manager->persist($user12);

        $user13 = new User();
        $user13->setUsername('LeobenC');
        $user13->setEmail('leobenc@domain.com');
        $user13->setPlainPassword('password');
        $user13->setEnabled(true);
        $user13->setName('Leoben Conoy');
        $user13->setPhone('555-723-0294');
        $user13->setAddress('715 Winterhaven Rd, Waynesboro, VA 92342');
        $user13->setAgency($this->getReference('agency-4'));
        $manager->persist($user13);

        $user14 = new User();
        $user14->setUsername('MargaretE');
        $user14->setEmail('margarete@domain.com');
        $user14->setPlainPassword('password');
        $user14->setEnabled(true);
        $user14->setName('Margaret Edmondson');
        $user14->setPhone('555-282-9374');
        $user14->setAddress('29 Buena Vista St., Norfolk, VA 22934');
        $user14->setAgency($this->getReference('agency-4'));
        $manager->persist($user14);

        $user15 = new User();
        $user15->setUsername('ShermanC');
        $user15->setEmail('shermanc@domain.com');
        $user15->setPlainPassword('password');
        $user15->setEnabled(true);
        $user15->setName('Sherman Cottle');
        $user15->setPhone('555-920-9283');
        $user15->setAddress('53 Dogwood Ave., Saluda, VA 99394');
        $user15->setAgency($this->getReference('agency-5'));
        $manager->persist($user15);


        $manager->flush();
    }

    /**
    * {@inheritDoc}
    */
    public function getOrder()
    {
        return 2;
    }
}