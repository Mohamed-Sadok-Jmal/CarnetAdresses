<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f2067d04fc6fb5741e92c0ec261a40478a709d8c57f154da5dc24e1613562ab7 extends Twig_Template
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
        $__internal_18b1834652481c157da0740ae7b08cf79f9794c1fb514c61fb547f2c534d9dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b1834652481c157da0740ae7b08cf79f9794c1fb514c61fb547f2c534d9dfc->enter($__internal_18b1834652481c157da0740ae7b08cf79f9794c1fb514c61fb547f2c534d9dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_18b1834652481c157da0740ae7b08cf79f9794c1fb514c61fb547f2c534d9dfc->leave($__internal_18b1834652481c157da0740ae7b08cf79f9794c1fb514c61fb547f2c534d9dfc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
