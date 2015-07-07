<?php

namespace dmrwebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }

    public function newsAction()
    {
    	echo "dota news";
    	return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }

    public function articlesAction()
    {
    	echo "DMR articles";
    	return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }

    public function streamsAction()
    {
    	echo "DMR streams";
    	return $this->render('dmrwebsiteBundle:Default:index.html.twig', array());
    }

    public function acpAction()
    {
    	// Get the method POST data and store it
    	$username = $this->getRequest()->request->get('username');
    	$password = $this->getRequest()->request->get('password');

    	$error = "";

    	// Check if sent data is empty or not
    	if (!empty($username) && !empty($password))
    	{
    		$user = $this->getDoctrine()->getRepository('dmrwebsiteBundle:Website\User')->findOneByUsername($username);

    		if ($password == $user->getPassword())
    		{
    			$error = "Hello $username";
    		}
    		else
    			$error = "Incorrect username or password";
    	}
    	else
    		$error = "Username or password is empty";

        return $this->render('dmrwebsiteBundle:Default:acp.html.twig', array('error' => $error));
    }
}
