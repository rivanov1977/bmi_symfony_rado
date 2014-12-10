<?php

/* BmiCalculatorBundle:Default:calculatorForm.html.twig */
class __TwigTemplate_a24103769cc5bfdc8e2489ed168fd7dbade110d7d9ebbd00ad34166dc9deeb79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "register_result"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 3
            echo "    
            ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["flashMessage"]);
            foreach ($context['_seq'] as $context["_key"] => $context["Mess"]) {
                // line 5
                echo "                ";
                echo twig_escape_filter($this->env, $context["Mess"], "html", null, true);
                echo "<br>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Mess'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<form id=\"registration_form\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("createuser", array());
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>

<script>
    
//\$('#registration_form').find('ul').each(function(){\$(this).hide();});

</script>";
    }

    public function getTemplateName()
    {
        return "BmiCalculatorBundle:Default:calculatorForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  49 => 9,  46 => 8,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
