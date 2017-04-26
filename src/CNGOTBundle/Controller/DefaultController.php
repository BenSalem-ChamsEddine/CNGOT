<?php

namespace CNGOTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
         $em = $this->container->get('doctrine')->getEntityManager();
        
        $users = $em->getRepository('CNGOTBundle:User')->findAll();
        return $this->render('CNGOTBundle:Default:index.html.twig',array('users'=>$users));
    }
    
    public function adminHomeAction() {
        return $this->redirectToRoute('admin_users');
    }
    public function userHomeAction() {
        
        $em = $this->container->get('doctrine')->getEntityManager();
        
        $abstracts = $em->getRepository('CNGOTBundle:AbstractVideo')->findBy(array('user' => $this->getUser()->getId()));
        
        return $this->render('CNGOTBundle:user:profile.html.twig',array('abstracts'=>$abstracts));
    }
    
    public function ErreurAction()
    {
        return $this->render('CNGOTBundle::404.html.twig');
    }
    
    
    public function mobileAction()
    {
        return $this->render('CNGOTBundle:Default:mobile.html.twig');
    }
    
    
    
    public function returnAbstractPDF($id) {
        $em = $this->container->get('doctrine')->getEntityManager();

        $abstract = $em->getRepository('CNGOTBundle:AbstractVideo')->find($id);


        $pdf = $this->get("white_october.tcpdf")->create('vertical', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetAuthor('Ben salem Chams eddine');
        $pdf->SetTitle(('CNGOT Atelier ticket'));
        $pdf->SetSubject('Our Code World Subject');
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('helvetica', '', 18, '', true);
        //$pdf->SetMargins(20,20,40, true);
        $pdf->AddPage();

        $filename = 'Abstract' . "$id";
        $html = '<!DOCTYPE html>
<HTML>
<HEAD>
<meta charset="utf-8"/>
</HEAD>

<BODY >
';

// output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        $html = '<H2 style="font-weight: bold;">'.$abstract->getTitre().'</H2>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'C', true);
        
        $auth = $abstract->getAuteur1();
        
        if($abstract->getAuteur2() != NULL){
            $auth = $auth.','.$abstract->getAuteur2();
        }
        
        if($abstract->getAuteur3() != NULL){
            $auth = $auth.','.$abstract->getAuteur3();
        }
        
        $html = '<p><H6>'.$abstract->getUser()->getNom()." ".$abstract->getUser()->getPrenom().'</H6>'.$auth.'</p>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'C', true);
        
        $html = '<p>Service de '.$abstract->getCategorie().', '.$abstract->getUser()->getService().'</p><br><br>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'C', true);
       
        $html = '<p> <H5>Introduction et objectif:</H5></br> ' . $abstract->getIntroduction() . '</p>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'L', true);
        
        $html = '<p> <H5>Matériels et méthodes :</H5></br> ' . $abstract->getMateriel() . '</p>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'L', true);
        
        $html = '<p> <H5>Résultats :</H5></br> ' . $abstract->getResultats() . '</p>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'L', true);
        
        $html = '<p> <H5>Conclusion :</H5></br> ' . $abstract->getConclusions() . '</p>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'L', true);






        $html = '</BODY>
                 </HTML>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 0, 0, true, 'R', true);


        //$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
        $pdf->Output($filename . ".pdf", 'I'); // This will output the PDF as a response directly
    }

    public function telechargerAbstractAction($id) {
        $this->returnAbstractPDF($id);
    }
    
    
    
    
    
    
    public function returnAtelierCertifPDF($idUser,$idAtelier) {
        $em = $this->container->get('doctrine')->getEntityManager();

        $user = $em->getRepository('CNGOTBundle:User')->find($idUser);
        $atelier = $em->getRepository('CNGOTBundle:Cngot17')->find($idAtelier);
        
        $width = 450;  
        $height = 280; 
        $pageLayout = array($width, $height);

        $pdf = $this->get("white_october.tcpdf")->create('L',PDF_UNIT , PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetPrintHeader(false);
        $pdf->SetAuthor('Ben salem Chams eddine');
        $pdf->SetTitle(('CNGOT Atelier ticket'));
        $pdf->SetSubject('Our Code World Subject');
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('helvetica', '', 18, '', true);
        $pdf->AddPage();
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetAutoPageBreak(false, 0);

        $appPath = $this->container->getParameter('kernel.root_dir');
        $webPath = $appPath . '/attestations/Attestation-atelier.png';
        $img_file = $webPath;
        $pdf->Image($img_file, 0, 0, 299, 210, '', '', '', false, 300, '', false, false, 0);

        $filename = 'certificat de presence en atelier ' . "$idAtelier";
        
        $html = '<br><br><br><br><br><br><br><br><br><H6>'.$user->getNom().' '.$user->getPrenom().'</H6>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'C', true);
        
        $html = '<br><br><H6>'.$atelier->getTitre().'</H6>';
        $pdf->writeHTMLCell(-100, 10, '', '', $html, '', 1, 0, true, 'C', true);
        
        
    $pdf->Output($filename . ".pdf", 'I'); // This will output the PDF as a response directly
    
    }
    
    public function telechargerAtelierCertifAction($idUser,$idAtelier) {
        $this->returnAtelierCertifPDF($idUser,$idAtelier);
    }
    
    
    public function returnMasterCertifPDF($idUser,$idMaster) {
        $em = $this->container->get('doctrine')->getEntityManager();

        $user = $em->getRepository('CNGOTBundle:User')->find($idUser);
        $atelier = $em->getRepository('CNGOTBundle:MasterClass')->find($idMaster);
        
        $width = 450;  
        $height = 280; 
        $pageLayout = array($width, $height);

        $pdf = $this->get("white_october.tcpdf")->create('L',PDF_UNIT , PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetPrintHeader(false);
        $pdf->SetAuthor('Ben salem Chams eddine');
        $pdf->SetTitle(('CNGOT Atelier ticket'));
        $pdf->SetSubject('Our Code World Subject');
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('helvetica', '', 18, '', true);
        $pdf->AddPage();
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetAutoPageBreak(false, 0);

        $appPath = $this->container->getParameter('kernel.root_dir');
        $webPath = $appPath . '/attestations/Attestation-masterclass.png';
        $img_file = $webPath;
        $pdf->Image($img_file, 0, 0, 299, 210, '', '', '', false, 300, '', false, false, 0);

        $filename = 'certificat de presence en MasterClass ' . "$idMaster";
        
        $html = '<br><br><br><br><br><br><br><br><br><H6>'.$user->getNom().' '.$user->getPrenom().'</H6>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'C', true);
        
        $html = '<br><br><H6>'.$atelier->getTitre().'</H6>';
        $pdf->writeHTMLCell(-100, 10, '', '', $html, '', 1, 0, true, 'C', true);
        
        
    $pdf->Output($filename . ".pdf", 'I'); // This will output the PDF as a response directly
    
    }
    
    public function telechargerMasterCertifAction($idUser,$idMaster) {
        $this->returnMasterCertifPDF($idUser,$idMaster);
    }
    
    
   
}
