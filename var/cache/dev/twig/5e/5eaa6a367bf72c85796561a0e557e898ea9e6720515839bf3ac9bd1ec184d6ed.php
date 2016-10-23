<?php

/* @AppartooPlatform/Contact/view.html.twig */
class __TwigTemplate_1e7806821120797086e0f7a3e1bd41a4c34176dc65118a0088a6f894826f1819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppartooPlatformBundle::layout.html.twig", "@AppartooPlatform/Contact/view.html.twig", 3);
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
        $__internal_e826b8cab65e5fb0cbef2e6caa31a3ccafe4643d179a7903ff467ca3257a9084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e826b8cab65e5fb0cbef2e6caa31a3ccafe4643d179a7903ff467ca3257a9084->enter($__internal_e826b8cab65e5fb0cbef2e6caa31a3ccafe4643d179a7903ff467ca3257a9084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppartooPlatform/Contact/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e826b8cab65e5fb0cbef2e6caa31a3ccafe4643d179a7903ff467ca3257a9084->leave($__internal_e826b8cab65e5fb0cbef2e6caa31a3ccafe4643d179a7903ff467ca3257a9084_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_abb62dc5c7097554d52ea9258e46bd71d5fb1b54018c93353377e3004f4d35a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb62dc5c7097554d52ea9258e46bd71d5fb1b54018c93353377e3004f4d35a3->enter($__internal_abb62dc5c7097554d52ea9258e46bd71d5fb1b54018c93353377e3004f4d35a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_abb62dc5c7097554d52ea9258e46bd71d5fb1b54018c93353377e3004f4d35a3->leave($__internal_abb62dc5c7097554d52ea9258e46bd71d5fb1b54018c93353377e3004f4d35a3_prof);

    }

    // line 9
    public function block_appartooplatform_body($context, array $blocks = array())
    {
        $__internal_0a337c877690bfecfc658b28a4055c05a3fba9a63bc58458b699d92c3898db47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a337c877690bfecfc658b28a4055c05a3fba9a63bc58458b699d92c3898db47->enter($__internal_0a337c877690bfecfc658b28a4055c05a3fba9a63bc58458b699d92c3898db47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appartooplatform_body"));

        // line 10
        echo "
  <div class=\"detail\"><i class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></i><strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "</strong></div>

  <div class=\"detail\"><i class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></i><strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "address", array()), "html", null, true);
        echo "</strong></div>
  
  <div class=\"detail\"><i class=\"glyphicon glyphicon-phone\" aria-hidden=\"true\"></i><strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "phone", array()), "html", null, true);
        echo "</strong></div>

  <div class=\"detail\"><i class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></i><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "website", array()), "html", null, true);
        echo "</strong></div>

  <p class=\"bottom-btns\">
    <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_edit", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier le contact
    </a>
    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_delete", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer le contact
    </a>
  </p>

";
        
        $__internal_0a337c877690bfecfc658b28a4055c05a3fba9a63bc58458b699d92c3898db47->leave($__internal_0a337c877690bfecfc658b28a4055c05a3fba9a63bc58458b699d92c3898db47_prof);

    }

    public function getTemplateName()
    {
        return "@AppartooPlatform/Contact/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  88 => 24,  81 => 20,  75 => 17,  70 => 15,  65 => 13,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/Appartoo/PlatformBundle/Resources/views/Contact/index.html.twig #}

{% extends \"AppartooPlatformBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block appartooplatform_body %}

  <div class=\"detail\"><i class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></i><strong>{{ contact.email }}</strong></div>

  <div class=\"detail\"><i class=\"glyphicon glyphicon-map-marker\" aria-hidden=\"true\"></i><strong>{{ contact.address }}</strong></div>
  
  <div class=\"detail\"><i class=\"glyphicon glyphicon-phone\" aria-hidden=\"true\"></i><strong>{{ contact.phone }}</strong></div>

  <div class=\"detail\"><i class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></i><strong>{{ contact.website }}</strong></div>

  <p class=\"bottom-btns\">
    <a href=\"{{ path('appartoo_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('appartoo_platform_edit', {'id': contact.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier le contact
    </a>
    <a href=\"{{ path('appartoo_platform_delete', {'id': contact.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer le contact
    </a>
  </p>

{% endblock %}";
    }
}
