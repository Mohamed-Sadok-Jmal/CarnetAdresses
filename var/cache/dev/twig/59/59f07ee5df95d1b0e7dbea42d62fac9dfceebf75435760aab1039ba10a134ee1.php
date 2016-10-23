<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ff6ae6fcfb6b40943d01d6362760f8d4c1d9b55be94279c2e739669298fd5dd9 extends Twig_Template
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
        $__internal_0cc20437305022c7a7bb9f9b7653098b3c31be2cc7e6c66f99a4ffd7a20b34c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc20437305022c7a7bb9f9b7653098b3c31be2cc7e6c66f99a4ffd7a20b34c3->enter($__internal_0cc20437305022c7a7bb9f9b7653098b3c31be2cc7e6c66f99a4ffd7a20b34c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0cc20437305022c7a7bb9f9b7653098b3c31be2cc7e6c66f99a4ffd7a20b34c3->leave($__internal_0cc20437305022c7a7bb9f9b7653098b3c31be2cc7e6c66f99a4ffd7a20b34c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
