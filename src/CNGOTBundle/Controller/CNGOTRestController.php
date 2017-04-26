<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CNGOTBundle\Controller;

use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Request\ParamFetcher;
use \Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use CNGOTBundle\Entity\MasterClass;
use CNGOTBundle\Entity\Cngot17;

use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;

class CNGOTRestController extends Controller {

    /**
     * @QueryParam(name="username")
     * @QueryParam(name="password")
     * @View(serializerGroups={"Default","Details"})
     */
    public function getUserAction(ParamFetcher $paramFetcher) {

	$username = $paramFetcher->get('username');
        $password = $paramFetcher->get('password');
        $user = $this->getDoctrine()->getRepository('CNGOTBundle:User')->findOneByUsername($username);
        if (!is_object($user)) {
            return array('connect' => false);
        } else {
            if (password_verify($password, $user->getPassword())) {
                $user->setPassword($password);
		return array('connect' => 'true', 'user' => $user);		
                
                
            } else {
                return array('connect' => false);
            }
        }
    }

    public function getUserqrAction($salt) {
        $user = $this->getDoctrine()->getRepository('CNGOTBundle:User')->findOneBy(array('salt' => $salt));
        if (!is_object($user)) {
            return array('connect' => false);
        }
        
        if($user->getMasterclass() === null){
        	$master = new Masterclass();
        	$master->setTitre(" ");
        	$user->setMasterclass($master);
        }
        
        if($user->getAteliercngot17() === null){
        	$atelier= new Cngot17();
        	$atelier->setTitre(" ");
        	$user->setAteliercngot17($atelier);
        }

                return array('connect' => true,'user' => $user);
    }

    public function getUseridAction($id) {
        $user = $this->getDoctrine()->getRepository('CNGOTBundle:User')->findOneById($id);
        if (!is_object($user)) {
            return array('error' => false);
        }

                return array('error' => true,'user' => $user );

    }

    /**
     * @QueryParam(name="id")
     * @QueryParam(name="code")
     */
    public function certificationAction(ParamFetcher $paramFetcher) {
        $id = $paramFetcher->get('id');
        $code = $paramFetcher->get('code');

        $master = $this->getDoctrine()->getRepository('CNGOTBundle:MasterClass')->findOneBy(array('code' => $code));
        $cngot17 = $this->getDoctrine()->getRepository('CNGOTBundle:Cngot17')->findOneBy(array('code' => $code));
        $user = $this->getDoctrine()->getRepository('CNGOTBundle:User')->findOneById($id);
        
        $em = $this->getDoctrine()->getManager();

        if (!is_object($user)) {
            return array('operation' => false);
        } else {

            if (is_object($master)) {
                $user->addcertifmaster($master);
            } elseif (is_object($cngot17)) {
                $user->addCertifcn17($cngot17);
            }else{
                return array('operation' => false);
            }
            $em->flush();
            return array('operation' => true);
        }
    }

}
