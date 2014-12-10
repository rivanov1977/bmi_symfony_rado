<?php

/* BmiCalculatorBundle::layout.html.twig */
class __TwigTemplate_8a6daf45c9a9fac3fb42020a3b8399d016cc871d659b311ae1cff12623123fda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::bmi.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::bmi.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<h2>BMI CALCULATOR > ";
        echo twig_escape_filter($this->env, (isset($context["page_name"]) ? $context["page_name"] : $this->getContext($context, "page_name")), "html", null, true);
        echo "</h2>
";
    }

    public function getTemplateName()
    {
        return "BmiCalculatorBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  28 => 7,);
    }
}
