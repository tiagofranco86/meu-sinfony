<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class Lucky2Controller
{
	/**
	* @Route("/lucky2/number")
	*/
	public function indexAction()
	{
		$number = mt_rand(0,1000);
		return new Response("<html><head><head><body>Numero: $number</body></html>");
	}
}
