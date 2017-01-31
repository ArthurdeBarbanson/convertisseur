<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TpWebservice;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tpwebservice controller.
 *
 */
class TpWebserviceController extends Controller
{
    /**
     * Lists all tpWebservice entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tpWebservices = $em->getRepository('AppBundle:TpWebservice')->findAll();

        return $this->render('tpwebservice/index.html.twig', array(
            'tpWebservices' => $tpWebservices,
        ));
    }

    /**
     * Creates a new tpWebservice entity.
     *
     */
    public function newAction(Request $request)
    {
        $tpWebservice = new Tpwebservice();
        $form = $this->createForm('AppBundle\Form\TpWebserviceType', $tpWebservice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tpWebservice);
            $em->flush($tpWebservice);

            return $this->redirectToRoute('tpwebservice_show', array('id' => $tpWebservice->getId()));
        }

        return $this->render('tpwebservice/new.html.twig', array(
            'tpWebservice' => $tpWebservice,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tpWebservice entity.
     *
     */
    public function showAction(TpWebservice $tpWebservice)
    {
        $deleteForm = $this->createDeleteForm($tpWebservice);

        return $this->render('tpwebservice/show.html.twig', array(
            'tpWebservice' => $tpWebservice,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tpWebservice entity.
     *
     */
    public function editAction(Request $request, TpWebservice $tpWebservice)
    {
        $deleteForm = $this->createDeleteForm($tpWebservice);
        $editForm = $this->createForm('AppBundle\Form\TpWebserviceType', $tpWebservice);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tpwebservice_edit', array('id' => $tpWebservice->getId()));
        }

        return $this->render('tpwebservice/edit.html.twig', array(
            'tpWebservice' => $tpWebservice,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tpWebservice entity.
     *
     */
    public function deleteAction(Request $request, TpWebservice $tpWebservice)
    {
        $form = $this->createDeleteForm($tpWebservice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tpWebservice);
            $em->flush($tpWebservice);
        }

        return $this->redirectToRoute('tpwebservice_index');
    }

    /**
     * Creates a form to delete a tpWebservice entity.
     *
     * @param TpWebservice $tpWebservice The tpWebservice entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TpWebservice $tpWebservice)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tpwebservice_delete', array('id' => $tpWebservice->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
