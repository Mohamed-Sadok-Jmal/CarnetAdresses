<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_dd9d40e4d0d47d09d84433f2b3ab1d87fa52e7f840d35497bbb7b28b1093a0fd extends Twig_Template
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
        $__internal_9d0abf43b3997cc0cf7e111bea1b3309ed1c22e1fab0138c1b387e527af4bc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d0abf43b3997cc0cf7e111bea1b3309ed1c22e1fab0138c1b387e527af4bc21->enter($__internal_9d0abf43b3997cc0cf7e111bea1b3309ed1c22e1fab0138c1b387e527af4bc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9d0abf43b3997cc0cf7e111bea1b3309ed1c22e1fab0138c1b387e527af4bc21->leave($__internal_9d0abf43b3997cc0cf7e111bea1b3309ed1c22e1fab0138c1b387e527af4bc21_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
";
    }
}
