<?php

namespace dmrwebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CommunityController extends Controller
{
    public function steamgroupAction()
    {
        return $this->render('dmrwebsiteBundle:Community:steamgroup.html.twig', array());
    }
}
