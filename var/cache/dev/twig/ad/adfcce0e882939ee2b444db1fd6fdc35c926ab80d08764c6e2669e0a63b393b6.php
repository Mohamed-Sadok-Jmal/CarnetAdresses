<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a70106523f3eea71a6545ee1f4b8cf83f2988d92509f66f727046b32bdffa6ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b2c2b3e0d484321a97db24971c0d4841f34edca4614353f4601a66be5a456c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c2b3e0d484321a97db24971c0d4841f34edca4614353f4601a66be5a456c42->enter($__internal_b2c2b3e0d484321a97db24971c0d4841f34edca4614353f4601a66be5a456c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2c2b3e0d484321a97db24971c0d4841f34edca4614353f4601a66be5a456c42->leave($__internal_b2c2b3e0d484321a97db24971c0d4841f34edca4614353f4601a66be5a456c42_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57e3192526c3847134852c4df47e5ec4083204c875cc07c211d2a89e7ecc4f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e3192526c3847134852c4df47e5ec4083204c875cc07c211d2a89e7ecc4f8d->enter($__internal_57e3192526c3847134852c4df47e5ec4083204c875cc07c211d2a89e7ecc4f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_57e3192526c3847134852c4df47e5ec4083204c875cc07c211d2a89e7ecc4f8d->leave($__internal_57e3192526c3847134852c4df47e5ec4083204c875cc07c211d2a89e7ecc4f8d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
