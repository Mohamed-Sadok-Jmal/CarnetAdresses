<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_38c75396d96833d16da9a5901ee2373148fa477a569805c0eb0a3b389d54a25d extends Twig_Template
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
        $__internal_b0a8572ed63216e0378150b37327fe8db43c7bb641745a469b4e7dfe55037fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a8572ed63216e0378150b37327fe8db43c7bb641745a469b4e7dfe55037fe9->enter($__internal_b0a8572ed63216e0378150b37327fe8db43c7bb641745a469b4e7dfe55037fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b0a8572ed63216e0378150b37327fe8db43c7bb641745a469b4e7dfe55037fe9->leave($__internal_b0a8572ed63216e0378150b37327fe8db43c7bb641745a469b4e7dfe55037fe9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
";
    }
}
