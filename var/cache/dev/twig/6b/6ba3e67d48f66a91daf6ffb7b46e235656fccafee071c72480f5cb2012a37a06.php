<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cf598022ae55f29502aaceba57e7eec7009e69673cf0a263909bcbefe164542f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_9d8a28ccd435ce226929feb47ffa11e93e1d4d0259f104fbf3aed5072f75b7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8a28ccd435ce226929feb47ffa11e93e1d4d0259f104fbf3aed5072f75b7c5->enter($__internal_9d8a28ccd435ce226929feb47ffa11e93e1d4d0259f104fbf3aed5072f75b7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d8a28ccd435ce226929feb47ffa11e93e1d4d0259f104fbf3aed5072f75b7c5->leave($__internal_9d8a28ccd435ce226929feb47ffa11e93e1d4d0259f104fbf3aed5072f75b7c5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3bc22b84b34ec39ebad1e0fbc15e6bcff22bc7fabdfcb3e310b86da414efe20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc22b84b34ec39ebad1e0fbc15e6bcff22bc7fabdfcb3e310b86da414efe20c->enter($__internal_3bc22b84b34ec39ebad1e0fbc15e6bcff22bc7fabdfcb3e310b86da414efe20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3bc22b84b34ec39ebad1e0fbc15e6bcff22bc7fabdfcb3e310b86da414efe20c->leave($__internal_3bc22b84b34ec39ebad1e0fbc15e6bcff22bc7fabdfcb3e310b86da414efe20c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84bb12502a331ad5b6ff0368f884d390894bc8d81b30da13b36fb7eae7a41e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bb12502a331ad5b6ff0368f884d390894bc8d81b30da13b36fb7eae7a41e0a->enter($__internal_84bb12502a331ad5b6ff0368f884d390894bc8d81b30da13b36fb7eae7a41e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84bb12502a331ad5b6ff0368f884d390894bc8d81b30da13b36fb7eae7a41e0a->leave($__internal_84bb12502a331ad5b6ff0368f884d390894bc8d81b30da13b36fb7eae7a41e0a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d128cb85b69ee51fb0f2d129b0afeea862f85fda758053ded38c68a04a11ec8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d128cb85b69ee51fb0f2d129b0afeea862f85fda758053ded38c68a04a11ec8e->enter($__internal_d128cb85b69ee51fb0f2d129b0afeea862f85fda758053ded38c68a04a11ec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d128cb85b69ee51fb0f2d129b0afeea862f85fda758053ded38c68a04a11ec8e->leave($__internal_d128cb85b69ee51fb0f2d129b0afeea862f85fda758053ded38c68a04a11ec8e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
