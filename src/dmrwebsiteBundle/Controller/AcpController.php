<?php

namespace dmrwebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AcpController extends Controller
{
    public function indexAction()
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

        return $this->render('dmrwebsiteBundle:ACP:acp.html.twig', array('error' => $error));
    }
}
