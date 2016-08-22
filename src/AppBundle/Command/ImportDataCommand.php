<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ImportDataCommand
 *
 * @author vladimir
 */

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Entity\CountryClass;

class ImportDataCommand extends ContainerAwareCommand  {
    //put your code here
    protected function configure() 
    {
        $this
                ->  setName("app:db_fill");
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) 
    {
        try
        {
            //get JSON from API
            $http_response = file_get_contents("http://www.medalbot.com/api/v1/medals");
            $json = json_decode($http_response, true);
            
            //fill in DB with JSON data
            foreach($json as $value)
            {
                $country = new CountryClass(); //create a new object for each new value
                $country->setCountryName($value["country_name"]);
                $country->setBronzeCount($value["bronze_count"]);
                $country->setGoldCount($value["gold_count"]);
                $country->setSilverCount($value["silver_count"]);
                $country->setTotalCount($value["total_count"]);
                $country->setPlace($value["place"]);
                $country->setIdCountry($value["id"]);

                //get EntityManager in the Command section
                $em = $this->getContainer()->get('doctrine')->getManager();
                // tells Doctrine you want to (eventually) save the Product (no queries yet)
                $em->persist($country);
                // actually executes the queries (i.e. the INSERT query)
                $em->flush();

                $output->writeln("Saved new product with id =>".$country->getId());
            }
        }
        catch (Exception $e)
        {
            $output->writeln("Error in getting data => ".$e->getMessage()." with code: ".$e->getCode());
        }
    }
}
