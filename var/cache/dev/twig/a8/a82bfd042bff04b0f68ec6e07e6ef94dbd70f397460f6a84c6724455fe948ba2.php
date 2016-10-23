<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ff044fef7588657908ac88e526cf2cd0fe516cb72bd2d539ceedbe45a64e8a8b extends Twig_Template
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
        $__internal_d7c81d9a7d93023ac704ec1a86124fdac8260e4eab141de0dbec4b75cd817fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c81d9a7d93023ac704ec1a86124fdac8260e4eab141de0dbec4b75cd817fa4->enter($__internal_d7c81d9a7d93023ac704ec1a86124fdac8260e4eab141de0dbec4b75cd817fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d7c81d9a7d93023ac704ec1a86124fdac8260e4eab141de0dbec4b75cd817fa4->leave($__internal_d7c81d9a7d93023ac704ec1a86124fdac8260e4eab141de0dbec4b75cd817fa4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
