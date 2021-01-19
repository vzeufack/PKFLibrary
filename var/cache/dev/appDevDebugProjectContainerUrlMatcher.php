<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
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

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/user')) {
                // AdminUserListSearch
                if (0 === strpos($pathinfo, '/admin/userListSearch') && preg_match('#^/admin/userListSearch/(?P<page>[^/]++)/(?P<categorie>[^/]++)/(?P<enabled>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'AdminUserListSearch')), array (  '_controller' => 'AppBundle\\Controller\\AdminUserController::AdminUserListSearchAction',));
                }

                // AdminUserDisableList
                if (0 === strpos($pathinfo, '/admin/userDisableList') && preg_match('#^/admin/userDisableList/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'AdminUserDisableList')), array (  '_controller' => 'AppBundle\\Controller\\AdminUserController::AdminUserDisableListAction',));
                }

                // AdminUserEnableList
                if (0 === strpos($pathinfo, '/admin/userEnableList') && preg_match('#^/admin/userEnableList/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'AdminUserEnableList')), array (  '_controller' => 'AppBundle\\Controller\\AdminUserController::AdminUserEnableListAction',));
                }

            }

            // AdminUserDetail
            if (0 === strpos($pathinfo, '/admin/User details') && preg_match('#^/admin/User details/(?P<id>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'AdminUserDetail')), array (  '_controller' => 'AppBundle\\Controller\\AdminUserController::UserDetailAction',));
            }

            if (0 === strpos($pathinfo, '/admin/userList')) {
                // AdminUserEnabled
                if (0 === strpos($pathinfo, '/admin/userList/Enable') && preg_match('#^/admin/userList/Enable/(?P<id>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'AdminUserEnabled')), array (  '_controller' => 'AppBundle\\Controller\\AdminUserController::UserEnableAction',));
                }

                // AdminUserDisable
                if (0 === strpos($pathinfo, '/admin/userList/Disable') && preg_match('#^/admin/userList/Disable/(?P<id>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'AdminUserDisable')), array (  '_controller' => 'AppBundle\\Controller\\AdminUserController::UserDisableAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/User Management')) {
            // addUser
            if ($pathinfo === '/User Management/addUser') {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminUserController::addUserAction',  '_route' => 'addUser',);
            }

            // editUser
            if (0 === strpos($pathinfo, '/User Management/Edit User') && preg_match('#^/User Management/Edit User/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editUser')), array (  '_controller' => 'AppBundle\\Controller\\AdminUserController::editUserAction',));
            }

        }

        // deleteUser
        if (0 === strpos($pathinfo, '/deleteUser') && preg_match('#^/deleteUser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteUser')), array (  '_controller' => 'AppBundle\\Controller\\AdminUserController::deleteUserAction',));
        }

        // UserDetail
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]++)/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'UserDetail')), array (  '_controller' => 'AppBundle\\Controller\\AdminUserController::UsersimpleDetailAction',));
        }

        // addBook
        if (0 === strpos($pathinfo, '/addBook') && preg_match('#^/addBook/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'addBook')), array (  '_controller' => 'AppBundle\\Controller\\BookController::addBookAction',));
        }

        if (0 === strpos($pathinfo, '/Book')) {
            // showBook
            if (0 === strpos($pathinfo, '/Books/Show') && preg_match('#^/Books/Show/(?P<id>[^/]++)/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showBook')), array (  '_controller' => 'AppBundle\\Controller\\BookController::showBookAction',));
            }

            // editBook
            if (0 === strpos($pathinfo, '/Book Modification') && preg_match('#^/Book Modification/(?P<id>[^/]+)(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editBook')), array (  '_controller' => 'AppBundle\\Controller\\BookController::editBookAction',));
            }

        }

        // deleteBook
        if (0 === strpos($pathinfo, '/deleteBook') && preg_match('#^/deleteBook/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteBook')), array (  '_controller' => 'AppBundle\\Controller\\BookController::deleteBookAction',));
        }

        if (0 === strpos($pathinfo, '/Books/Category')) {
            // showCategoryBooks
            if (preg_match('#^/Books/Category/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showCategoryBooks')), array (  '_controller' => 'AppBundle\\Controller\\BookController::showCategoryBooksAction',));
            }

            // showSubCategoryBooks
            if (0 === strpos($pathinfo, '/Books/Category/SubCategory') && preg_match('#^/Books/Category/SubCategory/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showSubCategoryBooks')), array (  '_controller' => 'AppBundle\\Controller\\BookController::showSubCategoryBooksAction',));
            }

        }

        // borrow
        if (0 === strpos($pathinfo, '/borrow') && preg_match('#^/borrow/(?P<bookId>[^/]++)/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'borrow')), array (  '_controller' => 'AppBundle\\Controller\\BorrowController::borrowAction',));
        }

        if (0 === strpos($pathinfo, '/management/borrow Management')) {
            // manageBorrows
            if ($pathinfo === '/management/borrow Management') {
                return array (  '_controller' => 'AppBundle\\Controller\\BorrowController::manageBorrowsAction',  '_route' => 'manageBorrows',);
            }

            // deleteRequested
            if ($pathinfo === '/management/borrow Management/Request deleted') {
                return array (  '_controller' => 'AppBundle\\Controller\\BorrowController::deleteRequestedAction',  '_route' => 'deleteRequested',);
            }

        }

        // categoryList
        if ($pathinfo === '/Management/Category Management/Category List') {
            return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::categoryListAction',  '_route' => 'categoryList',);
        }

        if (0 === strpos($pathinfo, '/add_')) {
            // addCategory
            if ($pathinfo === '/add_category') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::addCategoryAction',  '_route' => 'addCategory',);
            }

            // addSubCategory
            if ($pathinfo === '/add_subCategory') {
                return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::addSubCategoryAction',  '_route' => 'addSubCategory',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // help
        if ($pathinfo === '/help') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::help',  '_route' => 'help',);
        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::about',  '_route' => 'about',);
        }

        // topdf
        if (0 === strpos($pathinfo, '/topdf') && preg_match('#^/topdf/(?P<data>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'topdf')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::topdf',));
        }

        // viewAndBorrow
        if ($pathinfo === '/viewAndBorrow') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::viewAndBorrow',  '_route' => 'viewAndBorrow',);
        }

        // myAccount
        if ($pathinfo === '/myAccount') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::myAccount',  '_route' => 'myAccount',);
        }

        // searchBook
        if ($pathinfo === '/searchBook') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::searchBook',  '_route' => 'searchBook',);
        }

        // userManagements
        if ($pathinfo === '/userManagements') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::userManagement',  '_route' => 'userManagements',);
        }

        if (0 === strpos($pathinfo, '/bo')) {
            // bookManagements
            if ($pathinfo === '/bookManagements') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::bookManagements',  '_route' => 'bookManagements',);
            }

            // borrowManagements
            if ($pathinfo === '/borrowManagements') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::borrowManagements',  '_route' => 'borrowManagements',);
            }

        }

        // app_product_new
        if ($pathinfo === '/product') {
            return array (  '_controller' => 'AppBundle\\Controller\\TestController::newAction',  '_route' => 'app_product_new',);
        }

        // success
        if (0 === strpos($pathinfo, '/register/success') && preg_match('#^/register/success/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'success')), array (  '_controller' => 'AppBundle\\Controller\\UserController::registrationSuccessAction',));
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

                    return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
