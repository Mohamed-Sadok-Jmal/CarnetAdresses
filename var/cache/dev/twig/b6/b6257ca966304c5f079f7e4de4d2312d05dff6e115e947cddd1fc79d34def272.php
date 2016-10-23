<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_b21c8599f2c7430ffdd2f117b2292383e4ce5b059f1c5e5214ff09b2ae313e92 extends Twig_Template
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
        $__internal_30082f393fc44337e5d74580a8c5e9ac97f64277c968e19e4113cb847a032d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30082f393fc44337e5d74580a8c5e9ac97f64277c968e19e4113cb847a032d30->enter($__internal_30082f393fc44337e5d74580a8c5e9ac97f64277c968e19e4113cb847a032d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_30082f393fc44337e5d74580a8c5e9ac97f64277c968e19e4113cb847a032d30->leave($__internal_30082f393fc44337e5d74580a8c5e9ac97f64277c968e19e4113cb847a032d30_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
