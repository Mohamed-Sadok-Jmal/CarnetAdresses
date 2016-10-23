<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_1769e3a72eafb32c4c16973aa848157af640fe1d12dc69fa9405c97143a727f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_81c2f017647f5dad9f2f351a180a0cc4480d6842451c021b7274cd17629633c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81c2f017647f5dad9f2f351a180a0cc4480d6842451c021b7274cd17629633c1->enter($__internal_81c2f017647f5dad9f2f351a180a0cc4480d6842451c021b7274cd17629633c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81c2f017647f5dad9f2f351a180a0cc4480d6842451c021b7274cd17629633c1->leave($__internal_81c2f017647f5dad9f2f351a180a0cc4480d6842451c021b7274cd17629633c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a16b9dc3b885822cbd88a7babe3463603d824ada6cb6a3c20fc46c5627911132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16b9dc3b885822cbd88a7babe3463603d824ada6cb6a3c20fc46c5627911132->enter($__internal_a16b9dc3b885822cbd88a7babe3463603d824ada6cb6a3c20fc46c5627911132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_a16b9dc3b885822cbd88a7babe3463603d824ada6cb6a3c20fc46c5627911132->leave($__internal_a16b9dc3b885822cbd88a7babe3463603d824ada6cb6a3c20fc46c5627911132_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
