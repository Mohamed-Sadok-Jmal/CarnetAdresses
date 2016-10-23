<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_ac5915b6105f33fe8ec84f4870f1d3c994a9c4f5248f6f50649b5204baab6623 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcb4cbed6c78537f66bb0301791ddbdba59bcc3105890dd908119501362cdfe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb4cbed6c78537f66bb0301791ddbdba59bcc3105890dd908119501362cdfe5->enter($__internal_bcb4cbed6c78537f66bb0301791ddbdba59bcc3105890dd908119501362cdfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb4cbed6c78537f66bb0301791ddbdba59bcc3105890dd908119501362cdfe5->leave($__internal_bcb4cbed6c78537f66bb0301791ddbdba59bcc3105890dd908119501362cdfe5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef4aaf9f24ac1cdc216a902f6ce19fb1e02ac95036b14f6f387673bd4c698c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4aaf9f24ac1cdc216a902f6ce19fb1e02ac95036b14f6f387673bd4c698c22->enter($__internal_ef4aaf9f24ac1cdc216a902f6ce19fb1e02ac95036b14f6f387673bd4c698c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ef4aaf9f24ac1cdc216a902f6ce19fb1e02ac95036b14f6f387673bd4c698c22->leave($__internal_ef4aaf9f24ac1cdc216a902f6ce19fb1e02ac95036b14f6f387673bd4c698c22_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
