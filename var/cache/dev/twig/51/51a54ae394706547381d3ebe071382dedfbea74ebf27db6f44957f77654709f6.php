<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ef544972b2f337843161d44d3b51b85f732d320cdead930fbba9faad2942e3d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_1f51ece39034cb246cec999ce2a226e7ab02bee1f8767533b4ee839525d4b3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f51ece39034cb246cec999ce2a226e7ab02bee1f8767533b4ee839525d4b3c1->enter($__internal_1f51ece39034cb246cec999ce2a226e7ab02bee1f8767533b4ee839525d4b3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f51ece39034cb246cec999ce2a226e7ab02bee1f8767533b4ee839525d4b3c1->leave($__internal_1f51ece39034cb246cec999ce2a226e7ab02bee1f8767533b4ee839525d4b3c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9324803b239c8d3e3d13657242ae5f3c5681da25976fc0150ff57e520bba785c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9324803b239c8d3e3d13657242ae5f3c5681da25976fc0150ff57e520bba785c->enter($__internal_9324803b239c8d3e3d13657242ae5f3c5681da25976fc0150ff57e520bba785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9324803b239c8d3e3d13657242ae5f3c5681da25976fc0150ff57e520bba785c->leave($__internal_9324803b239c8d3e3d13657242ae5f3c5681da25976fc0150ff57e520bba785c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
