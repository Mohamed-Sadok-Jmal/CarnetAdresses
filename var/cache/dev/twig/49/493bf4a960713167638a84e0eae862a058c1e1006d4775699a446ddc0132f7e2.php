<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e7132e123668cfb73227d829aa832b76bacecc6e5e816129ccb37e1a835a7f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_9f2383d9a1977d5695cd131978491df93c45b1dc50805ea858545757f22c6a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2383d9a1977d5695cd131978491df93c45b1dc50805ea858545757f22c6a16->enter($__internal_9f2383d9a1977d5695cd131978491df93c45b1dc50805ea858545757f22c6a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2383d9a1977d5695cd131978491df93c45b1dc50805ea858545757f22c6a16->leave($__internal_9f2383d9a1977d5695cd131978491df93c45b1dc50805ea858545757f22c6a16_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff16a5d58fb1fd4ecc893d0ada75f9a6a630fdadeaf0197ca30dff6047e2b7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff16a5d58fb1fd4ecc893d0ada75f9a6a630fdadeaf0197ca30dff6047e2b7dd->enter($__internal_ff16a5d58fb1fd4ecc893d0ada75f9a6a630fdadeaf0197ca30dff6047e2b7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ff16a5d58fb1fd4ecc893d0ada75f9a6a630fdadeaf0197ca30dff6047e2b7dd->leave($__internal_ff16a5d58fb1fd4ecc893d0ada75f9a6a630fdadeaf0197ca30dff6047e2b7dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
";
    }
}
