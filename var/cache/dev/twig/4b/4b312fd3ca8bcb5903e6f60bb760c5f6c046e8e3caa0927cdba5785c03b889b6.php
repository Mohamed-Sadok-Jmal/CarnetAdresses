<?php

/* @AppartooPlatform/Contact/edit.html.twig */
class __TwigTemplate_b5f56157e1bc6ab3f76cdc2fd594454e9fe665275029a78a43648f5cbe72b97f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppartooPlatformBundle::layout.html.twig", "@AppartooPlatform/Contact/edit.html.twig", 3);
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
        $__internal_0cda7892479c61dea19e05c88a29810f1b019f4fd006fe07d3b237b2e0e59c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cda7892479c61dea19e05c88a29810f1b019f4fd006fe07d3b237b2e0e59c65->enter($__internal_0cda7892479c61dea19e05c88a29810f1b019f4fd006fe07d3b237b2e0e59c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppartooPlatform/Contact/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cda7892479c61dea19e05c88a29810f1b019f4fd006fe07d3b237b2e0e59c65->leave($__internal_0cda7892479c61dea19e05c88a29810f1b019f4fd006fe07d3b237b2e0e59c65_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c88735ea60e82d401f7868d01df65c8ebe1fde961ea9cd8df311f1e0cfdfa35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c88735ea60e82d401f7868d01df65c8ebe1fde961ea9cd8df311f1e0cfdfa35->enter($__internal_3c88735ea60e82d401f7868d01df65c8ebe1fde961ea9cd8df311f1e0cfdfa35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier un contact - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3c88735ea60e82d401f7868d01df65c8ebe1fde961ea9cd8df311f1e0cfdfa35->leave($__internal_3c88735ea60e82d401f7868d01df65c8ebe1fde961ea9cd8df311f1e0cfdfa35_prof);

    }

    // line 9
    public function block_appartooplatform_body($context, array $blocks = array())
    {
        $__internal_533d3dd24963377ff99b7d5c2d26b0a4a42d29c1be614022cb52b906dbd9a0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533d3dd24963377ff99b7d5c2d26b0a4a42d29c1be614022cb52b906dbd9a0fa->enter($__internal_533d3dd24963377ff99b7d5c2d26b0a4a42d29c1be614022cb52b906dbd9a0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appartooplatform_body"));

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
        
        $__internal_533d3dd24963377ff99b7d5c2d26b0a4a42d29c1be614022cb52b906dbd9a0fa->leave($__internal_533d3dd24963377ff99b7d5c2d26b0a4a42d29c1be614022cb52b906dbd9a0fa_prof);

    }

    public function getTemplateName()
    {
        return "@AppartooPlatform/Contact/edit.html.twig";
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
