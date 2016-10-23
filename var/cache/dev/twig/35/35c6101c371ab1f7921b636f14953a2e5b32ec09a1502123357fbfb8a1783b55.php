<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e747e21ccd0d231ea8f47d26f8d17b2a8c2872a4460ddaabb2817a152315e0e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_82e61c1fdc6290f258009848b82f98d5836ecf5b17618e39d04939abba79fde3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e61c1fdc6290f258009848b82f98d5836ecf5b17618e39d04939abba79fde3->enter($__internal_82e61c1fdc6290f258009848b82f98d5836ecf5b17618e39d04939abba79fde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82e61c1fdc6290f258009848b82f98d5836ecf5b17618e39d04939abba79fde3->leave($__internal_82e61c1fdc6290f258009848b82f98d5836ecf5b17618e39d04939abba79fde3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3dce837071be7f6db9f0bf8210f26447561aac7ec3821138385ffdb4e4840c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dce837071be7f6db9f0bf8210f26447561aac7ec3821138385ffdb4e4840c82->enter($__internal_3dce837071be7f6db9f0bf8210f26447561aac7ec3821138385ffdb4e4840c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_3dce837071be7f6db9f0bf8210f26447561aac7ec3821138385ffdb4e4840c82->leave($__internal_3dce837071be7f6db9f0bf8210f26447561aac7ec3821138385ffdb4e4840c82_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
";
    }
}
