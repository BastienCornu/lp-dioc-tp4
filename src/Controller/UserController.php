<?php

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/my_profile" , name="app_user_myprofileaction")
     */
    public function myProfileAction()
    {
        return $this->render('User/my_profile.html.twig');
    }

    /**
     * @Route("/profile/{id}" , name="app_user_profileaction")
     */
    public function profileAction(User $user)
    {
        // FIXME: un utilisateur connecté qui se rend sur sa propre page est redirigé vers /my_profile
        if($user == $this->getUser()){
            return $this->redirect($this->generateUrl("app_user_myprofileaction"));
        }

        return $this->render('User/profile.html.twig', ['user' => $user]);
    }
}
