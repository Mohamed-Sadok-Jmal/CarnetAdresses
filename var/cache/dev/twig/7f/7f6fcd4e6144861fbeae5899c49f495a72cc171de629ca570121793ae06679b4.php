<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_1fc63a6d0a6dc030c5fd4446289fd659c1cc0174cf6e023c329fe07e720b2226 extends Twig_Template
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
        $__internal_8d802463cf92cd610f04cdde29c0ee838f2f2c026bdd2440689e9138d891ace2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d802463cf92cd610f04cdde29c0ee838f2f2c026bdd2440689e9138d891ace2->enter($__internal_8d802463cf92cd610f04cdde29c0ee838f2f2c026bdd2440689e9138d891ace2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8d802463cf92cd610f04cdde29c0ee838f2f2c026bdd2440689e9138d891ace2->leave($__internal_8d802463cf92cd610f04cdde29c0ee838f2f2c026bdd2440689e9138d891ace2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_07444edd5e20e7b60a166dddc4579b39f9502fd2c396cab685b6073166fefd91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07444edd5e20e7b60a166dddc4579b39f9502fd2c396cab685b6073166fefd91->enter($__internal_07444edd5e20e7b60a166dddc4579b39f9502fd2c396cab685b6073166fefd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_07444edd5e20e7b60a166dddc4579b39f9502fd2c396cab685b6073166fefd91->leave($__internal_07444edd5e20e7b60a166dddc4579b39f9502fd2c396cab685b6073166fefd91_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3bf09b8d69ac70dcf244a4a0f38a0cd81eb0461bbc4db65518c015876900e734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf09b8d69ac70dcf244a4a0f38a0cd81eb0461bbc4db65518c015876900e734->enter($__internal_3bf09b8d69ac70dcf244a4a0f38a0cd81eb0461bbc4db65518c015876900e734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3bf09b8d69ac70dcf244a4a0f38a0cd81eb0461bbc4db65518c015876900e734->leave($__internal_3bf09b8d69ac70dcf244a4a0f38a0cd81eb0461bbc4db65518c015876900e734_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3defc2d9bf1ee1134a6543c0f8fdbc70e195e2a594fdb5e52c24967ca332af6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3defc2d9bf1ee1134a6543c0f8fdbc70e195e2a594fdb5e52c24967ca332af6b->enter($__internal_3defc2d9bf1ee1134a6543c0f8fdbc70e195e2a594fdb5e52c24967ca332af6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3defc2d9bf1ee1134a6543c0f8fdbc70e195e2a594fdb5e52c24967ca332af6b->leave($__internal_3defc2d9bf1ee1134a6543c0f8fdbc70e195e2a594fdb5e52c24967ca332af6b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
