<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ba11ea356f799a0072a6d60c3f14a91b8e6666a2c2ff3378deedecbe5c95c8ae extends Twig_Template
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
        $__internal_3e1cdff51c0f4212bfcc4b0a6dfc3b22537b9a159b780d696855ab30e60309d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1cdff51c0f4212bfcc4b0a6dfc3b22537b9a159b780d696855ab30e60309d9->enter($__internal_3e1cdff51c0f4212bfcc4b0a6dfc3b22537b9a159b780d696855ab30e60309d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3e1cdff51c0f4212bfcc4b0a6dfc3b22537b9a159b780d696855ab30e60309d9->leave($__internal_3e1cdff51c0f4212bfcc4b0a6dfc3b22537b9a159b780d696855ab30e60309d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
