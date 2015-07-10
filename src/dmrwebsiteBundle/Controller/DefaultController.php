<?php

namespace dmrwebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Article;
use AppBundle\Entity\Category;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }

    public function newsAction()
    {
    	return $this->render('dmrwebsiteBundle:Default:news.html.twig', array());
    }

    public function articlesAction()
    {
    	return $this->render('dmrwebsiteBundle:Default:articles.html.twig', array());
    }

    public function streamsAction()
    {
    	return $this->render('dmrwebsiteBundle:Default:streams.html.twig', array());
    }
    public function createAction()
    {

        
    }
}
