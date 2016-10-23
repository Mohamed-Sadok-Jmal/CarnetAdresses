<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4269d56ddbcea62b7a64ab37909e467923849bb112a75bbb4a8e44cc55a3972b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_481621921ac5c33b253d283099cfe8e65ced9c8b7d20788889a9a3bf2a1259ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481621921ac5c33b253d283099cfe8e65ced9c8b7d20788889a9a3bf2a1259ca->enter($__internal_481621921ac5c33b253d283099cfe8e65ced9c8b7d20788889a9a3bf2a1259ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_481621921ac5c33b253d283099cfe8e65ced9c8b7d20788889a9a3bf2a1259ca->leave($__internal_481621921ac5c33b253d283099cfe8e65ced9c8b7d20788889a9a3bf2a1259ca_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5894f499cfdac375d8a59e63ec62e7e6c74b9b1960e8d6e4956e7fcd164047ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5894f499cfdac375d8a59e63ec62e7e6c74b9b1960e8d6e4956e7fcd164047ed->enter($__internal_5894f499cfdac375d8a59e63ec62e7e6c74b9b1960e8d6e4956e7fcd164047ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5894f499cfdac375d8a59e63ec62e7e6c74b9b1960e8d6e4956e7fcd164047ed->leave($__internal_5894f499cfdac375d8a59e63ec62e7e6c74b9b1960e8d6e4956e7fcd164047ed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
