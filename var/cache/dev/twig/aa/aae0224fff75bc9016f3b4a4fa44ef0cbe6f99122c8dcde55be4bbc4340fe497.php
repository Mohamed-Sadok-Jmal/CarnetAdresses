<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6561dcd509a1d0d9806f8faa4ac8ac84326855fa30ab9c536e23604cc91729d2 extends Twig_Template
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
        $__internal_927d27958301656ebc62e7809cc9dc6bfb84af76b624fa84fa8d2e2254e44966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927d27958301656ebc62e7809cc9dc6bfb84af76b624fa84fa8d2e2254e44966->enter($__internal_927d27958301656ebc62e7809cc9dc6bfb84af76b624fa84fa8d2e2254e44966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_927d27958301656ebc62e7809cc9dc6bfb84af76b624fa84fa8d2e2254e44966->leave($__internal_927d27958301656ebc62e7809cc9dc6bfb84af76b624fa84fa8d2e2254e44966_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bb54beef22a40b98c275f00cd750f1e5eec75a431462e671d8f8a84ba91656d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb54beef22a40b98c275f00cd750f1e5eec75a431462e671d8f8a84ba91656d->enter($__internal_3bb54beef22a40b98c275f00cd750f1e5eec75a431462e671d8f8a84ba91656d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3bb54beef22a40b98c275f00cd750f1e5eec75a431462e671d8f8a84ba91656d->leave($__internal_3bb54beef22a40b98c275f00cd750f1e5eec75a431462e671d8f8a84ba91656d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
