<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_7c12dc10c31d8a2e38cd94507202cd8a15dd87ad1efd59d413b0f0dffe958ce2 extends Twig_Template
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
        $__internal_65f6c36a4bf5a343da134ddeeeb590ba37cdc50fc7ce29fee7fdef3f36661129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f6c36a4bf5a343da134ddeeeb590ba37cdc50fc7ce29fee7fdef3f36661129->enter($__internal_65f6c36a4bf5a343da134ddeeeb590ba37cdc50fc7ce29fee7fdef3f36661129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_65f6c36a4bf5a343da134ddeeeb590ba37cdc50fc7ce29fee7fdef3f36661129->leave($__internal_65f6c36a4bf5a343da134ddeeeb590ba37cdc50fc7ce29fee7fdef3f36661129_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
