<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(): Response
    {
        $meals = [
            'Mini pizzas' => 'Delectable and bite-sized, mini pizzas are a favorite of all age groups.',
            'Homemade French Fries' => 'Surprise your guests with the best gourmet french fries they’ve ever tasted.',
            'Stuffed Mushrooms' => 'A kitchen classic, this is the perfect choice if you’ve vegans in your party.',
            'Smoked Trout Empanadas' => 'Every empanada is filled, made, and cooked by hand.',
            'Mini Lamb Burger' => 'Although the flavors are slightly unusual, guests always go for seconds.',
            'Duck Confit Quesadillas' => 'Sophistication and flavor come together in this perfectly cheesy quesadilla.'
        ]; 
        return $this->render('main/index.html.twig', [
            'controller_name' => 'Food App',
            'meals' => $meals
        ]);
    }

    #[Route('/contact', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('main/contact.html.twig', []);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', []);
    }
}
