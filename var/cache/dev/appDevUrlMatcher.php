<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/8f2c0fa')) {
                // _assetic_8f2c0fa
                if ($pathinfo === '/css/8f2c0fa.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8f2c0fa',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8f2c0fa',);
                }

                // _assetic_8f2c0fa_0
                if ($pathinfo === '/css/8f2c0fa_accordion-multiview_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8f2c0fa',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8f2c0fa_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/3afb8ab')) {
                // _assetic_3afb8ab
                if ($pathinfo === '/css/3afb8ab.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3afb8ab',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3afb8ab',);
                }

                // _assetic_3afb8ab_0
                if ($pathinfo === '/css/3afb8ab_form-wizard-validation_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3afb8ab',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3afb8ab_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/d5704ff')) {
            // _assetic_d5704ff
            if ($pathinfo === '/js/d5704ff.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd5704ff',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d5704ff',);
            }

            if (0 === strpos($pathinfo, '/js/d5704ff_')) {
                // _assetic_d5704ff_0
                if ($pathinfo === '/js/d5704ff_form-wizard-validation_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd5704ff',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d5704ff_0',);
                }

                // _assetic_d5704ff_1
                if ($pathinfo === '/js/d5704ff_composants_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd5704ff',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d5704ff_1',);
                }

                // _assetic_d5704ff_2
                if ($pathinfo === '/js/d5704ff_fonctions_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd5704ff',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_d5704ff_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/2a52955')) {
                // _assetic_2a52955
                if ($pathinfo === '/css/2a52955.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2a52955',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_2a52955',);
                }

                // _assetic_2a52955_0
                if ($pathinfo === '/css/2a52955_modal-login_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '2a52955',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_2a52955_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/0e63b70')) {
                // _assetic_0e63b70
                if ($pathinfo === '/css/0e63b70.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0e63b70',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0e63b70',);
                }

                // _assetic_0e63b70_0
                if ($pathinfo === '/css/0e63b70_simple-admin_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0e63b70',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0e63b70_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/de0e6ae')) {
            // _assetic_de0e6ae
            if ($pathinfo === '/js/de0e6ae.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'de0e6ae',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_de0e6ae',);
            }

            // _assetic_de0e6ae_0
            if ($pathinfo === '/js/de0e6ae_simple-admin_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'de0e6ae',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_de0e6ae_0',);
            }

        }

        if (0 === strpos($pathinfo, '/css/e7f3a91')) {
            // _assetic_e7f3a91
            if ($pathinfo === '/css/e7f3a91.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7f3a91',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e7f3a91',);
            }

            // _assetic_e7f3a91_0
            if ($pathinfo === '/css/e7f3a91_simple-user_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7f3a91',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e7f3a91_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        // admin_homepage
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_homepage');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_homepage',);
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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
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

        if (0 === strpos($pathinfo, '/p')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // page
            if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'page')), array (  '_controller' => 'PagesBundle\\Controller\\PagesController::pageAction',));
            }

        }

        // benchmarking_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'benchmarking_homepage');
            }

            return array (  '_controller' => 'BenchmarkingBundle\\Controller\\BenchmarkingController::accueilAction',  '_route' => 'benchmarking_homepage',);
        }

        if (0 === strpos($pathinfo, '/vehicule')) {
            // vehicules
            if ($pathinfo === '/vehicule/liste') {
                return array (  '_controller' => 'BenchmarkingBundle\\Controller\\VehiculeController::indexAction',  '_route' => 'vehicules',);
            }

            // vehicule_view
            if (preg_match('#^/vehicule/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\VehiculeController::viewAction',));
            }

            // vehicule_recherche
            if ($pathinfo === '/vehicule/recherche') {
                return array (  '_controller' => 'BenchmarkingBundle\\Controller\\VehiculeController::rechercheAction',  '_route' => 'vehicule_recherche',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/vehicule')) {
                // vehicule_add
                if ($pathinfo === '/admin/vehicule/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\VehiculeController::addAction',  '_route' => 'vehicule_add',);
                }

                // vehicule_edit
                if (0 === strpos($pathinfo, '/admin/vehicule/edit') && preg_match('#^/admin/vehicule/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\VehiculeController::editAction',));
                }

                // vehicule_delete
                if (0 === strpos($pathinfo, '/admin/vehicule/delete') && preg_match('#^/admin/vehicule/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\VehiculeController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/fonction')) {
                // fonctions
                if ($pathinfo === '/admin/fonction/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\FonctionController::indexAction',  '_route' => 'fonctions',);
                }

                // fonction_view
                if (preg_match('#^/admin/fonction/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fonction_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\FonctionController::viewAction',));
                }

                // fonction_add
                if ($pathinfo === '/admin/fonction/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\FonctionController::addAction',  '_route' => 'fonction_add',);
                }

                // fonction_edit
                if (0 === strpos($pathinfo, '/admin/fonction/edit') && preg_match('#^/admin/fonction/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fonction_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\FonctionController::editAction',));
                }

                // fonction_delete
                if (0 === strpos($pathinfo, '/admin/fonction/delete') && preg_match('#^/admin/fonction/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fonction_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\FonctionController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/m')) {
                if (0 === strpos($pathinfo, '/admin/motorisation')) {
                    // motorisations
                    if ($pathinfo === '/admin/motorisation/liste') {
                        return array (  '_controller' => 'BenchmarkingBundle\\Controller\\MotorisationController::indexAction',  '_route' => 'motorisations',);
                    }

                    // motorisation_view
                    if (preg_match('#^/admin/motorisation/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'motorisation_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\MotorisationController::viewAction',));
                    }

                    // motorisation_add
                    if ($pathinfo === '/admin/motorisation/add') {
                        return array (  '_controller' => 'BenchmarkingBundle\\Controller\\MotorisationController::addAction',  '_route' => 'motorisation_add',);
                    }

                    // motorisation_edit
                    if (0 === strpos($pathinfo, '/admin/motorisation/edit') && preg_match('#^/admin/motorisation/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'motorisation_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\MotorisationController::editAction',));
                    }

                    // motorisation_delete
                    if (0 === strpos($pathinfo, '/admin/motorisation/delete') && preg_match('#^/admin/motorisation/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'motorisation_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\MotorisationController::deleteAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/admin/marque')) {
                    // marques
                    if ($pathinfo === '/admin/marque/liste') {
                        return array (  '_controller' => 'BenchmarkingBundle\\Controller\\MarqueController::indexAction',  '_route' => 'marques',);
                    }

                    // marque_view
                    if (preg_match('#^/admin/marque/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'marque_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\MarqueController::viewAction',));
                    }

                    // marque_add
                    if ($pathinfo === '/admin/marque/add') {
                        return array (  '_controller' => 'BenchmarkingBundle\\Controller\\MarqueController::addAction',  '_route' => 'marque_add',);
                    }

                    // marque_edit
                    if (0 === strpos($pathinfo, '/admin/marque/edit') && preg_match('#^/admin/marque/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'marque_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\MarqueController::editAction',));
                    }

                    // marque_delete
                    if (0 === strpos($pathinfo, '/admin/marque/delete') && preg_match('#^/admin/marque/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'marque_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\MarqueController::deleteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/boiteVitesse')) {
                // boitesVitesse
                if ($pathinfo === '/admin/boiteVitesse/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\BoiteVitesseController::indexAction',  '_route' => 'boitesVitesse',);
                }

                // boiteVitesse_view
                if (preg_match('#^/admin/boiteVitesse/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'boiteVitesse_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\BoiteVitesseController::viewAction',));
                }

                // boiteVitesse_add
                if ($pathinfo === '/admin/boiteVitesse/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\BoiteVitesseController::addAction',  '_route' => 'boiteVitesse_add',);
                }

                // boiteVitesse_edit
                if (0 === strpos($pathinfo, '/admin/boiteVitesse/edit') && preg_match('#^/admin/boiteVitesse/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'boiteVitesse_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\BoiteVitesseController::editAction',));
                }

                // boiteVitesse_delete
                if (0 === strpos($pathinfo, '/admin/boiteVitesse/delete') && preg_match('#^/admin/boiteVitesse/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'boiteVitesse_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\BoiteVitesseController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/segment')) {
                // segments
                if ($pathinfo === '/admin/segment/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\SegmentController::indexAction',  '_route' => 'segments',);
                }

                // segment_view
                if (preg_match('#^/admin/segment/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'segment_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\SegmentController::viewAction',));
                }

                // segment_add
                if ($pathinfo === '/admin/segment/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\SegmentController::addAction',  '_route' => 'segment_add',);
                }

                // segment_edit
                if (0 === strpos($pathinfo, '/admin/segment/edit') && preg_match('#^/admin/segment/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'segment_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\SegmentController::editAction',));
                }

                // segment_delete
                if (0 === strpos($pathinfo, '/admin/segment/delete') && preg_match('#^/admin/segment/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'segment_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\SegmentController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/famille')) {
                // familles
                if ($pathinfo === '/admin/famille/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\FamilleController::indexAction',  '_route' => 'familles',);
                }

                // famille_view
                if (preg_match('#^/admin/famille/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'famille_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\FamilleController::viewAction',));
                }

                // famille_add
                if ($pathinfo === '/admin/famille/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\FamilleController::addAction',  '_route' => 'famille_add',);
                }

                // famille_edit
                if (0 === strpos($pathinfo, '/admin/famille/edit') && preg_match('#^/admin/famille/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'famille_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\FamilleController::editAction',));
                }

                // famille_delete
                if (0 === strpos($pathinfo, '/admin/famille/delete') && preg_match('#^/admin/famille/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'famille_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\FamilleController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/commandePhysique')) {
                // commandesPhysiques
                if ($pathinfo === '/admin/commandePhysique/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\CommandePhysiqueController::indexAction',  '_route' => 'commandesPhysiques',);
                }

                // commandePhysique_view
                if (preg_match('#^/admin/commandePhysique/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandePhysique_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\CommandePhysiqueController::viewAction',));
                }

                // commandePhysique_add
                if ($pathinfo === '/admin/commandePhysique/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\CommandePhysiqueController::addAction',  '_route' => 'commandePhysique_add',);
                }

                // commandePhysique_edit
                if (0 === strpos($pathinfo, '/admin/commandePhysique/tedit') && preg_match('#^/admin/commandePhysique/tedit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandePhysique_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\CommandePhysiqueController::editAction',));
                }

                // commandePhysique_delete
                if (0 === strpos($pathinfo, '/admin/commandePhysique/delete') && preg_match('#^/admin/commandePhysique/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commandePhysique_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\CommandePhysiqueController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/afficheur')) {
                // afficheurs
                if ($pathinfo === '/admin/afficheur/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\AfficheurExistantController::indexAction',  '_route' => 'afficheurs',);
                }

                // afficheur_view
                if (preg_match('#^/admin/afficheur/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficheur_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\AfficheurExistantController::viewAction',));
                }

                // afficheur_add
                if ($pathinfo === '/admin/afficheur/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\AfficheurExistantController::addAction',  '_route' => 'afficheur_add',);
                }

                // afficheur_edit
                if (0 === strpos($pathinfo, '/admin/afficheur/edit') && preg_match('#^/admin/afficheur/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficheur_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\AfficheurExistantController::editAction',));
                }

                // afficheur_delete
                if (0 === strpos($pathinfo, '/admin/afficheur/delete') && preg_match('#^/admin/afficheur/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficheur_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\AfficheurExistantController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/localisation')) {
                // localisations
                if ($pathinfo === '/admin/localisation/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\LocalisationController::indexAction',  '_route' => 'localisations',);
                }

                // localisation_view
                if (preg_match('#^/admin/localisation/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'localisation_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\LocalisationController::viewAction',));
                }

                // localisation_add
                if ($pathinfo === '/admin/localisation/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\LocalisationController::addAction',  '_route' => 'localisation_add',);
                }

                // localisation_edit
                if (0 === strpos($pathinfo, '/admin/localisation/edit') && preg_match('#^/admin/localisation/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'localisation_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\LocalisationController::editAction',));
                }

                // localisation_delete
                if (0 === strpos($pathinfo, '/admin/localisation/delete') && preg_match('#^/admin/localisation/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'localisation_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\LocalisationController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/retourActivation')) {
                // retoursActivation
                if ($pathinfo === '/admin/retourActivation/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\RetourActivationController::indexAction',  '_route' => 'retoursActivation',);
                }

                // retourActivation_view
                if (preg_match('#^/admin/retourActivation/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retourActivation_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\RetourActivationController::viewAction',));
                }

                // retourActivation_add
                if ($pathinfo === '/admin/retourActivation/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\RetourActivationController::addAction',  '_route' => 'retourActivation_add',);
                }

                // retourActivation_edit
                if (0 === strpos($pathinfo, '/admin/retourActivation/edit') && preg_match('#^/admin/retourActivation/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retourActivation_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\RetourActivationController::editAction',));
                }

                // retourActivation_delete
                if (0 === strpos($pathinfo, '/admin/retourActivation/delete') && preg_match('#^/admin/retourActivation/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retourActivation_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\RetourActivationController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/technologieAfficheur')) {
                // technologiesAfficheur
                if ($pathinfo === '/admin/technologieAfficheur/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\TechnologieAfficheurController::indexAction',  '_route' => 'technologiesAfficheur',);
                }

                // technologieAfficheur_view
                if (preg_match('#^/admin/technologieAfficheur/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'technologieAfficheur_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\TechnologieAfficheurController::viewAction',));
                }

                // technologieAfficheur_add
                if ($pathinfo === '/admin/technologieAfficheur/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\TechnologieAfficheurController::addAction',  '_route' => 'technologieAfficheur_add',);
                }

                // technologieAfficheur_edit
                if (0 === strpos($pathinfo, '/admin/technologieAfficheur/edit') && preg_match('#^/admin/technologieAfficheur/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'technologieAfficheur_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\TechnologieAfficheurController::editAction',));
                }

                // technologieAfficheur_delete
                if (0 === strpos($pathinfo, '/admin/technologieAfficheur/delete') && preg_match('#^/admin/technologieAfficheur/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'technologieAfficheur_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\TechnologieAfficheurController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/sousTechnologieAfficheur')) {
                // sousTechnologiesAfficheur
                if ($pathinfo === '/admin/sousTechnologieAfficheur/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\SousTechnologieAfficheurController::indexAction',  '_route' => 'sousTechnologiesAfficheur',);
                }

                // sousTechnologieAfficheur_view
                if (preg_match('#^/admin/sousTechnologieAfficheur/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sousTechnologieAfficheur_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\SousTechnologieAfficheurController::viewAction',));
                }

                // sousTechnologieAfficheur_add
                if ($pathinfo === '/admin/sousTechnologieAfficheur/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\SousTechnologieAfficheurController::addAction',  '_route' => 'sousTechnologieAfficheur_add',);
                }

                // sousTechnologieAfficheur_edit
                if (0 === strpos($pathinfo, '/admin/sousTechnologieAfficheur/edit') && preg_match('#^/admin/sousTechnologieAfficheur/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sousTechnologieAfficheur_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\SousTechnologieAfficheurController::editAction',));
                }

                // sousTechnologieAfficheur_delete
                if (0 === strpos($pathinfo, '/admin/sousTechnologieAfficheur/delete') && preg_match('#^/admin/sousTechnologieAfficheur/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sousTechnologieAfficheur_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\SousTechnologieAfficheurController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/tailleEcran')) {
                // taillesEcran
                if ($pathinfo === '/admin/tailleEcran/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\TailleEcranController::indexAction',  '_route' => 'taillesEcran',);
                }

                // tailleEcran_view
                if (preg_match('#^/admin/tailleEcran/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tailleEcran_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\TailleEcranController::viewAction',));
                }

                // tailleEcran_add
                if ($pathinfo === '/admin/tailleEcran/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\TailleEcranController::addAction',  '_route' => 'tailleEcran_add',);
                }

                // tailleEcran_edit
                if (0 === strpos($pathinfo, '/admin/tailleEcran/edit') && preg_match('#^/admin/tailleEcran/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tailleEcran_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\TailleEcranController::editAction',));
                }

                // tailleEcran_delete
                if (0 === strpos($pathinfo, '/admin/tailleEcran/delete') && preg_match('#^/admin/tailleEcran/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tailleEcran_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\TailleEcranController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/formatEcran')) {
                // formatsEcran
                if ($pathinfo === '/admin/formatEcran/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\FormatEcranController::indexAction',  '_route' => 'formatsEcran',);
                }

                // formatEcran_view
                if (preg_match('#^/admin/formatEcran/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatEcran_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\FormatEcranController::viewAction',));
                }

                // formatEcran_add
                if ($pathinfo === '/admin/formatEcran/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\FormatEcranController::addAction',  '_route' => 'formatEcran_add',);
                }

                // formatEcran_edit
                if (0 === strpos($pathinfo, '/admin/formatEcran/edit') && preg_match('#^/admin/formatEcran/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatEcran_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\FormatEcranController::editAction',));
                }

                // formatEcran_delete
                if (0 === strpos($pathinfo, '/admin/formatEcran/delete') && preg_match('#^/admin/formatEcran/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formatEcran_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\FormatEcranController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/typeTdB')) {
                // typesTdB
                if ($pathinfo === '/admin/typeTdB/liste') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\TypeTdBController::indexAction',  '_route' => 'typesTdB',);
                }

                // typeTdB_view
                if (preg_match('#^/admin/typeTdB/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeTdB_view')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\TypeTdBController::viewAction',));
                }

                // typeTdB_add
                if ($pathinfo === '/admin/typeTdB/add') {
                    return array (  '_controller' => 'BenchmarkingBundle\\Controller\\TypeTdBController::addAction',  '_route' => 'typeTdB_add',);
                }

                // typeTdB_edit
                if (0 === strpos($pathinfo, '/admin/typeTdB/edit') && preg_match('#^/admin/typeTdB/edit/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeTdB_edit')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\TypeTdBController::editAction',));
                }

                // typeTdB_delete
                if (0 === strpos($pathinfo, '/admin/typeTdB/delete') && preg_match('#^/admin/typeTdB/delete/(?P<id>\\d*)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeTdB_delete')), array (  '_controller' => 'BenchmarkingBundle\\Controller\\TypeTdBController::deleteAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
