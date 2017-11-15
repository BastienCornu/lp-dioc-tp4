<?php

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route(path="/admin")
 */
class AdminController extends Controller
{
    /**
     * @Route(
     *     path="",
     *     name="admin_dashboard"
     * )
     */
    public function dashboardAction()
    {
        // FIXME: Récupérer les utilisateurs non admin
        $users = [];
        $users = $this->getDoctrine()->getRepository(User::class)->findBy(array("isAdmin" => false));

        return $this->render('Admin/dashboard.html.twig', ['users' => $users]);
    }

    /**
     *@Route("/admin/delete-user/{id}", name="app_admin_deleteuseraction")
     */
    public function deleteUserAction(User $user)
    {
        // FIXME: Supprime l'utilisateur est redirige sur /admin, la route doit être /delete-user/1
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirect($this->generateUrl("admin_dashboard"));

    }
}
