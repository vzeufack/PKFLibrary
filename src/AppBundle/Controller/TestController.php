<?php

// src/AppBundle/Controller/TestController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;

class TestController extends Controller
{
	/**
	 * @Route ("/product", name="app_product_new")
	 */
	public function newAction (Request $request)
	{
		$product = new Product();
		$form = $this->createForm(ProductType::class, $product);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{


			//$file stores the uploaded jpeg file
			/** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
			$file = $product->getBrochure();

			// Generate a unique name for the file before saving it
			$fileName = md5(uniqid()).'.'.$file->guessExtension();

			// Move the file to the directory where brochures are stored
			$file->move(
				   $this->getParameter('brochures_directory'),
				   $fileName
				);

			//Update the 'brochure' property to store the PDF file name
			// instead of its contents
			$product->setBrochure($fileName);

			//... persist the $product variable or any other work

			return $this->redirect($this->generateUrl('homepage'));
        }
			
	    return $this->render('default/test.html.twig', array(
			'form' => $form->createView(),
		));
	}
}