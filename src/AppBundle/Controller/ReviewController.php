<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 09/06/18
 * Time: 14:23
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


use AppBundle\Entity\Review;

/**
 * review controller
 *
 * @Route("review")
 */

class ReviewController extends Controller
{
    /**
     * List all reviews
     * @Route("/", name="review_index")
     * @Method("GET")
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reviews = $em->getRepository('AppBundle:Review')->findAll();

        return $this->render('review/index.html.twig', array(
            'reviews' => $reviews
        ));
    }


    /**
     * Displays a form to create a new review entity.
     *
     * @Route("/new", name="review_new")
     * @Method({"GET", "POST"})
     */

        public function newAction(Request $request)
        {
            return $this->render('review/new.html.twig');
        }




}


