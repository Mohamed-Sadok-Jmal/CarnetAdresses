<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_83013c3e22919fbd50e0404749108eb73a04f61d23b82073bc87b80d4f9f7954 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_61ddc870be4a456a436693fc17ea2905082fa79db089aafd40d08f56e1c1655f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ddc870be4a456a436693fc17ea2905082fa79db089aafd40d08f56e1c1655f->enter($__internal_61ddc870be4a456a436693fc17ea2905082fa79db089aafd40d08f56e1c1655f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61ddc870be4a456a436693fc17ea2905082fa79db089aafd40d08f56e1c1655f->leave($__internal_61ddc870be4a456a436693fc17ea2905082fa79db089aafd40d08f56e1c1655f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5896e3ce7fc051e7c1a4e2f7dfbc6c75c3b38a170d9c1a3b308b81c3b40436a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5896e3ce7fc051e7c1a4e2f7dfbc6c75c3b38a170d9c1a3b308b81c3b40436a9->enter($__internal_5896e3ce7fc051e7c1a4e2f7dfbc6c75c3b38a170d9c1a3b308b81c3b40436a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5896e3ce7fc051e7c1a4e2f7dfbc6c75c3b38a170d9c1a3b308b81c3b40436a9->leave($__internal_5896e3ce7fc051e7c1a4e2f7dfbc6c75c3b38a170d9c1a3b308b81c3b40436a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
