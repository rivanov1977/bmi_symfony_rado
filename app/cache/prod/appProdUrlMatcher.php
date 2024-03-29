<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // bmi_calculator_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bmi_calculator_homepage');
            }

            return array (  '_controller' => 'Bmi\\CalculatorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'bmi_calculator_homepage',);
        }

        // bmi_calculator_result
        if ($pathinfo === '/result') {
            return array (  '_controller' => 'Bmi\\CalculatorBundle\\Controller\\DefaultController::resultAction',  '_route' => 'bmi_calculator_result',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
