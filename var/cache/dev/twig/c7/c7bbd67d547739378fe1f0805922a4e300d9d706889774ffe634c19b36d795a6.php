<?php

/* @AppartooPlatform/Contact/index.html.twig */
class __TwigTemplate_b8693856c3962b9488aaada45ca7d9017b3a437eb83d2340655d399f18d2c94a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppartooPlatformBundle::layout.html.twig", "@AppartooPlatform/Contact/index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'appartooplatform_body' => array($this, 'block_appartooplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppartooPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_765f4cadfcfa2d728fd271ad270fb450ef858b12fc11ca545aab714413348b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765f4cadfcfa2d728fd271ad270fb450ef858b12fc11ca545aab714413348b2b->enter($__internal_765f4cadfcfa2d728fd271ad270fb450ef858b12fc11ca545aab714413348b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppartooPlatform/Contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_765f4cadfcfa2d728fd271ad270fb450ef858b12fc11ca545aab714413348b2b->leave($__internal_765f4cadfcfa2d728fd271ad270fb450ef858b12fc11ca545aab714413348b2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfce0af0ce95af71f4bdf4b0f486a9277685fe1b160245860e766a5f2394c4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfce0af0ce95af71f4bdf4b0f486a9277685fe1b160245860e766a5f2394c4ea->enter($__internal_dfce0af0ce95af71f4bdf4b0f486a9277685fe1b160245860e766a5f2394c4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dfce0af0ce95af71f4bdf4b0f486a9277685fe1b160245860e766a5f2394c4ea->leave($__internal_dfce0af0ce95af71f4bdf4b0f486a9277685fe1b160245860e766a5f2394c4ea_prof);

    }

    // line 9
    public function block_appartooplatform_body($context, array $blocks = array())
    {
        $__internal_41ac6d03dd37d505c1d1ef2831811dea1ba591c3aa4cf5b9d8e02689dadcdf5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ac6d03dd37d505c1d1ef2831811dea1ba591c3aa4cf5b9d8e02689dadcdf5f->enter($__internal_41ac6d03dd37d505c1d1ef2831811dea1ba591c3aa4cf5b9d8e02689dadcdf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appartooplatform_body"));

        // line 10
        echo "  <h2>Contact list</h2>
            <div class=\"box-body\">
              <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th></th>
                  <th>Email</th>
                  <th>Adresse</th>
                  <th>Tel</th>
                  <th>Website</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listContacts"]) ? $context["listContacts"] : $this->getContext($context, "listContacts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 24
            echo "                <tr>
                  <td class=\"table-col-img\"><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_view", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["contact"], "image", array()), "alt", array()), "html", null, true);
            echo "\" class=\"user-image\"></a></td>
                  <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_view", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "</a>
                  </td>
                  <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "address", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "website", array()), "html", null, true);
            echo "</td>
                </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "      <tr><td></td><td></td><td></td><td></td><td></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </tbody>
              </table>
          </div>

  <ul class=\"pagination\">
  ";
        // line 42
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 43
            echo "    <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
      <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</ul>

";
        
        $__internal_41ac6d03dd37d505c1d1ef2831811dea1ba591c3aa4cf5b9d8e02689dadcdf5f->leave($__internal_41ac6d03dd37d505c1d1ef2831811dea1ba591c3aa4cf5b9d8e02689dadcdf5f_prof);

    }

    public function getTemplateName()
    {
        return "@AppartooPlatform/Contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  139 => 44,  132 => 43,  127 => 42,  120 => 36,  113 => 34,  105 => 31,  101 => 30,  97 => 29,  92 => 27,  88 => 26,  80 => 25,  77 => 24,  72 => 23,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/Appartoo/PlatformBundle/Resources/views/Contact/index.html.twig #}

{% extends \"AppartooPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block appartooplatform_body %}
  <h2>Contact list</h2>
            <div class=\"box-body\">
              <table id=\"example1\" class=\"table table-bordered table-striped\">
                <thead>
                <tr>
                  <th></th>
                  <th>Email</th>
                  <th>Adresse</th>
                  <th>Tel</th>
                  <th>Website</th>
                </tr>
                </thead>
                <tbody>
                {% for contact in listContacts %}
                <tr>
                  <td class=\"table-col-img\"><a href=\"{{ path('appartoo_platform_view', {'id': contact.id}) }}\"><img src=\"{{contact.image.url}}\" alt=\"{{contact.image.alt}}\" class=\"user-image\"></a></td>
                  <td><a href=\"{{ path('appartoo_platform_view', {'id': contact.id}) }}\">
          {{ contact.email }}</a>
                  </td>
                  <td>{{ contact.address }}</td>
                  <td>{{ contact.phone }}</td>
                  <td>{{ contact.website }}</td>
                </tr>
    {% else %}
      <tr><td></td><td></td><td></td><td></td><td></td></tr>
    {% endfor %}
                </tbody>
              </table>
          </div>

  <ul class=\"pagination\">
  {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
  {% for p in range(1, nbPages) %}
    <li{% if p == page %} class=\"active\"{% endif %}>
      <a href=\"{{ path('appartoo_platform_home', {'page': p}) }}\">{{ p }}</a>
    </li>
  {% endfor %}
</ul>

{% endblock %}";
    }
}
