<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_eb57f7a8308774ef37e6a0fcd0ee0a0effb9bb6a7c817dd76bdff4b385418088 extends Twig_Template
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
        $__internal_a5c62360f11657aa496f6a069f4ba4174a57095bf98f719115f5119e34f6cdba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c62360f11657aa496f6a069f4ba4174a57095bf98f719115f5119e34f6cdba->enter($__internal_a5c62360f11657aa496f6a069f4ba4174a57095bf98f719115f5119e34f6cdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a5c62360f11657aa496f6a069f4ba4174a57095bf98f719115f5119e34f6cdba->leave($__internal_a5c62360f11657aa496f6a069f4ba4174a57095bf98f719115f5119e34f6cdba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
