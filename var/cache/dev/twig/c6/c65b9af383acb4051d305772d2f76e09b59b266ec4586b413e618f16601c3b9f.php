<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_e58316261ae62c568b409fca8648aba8343a18ad13861788d5a5dae09a934e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_240cb2f49ba2438e30898fee78108a98b5aceda6fc0c88a39939593a08531c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240cb2f49ba2438e30898fee78108a98b5aceda6fc0c88a39939593a08531c16->enter($__internal_240cb2f49ba2438e30898fee78108a98b5aceda6fc0c88a39939593a08531c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_240cb2f49ba2438e30898fee78108a98b5aceda6fc0c88a39939593a08531c16->leave($__internal_240cb2f49ba2438e30898fee78108a98b5aceda6fc0c88a39939593a08531c16_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5588a2cc70e32e85b20e5bb0c98e32020f6adbe03f27f4ff97c9678a86310bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5588a2cc70e32e85b20e5bb0c98e32020f6adbe03f27f4ff97c9678a86310bf2->enter($__internal_5588a2cc70e32e85b20e5bb0c98e32020f6adbe03f27f4ff97c9678a86310bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5588a2cc70e32e85b20e5bb0c98e32020f6adbe03f27f4ff97c9678a86310bf2->leave($__internal_5588a2cc70e32e85b20e5bb0c98e32020f6adbe03f27f4ff97c9678a86310bf2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
