<?php

namespace CNGOTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller {

    //get all users
    public function rechrcherUserParIdAction($id) {
        //access user manager services 

        $em = $this->container->get('doctrine')->getEntityManager();
        $user = $em->getRepository('CNGOTBundle:User')->find($id);

        return $this->render('CNGOTBundle:user:recherche.html.twig', array('user' => $user));
    }

    public function returnPDFResponseFromHTML($salt) {

        $em = $this->container->get('doctrine')->getEntityManager();
        $user = $em->getRepository('CNGOTBundle:User')->findOneBy(array('salt' => $salt));



        $pdf = $this->get("white_october.tcpdf")->create('vertical', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetAuthor('Ben salem Chams eddine');
        $pdf->SetTitle(('CNGOT ticket'));
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

        $html = '<H1 style="font-weight: bold;">CNGOT EVENT TICKET</H1>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'C', true);
        $html = '<H6> 16 - 17 - 18 Décembre 2016</H6><br><br>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'C', true);
        $nom = $user->getNom();
        $nombre = "&nbsp;&nbsp;&nbsp;&nbsp;" . $nom;
        $prenom = $user->getPrenom();
        $prenombre = "&nbsp;&nbsp;&nbsp;&nbsp;" . $prenom;
        $html = '<H4>Nom:' . "$nombre" . '</H4>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'L', true);
        $html = '<H4>Prenom:' . "$prenombre" . '</H4><br><br>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 1, 0, true, 'L', true);

        $html = '<p color="red">Ce code vous est strictement personnel
        et permet de vous identifier dans toutes vos relations avec le Collège National De Gynécologie Obstétrique </p>';

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

        $pdf->write2DBarcode($salt, 'QRCODE,H', 70, 120, 75, 75, $style, false);




        $html = '<BR><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                 <B><h5><I>livré par CNGOT administration</I><h5></B>
                 </BODY>
                 </HTML>';
        $pdf->writeHTMLCell(0, 0, '', '', $html, '', 0, 0, true, 'R', true);


        //$pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
        $pdf->Output($filename . ".pdf", 'I'); // This will output the PDF as a response directly
    }

    public function indexAction($salt) {
        $this->returnPDFResponseFromHTML($salt);
    }

    public function downloadTicketAction() {
        return $this->render('CNGOTBundle:user:ticket.html.twig');
    }

    
    public function listeAbstractAction($id) {
        
        $em = $this->container->get('doctrine')->getEntityManager();
        
        $abstracts = $em->getRepository('CNGOTBundle:AbstractVideo')->findBy(array('user' => $id));
          return $this->render('CNGOTBundle:user:profile.html.twig',array('abstracts' => $abstracts));      
    }
    
    
}
