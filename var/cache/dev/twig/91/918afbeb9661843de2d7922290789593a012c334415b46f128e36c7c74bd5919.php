<?php

/* @AppartooPlatform/Contact/delete.html.twig */
class __TwigTemplate_b0519cb9fe295b5722533cec0c9963294b0e618e21f53ee363cc95699a482f12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppartooPlatformBundle::layout.html.twig", "@AppartooPlatform/Contact/delete.html.twig", 3);
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
        $__internal_a294cbd1391ab27a67e09bdfc96d0cc4622c76f16536311dfdf5559d79878e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a294cbd1391ab27a67e09bdfc96d0cc4622c76f16536311dfdf5559d79878e01->enter($__internal_a294cbd1391ab27a67e09bdfc96d0cc4622c76f16536311dfdf5559d79878e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppartooPlatform/Contact/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a294cbd1391ab27a67e09bdfc96d0cc4622c76f16536311dfdf5559d79878e01->leave($__internal_a294cbd1391ab27a67e09bdfc96d0cc4622c76f16536311dfdf5559d79878e01_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34e8f2e79da92c27381469ec3bc63afc388075be29b29d0916c37151f470547a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e8f2e79da92c27381469ec3bc63afc388075be29b29d0916c37151f470547a->enter($__internal_34e8f2e79da92c27381469ec3bc63afc388075be29b29d0916c37151f470547a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer le contact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_34e8f2e79da92c27381469ec3bc63afc388075be29b29d0916c37151f470547a->leave($__internal_34e8f2e79da92c27381469ec3bc63afc388075be29b29d0916c37151f470547a_prof);

    }

    // line 9
    public function block_appartooplatform_body($context, array $blocks = array())
    {
        $__internal_9980e1b63557a57cb47a5fee5d269e282f52761beb748f93ee2c266eb930fd84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9980e1b63557a57cb47a5fee5d269e282f52761beb748f93ee2c266eb930fd84->enter($__internal_9980e1b63557a57cb47a5fee5d269e282f52761beb748f93ee2c266eb930fd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appartooplatform_body"));

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
        
        $__internal_9980e1b63557a57cb47a5fee5d269e282f52761beb748f93ee2c266eb930fd84->leave($__internal_9980e1b63557a57cb47a5fee5d269e282f52761beb748f93ee2c266eb930fd84_prof);

    }

    public function getTemplateName()
    {
        return "@AppartooPlatform/Contact/delete.html.twig";
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
