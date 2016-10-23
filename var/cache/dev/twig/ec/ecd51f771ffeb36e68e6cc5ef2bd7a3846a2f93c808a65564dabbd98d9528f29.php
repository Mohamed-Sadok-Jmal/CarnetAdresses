<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_c5867b283c341822ac468ab2ca178326e38e91d39a720b06d08ff1e1e0091cdd extends Twig_Template
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
        $__internal_541e046e780296129308da3d2f2ad8f2223e3dbccf90ece67bf3f02d8eb62614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541e046e780296129308da3d2f2ad8f2223e3dbccf90ece67bf3f02d8eb62614->enter($__internal_541e046e780296129308da3d2f2ad8f2223e3dbccf90ece67bf3f02d8eb62614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_541e046e780296129308da3d2f2ad8f2223e3dbccf90ece67bf3f02d8eb62614->leave($__internal_541e046e780296129308da3d2f2ad8f2223e3dbccf90ece67bf3f02d8eb62614_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
