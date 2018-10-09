<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
    /**
     * @Route("/contactar/", name="contactar")
     */
    public function contactarAction(Request $request)
 {
     $number = random_int(0, 100);

     return new Response(
         '<html><body>Lucky number: '.$number.'</body></html>'
     );
}
/**
 * @Route("/login/", name="login")
 */
public function loginIndex(Request $request)
{
    // replace this example code with whatever you need
    return $this->render('login/login.html.twig', [
        'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
    ]);
}
}
