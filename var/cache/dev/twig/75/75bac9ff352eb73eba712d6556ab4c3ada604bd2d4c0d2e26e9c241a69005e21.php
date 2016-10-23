<?php

/* AppartooPlatformBundle::layout.html.twig */
class __TwigTemplate_9e0f4b0c7a5c22a5d4d5c030a2ea15677c00499963b27b676f3bc8ccc7e3cc89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppartooPlatformBundle::layout.html.twig", 3);
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
        $__internal_e0dbd81f421d2f74dce9ef3ae0806475933609ef1e652118c41e1ca141dc5a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0dbd81f421d2f74dce9ef3ae0806475933609ef1e652118c41e1ca141dc5a84->enter($__internal_e0dbd81f421d2f74dce9ef3ae0806475933609ef1e652118c41e1ca141dc5a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppartooPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0dbd81f421d2f74dce9ef3ae0806475933609ef1e652118c41e1ca141dc5a84->leave($__internal_e0dbd81f421d2f74dce9ef3ae0806475933609ef1e652118c41e1ca141dc5a84_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5978b8c789ae3f42dc9d26ab3fb9a17110a6e988e78169e3f516033e2cd0b5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5978b8c789ae3f42dc9d26ab3fb9a17110a6e988e78169e3f516033e2cd0b5de->enter($__internal_5978b8c789ae3f42dc9d26ab3fb9a17110a6e988e78169e3f516033e2cd0b5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Contacts - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5978b8c789ae3f42dc9d26ab3fb9a17110a6e988e78169e3f516033e2cd0b5de->leave($__internal_5978b8c789ae3f42dc9d26ab3fb9a17110a6e988e78169e3f516033e2cd0b5de_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bfe7b812e8c128c417c8e5768940d9a44c0b03c4cfd60f6043793db5cfda335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfe7b812e8c128c417c8e5768940d9a44c0b03c4cfd60f6043793db5cfda335->enter($__internal_7bfe7b812e8c128c417c8e5768940d9a44c0b03c4cfd60f6043793db5cfda335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7bfe7b812e8c128c417c8e5768940d9a44c0b03c4cfd60f6043793db5cfda335->leave($__internal_7bfe7b812e8c128c417c8e5768940d9a44c0b03c4cfd60f6043793db5cfda335_prof);

    }

    // line 16
    public function block_appartooplatform_body($context, array $blocks = array())
    {
        $__internal_b1988fa335fe8f94704ba3e3e6ac7d84baa387a2a8abedcbe79afc487438228e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1988fa335fe8f94704ba3e3e6ac7d84baa387a2a8abedcbe79afc487438228e->enter($__internal_b1988fa335fe8f94704ba3e3e6ac7d84baa387a2a8abedcbe79afc487438228e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appartooplatform_body"));

        // line 17
        echo "  ";
        
        $__internal_b1988fa335fe8f94704ba3e3e6ac7d84baa387a2a8abedcbe79afc487438228e->leave($__internal_b1988fa335fe8f94704ba3e3e6ac7d84baa387a2a8abedcbe79afc487438228e_prof);

    }

    public function getTemplateName()
    {
        return "AppartooPlatformBundle::layout.html.twig";
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
