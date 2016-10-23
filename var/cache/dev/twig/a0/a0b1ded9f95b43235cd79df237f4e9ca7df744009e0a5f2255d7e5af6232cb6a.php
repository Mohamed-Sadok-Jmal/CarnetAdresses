<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4d9ce11e989c0229f8ce6aaa37de999bef19eef73f68ba679bb2b872264a6412 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d43a99ba5c50e5c41d320e8e766576c2d4a61ebb25e34b1f5c302f916b803202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d43a99ba5c50e5c41d320e8e766576c2d4a61ebb25e34b1f5c302f916b803202->enter($__internal_d43a99ba5c50e5c41d320e8e766576c2d4a61ebb25e34b1f5c302f916b803202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appartooplatform/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    </head>
    <body class=\"login-register-page\">
        <div class=\"login-register-box\">
            <div class=\"login-register-logo\">
                <a href=\"http://www.appartoo.com/en/\"><b>Appart</b>OO</a>
              </div>
              <div class=\"login-register-box-body\">
        <div class=\"login-register-box-msg\">
            ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Log in", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 21
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in to start your session", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 23
        echo "        </div>

        ";
        // line 25
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 26
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 27
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 28
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 29
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
        }
        // line 34
        echo "
        <div>
            ";
        // line 36
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 38
        echo "        </div>
        </div>
        </div>
    </body>
</html>
";
        
        $__internal_d43a99ba5c50e5c41d320e8e766576c2d4a61ebb25e34b1f5c302f916b803202->leave($__internal_d43a99ba5c50e5c41d320e8e766576c2d4a61ebb25e34b1f5c302f916b803202_prof);

    }

    // line 36
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4291c4039f665896ea47a646374fec0a68cb6f32aadd4ac4fe5fefeb4d6d3e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4291c4039f665896ea47a646374fec0a68cb6f32aadd4ac4fe5fefeb4d6d3e0->enter($__internal_e4291c4039f665896ea47a646374fec0a68cb6f32aadd4ac4fe5fefeb4d6d3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 37
        echo "            ";
        
        $__internal_e4291c4039f665896ea47a646374fec0a68cb6f32aadd4ac4fe5fefeb4d6d3e0->leave($__internal_e4291c4039f665896ea47a646374fec0a68cb6f32aadd4ac4fe5fefeb4d6d3e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 37,  124 => 36,  112 => 38,  110 => 36,  106 => 34,  103 => 33,  97 => 32,  88 => 29,  83 => 28,  78 => 27,  73 => 26,  71 => 25,  67 => 23,  59 => 21,  53 => 18,  49 => 17,  44 => 16,  42 => 15,  30 => 6,  23 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/appartooplatform/css/main.css') }}\" type=\"text/css\" />
    </head>
    <body class=\"login-register-page\">
        <div class=\"login-register-box\">
            <div class=\"login-register-logo\">
                <a href=\"http://www.appartoo.com/en/\"><b>Appart</b>OO</a>
              </div>
              <div class=\"login-register-box-body\">
        <div class=\"login-register-box-msg\">
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'Log in'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'Sign in to start your session'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
        </div>
        </div>
    </body>
</html>
";
    }
}
