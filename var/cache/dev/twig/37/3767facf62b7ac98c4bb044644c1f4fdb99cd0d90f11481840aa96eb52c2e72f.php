<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f41be4d4bde48b2097082c4eba15864af81f5fd88ba199630c02d3d6c78e68b4 extends Twig_Template
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
        $__internal_66ea185da69d81597a71d975576028485e256e1d656822bfcccfde3d3bb3a6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ea185da69d81597a71d975576028485e256e1d656822bfcccfde3d3bb3a6d7->enter($__internal_66ea185da69d81597a71d975576028485e256e1d656822bfcccfde3d3bb3a6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_66ea185da69d81597a71d975576028485e256e1d656822bfcccfde3d3bb3a6d7->leave($__internal_66ea185da69d81597a71d975576028485e256e1d656822bfcccfde3d3bb3a6d7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
