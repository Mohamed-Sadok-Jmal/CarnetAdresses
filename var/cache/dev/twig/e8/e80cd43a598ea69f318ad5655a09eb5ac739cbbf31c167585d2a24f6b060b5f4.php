<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_99a462b9cd3aab8d7c45f93761810085a311e650cbfb31a443f23bd10cdc2f33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_ea923583a38bd152626e87771723502065abbb080b86a8c1f1b71764a034e8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea923583a38bd152626e87771723502065abbb080b86a8c1f1b71764a034e8f7->enter($__internal_ea923583a38bd152626e87771723502065abbb080b86a8c1f1b71764a034e8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea923583a38bd152626e87771723502065abbb080b86a8c1f1b71764a034e8f7->leave($__internal_ea923583a38bd152626e87771723502065abbb080b86a8c1f1b71764a034e8f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74bc112ac19f8601af0b5190110adad29fcf9b21a4ebe85e16000199f28e3d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74bc112ac19f8601af0b5190110adad29fcf9b21a4ebe85e16000199f28e3d22->enter($__internal_74bc112ac19f8601af0b5190110adad29fcf9b21a4ebe85e16000199f28e3d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_74bc112ac19f8601af0b5190110adad29fcf9b21a4ebe85e16000199f28e3d22->leave($__internal_74bc112ac19f8601af0b5190110adad29fcf9b21a4ebe85e16000199f28e3d22_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
