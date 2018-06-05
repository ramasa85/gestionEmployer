<?php

namespace EmployerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 * @Route("user")
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/", name="user_index")
     */
    public function indexAction()
    {
        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();
        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));

    }

    /**
     * @Route("/new")
     */
    public function newAction()
    {
        return $this->render('EmployerBundle:User:new.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/show")
     */
    public function showAction()
    {
        return $this->render('EmployerBundle:User:show.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/{id}/edit", name="user_edit")
     * 
     */
    public function editAction(Request $request, User $id)
    {
        $editForm = $this->createForm('EmployerBundle\Form\UserType', $id);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($id);
            $em->flush();

            return $this->redirectToRoute('user_index');
        }

        return $this->render('user/edit.html.twig', array(
            'article' => $id,
            'edit_form' => $editForm->createView(),

        ));

        return $this->render('EmployerBundle:User:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('EmployerBundle:User:delete.html.twig', array(
            // ...
        ));
    }

}
