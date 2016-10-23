<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_3a9c19c3383e204f53eea73cb549ffa3a36a301912029b9c691b288e72daaf8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_18d60ccdf640b51be2074bddf7f5197a2e319684ad8a45321267f44bcb167c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d60ccdf640b51be2074bddf7f5197a2e319684ad8a45321267f44bcb167c8d->enter($__internal_18d60ccdf640b51be2074bddf7f5197a2e319684ad8a45321267f44bcb167c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18d60ccdf640b51be2074bddf7f5197a2e319684ad8a45321267f44bcb167c8d->leave($__internal_18d60ccdf640b51be2074bddf7f5197a2e319684ad8a45321267f44bcb167c8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22a54e109676b74b88ac58e5e108cc3601431e88535d0746f625d016282b7c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a54e109676b74b88ac58e5e108cc3601431e88535d0746f625d016282b7c4a->enter($__internal_22a54e109676b74b88ac58e5e108cc3601431e88535d0746f625d016282b7c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_22a54e109676b74b88ac58e5e108cc3601431e88535d0746f625d016282b7c4a->leave($__internal_22a54e109676b74b88ac58e5e108cc3601431e88535d0746f625d016282b7c4a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
