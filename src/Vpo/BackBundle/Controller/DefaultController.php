<?php

namespace Vpo\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Vpo\BackBundle\Entity\Product;
use Vpo\BackBundle\Form\ProductType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $product = new Product();
        
        $form = $this->get('form.factory')->create(ProductType::class, $product);
        
        $message = $this->container->get('vpo_back.message_generator');
        
        var_dump($message->getMessage());die;
        return $this->render('VpoBackBundle:Default:index.html.twig');
    }
}
