<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_3965cee8bce1dad152d393d4003bdda24bb863c869da350fa61e8aef19bd9794 extends Twig_Template
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
        $__internal_c708a9027dfb6b6211d98b4d1625b99e58bfdb62bf28fecc09a8fc8b3b7599d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c708a9027dfb6b6211d98b4d1625b99e58bfdb62bf28fecc09a8fc8b3b7599d1->enter($__internal_c708a9027dfb6b6211d98b4d1625b99e58bfdb62bf28fecc09a8fc8b3b7599d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c708a9027dfb6b6211d98b4d1625b99e58bfdb62bf28fecc09a8fc8b3b7599d1->leave($__internal_c708a9027dfb6b6211d98b4d1625b99e58bfdb62bf28fecc09a8fc8b3b7599d1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7e01025f016485087d26102267c03ae0846c2ef5859bb347f5308cbfed6b863b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e01025f016485087d26102267c03ae0846c2ef5859bb347f5308cbfed6b863b->enter($__internal_7e01025f016485087d26102267c03ae0846c2ef5859bb347f5308cbfed6b863b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7e01025f016485087d26102267c03ae0846c2ef5859bb347f5308cbfed6b863b->leave($__internal_7e01025f016485087d26102267c03ae0846c2ef5859bb347f5308cbfed6b863b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_36ac5900bd10bc79ee83ab9f922e724ccb4cd8232ed6a525ef95d0520a0bc43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ac5900bd10bc79ee83ab9f922e724ccb4cd8232ed6a525ef95d0520a0bc43c->enter($__internal_36ac5900bd10bc79ee83ab9f922e724ccb4cd8232ed6a525ef95d0520a0bc43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_36ac5900bd10bc79ee83ab9f922e724ccb4cd8232ed6a525ef95d0520a0bc43c->leave($__internal_36ac5900bd10bc79ee83ab9f922e724ccb4cd8232ed6a525ef95d0520a0bc43c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_17ed74f7cfb3b576877ff68fc4c8c6fad558112089433fdf586205e6c03897ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ed74f7cfb3b576877ff68fc4c8c6fad558112089433fdf586205e6c03897ec->enter($__internal_17ed74f7cfb3b576877ff68fc4c8c6fad558112089433fdf586205e6c03897ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_17ed74f7cfb3b576877ff68fc4c8c6fad558112089433fdf586205e6c03897ec->leave($__internal_17ed74f7cfb3b576877ff68fc4c8c6fad558112089433fdf586205e6c03897ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
