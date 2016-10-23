<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_a1125e9fd30ef9825cd99b13a43fdcc54dffaf38e81daf3fba6dbb92956f6275 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_13d8f9bfb0d454ef5cdfc7e2ca54c762de2c5d735daa40ab15de5027ca58725b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d8f9bfb0d454ef5cdfc7e2ca54c762de2c5d735daa40ab15de5027ca58725b->enter($__internal_13d8f9bfb0d454ef5cdfc7e2ca54c762de2c5d735daa40ab15de5027ca58725b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d8f9bfb0d454ef5cdfc7e2ca54c762de2c5d735daa40ab15de5027ca58725b->leave($__internal_13d8f9bfb0d454ef5cdfc7e2ca54c762de2c5d735daa40ab15de5027ca58725b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a2538afe4de9a6bc1e6095913913b1c7f31441db8ed28dbb28a077db920115d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2538afe4de9a6bc1e6095913913b1c7f31441db8ed28dbb28a077db920115d->enter($__internal_6a2538afe4de9a6bc1e6095913913b1c7f31441db8ed28dbb28a077db920115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6a2538afe4de9a6bc1e6095913913b1c7f31441db8ed28dbb28a077db920115d->leave($__internal_6a2538afe4de9a6bc1e6095913913b1c7f31441db8ed28dbb28a077db920115d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
