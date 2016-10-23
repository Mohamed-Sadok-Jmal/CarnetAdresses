<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_fcfe30e28fc319d80999c78b6bc30342e2602c0506923e7360235ee714cc96dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e32e12332ad56bc23bc52930a85725a46ce579c70efced93ddad25ddc891f524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32e12332ad56bc23bc52930a85725a46ce579c70efced93ddad25ddc891f524->enter($__internal_e32e12332ad56bc23bc52930a85725a46ce579c70efced93ddad25ddc891f524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "<div class=\"form-group has-feedback\">
    <label for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
</div>

<div class=\"form-group has-feedback\">
    <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
</div>

<div class=\"row\">
    <div class=\"col-xs-8\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remember me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>

    <div class=\"col-xs-4\">
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block btn-flat\" />
    </div>
</div>
</form>
";
        
        $__internal_e32e12332ad56bc23bc52930a85725a46ce579c70efced93ddad25ddc891f524->leave($__internal_e32e12332ad56bc23bc52930a85725a46ce579c70efced93ddad25ddc891f524_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  74 => 26,  63 => 18,  55 => 13,  51 => 12,  48 => 11,  42 => 9,  40 => 8,  36 => 7,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
<div class=\"form-group has-feedback\">
    <label for=\"username\">{{ 'Login'|trans }}</label>
    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
</div>

<div class=\"form-group has-feedback\">
    <label for=\"password\">{{ 'Password'|trans }}</label>
    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
</div>

<div class=\"row\">
    <div class=\"col-xs-8\">
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">{{ 'Remember me'|trans }}</label>
    </div>

    <div class=\"col-xs-4\">
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'Sign in'|trans }}\" class=\"btn btn-primary btn-block btn-flat\" />
    </div>
</div>
</form>
";
    }
}
