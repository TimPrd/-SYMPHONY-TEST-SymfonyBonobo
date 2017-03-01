<?php

namespace OC\CoreBundle\Controller;

use OC\UserBundle\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Model;
use FOS\UserBundle\Model\UserManagerInterface;

class CoreController extends Controller
{
    // La page d'accueil
    public function indexAction()
    {
        return $this->render('OCCoreBundle:Core:index.html.twig');
    }
    //recherche tout les users
    public function usersAction() {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        return $this->render('OCCoreBundle:Core:index.html.twig', array('users' =>   $users));
    }
    //recherche 1 utilisateur précis
    public function findUser($username)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($username);
        return $user;
    }


}
