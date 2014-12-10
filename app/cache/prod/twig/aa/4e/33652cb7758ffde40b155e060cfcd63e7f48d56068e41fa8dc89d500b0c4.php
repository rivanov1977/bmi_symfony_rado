<?php

/* BmiCalculatorBundle:Default:index.html.twig */
class __TwigTemplate_aa4e33652cb7758ffde40b155e060cfcd63e7f48d56068e41fa8dc89d500b0c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BmiCalculatorBundle::layout.html.twig");

        $this->blocks = array(
            'additional_js_links' => array($this, 'block_additional_js_links'),
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

    // line 4
    public function block_additional_js_links($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("additional_js_links", $context, $blocks);
        echo "
    <script>
        var calc_options_W = ";
        // line 7
        echo (isset($context["calc_options_W"]) ? $context["calc_options_W"] : $this->getContext($context, "calc_options_W"));
        echo ";
        var calc_options_H = ";
        // line 8
        echo (isset($context["calc_options_H"]) ? $context["calc_options_H"] : $this->getContext($context, "calc_options_H"));
        echo ";
        var calculation_weight_select = \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["calculation_weight_select"]) ? $context["calculation_weight_select"] : $this->getContext($context, "calculation_weight_select")), "html", null, true);
        echo "\";
        var calculation_height_select = \"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["calculation_height_select"]) ? $context["calculation_height_select"] : $this->getContext($context, "calculation_height_select")), "html", null, true);
        echo "\";
        var calculation_weight_vals = \"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["calculation_weight_vals"]) ? $context["calculation_weight_vals"] : $this->getContext($context, "calculation_weight_vals")), "html", null, true);
        echo "\";
        var calculation_weights = calculation_weight_vals.split(',');
        var calculation_height_vals = \"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["calculation_height_vals"]) ? $context["calculation_height_vals"] : $this->getContext($context, "calculation_height_vals")), "html", null, true);
        echo "\";
        var calculation_heights = calculation_height_vals.split(',');
        
        
        
        
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/calculator.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 26
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<span style=\"color: red;\">";
        // line 28
        echo (isset($context["calculation_message"]) ? $context["calculation_message"] : $this->getContext($context, "calculation_message"));
        echo "</span>

<form id=\"registration_form\" action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("bmi_calculator_result", array());
        echo "\" method=\"post\" class=\"blogger\">
    
    <h3 id=\"weight_select_label\"></h3>
    
    <div style=\"width: 400px; float:left;\">
        <select style=\"width: 390px; \" onChange=\"W_changed();\" name=\"weight_select\" id=\"weight_select\">
            <option class=\"weight_select_opt\" value=\"-1\"/>
        </select>
    </div>    
    
    <div id=\"W_val_holder\" style=\" border-left: solid 1px #ccc; width: 300px; float:left;\">
        <div style=\"margin-left: 15px; float:left;\" class=\"opt_val\"><input style=\"width: 50px; float:left;\" type=\"text\"><div class=\"sfx\" style=\"margin-left:5px; float:left;\">x</div></div>
    </div>
    
    <div style=\"clear: both;\"></div>
     
    <h3 id=\"height_select_label\"></h3>
    
    <div style=\"width: 400px; float:left;\">
        <select style=\"width: 390px; \" onChange=\"H_changed();\" name=\"height_select\" id=\"height_select\">
        </select>
    </div>    
    
    <div id=\"H_val_holder\" style=\" border-left: solid 1px #ccc; width: 300px; float:left;\">
    </div>
    
    <div style=\"clear: both;\"></div>
    
    <p>
        <input type=\"submit\" style=\"width: 390px; height: 40px; \" value=\"CALCULATE BMI\">
    </p>
</form>

";
    }

    public function getTemplateName()
    {
        return "BmiCalculatorBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 30,  86 => 28,  81 => 26,  78 => 25,  75 => 24,  69 => 20,  59 => 13,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 7,  32 => 5,  29 => 4,);
    }
}
