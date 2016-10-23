<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_7e151f8671b51118181b70adef2ae70d989cee809d4585057612be99baeb781d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_8ba2a48bcba2ba43f196354c9f033b4f40892dcb22e5f30db405cfb521c2352d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba2a48bcba2ba43f196354c9f033b4f40892dcb22e5f30db405cfb521c2352d->enter($__internal_8ba2a48bcba2ba43f196354c9f033b4f40892dcb22e5f30db405cfb521c2352d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba2a48bcba2ba43f196354c9f033b4f40892dcb22e5f30db405cfb521c2352d->leave($__internal_8ba2a48bcba2ba43f196354c9f033b4f40892dcb22e5f30db405cfb521c2352d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8bacaeba857af651b6337197557b69667cdae816509822061984c410e294b05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bacaeba857af651b6337197557b69667cdae816509822061984c410e294b05->enter($__internal_d8bacaeba857af651b6337197557b69667cdae816509822061984c410e294b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_d8bacaeba857af651b6337197557b69667cdae816509822061984c410e294b05->leave($__internal_d8bacaeba857af651b6337197557b69667cdae816509822061984c410e294b05_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
