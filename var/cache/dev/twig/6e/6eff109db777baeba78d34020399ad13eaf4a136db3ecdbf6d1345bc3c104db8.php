<?php

/* AppartooPlatformBundle:Contact:edit.html.twig */
class __TwigTemplate_92d46c0a5c391a73fb4ecb20dee1c274075f94a40e0fa7ce5f42a16ca9e51a18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppartooPlatformBundle::layout.html.twig", "AppartooPlatformBundle:Contact:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'appartooplatform_body' => array($this, 'block_appartooplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppartooPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_adbc83e4fbc82480471a50beeb68a23742de0f9c7d851dc16d0417eb699061ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adbc83e4fbc82480471a50beeb68a23742de0f9c7d851dc16d0417eb699061ce->enter($__internal_adbc83e4fbc82480471a50beeb68a23742de0f9c7d851dc16d0417eb699061ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppartooPlatformBundle:Contact:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adbc83e4fbc82480471a50beeb68a23742de0f9c7d851dc16d0417eb699061ce->leave($__internal_adbc83e4fbc82480471a50beeb68a23742de0f9c7d851dc16d0417eb699061ce_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce1758930e8e5260ad4d22e07693a249c14f61ac84405f4bf7136b0871e52cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1758930e8e5260ad4d22e07693a249c14f61ac84405f4bf7136b0871e52cd1->enter($__internal_ce1758930e8e5260ad4d22e07693a249c14f61ac84405f4bf7136b0871e52cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un contact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ce1758930e8e5260ad4d22e07693a249c14f61ac84405f4bf7136b0871e52cd1->leave($__internal_ce1758930e8e5260ad4d22e07693a249c14f61ac84405f4bf7136b0871e52cd1_prof);

    }

    // line 9
    public function block_appartooplatform_body($context, array $blocks = array())
    {
        $__internal_7ee68d7bc919f121b2625485aa1a59a43ec2d2ddeee74f738a0a099959250788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee68d7bc919f121b2625485aa1a59a43ec2d2ddeee74f738a0a099959250788->enter($__internal_7ee68d7bc919f121b2625485aa1a59a43ec2d2ddeee74f738a0a099959250788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appartooplatform_body"));

        // line 10
        echo "
  <h2>Modifier un contact</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "AppartooPlatformBundle:Contact:form.html.twig");
        echo "


  <p>
    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_view", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au contact
    </a>
  </p>

";
        
        $__internal_7ee68d7bc919f121b2625485aa1a59a43ec2d2ddeee74f738a0a099959250788->leave($__internal_7ee68d7bc919f121b2625485aa1a59a43ec2d2ddeee74f738a0a099959250788_prof);

    }

    public function getTemplateName()
    {
        return "AppartooPlatformBundle:Contact:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 17,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/Appartoo/PlatformBundle/Resources/views/Contact/edit.html.twig #}

{% extends \"AppartooPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier un contact - {{ parent() }}
{% endblock %}

{% block appartooplatform_body %}

  <h2>Modifier un contact</h2>

  {{ include(\"AppartooPlatformBundle:Contact:form.html.twig\") }}


  <p>
    <a href=\"{{ path('appartoo_platform_view', {'id': contact.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au contact
    </a>
  </p>

{% endblock %}";
    }
}
