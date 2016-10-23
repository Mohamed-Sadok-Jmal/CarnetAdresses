<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_d9741bc2bf9dada304da36d57a39f99dbf667acac9098cab7716239073e7fabd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_fac4254b5b1122b0fbb75f72ee02079c15735d63d4c55387ff26bc7bfcc54338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac4254b5b1122b0fbb75f72ee02079c15735d63d4c55387ff26bc7bfcc54338->enter($__internal_fac4254b5b1122b0fbb75f72ee02079c15735d63d4c55387ff26bc7bfcc54338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fac4254b5b1122b0fbb75f72ee02079c15735d63d4c55387ff26bc7bfcc54338->leave($__internal_fac4254b5b1122b0fbb75f72ee02079c15735d63d4c55387ff26bc7bfcc54338_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_add81336d18952a091bc3c68483d6b716eb7ae362d471a22c892d8e2090ab31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add81336d18952a091bc3c68483d6b716eb7ae362d471a22c892d8e2090ab31a->enter($__internal_add81336d18952a091bc3c68483d6b716eb7ae362d471a22c892d8e2090ab31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_add81336d18952a091bc3c68483d6b716eb7ae362d471a22c892d8e2090ab31a->leave($__internal_add81336d18952a091bc3c68483d6b716eb7ae362d471a22c892d8e2090ab31a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
