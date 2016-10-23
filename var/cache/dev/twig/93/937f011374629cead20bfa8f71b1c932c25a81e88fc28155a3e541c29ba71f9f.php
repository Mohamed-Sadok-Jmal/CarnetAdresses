<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9e9415d43fc49c1c4a4daac3f0fd69070f3f125bbccbb3260fcb4a3f90b7e97d extends Twig_Template
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
        $__internal_8dfbb80b1ccff7a733f439657e28dc5b9ee05705dae56aebc9d6476b18b5b02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfbb80b1ccff7a733f439657e28dc5b9ee05705dae56aebc9d6476b18b5b02b->enter($__internal_8dfbb80b1ccff7a733f439657e28dc5b9ee05705dae56aebc9d6476b18b5b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_8dfbb80b1ccff7a733f439657e28dc5b9ee05705dae56aebc9d6476b18b5b02b->leave($__internal_8dfbb80b1ccff7a733f439657e28dc5b9ee05705dae56aebc9d6476b18b5b02b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
