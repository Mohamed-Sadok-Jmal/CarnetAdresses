<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_ef3dd116dcde6e2cf77718853824f5a584f32f3af83ce4acafff5da64b8f38e7 extends Twig_Template
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
        $__internal_3959039c9b1cd47df3ab968ec28c84cdb32bdb574a80b830b1a1c292fa3c9e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3959039c9b1cd47df3ab968ec28c84cdb32bdb574a80b830b1a1c292fa3c9e1e->enter($__internal_3959039c9b1cd47df3ab968ec28c84cdb32bdb574a80b830b1a1c292fa3c9e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3959039c9b1cd47df3ab968ec28c84cdb32bdb574a80b830b1a1c292fa3c9e1e->leave($__internal_3959039c9b1cd47df3ab968ec28c84cdb32bdb574a80b830b1a1c292fa3c9e1e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/error.xml.twig' %}
";
    }
}
