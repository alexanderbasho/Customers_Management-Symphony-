<?php
// src/Controller/RoomsController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Rooms;

class RoomsController extends Controller
{
	/**
	* @Route("/reservatedrooms", name="rooms")
	*/
    public function roomAction()
    {
    	$apotelesmata = $this->getDoctrine()->getRepository(Rooms::class)->room();
		return $this->render('rooms/index.html.twig',[
			'apotelesmata'=> $apotelesmata,
		]);

}
}