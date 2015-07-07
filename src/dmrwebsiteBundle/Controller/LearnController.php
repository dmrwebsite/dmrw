<?php

namespace dmrwebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LearnController extends Controller
{
    public function newtocomputersAction()
    {
        echo "new to computers";
        return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }

    public function fromlopAction()
    {
        echo "from lop";
        return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }

    public function frompotsAction()
    {
        echo "from pots";
        return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }

    public function teachersAction()
    {
        echo "teachers";
        return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }
}
