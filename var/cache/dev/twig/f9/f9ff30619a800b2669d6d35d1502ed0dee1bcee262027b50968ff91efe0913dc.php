<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fef45ce8f5e9aa1c6545e7c749b41e5545901c6d195e4c0445975a9bbe11a9f7 extends Twig_Template
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
        $__internal_d1d2c923d8c8e6e9ad9a1b74fd7ee5962325f4d7723848a70e429fb76db4c32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d2c923d8c8e6e9ad9a1b74fd7ee5962325f4d7723848a70e429fb76db4c32c->enter($__internal_d1d2c923d8c8e6e9ad9a1b74fd7ee5962325f4d7723848a70e429fb76db4c32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d1d2c923d8c8e6e9ad9a1b74fd7ee5962325f4d7723848a70e429fb76db4c32c->leave($__internal_d1d2c923d8c8e6e9ad9a1b74fd7ee5962325f4d7723848a70e429fb76db4c32c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
