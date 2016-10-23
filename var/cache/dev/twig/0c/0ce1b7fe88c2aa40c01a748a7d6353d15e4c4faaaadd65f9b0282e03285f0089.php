<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_3c106c4f10167122f74434c2cc4b2cc88c8685831ed5ff93627e2f83d574b7e5 extends Twig_Template
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
        $__internal_4402344154f7ecea7cd3a59854ed1639288a7d26e60ac7423dea5dfdcb7af403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4402344154f7ecea7cd3a59854ed1639288a7d26e60ac7423dea5dfdcb7af403->enter($__internal_4402344154f7ecea7cd3a59854ed1639288a7d26e60ac7423dea5dfdcb7af403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4402344154f7ecea7cd3a59854ed1639288a7d26e60ac7423dea5dfdcb7af403->leave($__internal_4402344154f7ecea7cd3a59854ed1639288a7d26e60ac7423dea5dfdcb7af403_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
