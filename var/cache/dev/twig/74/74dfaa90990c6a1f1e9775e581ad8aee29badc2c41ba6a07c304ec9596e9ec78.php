<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_470658e2ba8020e9345ca8f7f0ba97af74a3b274c15139ee0f349ea78e4f7aac extends Twig_Template
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
        $__internal_f32677e051b4e389b1ecfc1163b34b3cb2d65b04885a4e1172e434d51dccfe52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f32677e051b4e389b1ecfc1163b34b3cb2d65b04885a4e1172e434d51dccfe52->enter($__internal_f32677e051b4e389b1ecfc1163b34b3cb2d65b04885a4e1172e434d51dccfe52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_f32677e051b4e389b1ecfc1163b34b3cb2d65b04885a4e1172e434d51dccfe52->leave($__internal_f32677e051b4e389b1ecfc1163b34b3cb2d65b04885a4e1172e434d51dccfe52_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
