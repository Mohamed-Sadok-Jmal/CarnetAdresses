<?php

/* layout.html.twig */
class __TwigTemplate_1ab53a78ce226458f6f65a295a835677bb7244be9ad849914174841b309cfdc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fa6877e7dd474ef102836785c87ec3ff280eb677eeb090cc8d0aec526a9d972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa6877e7dd474ef102836785c87ec3ff280eb677eeb090cc8d0aec526a9d972->enter($__internal_1fa6877e7dd474ef102836785c87ec3ff280eb677eeb090cc8d0aec526a9d972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "</head>

<body>
  <header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_home");
        echo "\" class=\"logo\">
      <span class=\"logo-lg\"><b>Appart</b>OO</span>
    </a>
    <nav class=\"navbar navbar-static-top\">

      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg\" class=\"img-circle\" alt=\"User Image\">

                <p>
                  ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "
                </p>
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-default btn-profile\">Profile</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-profile\">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
        </ul>
      </div>
    </nav>
  </header>
  <div class=\"container\">
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h4>Derniers contacts ajoutés</h4>
        ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("AppartooPlatformBundle:Contact:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "      </div>
    </div>

    <hr>
    <footer>
      <strong>Copyright © 2015-2016 <a href=\"http://www.appartoo.com/en/\">";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["webmaster"]) ? $context["webmaster"] : $this->getContext($context, "webmaster")), "html", null, true);
        echo "</a>.</strong> All rights
    reserved.
    </footer>
  </div>

  ";
        // line 78
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
</body>
</html>";
        
        $__internal_1fa6877e7dd474ef102836785c87ec3ff280eb677eeb090cc8d0aec526a9d972->leave($__internal_1fa6877e7dd474ef102836785c87ec3ff280eb677eeb090cc8d0aec526a9d972_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_39e59f7e6393945b09ebe9a194727e9c8a3fc79bfb1bc500dddf8b7151d9286e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39e59f7e6393945b09ebe9a194727e9c8a3fc79bfb1bc500dddf8b7151d9286e->enter($__internal_39e59f7e6393945b09ebe9a194727e9c8a3fc79bfb1bc500dddf8b7151d9286e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Appartoo Plateforme";
        
        $__internal_39e59f7e6393945b09ebe9a194727e9c8a3fc79bfb1bc500dddf8b7151d9286e->leave($__internal_39e59f7e6393945b09ebe9a194727e9c8a3fc79bfb1bc500dddf8b7151d9286e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a65e566e1a58ab96cf218db9f832e4c07e123b81a6a457ec89d1432cf1be9ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65e566e1a58ab96cf218db9f832e4c07e123b81a6a457ec89d1432cf1be9ecc->enter($__internal_a65e566e1a58ab96cf218db9f832e4c07e123b81a6a457ec89d1432cf1be9ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/appartooplatform/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
  ";
        
        $__internal_a65e566e1a58ab96cf218db9f832e4c07e123b81a6a457ec89d1432cf1be9ecc->leave($__internal_a65e566e1a58ab96cf218db9f832e4c07e123b81a6a457ec89d1432cf1be9ecc_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6d2950820049d2664248694ab4d7e8082852a10b9fe7c6d536976aa4e2a9fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d2950820049d2664248694ab4d7e8082852a10b9fe7c6d536976aa4e2a9fea->enter($__internal_f6d2950820049d2664248694ab4d7e8082852a10b9fe7c6d536976aa4e2a9fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "        ";
        
        $__internal_f6d2950820049d2664248694ab4d7e8082852a10b9fe7c6d536976aa4e2a9fea->leave($__internal_f6d2950820049d2664248694ab4d7e8082852a10b9fe7c6d536976aa4e2a9fea_prof);

    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6e3385159450682490aac9f0c9b1c993f8eff97904d9eaf857ce8202c9a28b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3385159450682490aac9f0c9b1c993f8eff97904d9eaf857ce8202c9a28b3b->enter($__internal_6e3385159450682490aac9f0c9b1c993f8eff97904d9eaf857ce8202c9a28b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 79
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_6e3385159450682490aac9f0c9b1c993f8eff97904d9eaf857ce8202c9a28b3b->leave($__internal_6e3385159450682490aac9f0c9b1c993f8eff97904d9eaf857ce8202c9a28b3b_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 79,  187 => 78,  180 => 67,  174 => 66,  165 => 14,  162 => 13,  160 => 12,  154 => 11,  142 => 9,  133 => 82,  131 => 78,  123 => 73,  116 => 68,  114 => 66,  108 => 63,  90 => 48,  84 => 45,  73 => 39,  62 => 31,  49 => 21,  42 => 16,  40 => 11,  35 => 9,  26 => 2,);
    }

    public function getSource()
    {
        return "{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}Appartoo Plateforme{% endblock %}</title>

  {% block stylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/appartooplatform/css/main.css') }}\" type=\"text/css\" />
  {% endblock %}
</head>

<body>
  <header class=\"main-header\">
    <!-- Logo -->
    <a href=\"{{ path('appartoo_platform_home') }}\" class=\"logo\">
      <span class=\"logo-lg\"><b>Appart</b>OO</span>
    </a>
    <nav class=\"navbar navbar-static-top\">

      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">{{app.user.username}}</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg\" class=\"img-circle\" alt=\"User Image\">

                <p>
                  {{ app.user.username }} - {{app.user.email}}
                </p>
              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"{{ path('fos_user_profile_edit') }}\" class=\"btn btn-default btn-profile\">Profile</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"{{ path('fos_user_security_logout') }}\" class=\"btn btn-default btn-profile\">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
        </ul>
      </div>
    </nav>
  </header>
  <div class=\"container\">
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h4>Derniers contacts ajoutés</h4>
        {{ render(controller(\"AppartooPlatformBundle:Contact:menu\", {'limit': 3})) }}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>
    <footer>
      <strong>Copyright © 2015-2016 <a href=\"http://www.appartoo.com/en/\">{{webmaster}}</a>.</strong> All rights
    reserved.
    </footer>
  </div>

  {% block javascripts %}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>";
    }
}
