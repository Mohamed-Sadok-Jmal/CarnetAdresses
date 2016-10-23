<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_93cb0597e2d7ba18fde0f1111a4a5b5fa2cb31a52170d19f18f646674203b6fa extends Twig_Template
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
        $__internal_94224eff8734978ba2f62abc3fcd3bcd86bd4291420aa54f12032511ccc6334f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94224eff8734978ba2f62abc3fcd3bcd86bd4291420aa54f12032511ccc6334f->enter($__internal_94224eff8734978ba2f62abc3fcd3bcd86bd4291420aa54f12032511ccc6334f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_94224eff8734978ba2f62abc3fcd3bcd86bd4291420aa54f12032511ccc6334f->leave($__internal_94224eff8734978ba2f62abc3fcd3bcd86bd4291420aa54f12032511ccc6334f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
