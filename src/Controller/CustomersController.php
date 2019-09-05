<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Customers; 

class CustomersController extends Controller
{
	/**
	* @Route("/customers", name="customers")
	*/
    public function customersAction()
    {
		$results = $this->getDoctrine()->getRepository(Customers::class)->customer();
        return $this->render('customers/index.html.twig',[
            'results'=> $results,
        ]);   
	}
}