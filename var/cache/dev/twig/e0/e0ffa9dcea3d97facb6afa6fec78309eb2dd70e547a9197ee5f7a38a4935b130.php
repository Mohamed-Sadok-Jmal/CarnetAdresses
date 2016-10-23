<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_43dcb87831a6528d17ef64fb3a50f28fe8ef112475b27c08c9dbf097832ad99a extends Twig_Template
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
        $__internal_29c74969898644cdeef4b16d72e515231f99178a765f78d920615d948fde7f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c74969898644cdeef4b16d72e515231f99178a765f78d920615d948fde7f92->enter($__internal_29c74969898644cdeef4b16d72e515231f99178a765f78d920615d948fde7f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_29c74969898644cdeef4b16d72e515231f99178a765f78d920615d948fde7f92->leave($__internal_29c74969898644cdeef4b16d72e515231f99178a765f78d920615d948fde7f92_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
