<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_62eb975f18ba84c3b6f080c41283c05a029ddbadf85175103bff7bdd2605f643 extends Twig_Template
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
        $__internal_859847104d7d54cfaaa6ebedffe9e969e5a7dd5d4e14e46ee06813abd7e6dd24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859847104d7d54cfaaa6ebedffe9e969e5a7dd5d4e14e46ee06813abd7e6dd24->enter($__internal_859847104d7d54cfaaa6ebedffe9e969e5a7dd5d4e14e46ee06813abd7e6dd24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_859847104d7d54cfaaa6ebedffe9e969e5a7dd5d4e14e46ee06813abd7e6dd24->leave($__internal_859847104d7d54cfaaa6ebedffe9e969e5a7dd5d4e14e46ee06813abd7e6dd24_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
