<?php

namespace dmrwebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TournamentsController extends Controller
{
    public function ongoingAction()
    {
        echo "ongoing tournaments";
        return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }

    public function vodsAction()
    {
        echo "tournament vods";
        return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }

    public function teamsAction()
    {
        echo "tournament teams";
        return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }
}
