<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_37939637ed3bf0ca41e363bb9ddb74fb890e29108cfca1c62cc44ab91c0f7aeb extends Twig_Template
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
        $__internal_e1e10a0d1db651beb5d323a904515eb596366f19bb8699af5c99328890bd0973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1e10a0d1db651beb5d323a904515eb596366f19bb8699af5c99328890bd0973->enter($__internal_e1e10a0d1db651beb5d323a904515eb596366f19bb8699af5c99328890bd0973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e1e10a0d1db651beb5d323a904515eb596366f19bb8699af5c99328890bd0973->leave($__internal_e1e10a0d1db651beb5d323a904515eb596366f19bb8699af5c99328890bd0973_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
    }
}
