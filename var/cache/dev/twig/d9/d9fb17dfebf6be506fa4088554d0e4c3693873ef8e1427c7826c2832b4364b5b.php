<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b85a20a03843c4eb844082055a4786bd8e375df1678152097864a23c919f8dd6 extends Twig_Template
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
        $__internal_2ffd06e74a363796e6a3a88ca5e78752f4ba21d074c35c120c36d9af42561123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffd06e74a363796e6a3a88ca5e78752f4ba21d074c35c120c36d9af42561123->enter($__internal_2ffd06e74a363796e6a3a88ca5e78752f4ba21d074c35c120c36d9af42561123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_2ffd06e74a363796e6a3a88ca5e78752f4ba21d074c35c120c36d9af42561123->leave($__internal_2ffd06e74a363796e6a3a88ca5e78752f4ba21d074c35c120c36d9af42561123_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
