<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PlayerController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    //la syntaxe Request $request equivaut à $request = new Request()
    public function indexAction(Request $request) 
    {
        $titre = 'Liste des joueur';

        $joueur1 = ['nom' => 'Bonnucci', 'prenom' => 'Leo', 'age' => 29];
        $joueur2 = ['nom' => 'Chiellini', 'prenom' => 'Giorgio', 'age' => 34];
        $joueur3 = ['nom' => 'Barzagli', 'prenom' => 'Andrea', 'age' => 36];

        $joueurs = [$joueur1, $joueur2, $joueur3];

        return $this->render('player/index.html.twig', array(
            'titre'     =>$titre,
            'message'   =>'Symfony semble formidable',
            'joueur1'   =>$joueur1,
            'joueurs'   =>$joueurs
        ));
    }
    
}
