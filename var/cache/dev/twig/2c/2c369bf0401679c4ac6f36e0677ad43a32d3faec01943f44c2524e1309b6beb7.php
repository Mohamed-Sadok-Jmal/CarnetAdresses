<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_265eba6f85558ec11a19992fa4dd21da5bdce5f092ab41193891ab6c3e52eb03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_0a59ca311ef0503c88b8642eaa7e44392965a1897a68e233df5d5a654108fd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a59ca311ef0503c88b8642eaa7e44392965a1897a68e233df5d5a654108fd89->enter($__internal_0a59ca311ef0503c88b8642eaa7e44392965a1897a68e233df5d5a654108fd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a59ca311ef0503c88b8642eaa7e44392965a1897a68e233df5d5a654108fd89->leave($__internal_0a59ca311ef0503c88b8642eaa7e44392965a1897a68e233df5d5a654108fd89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51d26a4f5409557f1ca4045416c2de38de1eb9be10a56cd6e33023c7d0562b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51d26a4f5409557f1ca4045416c2de38de1eb9be10a56cd6e33023c7d0562b30->enter($__internal_51d26a4f5409557f1ca4045416c2de38de1eb9be10a56cd6e33023c7d0562b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_51d26a4f5409557f1ca4045416c2de38de1eb9be10a56cd6e33023c7d0562b30->leave($__internal_51d26a4f5409557f1ca4045416c2de38de1eb9be10a56cd6e33023c7d0562b30_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
