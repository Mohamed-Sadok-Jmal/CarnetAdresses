<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_cd6ed6f22381dd28034b9bb0d9701bb709f703078f4368d8abd6acd9288382f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_b33fe3b1e76a5e87e783e2fab5eef31c406c366600df4cbfc43e173bab504c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33fe3b1e76a5e87e783e2fab5eef31c406c366600df4cbfc43e173bab504c28->enter($__internal_b33fe3b1e76a5e87e783e2fab5eef31c406c366600df4cbfc43e173bab504c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b33fe3b1e76a5e87e783e2fab5eef31c406c366600df4cbfc43e173bab504c28->leave($__internal_b33fe3b1e76a5e87e783e2fab5eef31c406c366600df4cbfc43e173bab504c28_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_985021d85940609aef0a32c8fec73c44805a51060c555fce8d5625c472d00f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985021d85940609aef0a32c8fec73c44805a51060c555fce8d5625c472d00f08->enter($__internal_985021d85940609aef0a32c8fec73c44805a51060c555fce8d5625c472d00f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_985021d85940609aef0a32c8fec73c44805a51060c555fce8d5625c472d00f08->leave($__internal_985021d85940609aef0a32c8fec73c44805a51060c555fce8d5625c472d00f08_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
