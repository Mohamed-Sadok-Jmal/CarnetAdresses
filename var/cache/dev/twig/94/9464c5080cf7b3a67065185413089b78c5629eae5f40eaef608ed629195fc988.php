<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_953f090d2706f563dbe5db9fb5df4c41ab7807fdf42c763d22657d856117c8ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c847f2972b511f82e8375bd700b3f5e2008d1ed14471011d444769097302eb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c847f2972b511f82e8375bd700b3f5e2008d1ed14471011d444769097302eb24->enter($__internal_c847f2972b511f82e8375bd700b3f5e2008d1ed14471011d444769097302eb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c847f2972b511f82e8375bd700b3f5e2008d1ed14471011d444769097302eb24->leave($__internal_c847f2972b511f82e8375bd700b3f5e2008d1ed14471011d444769097302eb24_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7c1b7295814d34fe116b75d0aa9d41358682639146278042e18d5e1d82ddcb18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c1b7295814d34fe116b75d0aa9d41358682639146278042e18d5e1d82ddcb18->enter($__internal_7c1b7295814d34fe116b75d0aa9d41358682639146278042e18d5e1d82ddcb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_7c1b7295814d34fe116b75d0aa9d41358682639146278042e18d5e1d82ddcb18->leave($__internal_7c1b7295814d34fe116b75d0aa9d41358682639146278042e18d5e1d82ddcb18_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cd1a7e1b77827e101463925a7907642f173cc78b098573afa230c9f9e0d87831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1a7e1b77827e101463925a7907642f173cc78b098573afa230c9f9e0d87831->enter($__internal_cd1a7e1b77827e101463925a7907642f173cc78b098573afa230c9f9e0d87831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cd1a7e1b77827e101463925a7907642f173cc78b098573afa230c9f9e0d87831->leave($__internal_cd1a7e1b77827e101463925a7907642f173cc78b098573afa230c9f9e0d87831_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0b0f274a2ebf90db14efab125ff73917da80e86fd9a8ef4f3fe8edb4ba5695be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0f274a2ebf90db14efab125ff73917da80e86fd9a8ef4f3fe8edb4ba5695be->enter($__internal_0b0f274a2ebf90db14efab125ff73917da80e86fd9a8ef4f3fe8edb4ba5695be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0b0f274a2ebf90db14efab125ff73917da80e86fd9a8ef4f3fe8edb4ba5695be->leave($__internal_0b0f274a2ebf90db14efab125ff73917da80e86fd9a8ef4f3fe8edb4ba5695be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
