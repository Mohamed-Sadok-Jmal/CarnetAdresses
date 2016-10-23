<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a75ecb97f218a4baa9725a3b44f747d9c6fbcdf90c2d517c28e874852ebbc87e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_090d51b8362aa944059510b272b04800dd2562988a8b8720820842c981c61984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090d51b8362aa944059510b272b04800dd2562988a8b8720820842c981c61984->enter($__internal_090d51b8362aa944059510b272b04800dd2562988a8b8720820842c981c61984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_090d51b8362aa944059510b272b04800dd2562988a8b8720820842c981c61984->leave($__internal_090d51b8362aa944059510b272b04800dd2562988a8b8720820842c981c61984_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab0800d78bd3ff734bf86f5cab3bd487bdf39ba28be03b768cf66a73e53e8663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0800d78bd3ff734bf86f5cab3bd487bdf39ba28be03b768cf66a73e53e8663->enter($__internal_ab0800d78bd3ff734bf86f5cab3bd487bdf39ba28be03b768cf66a73e53e8663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_ab0800d78bd3ff734bf86f5cab3bd487bdf39ba28be03b768cf66a73e53e8663->leave($__internal_ab0800d78bd3ff734bf86f5cab3bd487bdf39ba28be03b768cf66a73e53e8663_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
