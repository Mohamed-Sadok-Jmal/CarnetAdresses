<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_cc41eadfdbe205af54692a5d2a1a66dddd3c0baafc68c9927565ad226aae8c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3629e16e2ac3990b03c885f717d8efa1ab24ab56e6e8df6dce3bffb123954fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3629e16e2ac3990b03c885f717d8efa1ab24ab56e6e8df6dce3bffb123954fe8->enter($__internal_3629e16e2ac3990b03c885f717d8efa1ab24ab56e6e8df6dce3bffb123954fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3629e16e2ac3990b03c885f717d8efa1ab24ab56e6e8df6dce3bffb123954fe8->leave($__internal_3629e16e2ac3990b03c885f717d8efa1ab24ab56e6e8df6dce3bffb123954fe8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5688ec2335a6d07a6af48749e023bfc3e65641b64e6fada4d164e4ef9b52b8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5688ec2335a6d07a6af48749e023bfc3e65641b64e6fada4d164e4ef9b52b8eb->enter($__internal_5688ec2335a6d07a6af48749e023bfc3e65641b64e6fada4d164e4ef9b52b8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5688ec2335a6d07a6af48749e023bfc3e65641b64e6fada4d164e4ef9b52b8eb->leave($__internal_5688ec2335a6d07a6af48749e023bfc3e65641b64e6fada4d164e4ef9b52b8eb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
";
    }
}
