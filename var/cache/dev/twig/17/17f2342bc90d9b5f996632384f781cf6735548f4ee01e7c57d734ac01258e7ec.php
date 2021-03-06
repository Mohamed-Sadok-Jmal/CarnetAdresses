<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a755e564f1eba79331b4e059a9a8e2042a53daf7f8fd33be7128e7279357d585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_976c24731156a8616b92787f2f158f216f6cf85a49a29d25cb64808ae339c8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976c24731156a8616b92787f2f158f216f6cf85a49a29d25cb64808ae339c8f0->enter($__internal_976c24731156a8616b92787f2f158f216f6cf85a49a29d25cb64808ae339c8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_976c24731156a8616b92787f2f158f216f6cf85a49a29d25cb64808ae339c8f0->leave($__internal_976c24731156a8616b92787f2f158f216f6cf85a49a29d25cb64808ae339c8f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_149bcee0f0155919cb7b09eea386181f1198869873ef0e3a1535e492064e4ca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149bcee0f0155919cb7b09eea386181f1198869873ef0e3a1535e492064e4ca4->enter($__internal_149bcee0f0155919cb7b09eea386181f1198869873ef0e3a1535e492064e4ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_149bcee0f0155919cb7b09eea386181f1198869873ef0e3a1535e492064e4ca4->leave($__internal_149bcee0f0155919cb7b09eea386181f1198869873ef0e3a1535e492064e4ca4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8047cabe63506e207401fb574456630fefe44a46b9134b17f5ae5be56c50b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8047cabe63506e207401fb574456630fefe44a46b9134b17f5ae5be56c50b48->enter($__internal_e8047cabe63506e207401fb574456630fefe44a46b9134b17f5ae5be56c50b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e8047cabe63506e207401fb574456630fefe44a46b9134b17f5ae5be56c50b48->leave($__internal_e8047cabe63506e207401fb574456630fefe44a46b9134b17f5ae5be56c50b48_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee4d3a2983f9674ca2e6c2af6de36a2aa010b21de9ae0e05a26e97a41b671056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4d3a2983f9674ca2e6c2af6de36a2aa010b21de9ae0e05a26e97a41b671056->enter($__internal_ee4d3a2983f9674ca2e6c2af6de36a2aa010b21de9ae0e05a26e97a41b671056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee4d3a2983f9674ca2e6c2af6de36a2aa010b21de9ae0e05a26e97a41b671056->leave($__internal_ee4d3a2983f9674ca2e6c2af6de36a2aa010b21de9ae0e05a26e97a41b671056_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
