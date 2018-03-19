<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/image')) {
            // image_index
            if ('/image' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_image_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'image_index');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::indexAction',  '_route' => 'image_index',);
            }
            not_image_index:

            // image_new
            if ('/image/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_image_new;
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::newAction',  '_route' => 'image_new',);
            }
            not_image_new:

            // image_show
            if (preg_match('#^/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_image_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_show')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::showAction',));
            }
            not_image_show:

            // image_edit
            if (preg_match('#^/image/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_image_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_edit')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::editAction',));
            }
            not_image_edit:

            // image_delete
            if (preg_match('#^/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_image_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_delete')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\imageController::deleteAction',));
            }
            not_image_delete:

        }

        elseif (0 === strpos($pathinfo, '/res')) {
            if (0 === strpos($pathinfo, '/reservation')) {
                // reservation_index
                if ('/reservation' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reservation_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'reservation_index');
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_index',);
                }
                not_reservation_index:

                // reservation_new
                if ('/reservation/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reservation_new;
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
                }
                not_reservation_new:

                // reservation_show
                if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reservation_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_show')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::showAction',));
                }
                not_reservation_show:

                // reservation_edit
                if (preg_match('#^/reservation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reservation_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_edit')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::editAction',));
                }
                not_reservation_edit:

                // reservation_delete
                if (preg_match('#^/reservation/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_reservation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reservation_delete')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::deleteAction',));
                }
                not_reservation_delete:

            }

            // rese
            if ('/res' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'rese');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::affResAction',  '_route' => 'rese',);
            }

            // reservers
            if ('/reserver' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'reservers');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::reserverAction',  '_route' => 'reservers',);
            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/paiement')) {
                // paiement_index
                if ('/paiement' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_paiement_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'paiement_index');
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::indexAction',  '_route' => 'paiement_index',);
                }
                not_paiement_index:

                // paiement_new
                if ('/paiement/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_paiement_new;
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::newAction',  '_route' => 'paiement_new',);
                }
                not_paiement_new:

                // paiement_show
                if (preg_match('#^/paiement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_paiement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paiement_show')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::showAction',));
                }
                not_paiement_show:

                // paiement_edit
                if (preg_match('#^/paiement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_paiement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paiement_edit')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::editAction',));
                }
                not_paiement_edit:

                // paiement_delete
                if (preg_match('#^/paiement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_paiement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paiement_delete')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\PaiementController::deleteAction',));
                }
                not_paiement_delete:

            }

            // pdf
            if ('/pdf' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'pdf');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::contratpdfAction',  '_route' => 'pdf',);
            }

            // Proprietaireype
            if ('/prop' === $pathinfo) {
                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ProprietaireController::AddProprietaireAction',  '_route' => 'Proprietaireype',);
            }

            if (0 === strpos($pathinfo, '/profile')) {
                // fos_user_profile_show
                if ('/profile' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_profile_show;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                }
                not_fos_user_profile_show:

                // fos_user_profile_edit
                if ('/profile/edit' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_profile_edit;
                    }

                    return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                }
                not_fos_user_profile_edit:

                // fos_user_change_password
                if ('/profile/change-password' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

            }

        }

        elseif (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/affiche')) {
                // reserver
                if (preg_match('#^/affiche/(?P<id>[^/]++)/(?P<idb>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reserver')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::resAction',));
                }

                // reserve
                if ('/affiche' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'reserve');
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::connectAction',  '_route' => 'reserve',);
                }

            }

            // accueil
            if ('/accueil' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'accueil');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::accueilAction',  '_route' => 'accueil',);
            }

            // valider
            if ('/activer' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'valider');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ProprietaireController::validerAction',  '_route' => 'valider',);
            }

            // app_bundle_route
            if ('/ajax_request' === $pathinfo) {
                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::indexAction',  '_route' => 'app_bundle_route',);
            }

            // ajout
            if ('/ajout' === $pathinfo) {
                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::ajoutAction',  '_route' => 'ajout',);
            }

            // admin
            if ('/admins' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::adminAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/add')) {
                // formBien
                if ('/addbien' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('POST', 'GET'))) {
                        $allow = array_merge($allow, array('POST', 'GET'));
                        goto not_formBien;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'formBien');
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::BienAction',  '_route' => 'formBien',);
                }
                not_formBien:

                // formLocalite
                if ('/addlocalite' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'formLocalite');
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::LocaliteAction',  '_route' => 'formLocalite',);
                }

                // formType
                if ('/addtype' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'formType');
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::TypeAction',  '_route' => 'formType',);
                }

                // add
                if ('/add' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'add');
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::addAction',  '_route' => 'add',);
                }

                // addP
                if ('/addP' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'addP');
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ProprietaireController::addPAction',  '_route' => 'addP',);
                }

                // addl
                if ('/addl' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'addl');
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\APIController::addlAction',  '_route' => 'addl',);
                }

            }

            // archiver
            if ('/archiver' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'archiver');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ProprietaireController::archiverAction',  '_route' => 'archiver',);
            }

            // all
            if ('/all' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'all');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\APIController::ListAction',  '_route' => 'all',);
            }

        }

        elseif (0 === strpos($pathinfo, '/lo')) {
            // log
            if ('/log' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'log');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::connectAction',  '_route' => 'log',);
            }

            // tab
            if ('/lo' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'tab');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::loadAction',  '_route' => 'tab',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        // contrat
        if (0 === strpos($pathinfo, '/contrat') && preg_match('#^/contrat/(?P<idb>[^/]++)/(?P<idc>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contrat')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::validResAction',));
        }

        if (0 === strpos($pathinfo, '/de')) {
            if (0 === strpos($pathinfo, '/detail')) {
                // detail
                if ('/detail' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'detail');
                    }

                    return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::detailAction',  '_route' => 'detail',);
                }

                // detailReservation
                if (0 === strpos($pathinfo, '/detailsReservatin') && preg_match('#^/detailsReservatin/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'detailReservation')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::detailsReservationAction',));
                }

            }

            // det
            if (0 === strpos($pathinfo, '/det') && preg_match('#^/det/(?P<idb>[^/]++)/(?P<idc>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'det')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::conAction',));
            }

            // delete
            if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\APIController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            // reserv
            if ('/showReservation' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'reserv');
                }

                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::showReservationAction',  '_route' => 'reserv',);
            }

            // saveContrat
            if ('/saveContrat' === $pathinfo) {
                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::saveContratAction',  '_route' => 'saveContrat',);
            }

            // selectLocalite
            if ('/selectL' === $pathinfo) {
                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::selectLocaliteAction',  '_route' => 'selectLocalite',);
            }

            // selectType
            if ('/selectT' === $pathinfo) {
                return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::selectTypeAction',  '_route' => 'selectType',);
            }

        }

        // gerant
        if ('/gerant' === $pathinfo) {
            return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\frontController::gerantAction',  '_route' => 'gerant',);
        }

        // bientable
        if ('/tablebien' === $pathinfo) {
            return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::BienAction',  '_route' => 'bientable',);
        }

        // validation
        if ('/validation' === $pathinfo) {
            return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ReservationController::validationAction',  '_route' => 'validation',);
        }

        // validArchive
        if ('/validArchive' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'validArchive');
            }

            return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ProprietaireController::validArchiveAction',  '_route' => 'validArchive',);
        }

        // bail
        if ('/bail' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'bail');
            }

            return array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\ProprietaireController::contratBailAction',  '_route' => 'bail',);
        }

        // update
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update')), array (  '_controller' => 'KEURGUI\\immoBundle\\Controller\\APIController::updateAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
