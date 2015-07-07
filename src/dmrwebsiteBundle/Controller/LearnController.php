<?php

namespace dmrwebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LearnController extends Controller
{
    public function newtocomputersAction()
    {
        return $this->render('dmrwebsiteBundle:Learn:newtocomputers.html.twig', array());
    }

    public function fromlopAction()
    {
        return $this->render('dmrwebsiteBundle:Learn:fromlop.html.twig', array());
    }

    public function frompotsAction()
    {
        return $this->render('dmrwebsiteBundle:Learn:frompots.html.twig', array());
    }

    public function teachersAction()
    {
        return $this->render('dmrwebsiteBundle:Learn:teachers.html.twig', array());
    }
}
