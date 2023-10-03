<?php

namespace Customize\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Doctrine\ORM\EntityManagerInterface;


class HahaController
{
  protected $entityManager;

  public function __construct(EntityManagerInterface $entityManager) {
    $this->entityManager = $entityManager;
  }
    /**
     * @Method("GET")
     * @Route("/haha/{id}")
     * @Template("Haha/index.twig")
     */
    public function testMethod($id)
    {
      $Products = $this->entityManager->getRepository('Eccube\Entity\Product')->findAll();
      return ['name' => $Products];
    }
}
