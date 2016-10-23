<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_489fece3d7f91a7b9b86e6aeacc9bb1b2fb738df6bfa9d01ebf3747b75c9b205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_1e9dbac73511d326a4636915f81d452000118e8089dcf368c8bbc13e769ac0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9dbac73511d326a4636915f81d452000118e8089dcf368c8bbc13e769ac0a8->enter($__internal_1e9dbac73511d326a4636915f81d452000118e8089dcf368c8bbc13e769ac0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9dbac73511d326a4636915f81d452000118e8089dcf368c8bbc13e769ac0a8->leave($__internal_1e9dbac73511d326a4636915f81d452000118e8089dcf368c8bbc13e769ac0a8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e39c501c9d9c530aed31e78f75e280aba59a0e6dd7ca7131ffbf74be57b94cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e39c501c9d9c530aed31e78f75e280aba59a0e6dd7ca7131ffbf74be57b94cd->enter($__internal_6e39c501c9d9c530aed31e78f75e280aba59a0e6dd7ca7131ffbf74be57b94cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6e39c501c9d9c530aed31e78f75e280aba59a0e6dd7ca7131ffbf74be57b94cd->leave($__internal_6e39c501c9d9c530aed31e78f75e280aba59a0e6dd7ca7131ffbf74be57b94cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
