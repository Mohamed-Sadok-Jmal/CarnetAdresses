<?php

/* @AppartooPlatform/layout.html.twig */
class __TwigTemplate_7ce3f41822013754ed2442644efd0fb3b17fab86b75d3d65b944cb1167c523cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "@AppartooPlatform/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'appartooplatform_body' => array($this, 'block_appartooplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d406026170bfaa5cbe392a3310a2307d642f0c3f0c8cc508aaf1c8db0743929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d406026170bfaa5cbe392a3310a2307d642f0c3f0c8cc508aaf1c8db0743929->enter($__internal_9d406026170bfaa5cbe392a3310a2307d642f0c3f0c8cc508aaf1c8db0743929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppartooPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d406026170bfaa5cbe392a3310a2307d642f0c3f0c8cc508aaf1c8db0743929->leave($__internal_9d406026170bfaa5cbe392a3310a2307d642f0c3f0c8cc508aaf1c8db0743929_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f7649dc4d752b6e01eb7af917f4c675be5a28d6e30d9a38e4a949e556cd3dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7649dc4d752b6e01eb7af917f4c675be5a28d6e30d9a38e4a949e556cd3dd0->enter($__internal_8f7649dc4d752b6e01eb7af917f4c675be5a28d6e30d9a38e4a949e556cd3dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Contacts - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8f7649dc4d752b6e01eb7af917f4c675be5a28d6e30d9a38e4a949e556cd3dd0->leave($__internal_8f7649dc4d752b6e01eb7af917f4c675be5a28d6e30d9a38e4a949e556cd3dd0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb056fa0521700132a7c6b86b071decda80ea6c0035fd6a5b1846634f1e1d2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb056fa0521700132a7c6b86b071decda80ea6c0035fd6a5b1846634f1e1d2a0->enter($__internal_bb056fa0521700132a7c6b86b071decda80ea6c0035fd6a5b1846634f1e1d2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_add");
        echo "\" class=\"btn btn-primary btn-flat\">Ajouter un contact</a>

  <hr>

  ";
        // line 16
        echo "  ";
        $this->displayBlock('appartooplatform_body', $context, $blocks);
        // line 18
        echo "
";
        
        $__internal_bb056fa0521700132a7c6b86b071decda80ea6c0035fd6a5b1846634f1e1d2a0->leave($__internal_bb056fa0521700132a7c6b86b071decda80ea6c0035fd6a5b1846634f1e1d2a0_prof);

    }

    // line 16
    public function block_appartooplatform_body($context, array $blocks = array())
    {
        $__internal_27be0fa08114b57d7a9c33047a3d3d58c82ca72313725036d78b36d6810e8edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27be0fa08114b57d7a9c33047a3d3d58c82ca72313725036d78b36d6810e8edc->enter($__internal_27be0fa08114b57d7a9c33047a3d3d58c82ca72313725036d78b36d6810e8edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appartooplatform_body"));

        // line 17
        echo "  ";
        
        $__internal_27be0fa08114b57d7a9c33047a3d3d58c82ca72313725036d78b36d6810e8edc->leave($__internal_27be0fa08114b57d7a9c33047a3d3d58c82ca72313725036d78b36d6810e8edc_prof);

    }

    public function getTemplateName()
    {
        return "@AppartooPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  79 => 16,  71 => 18,  68 => 16,  61 => 11,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/Appartoo/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}

{% block title %}
  Contacts - {{ parent() }}
{% endblock %}

{% block body %}

  <a href=\"{{ path('appartoo_platform_add') }}\" class=\"btn btn-primary btn-flat\">Ajouter un contact</a>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block appartooplatform_body %}
  {% endblock %}

{% endblock %}";
    }
}
