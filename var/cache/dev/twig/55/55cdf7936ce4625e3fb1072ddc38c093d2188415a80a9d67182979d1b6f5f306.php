<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e012eba53e920597708dfc9ee6eac0344c6671e892206c69575ac1d7d3131b67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbdf735f8828edfdc54ed6bd010cc55738cc5406c840d438029586566cc48fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbdf735f8828edfdc54ed6bd010cc55738cc5406c840d438029586566cc48fa1->enter($__internal_cbdf735f8828edfdc54ed6bd010cc55738cc5406c840d438029586566cc48fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbdf735f8828edfdc54ed6bd010cc55738cc5406c840d438029586566cc48fa1->leave($__internal_cbdf735f8828edfdc54ed6bd010cc55738cc5406c840d438029586566cc48fa1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ad92506f0fd39d0e16c2e60ab1bab2ba1b98086b5c53c542f8eea39df7697b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad92506f0fd39d0e16c2e60ab1bab2ba1b98086b5c53c542f8eea39df7697b2->enter($__internal_3ad92506f0fd39d0e16c2e60ab1bab2ba1b98086b5c53c542f8eea39df7697b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3ad92506f0fd39d0e16c2e60ab1bab2ba1b98086b5c53c542f8eea39df7697b2->leave($__internal_3ad92506f0fd39d0e16c2e60ab1bab2ba1b98086b5c53c542f8eea39df7697b2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_422aad603082458d5e938915d99cdef2d9c982f4657b69ce9b8b5cd3ddf5859d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_422aad603082458d5e938915d99cdef2d9c982f4657b69ce9b8b5cd3ddf5859d->enter($__internal_422aad603082458d5e938915d99cdef2d9c982f4657b69ce9b8b5cd3ddf5859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_422aad603082458d5e938915d99cdef2d9c982f4657b69ce9b8b5cd3ddf5859d->leave($__internal_422aad603082458d5e938915d99cdef2d9c982f4657b69ce9b8b5cd3ddf5859d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
