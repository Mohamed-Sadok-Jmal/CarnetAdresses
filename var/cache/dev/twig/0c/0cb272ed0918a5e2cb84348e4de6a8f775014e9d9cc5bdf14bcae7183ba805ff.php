<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_75368d03dead9b893ee5ffc063bdac6a2be926809d8a0a22dd6767529019296d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b0737e6f134bce03a52dc9f54d12de4a36990362a5a494cc8678acb6f625445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0737e6f134bce03a52dc9f54d12de4a36990362a5a494cc8678acb6f625445->enter($__internal_0b0737e6f134bce03a52dc9f54d12de4a36990362a5a494cc8678acb6f625445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b0737e6f134bce03a52dc9f54d12de4a36990362a5a494cc8678acb6f625445->leave($__internal_0b0737e6f134bce03a52dc9f54d12de4a36990362a5a494cc8678acb6f625445_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a220f1b20771f361614fd86506aba9e9e268f250d4200685b7cbfecdfe685d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a220f1b20771f361614fd86506aba9e9e268f250d4200685b7cbfecdfe685d65->enter($__internal_a220f1b20771f361614fd86506aba9e9e268f250d4200685b7cbfecdfe685d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a220f1b20771f361614fd86506aba9e9e268f250d4200685b7cbfecdfe685d65->leave($__internal_a220f1b20771f361614fd86506aba9e9e268f250d4200685b7cbfecdfe685d65_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4882ac770f814d97a65cbaf381d4c8f4c4634d01936fc31c412a47fbbc0c4046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4882ac770f814d97a65cbaf381d4c8f4c4634d01936fc31c412a47fbbc0c4046->enter($__internal_4882ac770f814d97a65cbaf381d4c8f4c4634d01936fc31c412a47fbbc0c4046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4882ac770f814d97a65cbaf381d4c8f4c4634d01936fc31c412a47fbbc0c4046->leave($__internal_4882ac770f814d97a65cbaf381d4c8f4c4634d01936fc31c412a47fbbc0c4046_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db1f4863723958355a73f4350853979a8ceeed82f0bc7093e968147cf6e67902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1f4863723958355a73f4350853979a8ceeed82f0bc7093e968147cf6e67902->enter($__internal_db1f4863723958355a73f4350853979a8ceeed82f0bc7093e968147cf6e67902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_db1f4863723958355a73f4350853979a8ceeed82f0bc7093e968147cf6e67902->leave($__internal_db1f4863723958355a73f4350853979a8ceeed82f0bc7093e968147cf6e67902_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
