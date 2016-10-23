<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_6ca2f25ae45ad3a48298ada6f8fa63e88d6794a9b21a4df7908eb0d22fff6c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d66f6773008493a82254a0a10fef61b2b324efbcf26af31af7482c70e1b53ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66f6773008493a82254a0a10fef61b2b324efbcf26af31af7482c70e1b53ac7->enter($__internal_d66f6773008493a82254a0a10fef61b2b324efbcf26af31af7482c70e1b53ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d66f6773008493a82254a0a10fef61b2b324efbcf26af31af7482c70e1b53ac7->leave($__internal_d66f6773008493a82254a0a10fef61b2b324efbcf26af31af7482c70e1b53ac7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cfb9065e50cefa6e0c4081550a052418cd4b35bb66f3d6c6f20340a520914516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb9065e50cefa6e0c4081550a052418cd4b35bb66f3d6c6f20340a520914516->enter($__internal_cfb9065e50cefa6e0c4081550a052418cd4b35bb66f3d6c6f20340a520914516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_cfb9065e50cefa6e0c4081550a052418cd4b35bb66f3d6c6f20340a520914516->leave($__internal_cfb9065e50cefa6e0c4081550a052418cd4b35bb66f3d6c6f20340a520914516_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
