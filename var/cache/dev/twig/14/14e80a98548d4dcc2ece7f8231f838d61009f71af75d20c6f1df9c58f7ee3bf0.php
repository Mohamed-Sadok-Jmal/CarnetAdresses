<?php

/* AppartooPlatformBundle:Contact:add.html.twig */
class __TwigTemplate_16e8d94eb34af6cd0a65877ff9fc9dd4742d364c3569eaf120aafdcea67ce8cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppartooPlatformBundle::layout.html.twig", "AppartooPlatformBundle:Contact:add.html.twig", 3);
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
        $__internal_de2c0e58544822360f5af88cb95cf975bc7ef318aa360fac78427fb6e24a6ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2c0e58544822360f5af88cb95cf975bc7ef318aa360fac78427fb6e24a6ee0->enter($__internal_de2c0e58544822360f5af88cb95cf975bc7ef318aa360fac78427fb6e24a6ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppartooPlatformBundle:Contact:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de2c0e58544822360f5af88cb95cf975bc7ef318aa360fac78427fb6e24a6ee0->leave($__internal_de2c0e58544822360f5af88cb95cf975bc7ef318aa360fac78427fb6e24a6ee0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_615ec0cba54c4d590aa5fd92438a1daa9138856e917ea6361bb944db40960b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_615ec0cba54c4d590aa5fd92438a1daa9138856e917ea6361bb944db40960b4b->enter($__internal_615ec0cba54c4d590aa5fd92438a1daa9138856e917ea6361bb944db40960b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_615ec0cba54c4d590aa5fd92438a1daa9138856e917ea6361bb944db40960b4b->leave($__internal_615ec0cba54c4d590aa5fd92438a1daa9138856e917ea6361bb944db40960b4b_prof);

    }

    public function getTemplateName()
    {
        return "AppartooPlatformBundle:Contact:add.html.twig";
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
