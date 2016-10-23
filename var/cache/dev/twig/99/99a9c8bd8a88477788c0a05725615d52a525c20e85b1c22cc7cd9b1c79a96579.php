<?php

/* @AppartooPlatform/Contact/add.html.twig */
class __TwigTemplate_b418f3739692b5b1f5776202799e78ac2cc0f2f4e1a263de7f92c19081fbb286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppartooPlatformBundle::layout.html.twig", "@AppartooPlatform/Contact/add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppartooPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72a4ca4416467bcc4563bf06736e96da03312e1fab9d9791daee0662bd6b6505 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a4ca4416467bcc4563bf06736e96da03312e1fab9d9791daee0662bd6b6505->enter($__internal_72a4ca4416467bcc4563bf06736e96da03312e1fab9d9791daee0662bd6b6505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppartooPlatform/Contact/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72a4ca4416467bcc4563bf06736e96da03312e1fab9d9791daee0662bd6b6505->leave($__internal_72a4ca4416467bcc4563bf06736e96da03312e1fab9d9791daee0662bd6b6505_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ba80e544a5c443a544bed10d8932404d849c887eb7f21cefa113e0f275775ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba80e544a5c443a544bed10d8932404d849c887eb7f21cefa113e0f275775ad->enter($__internal_8ba80e544a5c443a544bed10d8932404d849c887eb7f21cefa113e0f275775ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<p class=\"bottom-btns\">
    <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
</p>

  <h2>Ajouter un contact</h2>

  ";
        // line 16
        echo twig_include($this->env, $context, "AppartooPlatformBundle:Contact:form.html.twig");
        echo "

  <p class=\"bottom-btns\">
    <a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
</p>

";
        
        $__internal_8ba80e544a5c443a544bed10d8932404d849c887eb7f21cefa113e0f275775ad->leave($__internal_8ba80e544a5c443a544bed10d8932404d849c887eb7f21cefa113e0f275775ad_prof);

    }

    public function getTemplateName()
    {
        return "@AppartooPlatform/Contact/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  55 => 16,  44 => 8,  40 => 6,  34 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/Appartoo/PlatformBundle/Resources/views/Contact/add.html.twig #}

{% extends \"AppartooPlatformBundle::layout.html.twig\" %}

{% block body %}

<p class=\"bottom-btns\">
    <a href=\"{{ path('appartoo_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
</p>

  <h2>Ajouter un contact</h2>

  {{ include(\"AppartooPlatformBundle:Contact:form.html.twig\") }}

  <p class=\"bottom-btns\">
    <a href=\"{{ path('appartoo_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
</p>

{% endblock %}";
    }
}
