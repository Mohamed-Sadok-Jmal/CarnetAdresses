<?php

/* AppartooPlatformBundle:Contact:view.html.twig */
class __TwigTemplate_21d086cf3c3dfbd3ba3f2e8c79faae28737ce0783cba45502ab38f44d785621f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppartooPlatformBundle::layout.html.twig", "AppartooPlatformBundle:Contact:view.html.twig", 3);
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
        $__internal_9dc928a90d79f7161bc9c73eecffd391e4348bc899ef6a6d0e3d573dd3095d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc928a90d79f7161bc9c73eecffd391e4348bc899ef6a6d0e3d573dd3095d56->enter($__internal_9dc928a90d79f7161bc9c73eecffd391e4348bc899ef6a6d0e3d573dd3095d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppartooPlatformBundle:Contact:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dc928a90d79f7161bc9c73eecffd391e4348bc899ef6a6d0e3d573dd3095d56->leave($__internal_9dc928a90d79f7161bc9c73eecffd391e4348bc899ef6a6d0e3d573dd3095d56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a76563ec40ed9d484ec74a9eead7ef762959a2012ded84824bb67f84ff7b0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a76563ec40ed9d484ec74a9eead7ef762959a2012ded84824bb67f84ff7b0a8->enter($__internal_3a76563ec40ed9d484ec74a9eead7ef762959a2012ded84824bb67f84ff7b0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3a76563ec40ed9d484ec74a9eead7ef762959a2012ded84824bb67f84ff7b0a8->leave($__internal_3a76563ec40ed9d484ec74a9eead7ef762959a2012ded84824bb67f84ff7b0a8_prof);

    }

    // line 9
    public function block_appartooplatform_body($context, array $blocks = array())
    {
        $__internal_90090d833b38cc8c88ecaa883605e7fe024ba74bca9f6ff867a581fb2cb1821c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90090d833b38cc8c88ecaa883605e7fe024ba74bca9f6ff867a581fb2cb1821c->enter($__internal_90090d833b38cc8c88ecaa883605e7fe024ba74bca9f6ff867a581fb2cb1821c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appartooplatform_body"));

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
        
        $__internal_90090d833b38cc8c88ecaa883605e7fe024ba74bca9f6ff867a581fb2cb1821c->leave($__internal_90090d833b38cc8c88ecaa883605e7fe024ba74bca9f6ff867a581fb2cb1821c_prof);

    }

    public function getTemplateName()
    {
        return "AppartooPlatformBundle:Contact:view.html.twig";
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
