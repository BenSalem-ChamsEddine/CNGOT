<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // cngot_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cngot_homepage');
            }

            return array (  '_controller' => 'CNGOTBundle\\Controller\\DefaultController::indexAction',  '_route' => 'cngot_homepage',);
        }

        // admin_home
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_home');
            }

            return array (  '_controller' => 'CNGOTBundle\\Controller\\DefaultController::adminHomeAction',  '_route' => 'admin_home',);
        }

        // user_home
        if (rtrim($pathinfo, '/') === '/user') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_home');
            }

            return array (  '_controller' => 'CNGOTBundle\\Controller\\DefaultController::userHomeAction',  '_route' => 'user_home',);
        }

        // Erreur
        if ($pathinfo === '/erreur') {
            return array (  '_controller' => 'CNGOTBundle\\Controller\\DefaultController::erreurAction',  '_route' => 'Erreur',);
        }

        // mobile_app
        if ($pathinfo === '/mobile') {
            return array (  '_controller' => 'CNGOTBundle\\Controller\\DefaultController::mobileAction',  '_route' => 'mobile_app',);
        }

        if (0 === strpos($pathinfo, '/admin/video')) {
            // home_video
            if (rtrim($pathinfo, '/') === '/admin/video') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'home_video');
                }

                return array (  '_controller' => 'CNGOTBundle\\Controller\\VideoController::indexAction',  '_route' => 'home_video',);
            }

            // add_video
            if ($pathinfo === '/admin/video/add') {
                return array (  '_controller' => 'CNGOTBundle\\Controller\\VideoController::addAction',  '_route' => 'add_video',);
            }

        }

        // view_single_video
        if (0 === strpos($pathinfo, '/video/view') && preg_match('#^/video/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_single_video')), array (  '_controller' => 'CNGOTBundle\\Controller\\VideoController::viewAction',));
        }

        // delete_video
        if (0 === strpos($pathinfo, '/admin/video/delete') && preg_match('#^/admin/video/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_video')), array (  '_controller' => 'CNGOTBundle\\Controller\\VideoController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/video')) {
            // affichage_video
            if ($pathinfo === '/video/listVideo') {
                return array (  '_controller' => 'CNGOTBundle\\Controller\\VideoController::listeAction',  '_route' => 'affichage_video',);
            }

            // edit_video
            if (0 === strpos($pathinfo, '/video/edit') && preg_match('#^/video/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_video')), array (  '_controller' => 'CNGOTBundle\\Controller\\VideoController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_users
            if ($pathinfo === '/admin/users') {
                return array (  '_controller' => 'CNGOTBundle\\Controller\\AdminController::getAllUsersAction',  '_route' => 'admin_users',);
            }

            if (0 === strpos($pathinfo, '/admin/abstracts')) {
                // admin_abstract
                if ($pathinfo === '/admin/abstracts') {
                    return array (  '_controller' => 'CNGOTBundle\\Controller\\AdminController::getAllAbstractAction',  '_route' => 'admin_abstract',);
                }

                // accepter_abstract
                if (0 === strpos($pathinfo, '/admin/abstracts/accept') && preg_match('#^/admin/abstracts/accept/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'accepter_abstract')), array (  '_controller' => 'CNGOTBundle\\Controller\\AdminController::accepterAbstractAction',));
                }

                // rejeter_abstract
                if (0 === strpos($pathinfo, '/admin/abstracts/reject') && preg_match('#^/admin/abstracts/reject/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rejeter_abstract')), array (  '_controller' => 'CNGOTBundle\\Controller\\AdminController::rejectAbstractAction',));
                }

            }

            // payement_effectue
            if (0 === strpos($pathinfo, '/admin/payement') && preg_match('#^/admin/payement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'payement_effectue')), array (  '_controller' => 'CNGOTBundle\\Controller\\AdminController::payementAction',));
            }

        }

        // download_ticket
        if (0 === strpos($pathinfo, '/user/ticket') && preg_match('#^/user/ticket/(?P<salt>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'download_ticket')), array (  '_controller' => 'CNGOTBundle\\Controller\\UserController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin')) {
                // atelier_ticket
                if (0 === strpos($pathinfo, '/admin/ticket') && preg_match('#^/admin/ticket/(?P<code>[^/]++)/(?P<titre>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'atelier_ticket')), array (  '_controller' => 'CNGOTBundle\\Controller\\AdminController::telechargerAction',));
                }

                // telecharger_abstract
                if (0 === strpos($pathinfo, '/admin/abst') && preg_match('#^/admin/abst/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'telecharger_abstract')), array (  '_controller' => 'CNGOTBundle\\Controller\\AdminController::telechargerAbstractAction',));
                }

            }

            // telecharger_abstract2
            if (0 === strpos($pathinfo, '/abst') && preg_match('#^/abst/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telecharger_abstract2')), array (  '_controller' => 'CNGOTBundle\\Controller\\DefaultController::telechargerAbstractAction',));
            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // add_user_video
            if ($pathinfo === '/user/addAbstract') {
                return array (  '_controller' => 'CNGOTBundle\\Controller\\AbstractVideoController::addAction',  '_route' => 'add_user_video',);
            }

            // list_abstract_user
            if (0 === strpos($pathinfo, '/user/listabst') && preg_match('#^/user/listabst/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_abstract_user')), array (  '_controller' => 'CNGOTBundle\\Controller\\UserController::listeAbstractAction',));
            }

        }

        // telecharger_abstract_poster
        if (0 === strpos($pathinfo, '/abstPos') && preg_match('#^/abstPos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'telecharger_abstract_poster')), array (  '_controller' => 'CNGOTBundle\\Controller\\AdminController::telechargerAbstractPosterAction',));
        }

        if (0 === strpos($pathinfo, '/certif')) {
            // telecharger_certif_atelier
            if (0 === strpos($pathinfo, '/certifA') && preg_match('#^/certifA/(?P<idUser>[^/]++)/(?P<idAtelier>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telecharger_certif_atelier')), array (  '_controller' => 'CNGOTBundle\\Controller\\DefaultController::telechargerAtelierCertifAction',));
            }

            // telecharger_certif_masterclass
            if (0 === strpos($pathinfo, '/certifM') && preg_match('#^/certifM/(?P<idUser>[^/]++)/(?P<idMaster>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'telecharger_certif_masterclass')), array (  '_controller' => 'CNGOTBundle\\Controller\\DefaultController::telechargerMasterCertifAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // endroid_qrcode
        if (0 === strpos($pathinfo, '/qrcode') && preg_match('#^/qrcode/(?P<text>[\\w\\W]+)\\.(?P<extension>jpg|png|gif)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'endroid_qrcode')), array (  '_controller' => 'Endroid\\Bundle\\QrCodeBundle\\Controller\\QrCodeController::generateAction',));
        }

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/user')) {
                // api_get_user
                if (preg_match('#^/api/user(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_user')), array (  '_controller' => 'CNGOTBundle\\Controller\\CNGOTRestController::getUserAction',  '_format' => 'json',));
                }
                not_api_get_user:

                // api_get_userqr
                if (0 === strpos($pathinfo, '/api/userqrs') && preg_match('#^/api/userqrs/(?P<salt>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_userqr;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_userqr')), array (  '_controller' => 'CNGOTBundle\\Controller\\CNGOTRestController::getUserqrAction',  '_format' => 'json',));
                }
                not_api_get_userqr:

                // api_get_userid
                if (0 === strpos($pathinfo, '/api/userids') && preg_match('#^/api/userids/(?P<id>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_get_userid;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_get_userid')), array (  '_controller' => 'CNGOTBundle\\Controller\\CNGOTRestController::getUseridAction',  '_format' => 'json',));
                }
                not_api_get_userid:

            }

            // api_certification
            if (0 === strpos($pathinfo, '/api/certification') && preg_match('#^/api/certification(?:\\.(?P<_format>xml|json|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_certification;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_certification')), array (  '_controller' => 'CNGOTBundle\\Controller\\CNGOTRestController::certificationAction',  '_format' => 'json',));
            }
            not_api_certification:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
