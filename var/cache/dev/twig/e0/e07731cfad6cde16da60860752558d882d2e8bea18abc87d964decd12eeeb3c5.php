<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7ee01502cf1b8692dd8184b7b64cf8ffa76e30db30fa610da0d5e51d4444a2cf extends Twig_Template
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
        $__internal_c9b54ea5e05111794621057029861fde6ed40a8ba2b81addff811ee609d348f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b54ea5e05111794621057029861fde6ed40a8ba2b81addff811ee609d348f5->enter($__internal_c9b54ea5e05111794621057029861fde6ed40a8ba2b81addff811ee609d348f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c9b54ea5e05111794621057029861fde6ed40a8ba2b81addff811ee609d348f5->leave($__internal_c9b54ea5e05111794621057029861fde6ed40a8ba2b81addff811ee609d348f5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
