<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f9b52d27155aad2fdca193c5f3f0991d861c0e305aeb60048ca09f78249b9c7d extends Twig_Template
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
        $__internal_f6c5ac7ff0ea523186b9fdf17c9b52f0a094a6ad037500d7e9b6707b9ee02898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c5ac7ff0ea523186b9fdf17c9b52f0a094a6ad037500d7e9b6707b9ee02898->enter($__internal_f6c5ac7ff0ea523186b9fdf17c9b52f0a094a6ad037500d7e9b6707b9ee02898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f6c5ac7ff0ea523186b9fdf17c9b52f0a094a6ad037500d7e9b6707b9ee02898->leave($__internal_f6c5ac7ff0ea523186b9fdf17c9b52f0a094a6ad037500d7e9b6707b9ee02898_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
