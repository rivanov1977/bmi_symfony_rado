<?php

/* BmiCalculatorBundle:Default:result.html.twig */
class __TwigTemplate_32a4ab80b52a2a2826ed1c0943b6a65035d3d90597c2f6d9bffdbebbce9df81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BmiCalculatorBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BmiCalculatorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<h3>Entered Values</h3>
Weight: <b>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["User_weight"]) ? $context["User_weight"] : $this->getContext($context, "User_weight")), "html", null, true);
        echo "</b> kg.
<br>
Height: <b>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["User_height"]) ? $context["User_height"] : $this->getContext($context, "User_height")), "html", null, true);
        echo "</b> m.


<h3>Calculation Result</h3>
 BMI: <b>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["User_bmi"]) ? $context["User_bmi"] : $this->getContext($context, "User_bmi")), "html", null, true);
        echo "</b> kg/m2
 
 <br> <br>
 <input type=\"button\" onClick=\"document.location='";
        // line 19
        echo $this->env->getExtension('routing')->getPath("bmi_calculator_homepage", array());
        echo "'\" style=\"width: 390px; \" value=\"ENTER NEW VALUES\">

";
    }

    public function getTemplateName()
    {
        return "BmiCalculatorBundle:Default:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  52 => 16,  45 => 12,  40 => 10,  34 => 7,  31 => 6,  28 => 5,);
    }
}
