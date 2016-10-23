<?php

/* @AppartooPlatform/Contact/form.html.twig */
class __TwigTemplate_b78c1716be408fb1036b1b8ba4d80de525fb86d01c91cbb939dc22de5593b204 extends Twig_Template
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
        $__internal_9a39d91929332b1af59e673e959092a2f2f1b29d9caa71fdcc361f1b942d26df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a39d91929332b1af59e673e959092a2f2f1b29d9caa71fdcc361f1b942d26df->enter($__internal_9a39d91929332b1af59e673e959092a2f2f1b29d9caa71fdcc361f1b942d26df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppartooPlatform/Contact/form.html.twig"));

        // line 2
        echo "
<div class=\"well\">
  ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 7
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 10
        echo "  <div class=\"form-group\">
    ";
        // line 12
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Email"));
        echo "

    ";
        // line 15
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 19
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 24
        echo "  <div class=\"form-group\">
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Adresse"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 33
        echo "  <div class=\"form-group\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Tel"));
        echo "
    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 42
        echo "  <div class=\"form-group\">
    ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Site Web"));
        echo "
    ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 51
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 54
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 57
        echo "  ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_9a39d91929332b1af59e673e959092a2f2f1b29d9caa71fdcc361f1b942d26df->leave($__internal_9a39d91929332b1af59e673e959092a2f2f1b29d9caa71fdcc361f1b942d26df_prof);

    }

    public function getTemplateName()
    {
        return "@AppartooPlatform/Contact/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 57,  124 => 54,  118 => 51,  111 => 46,  106 => 44,  102 => 43,  99 => 42,  92 => 37,  87 => 35,  83 => 34,  80 => 33,  73 => 28,  68 => 26,  64 => 25,  61 => 24,  53 => 19,  46 => 15,  40 => 12,  37 => 10,  31 => 7,  26 => 4,  22 => 2,);
    }

    public function getSource()
    {
        return "{# src/Appartoo/PlatformBundle/Resources/views/Contact/form.html.twig #}

<div class=\"well\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {# Les erreurs générales du formulaire. #}
  {{ form_errors(form) }}

  {# Génération manuelle et éclatée : #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.email, \"Email\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.email) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# champ address #}
  <div class=\"form-group\">
    {{ form_label(form.address, \"Adresse\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.address) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.address, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# champ phone #}
  <div class=\"form-group\">
    {{ form_label(form.phone, \"Tel\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.phone) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# champ website #}
  <div class=\"form-group\">
    {{ form_label(form.website, \"Site Web\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.website) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.website, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Génération automatique des champs pas encore écrits. #}
  {{ form_rest(form) }}

  {# le bouton save #}
  {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

  {# Fermeture de la balise <form> du formulaire HTML #}
  {{ form_end(form) }}
</div>";
    }
}
