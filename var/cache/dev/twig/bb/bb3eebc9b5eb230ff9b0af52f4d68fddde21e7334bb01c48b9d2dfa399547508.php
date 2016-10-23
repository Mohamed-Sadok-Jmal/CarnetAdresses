<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_8f65cb5ae562bd3b238336adf81297b46eae024b0cfcb93cd752f045c1f79014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3f8fdb56d897ca4f86b07c984c56b76be8b50f2347b5a7b1f0713d50ad483a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8fdb56d897ca4f86b07c984c56b76be8b50f2347b5a7b1f0713d50ad483a30->enter($__internal_3f8fdb56d897ca4f86b07c984c56b76be8b50f2347b5a7b1f0713d50ad483a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f8fdb56d897ca4f86b07c984c56b76be8b50f2347b5a7b1f0713d50ad483a30->leave($__internal_3f8fdb56d897ca4f86b07c984c56b76be8b50f2347b5a7b1f0713d50ad483a30_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_634ff771cb638b7dda7fecb3ff18806734455304b4734d0904d7c46616fe363e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_634ff771cb638b7dda7fecb3ff18806734455304b4734d0904d7c46616fe363e->enter($__internal_634ff771cb638b7dda7fecb3ff18806734455304b4734d0904d7c46616fe363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_634ff771cb638b7dda7fecb3ff18806734455304b4734d0904d7c46616fe363e->leave($__internal_634ff771cb638b7dda7fecb3ff18806734455304b4734d0904d7c46616fe363e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
";
    }
}
