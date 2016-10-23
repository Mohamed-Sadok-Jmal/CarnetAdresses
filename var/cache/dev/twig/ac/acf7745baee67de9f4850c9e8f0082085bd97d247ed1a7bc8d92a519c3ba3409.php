<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_4f7c270caeb2935f264bf5cc18fbcb51a114125bc75135267ef22dae03b08622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_8a76163494a931fb4f3d63b212dd97b6ad0d9fb96f6bd4c56cbdaa449336d94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a76163494a931fb4f3d63b212dd97b6ad0d9fb96f6bd4c56cbdaa449336d94e->enter($__internal_8a76163494a931fb4f3d63b212dd97b6ad0d9fb96f6bd4c56cbdaa449336d94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a76163494a931fb4f3d63b212dd97b6ad0d9fb96f6bd4c56cbdaa449336d94e->leave($__internal_8a76163494a931fb4f3d63b212dd97b6ad0d9fb96f6bd4c56cbdaa449336d94e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f6d403737e342c3dbba561da68cba2c1425ca9b1013fa01bfe022704d97631f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6d403737e342c3dbba561da68cba2c1425ca9b1013fa01bfe022704d97631f->enter($__internal_7f6d403737e342c3dbba561da68cba2c1425ca9b1013fa01bfe022704d97631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_7f6d403737e342c3dbba561da68cba2c1425ca9b1013fa01bfe022704d97631f->leave($__internal_7f6d403737e342c3dbba561da68cba2c1425ca9b1013fa01bfe022704d97631f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
