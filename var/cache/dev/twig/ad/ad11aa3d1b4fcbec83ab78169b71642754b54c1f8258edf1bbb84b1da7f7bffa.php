<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_a47ff390963379e3d1a9e15f461771ca4793726a72b193dc2b217d22613eb155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_581816e787e9d53ba9067c419b876678c5af0338ab6173f50c6331d0278c7328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581816e787e9d53ba9067c419b876678c5af0338ab6173f50c6331d0278c7328->enter($__internal_581816e787e9d53ba9067c419b876678c5af0338ab6173f50c6331d0278c7328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581816e787e9d53ba9067c419b876678c5af0338ab6173f50c6331d0278c7328->leave($__internal_581816e787e9d53ba9067c419b876678c5af0338ab6173f50c6331d0278c7328_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_582584c4e5432fef67cfee3423e32c96c9b516b4beb10629906734c5ff652d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582584c4e5432fef67cfee3423e32c96c9b516b4beb10629906734c5ff652d37->enter($__internal_582584c4e5432fef67cfee3423e32c96c9b516b4beb10629906734c5ff652d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_582584c4e5432fef67cfee3423e32c96c9b516b4beb10629906734c5ff652d37->leave($__internal_582584c4e5432fef67cfee3423e32c96c9b516b4beb10629906734c5ff652d37_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
