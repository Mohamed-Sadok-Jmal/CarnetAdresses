<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9b88804dca408032b8598067d7c251ae0a7f0b415c5a4c0965b1df73550e8d82 extends Twig_Template
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
        $__internal_0e136c8d25e253893078a9d1eef23916fc640e2940df5b48f59997e465e56d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e136c8d25e253893078a9d1eef23916fc640e2940df5b48f59997e465e56d42->enter($__internal_0e136c8d25e253893078a9d1eef23916fc640e2940df5b48f59997e465e56d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0e136c8d25e253893078a9d1eef23916fc640e2940df5b48f59997e465e56d42->leave($__internal_0e136c8d25e253893078a9d1eef23916fc640e2940df5b48f59997e465e56d42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
    }
}
