<?php

/* AppartooPlatformBundle:Contact:menu.html.twig */
class __TwigTemplate_b584fd61d2e0cedfeea2b8c67c0a26034c23dc0eadc008fe8c61f6e5ab9c4ab7 extends Twig_Template
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
        $__internal_991c5d8e212ac992fdcc2938e10c50091fa0a3fe68262aaea6a14b57dc903cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_991c5d8e212ac992fdcc2938e10c50091fa0a3fe68262aaea6a14b57dc903cfa->enter($__internal_991c5d8e212ac992fdcc2938e10c50091fa0a3fe68262aaea6a14b57dc903cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppartooPlatformBundle:Contact:menu.html.twig"));

        // line 2
        echo "
";
        // line 5
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listContacts"]) ? $context["listContacts"] : $this->getContext($context, "listContacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 8
            echo "    <li>
      <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appartoo_platform_view", array("id" => $this->getAttribute($context["contact"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "email", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
        
        $__internal_991c5d8e212ac992fdcc2938e10c50091fa0a3fe68262aaea6a14b57dc903cfa->leave($__internal_991c5d8e212ac992fdcc2938e10c50091fa0a3fe68262aaea6a14b57dc903cfa_prof);

    }

    public function getTemplateName()
    {
        return "AppartooPlatformBundle:Contact:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  40 => 10,  36 => 9,  33 => 8,  29 => 7,  25 => 5,  22 => 2,);
    }

    public function getSource()
    {
        return "{# src/Appartoo/PlatformBundle/Resources/views/Contact/menu.html.twig #}

{# Ce template n'hérite de personne,
   tout comme le template inclus avec {{ include() }}. #}

<ul class=\"nav nav-pills nav-stacked\">
  {% for contact in listContacts %}
    <li>
      <a href=\"{{ path('appartoo_platform_view', {'id': contact.id}) }}\">
        {{ contact.email }}
      </a>
    </li>
  {% endfor %}
</ul>";
    }
}
