<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{

	/**
	* @Route("/lucky/number", name="lucky_list")
	*/
	public function listAction(Request $request)
	{
		//echo $request->query->get("tiago");
		echo $request->headers->get("content-type");
		die();

		$number = mt_rand(1,100);
		//return new Response("<html><head></head><body>Number: $number</body></html>");
		return $this->render("lucky/number.html.twig",array(
				'number' => $number
			)
		);

	}

	/**
	* @Route("/lucky/number/{slug}", name="lucky_show")
	*/
	public function showAction($slug)
	{
		throw $this->createNotFoundException('The product does not exist');
		//$logger = $this->getParameter("monolog.logger.php");
		$from = $this->getParameter('app.mailer.from');
		print_r($from);die();
		echo $slug;die();
	}

	public function testeAction()
	{

		$fistsData = mktime(0, 0, 0, 11, 1, 2017);
		//$dia10 = date("d/m/Y", strtotime("last Monday", $fistsData));
		$day10 = strtotime("+10 day", $fistsData);
		$dia10 = date("N", strtotime("+10 day", $fistsData));

		if(in_array($dia10, array(6,7))){
			$dia10 = date("d/m/Y", strtotime("next Monday", $day10 ));
		}
		echo $dia10;
		//echo date("d/m/Y", strtotime("last Monday"));
		die();
	}
}
