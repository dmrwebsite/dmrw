<?php

namespace dmrwebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommunityController extends Controller
{
    public function steamgroupAction()
    {
        echo "steam group";
        return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }
}
