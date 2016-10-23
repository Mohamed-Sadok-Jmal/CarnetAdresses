<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_9eca06ac396d555d0a84fa0b8da5b44ed00d53524f792495c3754661d2296aa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee89cc2fbfd27a72ce4c083b77b44e90191fc30313d3a5dc6047515937843226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee89cc2fbfd27a72ce4c083b77b44e90191fc30313d3a5dc6047515937843226->enter($__internal_ee89cc2fbfd27a72ce4c083b77b44e90191fc30313d3a5dc6047515937843226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_ee89cc2fbfd27a72ce4c083b77b44e90191fc30313d3a5dc6047515937843226->leave($__internal_ee89cc2fbfd27a72ce4c083b77b44e90191fc30313d3a5dc6047515937843226_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
