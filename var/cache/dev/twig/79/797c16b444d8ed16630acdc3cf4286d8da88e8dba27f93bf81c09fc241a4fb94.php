<?php

/* AppartooPlatformBundle:Contact:index.html.twig */
class __TwigTemplate_c8e2d1f70a4f9a1c97abd721d5abe28666b607f8a0e56648522781b5a44a46d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppartooPlatformBundle::layout.html.twig", "AppartooPlatformBundle:Contact:index.html.twig", 3);
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
        $__internal_41deababd7d66c04682ecfeadfcf4e55f203386c9187d2efa36719844a96c110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41deababd7d66c04682ecfeadfcf4e55f203386c9187d2efa36719844a96c110->enter($__internal_41deababd7d66c04682ecfeadfcf4e55f203386c9187d2efa36719844a96c110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppartooPlatformBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41deababd7d66c04682ecfeadfcf4e55f203386c9187d2efa36719844a96c110->leave($__internal_41deababd7d66c04682ecfeadfcf4e55f203386c9187d2efa36719844a96c110_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d339ea72d5ae08cb427416ad45a4f2d66d3d6d40e6474a4a52375fd151a3b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d339ea72d5ae08cb427416ad45a4f2d66d3d6d40e6474a4a52375fd151a3b98->enter($__internal_7d339ea72d5ae08cb427416ad45a4f2d66d3d6d40e6474a4a52375fd151a3b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7d339ea72d5ae08cb427416ad45a4f2d66d3d6d40e6474a4a52375fd151a3b98->leave($__internal_7d339ea72d5ae08cb427416ad45a4f2d66d3d6d40e6474a4a52375fd151a3b98_prof);

    }

    // line 9
    public function block_appartooplatform_body($context, array $blocks = array())
    {
        $__internal_60b7942ca449485b8b99890268f035e50ea4628fb72715483426f02de43d43a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b7942ca449485b8b99890268f035e50ea4628fb72715483426f02de43d43a9->enter($__internal_60b7942ca449485b8b99890268f035e50ea4628fb72715483426f02de43d43a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "appartooplatform_body"));

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
        
        $__internal_60b7942ca449485b8b99890268f035e50ea4628fb72715483426f02de43d43a9->leave($__internal_60b7942ca449485b8b99890268f035e50ea4628fb72715483426f02de43d43a9_prof);

    }

    public function getTemplateName()
    {
        return "AppartooPlatformBundle:Contact:index.html.twig";
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
