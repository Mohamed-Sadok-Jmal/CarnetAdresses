<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_c6b637a1d0b4caba74c464f6c26a590d85d7d86311913b462081e68baa2b17d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_cc3169031af2f4fb42ae2428bbe6b1ad55d5bd6b49c70f97da0ccd672b9d2ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3169031af2f4fb42ae2428bbe6b1ad55d5bd6b49c70f97da0ccd672b9d2ec3->enter($__internal_cc3169031af2f4fb42ae2428bbe6b1ad55d5bd6b49c70f97da0ccd672b9d2ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc3169031af2f4fb42ae2428bbe6b1ad55d5bd6b49c70f97da0ccd672b9d2ec3->leave($__internal_cc3169031af2f4fb42ae2428bbe6b1ad55d5bd6b49c70f97da0ccd672b9d2ec3_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73494fa909a9ffe5d3c34f7af95b3ef9ed28244e9ab82b469164b8eed7eade70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73494fa909a9ffe5d3c34f7af95b3ef9ed28244e9ab82b469164b8eed7eade70->enter($__internal_73494fa909a9ffe5d3c34f7af95b3ef9ed28244e9ab82b469164b8eed7eade70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_73494fa909a9ffe5d3c34f7af95b3ef9ed28244e9ab82b469164b8eed7eade70->leave($__internal_73494fa909a9ffe5d3c34f7af95b3ef9ed28244e9ab82b469164b8eed7eade70_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime}) }}
</p>
{% endblock %}
";
    }
}
