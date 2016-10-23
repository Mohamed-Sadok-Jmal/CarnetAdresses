<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_1536b15b568800f2d96124072e10eb93a75ddc6534228204f4e60fb2d0c122ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_8fcc7da89d50e81b689a8fc0951f9725e23dd03df093c48e67b3dc342f1510d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcc7da89d50e81b689a8fc0951f9725e23dd03df093c48e67b3dc342f1510d1->enter($__internal_8fcc7da89d50e81b689a8fc0951f9725e23dd03df093c48e67b3dc342f1510d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fcc7da89d50e81b689a8fc0951f9725e23dd03df093c48e67b3dc342f1510d1->leave($__internal_8fcc7da89d50e81b689a8fc0951f9725e23dd03df093c48e67b3dc342f1510d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da570604c8d8e330b376d34232b47e1ab1290275f12c67f2cb25a4ae23e398c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da570604c8d8e330b376d34232b47e1ab1290275f12c67f2cb25a4ae23e398c1->enter($__internal_da570604c8d8e330b376d34232b47e1ab1290275f12c67f2cb25a4ae23e398c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_da570604c8d8e330b376d34232b47e1ab1290275f12c67f2cb25a4ae23e398c1->leave($__internal_da570604c8d8e330b376d34232b47e1ab1290275f12c67f2cb25a4ae23e398c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
