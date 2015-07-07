<?php

namespace dmrwebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TournamentsController extends Controller
{
    public function ongoingAction()
    {
        return $this->render('dmrwebsiteBundle:Tournaments:ongoing.html.twig', array());
    }

    public function vodsAction()
    {
        return $this->render('dmrwebsiteBundle:Tournaments:vods.html.twig', array());
    }

    public function teamsAction()
    {
        return $this->render('dmrwebsiteBundle:Tournaments:teams.html.twig', array());
    }
}
