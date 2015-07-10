<?php

namespace dmrwebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommunityController extends Controller
{
    public function steamgroupAction()
    {
        return $this->render('dmrwebsiteBundle:Community:steamgroup.html.twig', array());
    }
    public function newForm(Request $Request){
    	$Article = new Article();
    	$Title = ('Title', 'text');
    	$Content = ('Content', 'textarea');
    	$form = $this->createFormBuilder()
    		->add('Title', 'text')
    		->add('Content', 'textarea')
    		->add('save', 'submit', array('label' => 'Submit Article'))
    		->getForm();
    	$form->handleRequest($request);


    	if ($form->isValid()){
    		return $this->render('dmrwebsiteBundle:Default:articles.html.twig', array('Article' => $form->createView(),
    			));

    	}
    }
    public function isValid(){
    	if (!empty($Title) && !empty($Article)){
    		return true;
    	}  
    }
}
