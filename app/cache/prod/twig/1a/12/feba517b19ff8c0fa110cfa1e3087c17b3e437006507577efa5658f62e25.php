<?php

/* ::bmi.html.twig */
class __TwigTemplate_1a12feba517b19ff8c0fa110cfa1e3087c17b3e437006507577efa5658f62e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'additional_js_links' => array($this, 'block_additional_js_links'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/bmi.html.twig -->


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        
       
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
      
        
       
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.7.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bmi.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 20
        $this->displayBlock('additional_js_links', $context, $blocks);
        // line 21
        echo "
        
    </head>
    <body>
            <bodycontent id=\"bodycontent\">
                
                    ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "                     
                
            </bodycontent>
    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "BMI CALCULATOR -> Test Task By Rado";
    }

    // line 20
    public function block_additional_js_links($context, array $blocks = array())
    {
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::bmi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  81 => 20,  75 => 9,  67 => 28,  65 => 27,  57 => 21,  55 => 20,  50 => 18,  46 => 17,  39 => 13,  32 => 9,  22 => 1,);
    }
}
