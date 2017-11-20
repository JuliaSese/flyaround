<?php

namespace WCS\CoavBundle\Controller;

use WCS\CoavBundle\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Review controller.
 *
 * @Route("review")
 */
class ReviewController extends Controller
{
    /**
     * Lists all review entities.
     *
     * @Route("/", name="review_index")
     * @Method("GET")
     */
     public function indexAction()
     {
         $em = $this->getDoctrine()->getManager();
         $reviews = $em->getRepository('WCSCoavBundle:Review')->findAll();

         return $this->render('review/index.html.twig', array(
             'reviews' => $reviews
         ));
     }

    /**
     * Creates a new review entity.
     *
     * @Route("/new", name="review_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        return $this->render('review/new.html.twig');
    }

}
