<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ccb0f398c89e0331c9aeb793ae26ce1db65acb0e09aae88f2f6166806a96613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_365b9a6005a9b5675bc1627f8472b1cee97eb7afa7606731472171113408f335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365b9a6005a9b5675bc1627f8472b1cee97eb7afa7606731472171113408f335->enter($__internal_365b9a6005a9b5675bc1627f8472b1cee97eb7afa7606731472171113408f335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_365b9a6005a9b5675bc1627f8472b1cee97eb7afa7606731472171113408f335->leave($__internal_365b9a6005a9b5675bc1627f8472b1cee97eb7afa7606731472171113408f335_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea58821724761a10b8f970298a535d27d4305358de09453624aadebee88d1d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea58821724761a10b8f970298a535d27d4305358de09453624aadebee88d1d56->enter($__internal_ea58821724761a10b8f970298a535d27d4305358de09453624aadebee88d1d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ea58821724761a10b8f970298a535d27d4305358de09453624aadebee88d1d56->leave($__internal_ea58821724761a10b8f970298a535d27d4305358de09453624aadebee88d1d56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8984f046803d785f0d42d84605f18b65a6fe03396a83c3255dd5fa157fd5e81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8984f046803d785f0d42d84605f18b65a6fe03396a83c3255dd5fa157fd5e81b->enter($__internal_8984f046803d785f0d42d84605f18b65a6fe03396a83c3255dd5fa157fd5e81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8984f046803d785f0d42d84605f18b65a6fe03396a83c3255dd5fa157fd5e81b->leave($__internal_8984f046803d785f0d42d84605f18b65a6fe03396a83c3255dd5fa157fd5e81b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_18cd2ac235d6d98fda752ab31efaa9624ccd5fe795a6560c23630e065a2cffad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18cd2ac235d6d98fda752ab31efaa9624ccd5fe795a6560c23630e065a2cffad->enter($__internal_18cd2ac235d6d98fda752ab31efaa9624ccd5fe795a6560c23630e065a2cffad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_18cd2ac235d6d98fda752ab31efaa9624ccd5fe795a6560c23630e065a2cffad->leave($__internal_18cd2ac235d6d98fda752ab31efaa9624ccd5fe795a6560c23630e065a2cffad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
