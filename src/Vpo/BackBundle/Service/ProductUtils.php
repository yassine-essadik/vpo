<?php
namespace Vpo\BackBundle\Service;

use Vpo\BackBundle\Entity\Product;
use Doctrine\ORM\EntityManager;

class ProductUtils
{
    private $em;
    
    public function _construct(EntityManager $em)
    {
        $this->em = $em;    
    }
    
    public function setProduct(array $product)
    {
        $product = new Product();
        
        $product->setName('');
        $product->setDescription('');
        $product->setPhoto('');
        
        $this->em->persist($product);
        
        $this->em->flush();
        
    }
}