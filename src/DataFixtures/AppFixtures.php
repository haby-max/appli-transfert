<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Role;
use App\Entity\Users;
//use Symfony\Component\Security\Core\User\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       /** // $product = new Product();
        // $manager->persist($product);

        $arr_Users_list = array();

        for($i=1; $i<8; $i++) {
            $author = new Author();
            $author->name = "auteur " . $i;
            $author->birthday = $this->randomDate("1901-01-31", "1999-12-31");            
            $manager->persist($author);
            $arr_authors_list[] = $author;
        }

        for($i=1; $i<16; $i++) {
            $arr_transport_fees = array();
            $arr_transport_fees[] = rand(400, 1000) / 100;
            $arr_transport_fees[] = null;

            $product = new Product();
            $product->name = "produit " . $i;
            $product->setIsActive(0 == $i % 2 ? false : true);
            $auth = $arr_authors_list[array_rand ($arr_authors_list, 1)];        
            $product->author = $auth;
            $product->createdAt = $this->randomDate("2015-01-31", "2018-12-31");
            $product->transportFees = $arr_transport_fees[array_rand($arr_transport_fees, 1)];
            $manager->persist($product);

            for($j=1; $j<random_int (0, 8); $j++) {
                $offer = new Offer();
                $offer->product = $product;
                $offer->description = "produit " . $i . " : description offre " . $j;    
                $offer->price = $i . $j;
                $manager->persist($offer);
                **/

        $user2 = new User("SUPER_ADMIN");
        $user2->setPassword($this->encoder->encodePassword($user2, "SUPER_ADMIN"));
        $user2->setRoles(json_encode(array("ROLE_SUPER_ADMIN")));
        $manager->persist($user2);


        $manager->flush();
    }
}
