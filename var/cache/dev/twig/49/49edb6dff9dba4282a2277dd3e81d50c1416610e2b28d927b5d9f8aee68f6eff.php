<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6a8f8863032a4eae718280e1ae5ba93c3930119fab5cfa0d86b84c6de6fdb1b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_71ab59a33a426a169a47186db1b159ee2bfbb240c4e83da24d60f0df1376599e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ab59a33a426a169a47186db1b159ee2bfbb240c4e83da24d60f0df1376599e->enter($__internal_71ab59a33a426a169a47186db1b159ee2bfbb240c4e83da24d60f0df1376599e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71ab59a33a426a169a47186db1b159ee2bfbb240c4e83da24d60f0df1376599e->leave($__internal_71ab59a33a426a169a47186db1b159ee2bfbb240c4e83da24d60f0df1376599e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca67a9156bf5ea6315a656445116e79417dae29f8dcda4bb87e5b70fd4e77dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca67a9156bf5ea6315a656445116e79417dae29f8dcda4bb87e5b70fd4e77dc1->enter($__internal_ca67a9156bf5ea6315a656445116e79417dae29f8dcda4bb87e5b70fd4e77dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ca67a9156bf5ea6315a656445116e79417dae29f8dcda4bb87e5b70fd4e77dc1->leave($__internal_ca67a9156bf5ea6315a656445116e79417dae29f8dcda4bb87e5b70fd4e77dc1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
