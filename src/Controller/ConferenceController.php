<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
	/**
	 * @Route("/conference", name="conference")
	 *
	 * @return Response
	 */
	public function index(): Response
	{
		return $this->render('conference/index.html.twig', [
			'controller_name' => 'ConferenceController',
		]);
	}
}