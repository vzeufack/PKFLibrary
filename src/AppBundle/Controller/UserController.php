<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

use AppBundle\Entity\User;
use AppBundle\Entity\PkfStudent;
use AppBundle\Entity\Administrator;
use AppBundle\Entity\Bea;
use AppBundle\Entity\Mba;
use AppBundle\Entity\Lecturer;

class UserController extends Controller
{
   /**
     * @Route("/register/success/{id}", name="success")
     */
    public function registrationSuccessAction($id, Request $request)
    {
    	$user = $this->getDoctrine()
	   ->getRepository('UserBundle:User')
	   ->findOneById( $id ); 

    	//return $this->redirectToRoute('homepage');
	    return $this->render('pkflibrary/user/registration_success.html.twig', array('user' => $user) );
    }

}
