<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\CountryClass;

class DataController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function listAction()
    {
        return $this->render('countries/index.html.twig');
    }
    
    /**
     * @Route("/get_data", name="all_countries")
     */
    public function countryAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:CountryClass');

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                                    'SELECT c
                                     FROM 
                                        AppBundle:CountryClass c
                                     ORDER BY 
                                        c.totalCount desc'
                                );
        $countries = $query->getResult();
        
        return $this->render('countries/countries.html.twig', array( "countries" => $countries ));
    }
    
    /**
     * @Route("/get_data/medals", name="all_medals")
     */
    public function medalAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:CountryClass');

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                                    'SELECT c
                                     FROM 
                                        AppBundle:CountryClass c
                                     where
                                        c.goldCount > 0
                                     ORDER BY 
                                        c.goldCount desc'
                                );
        $countries = $query->getResult();
        
        return $this->render('countries/get_medals.html.twig', array( "countries" => $countries ));
    }
}
