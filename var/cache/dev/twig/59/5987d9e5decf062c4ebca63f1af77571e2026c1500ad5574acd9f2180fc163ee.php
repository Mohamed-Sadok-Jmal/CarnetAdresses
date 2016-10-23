<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f21e9a8def21075588575bfd08a6b694d1211b658355ce7365a05c8ba57d006a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_88346cdc5d73dc3b4a0d57c3db079c0f36dfde7e7e0fa2d4d893cdaf0d5d4c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88346cdc5d73dc3b4a0d57c3db079c0f36dfde7e7e0fa2d4d893cdaf0d5d4c32->enter($__internal_88346cdc5d73dc3b4a0d57c3db079c0f36dfde7e7e0fa2d4d893cdaf0d5d4c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88346cdc5d73dc3b4a0d57c3db079c0f36dfde7e7e0fa2d4d893cdaf0d5d4c32->leave($__internal_88346cdc5d73dc3b4a0d57c3db079c0f36dfde7e7e0fa2d4d893cdaf0d5d4c32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b113353db0f10f6210cd4ad861b5c836333e415c88025cc3a25b8ea070984306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b113353db0f10f6210cd4ad861b5c836333e415c88025cc3a25b8ea070984306->enter($__internal_b113353db0f10f6210cd4ad861b5c836333e415c88025cc3a25b8ea070984306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b113353db0f10f6210cd4ad861b5c836333e415c88025cc3a25b8ea070984306->leave($__internal_b113353db0f10f6210cd4ad861b5c836333e415c88025cc3a25b8ea070984306_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ca308e83b69ff26e307bc71a3f8dd7bd10a30ae1f82bff27367d5fb735b17a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca308e83b69ff26e307bc71a3f8dd7bd10a30ae1f82bff27367d5fb735b17a3->enter($__internal_1ca308e83b69ff26e307bc71a3f8dd7bd10a30ae1f82bff27367d5fb735b17a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1ca308e83b69ff26e307bc71a3f8dd7bd10a30ae1f82bff27367d5fb735b17a3->leave($__internal_1ca308e83b69ff26e307bc71a3f8dd7bd10a30ae1f82bff27367d5fb735b17a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
