<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RioController extends Controller
{

	/*
	* @Route("/rio/{page}", name="rio_list", requirements={"page" : "\d+"})
	*/
	public function listAction($page = 1)
	{
		return $this->render("rio/list.html.twig", array());
	}

	public function showAction($slug)
	{
		echo $slug;die();
	}

	/**
	* @Route("/rio/redirect", name="redirect")
	*/
	public function redirectAction()
	{
		/*$templating  = $this->get("templating");

		$router = $this->get("router");

		$mailer = $this->get('mailer');

		print_r($templating);die();*/
		$this->addFlash('notice','Teste de notice');
		return $this->redirectToRoute("lucky_list");
		//return $this->redirectToRoute("lucky_list");
		//return $this->redirectToRoute("lucky_show", array("slug" => 4), 301);
		 //return $this->render("rio/list.html.twig", array());	

		//return new RedirectResponse($this->generateUrl('lucky_list')); #===return $this->redirectToRoute("lucky_list");
	}
}
