<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_07ae5a6d910cd47df48ef7934d85d11f23fa9ee872ffb6fec1c524fca14c092a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_83a36263f06168e9951d80d2565f3b4d7daef09fe4ca3729f75c8e3f2cb26c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83a36263f06168e9951d80d2565f3b4d7daef09fe4ca3729f75c8e3f2cb26c72->enter($__internal_83a36263f06168e9951d80d2565f3b4d7daef09fe4ca3729f75c8e3f2cb26c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83a36263f06168e9951d80d2565f3b4d7daef09fe4ca3729f75c8e3f2cb26c72->leave($__internal_83a36263f06168e9951d80d2565f3b4d7daef09fe4ca3729f75c8e3f2cb26c72_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_718d3d758816ad7557da354626f59fd9b644f494ec6a073fac4d12306b863185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_718d3d758816ad7557da354626f59fd9b644f494ec6a073fac4d12306b863185->enter($__internal_718d3d758816ad7557da354626f59fd9b644f494ec6a073fac4d12306b863185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_718d3d758816ad7557da354626f59fd9b644f494ec6a073fac4d12306b863185->leave($__internal_718d3d758816ad7557da354626f59fd9b644f494ec6a073fac4d12306b863185_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
