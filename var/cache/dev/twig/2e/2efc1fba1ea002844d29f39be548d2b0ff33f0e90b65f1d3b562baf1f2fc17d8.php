<?php

/* AppartooPlatformBundle:Contact:delete.html.twig */
class __TwigTemplate_188e2258a3e3a8d78938366757f86f16d33a885358d458a9d1ba06b4fcb5d6c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppartooPlatformBundle::layout.html.twig", "AppartooPlatformBundle:Contact:delete.html.twig", 3);
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
        $__internal_be800c5c1147fbf69cd7a42f3431b561c8906864ab46029ac3ad50e7978ce8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be800c5c1147fbf69cd7a42f3431b561c8906864ab46029ac3ad50e7978ce8dc->enter($__internal_be800c5c1147fbf69cd7a42f3431b561c8906864ab46029ac3ad50e7978ce8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppartooPlatformBundle:Contact:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be800c5c1147fbf69cd7a42f3431b561c8906864ab46029ac3ad50e7978ce8dc->leave($__internal_be800c5c1147fbf69cd7a42f3431b561c8906864ab46029ac3ad50e7978ce8dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c590b1096df83e01490751ef80a33a953d285ab4255b773b453024f804ebdf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c590b1096df83e01490751ef80a33a953d285ab4255b773b453024f804ebdf2->enter($__internal_7c590b1096df83e01490751ef80a33a953d285ab4255b773b453024f804ebdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer le contact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7c590b1096df83e01490751ef80a33a953d285ab4255b773b453024f804ebdf2->leave($__internal_7c590b1096df83e01490751ef80a33a953d285ab4255b773b453024f804ebdf2_prof);

    }

    // line 9
    public function block_appartooplatform_body($context, array $blocks = array())
    {
        $__internal_a5daead747f9bdc27945ea96626fd5c99554e4805a4739113e0526750820bc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5daead747f9bdc27945ea96626fd5c99554e4805a4739113e0526750820bc21->enter($__internal_a5daead747f9bdc27945ea96626fd5c99554e4805a4739113e0526750820bc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appartooplatform_body"));

        // line 10
        echo "
  <h2>Supprimer un contact</h2>

  <p>
    Etes-vous certain de vouloir supprimer le contact \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "email", array()), "html", null, true);
        echo "\" ?
  </p>

  <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_delete", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_view", array("id" => $this->getAttribute((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au contact
    </a>
    
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_a5daead747f9bdc27945ea96626fd5c99554e4805a4739113e0526750820bc21->leave($__internal_a5daead747f9bdc27945ea96626fd5c99554e4805a4739113e0526750820bc21_prof);

    }

    public function getTemplateName()
    {
        return "AppartooPlatformBundle:Contact:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  73 => 18,  69 => 17,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/Appartoo/PlatformBundle/Resources/views/Contact/delete.html.twig #}

{% extends \"AppartooPlatformBundle::layout.html.twig\" %}

{% block title %}
  Supprimer le contact - {{ parent() }}
{% endblock %}

{% block appartooplatform_body %}

  <h2>Supprimer un contact</h2>

  <p>
    Etes-vous certain de vouloir supprimer le contact \"{{ contact.email }}\" ?
  </p>

  <form action=\"{{ path('appartoo_platform_delete', {'id': contact.id}) }}\" method=\"post\">
    <a href=\"{{ path('appartoo_platform_view', {'id': contact.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour au contact
    </a>
    
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {{ form_rest(form) }}
  </form>

{% endblock %}";
    }
}
