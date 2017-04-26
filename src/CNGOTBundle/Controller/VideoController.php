<?php

namespace CNGOTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CNGOTBundle\Entity\Video;
use CNGOTBundle\Form\VideoType;

class VideoController extends Controller
{
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository('CNGOTBundle:Video')->findAll();
        
        return $this->render('CNGOTBundle:video:index.html.twig', array('videos' => $videos));
    }
    public function addAction(Request $request)
    {
   $document = new Video();
   $form = $this->createForm(new VideoType(), $document);
    $form->handleRequest($request);

    if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $document->upload();
        $em->persist($document);
        $em->flush();

        return $this->redirectToRoute('add_video', array());
    }

    return $this->render('CNGOTBundle:admin:addVideo.html.twig',array('form' =>$form->createView()));
    }
    
    public function viewAction($id) {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('CNGOTBundle:Video')->find($id);
        
        return $this->render('CNGOTBundle:video:view.html.twig', array('video' => $video));
    }
    
     public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('CNGOTBundle:Video')->find($id);
        
        $em->remove($video);
        $em->flush();
        
        return $this->redirectToRoute("add_video");
    }
    
    public function listeAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $Ev = $em->getRepository('CNGOTBundle:Video')->findAll();


        return $this->render('CNGOTBundle:video:listVideo.html.twig', array(
                    'videos' => $Ev
        ));
    }

}
