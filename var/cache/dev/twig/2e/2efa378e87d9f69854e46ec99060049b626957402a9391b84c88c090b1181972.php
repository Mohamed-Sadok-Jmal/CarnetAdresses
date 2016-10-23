<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6b988883f0e78fda211420de303de2c1ec71d094905aec1fe079d20b31d6ab57 extends Twig_Template
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
        $__internal_ad5652204b6148cc8e788209efa77ae87eb1eb2cd2f81f31ffb6e3e97d8fd694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5652204b6148cc8e788209efa77ae87eb1eb2cd2f81f31ffb6e3e97d8fd694->enter($__internal_ad5652204b6148cc8e788209efa77ae87eb1eb2cd2f81f31ffb6e3e97d8fd694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ad5652204b6148cc8e788209efa77ae87eb1eb2cd2f81f31ffb6e3e97d8fd694->leave($__internal_ad5652204b6148cc8e788209efa77ae87eb1eb2cd2f81f31ffb6e3e97d8fd694_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
