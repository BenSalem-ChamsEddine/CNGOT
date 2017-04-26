<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CNGOTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller {

    public function indexAction() {
      return  $this->getAllUsersAction();
    }

    //get all users
    public function getAllUsersAction() {
        //access user manager services 

        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        $em = $this->container->get('doctrine')->getEntityManager();
        $atmes = $em->getRepository('CNGOTBundle:Atme')->findAll();
        $masters = $em->getRepository('CNGOTBundle:MasterClass')->findAll();
        $cn16 = $em->getRepository('CNGOTBundle:Cngot16')->findAll();
        $cn17 = $em->getRepository('CNGOTBundle:Cngot17')->findAll();

        return $this->render('CNGOTBundle:admin:listeUsers.html.twig', array('atmes' => $atmes,
                    'masters' => $masters, 'cn16s' => $cn16, 'cn17s' => $cn17, 'users' => $users));
    }

    function getAllAbstractAction() {

        $em = $this->container->get('doctrine')->getEntityManager();

        $abstracts = $em->getRepository('CNGOTBundle:AbstractVideo')->findAll();

        return $this->render('CNGOTBundle:admin:listeAbstract.html.twig', array('abstracts' => $abstracts));
    }

    public function accepterAbstractAction($id) {


        $em = $this->container->get('doctrine')->getEntityManager();

        $abstracts = $em->getRepository('CNGOTBundle:AbstractVideo')->find($id);
        $abstracts->setStatus(1);


        $em->persist($abstracts);
        $em->flush();
        return $this->redirectToRoute('admin_abstract');
    }

    public function rejectAbstractAction($id) {
        $em = $this->container->get('doctrine')->getEntityManager();

        $abstracts = $em->getRepository('CNGOTBundle:AbstractVideo')->find($id);
        $abstracts->setStatus(2);


        $em->persist($abstracts);
        $em->flush();
        return $this->redirectToRoute('admin_abstract');
    }

    public function payementAction($id) {
        $em = $this->container->get('doctrine')->getEntityManager();

        $user = $em->getRepository('CNGOTBundle:User')->find($id);
        $user->setEtat(1);
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('admin_users');
    }
    
    
    public function returnPDFResponseFromHTML($code, $titre) {




        $pdf = $this->get("white_october.tcpdf")->create('vertical', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetAuthor('Ben salem Chams eddine');
        $pdf->SetTitle(('CNGOT Atelier ticket'));
        $pdf->SetSubject('Our Code World Subject');
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('helvetica', '', 18, '', true);
        //$pdf->SetMargins(20,20,40, true);
        $pdf->AddPage();

        $filename = 'CNGOT ticket';
        $html = '<!DOCTYPE html>
<HTML>
<HEAD>
<meta charset="utf-8"/>
</HEAD>

<BODY >
';

// output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        $html = '<H1 style="font-weight: bold;">CNGOT ATELIER TICKET</H1>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'C', true);
        $html = '<H6> 16 - 17  Décembre 2016</H6><br><br>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'C', true);
       
        $nombre = "&nbsp;&nbsp;&nbsp;&nbsp;" . $titre;
        $html = '<H4>Titre:' . "$nombre" . '</H4>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'L', true);
        



        $style = array(
            'vpadding' => 'auto',
            'hpadding' => 'auto',
            'fgcolor' => array(0, 0, 0),
            'bgcolor' => false, //array(255,255,255)
            'position' => 'absolute',
            'top' => '10px',
            'right' => '0px'
        );

        $pdf->write2DBarcode($code, 'QRCODE,H', 50, 80, 120, 120, $style, false);




        $html = '<BR><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                 <h6><I>livré par CNGOT administration</I><h6>
                 </BODY>
                 </HTML>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 0, 0, true, 'R', true);


        //$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
        $pdf->Output($filename . ".pdf", 'I'); // This will output the PDF as a response directly
    }

    public function telechargerAction($code,$titre) {
        $this->returnPDFResponseFromHTML($code,$titre);
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
    
    
    
    
    
    public function returnAbstractPosterPDF($id) {
        $em = $this->container->get('doctrine')->getEntityManager();

        $abstract = $em->getRepository('CNGOTBundle:AbstractVideo')->find($id);
        
        $width = 450;  
        $height = 280; 
        $pageLayout = array($width, $height);

        $pdf = $this->get("white_october.tcpdf")->create('L',PDF_UNIT , PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetAuthor('Ben salem Chams eddine');
        $pdf->SetTitle(('CNGOT Atelier ticket'));
        $pdf->SetSubject('Our Code World Subject');
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('helvetica', '', 18, '', true);
        $pdf->AddPage();
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        $pdf->SetAutoPageBreak(false, 0);

        $appPath = $this->container->getParameter('kernel.root_dir');
        $webPath = $appPath . '/attestations/Attestations-e-poster.jpg';
        $img_file = $webPath;
        $pdf->Image($img_file, 0, 0, 299, 210, '', '', '', false, 300, '', false, false, 0);

        $filename = 'E-poster-abstract' . "$id";
        $html = '<br><br><br><br><br><br><br><br><br><H6>'.$abstract->getAuteur1().'</H6>';
        $pdf->writeHTMLCell(-10, -10, '', '', $html, '', 1, 0, true, 'C', true);
        $html = '<br><H6>'.$abstract->getTitre().'</H6>';
        $pdf->writeHTMLCell(-100, 10, '', '', $html, '', 1, 0, true, 'C', true);
        $html = '<br><H6>'.$abstract->getAuteur2().', '.$abstract->getAuteur3().'</H6>';
        $pdf->writeHTMLCell(-100, 10, '', '', $html, '', 1, 0, true, 'C', true);
        
    $pdf->Output($filename . ".pdf", 'I'); // This will output the PDF as a response directly
    
    }
    
    public function telechargerAbstractPosterAction($id) {
        $this->returnAbstractPosterPDF($id);
    }
    
    

}
