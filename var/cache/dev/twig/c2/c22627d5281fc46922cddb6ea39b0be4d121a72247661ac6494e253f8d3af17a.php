<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_72b487dc88f964b4c98eeb408c153c816b8e244e851de3387d29388d73448cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd363170f099a25a2eca330cb57e283398c03d64f3406279d0fb2b31b7197d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd363170f099a25a2eca330cb57e283398c03d64f3406279d0fb2b31b7197d1c->enter($__internal_fd363170f099a25a2eca330cb57e283398c03d64f3406279d0fb2b31b7197d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fd363170f099a25a2eca330cb57e283398c03d64f3406279d0fb2b31b7197d1c->leave($__internal_fd363170f099a25a2eca330cb57e283398c03d64f3406279d0fb2b31b7197d1c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c0f5f52a24efd2ec7edc01868ab7f891bb13f648261a318fff0c0b762919f4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f5f52a24efd2ec7edc01868ab7f891bb13f648261a318fff0c0b762919f4fe->enter($__internal_c0f5f52a24efd2ec7edc01868ab7f891bb13f648261a318fff0c0b762919f4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c0f5f52a24efd2ec7edc01868ab7f891bb13f648261a318fff0c0b762919f4fe->leave($__internal_c0f5f52a24efd2ec7edc01868ab7f891bb13f648261a318fff0c0b762919f4fe_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5e4ff716404a248ec828bdff41a0b978c49f7cbfd2f9de5a20b404df46a5aa96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4ff716404a248ec828bdff41a0b978c49f7cbfd2f9de5a20b404df46a5aa96->enter($__internal_5e4ff716404a248ec828bdff41a0b978c49f7cbfd2f9de5a20b404df46a5aa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5e4ff716404a248ec828bdff41a0b978c49f7cbfd2f9de5a20b404df46a5aa96->leave($__internal_5e4ff716404a248ec828bdff41a0b978c49f7cbfd2f9de5a20b404df46a5aa96_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4eb29c914482ffc5073fc64a2933cc08b833cdb43780ebc893c75d7b9f9dd705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb29c914482ffc5073fc64a2933cc08b833cdb43780ebc893c75d7b9f9dd705->enter($__internal_4eb29c914482ffc5073fc64a2933cc08b833cdb43780ebc893c75d7b9f9dd705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4eb29c914482ffc5073fc64a2933cc08b833cdb43780ebc893c75d7b9f9dd705->leave($__internal_4eb29c914482ffc5073fc64a2933cc08b833cdb43780ebc893c75d7b9f9dd705_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    public function getSource()
    {
        return "{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
";
    }
}
