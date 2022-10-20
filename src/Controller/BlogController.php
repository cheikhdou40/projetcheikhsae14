<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    
	/**
	 * @Route("/",name="home") {
     */
    public function home () {
	    return $this->render('blog/home.html.twig');	
	}
	/**
	 * @Route("/loi",name="loisirs") {
     */
    public function loi () {
	    return $this->render('blog/loisirs.html.twig');	
	}
	/**
	 * @Route("/login",name="login") {
     */
    public function login () {
	    return $this->render('security/login.html.twig');	
	}
	/**
	 * @Route("/conf",name="confirmationRV") {
     */
    public function conf () {
	    return $this->render('blog/confirmationRV.html.twig');	
	}
	/**
	 * @Route("/port",name="portfolio") {
     */
    public function port () {
	    return $this->render('blog/portfolio.html.twig');	
	}
}