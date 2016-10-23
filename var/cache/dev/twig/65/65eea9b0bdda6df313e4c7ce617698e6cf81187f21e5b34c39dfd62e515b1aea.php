<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_73950f848858e01e0163fd1eb8dff4fecfd1259feaa8b65b9dac18df3d26ff20 extends Twig_Template
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
        $__internal_7317a0e991d87947dc04ee508ceb51afd31e55e713c670c030b063390d93659d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7317a0e991d87947dc04ee508ceb51afd31e55e713c670c030b063390d93659d->enter($__internal_7317a0e991d87947dc04ee508ceb51afd31e55e713c670c030b063390d93659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_7317a0e991d87947dc04ee508ceb51afd31e55e713c670c030b063390d93659d->leave($__internal_7317a0e991d87947dc04ee508ceb51afd31e55e713c670c030b063390d93659d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
