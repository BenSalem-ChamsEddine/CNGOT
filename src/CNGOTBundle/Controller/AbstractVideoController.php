<?php

namespace CNGOTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CNGOTBundle\Entity\AbstractVideo;
use CNGOTBundle\Form\AbstractVideoType;
use CNGOTBundle\Entity\Mail;

class AbstractVideoController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository('CNGOTBundle:AbstractVideo')->findAll();

        return $this->render('CNGOTBundle:video:index.html.twig', array('videos' => $videos));
    }

    public function addAction(Request $request) {
        $document = new AbstractVideo();
        $form = $this->createForm(new AbstractVideoType(), $document);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $document->upload();
            $document->setUser($this->getUser());
            $em->persist($document);
            $em->flush();
            $this->sendMailAction($document->getTitre(), $document->getIntroduction(), $document->getMateriel(), $document->getResultats(), $document->getConclusions(), $this->getUser());

            return $this->redirectToRoute('user_home');
        }

        return $this->render('CNGOTBundle:user:addAbstractVideo.html.twig', array('form' => $form->createView()));
    }

    public function viewAction($id) {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('CNGOTBundle:AbstractVideo')->find($id);

        return $this->render('CNGOTBundle:video:view.html.twig', array('video' => $video));
    }

    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $video = $em->getRepository('CNGOTBundle:AbstractVideo')->find($id);

        $em->remove($video);
        $em->flush();

        return $this->redirectToRoute("add_user_video");
    }

    public function listeAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $Ev = $em->getRepository('CNGOTBundle:AbstractVideo')->findAll();


        return $this->render('CNGOTBundle:video:listUserVideo.html.twig', array(
                    'videos' => $Ev
        ));
    }

    public function sendMailAction($titre, $introduction, $materiel, $resultats, $conclusions, $user) {
        $to = "cngot2016@gmail.com";
        $request = $this->get('request');
        $mail = new Mail();
//        $form = $this->createForm(new MailType(), $mail);
//        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $mail->setFrom($user->getEmail());
            $mail->setNom($user->getNom());
            $mail->setPrenom($user->getPrenom());
            $mail->setText($introduction);
            $mail->setSubject($resultats);
//        $form->handleRequest($request);
//        if ($form->isValid()) {

            $html = '<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Nouveau Abstract</title>
    <style media="all" type="text/css">
    @media all {
      .btn-primary table td:hover {
        background-color: #34495e !important;
      }
      .btn-primary a:hover {
        background-color: #34495e !important;
        border-color: #34495e !important;
      }
    }
    
    @media all {
      .btn-secondary a:hover {
        border-color: #34495e !important;
        color: #34495e !important;
      }
    }
    
    @media only screen and (max-width: 620px) {
      table[class=body] h1 {
        font-size: 28px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] h2 {
        font-size: 22px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] h3 {
        font-size: 16px !important;
        margin-bottom: 10px !important;
      }
      table[class=body] p,
      table[class=body] ul,
      table[class=body] ol,
      table[class=body] td,
      table[class=body] span,
      table[class=body] a {
        font-size: 16px !important;
      }
      table[class=body] .wrapper,
      table[class=body] .article {
        padding: 10px !important;
      }
      table[class=body] .content {
        padding: 0 !important;
      }
      table[class=body] .container {
        padding: 0 !important;
        width: 100% !important;
      }
      table[class=body] .header {
        margin-bottom: 10px !important;
      }
      table[class=body] .main {
        border-left-width: 0 !important;
        border-radius: 0 !important;
        border-right-width: 0 !important;
      }
      table[class=body] .btn table {
        width: 100% !important;
      }
      table[class=body] .btn a {
        width: 100% !important;
      }
      table[class=body] .img-responsive {
        height: auto !important;
        max-width: 100% !important;
        width: auto !important;
      }
      table[class=body] .alert td {
        border-radius: 0 !important;
        padding: 10px !important;
      }
      table[class=body] .span-2,
      table[class=body] .span-3 {
        max-width: none !important;
        width: 100% !important;
      }
      table[class=body] .receipt {
        width: 100% !important;
      }
    }
    
    @media all {
      .ExternalClass {
        width: 100%;
      }
      .ExternalClass,
      .ExternalClass p,
      .ExternalClass span,
      .ExternalClass font,
      .ExternalClass td,
      .ExternalClass div {
        line-height: 100%;
      }
      .apple-link a {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
    }
    </style>
  </head>
  <body class="" style="font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; background-color: #f6f6f6; margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;" width="100%" bgcolor="#f6f6f6">
      <tr>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
        <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto !important; max-width: 580px; padding: 10px; width: 580px;" width="580" valign="top">
          <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">

            <!-- START CENTERED WHITE CONTAINER -->
            <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #fff; border-radius: 3px;" width="100%">

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;" valign="top">
                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                    <tr>
                      <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">' . $titre . '</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">' . $introduction . '</p>
                        
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">' . $materiel . '</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">' . $resultats . '</p>
                        <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">' . $conclusions . '</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <!-- END MAIN CONTENT AREA -->
              </table>

            <!-- START FOOTER -->
            <div class="footer" style="clear: both; padding-top: 10px; text-align: center; width: 100%;">
              <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                <tr>
                  <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-top: 10px; padding-bottom: 10px; font-size: 12px; color: #999999; text-align: center;" valign="top" align="center">
                    Réalisé par <a href="#" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">VeLox IT</a>.
                  </td>
                </tr>
              </table>
            </div>

            <!-- END FOOTER -->
            
<!-- END CENTERED WHITE CONTAINER --></div>
        </td>
        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>';

            $message = \Swift_Message::newInstance()
                    ->setSubject("Nouveau abstract : " . $titre)
                    ->setFrom($mail->getFrom())
                    ->setTo($to)
                    ->setSender($mail->getFrom())
                    ->setBody("Utilisateur : " . $mail->getNom() . " " . $mail->getPrenom() . "\n Email : " . $mail->getFrom() .
                    "\n\n\n\n" . $html, 'text/html');

            $mailer = $this->get('mailer');
            $mailer->send($message);
            return $this->render('CNGOTBundle:Default:mail.html.twig', array('to' => $to, 'from' => $mail->getFrom()));
        } return $this->redirect($this->generateUrl('user_home'));
    }

}

?>
