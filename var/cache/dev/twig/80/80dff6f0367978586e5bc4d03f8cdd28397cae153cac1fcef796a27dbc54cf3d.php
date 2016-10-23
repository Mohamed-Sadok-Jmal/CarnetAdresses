<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ad8d442b051ae921957823eeeca7971a424b9e67bdf3283fe6d7b2a442bcd162 extends Twig_Template
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
        $__internal_c8fa608c4ed3b78ed82b23995ee9a38e0fb0c0d74f33c993e9ee894fb580703d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fa608c4ed3b78ed82b23995ee9a38e0fb0c0d74f33c993e9ee894fb580703d->enter($__internal_c8fa608c4ed3b78ed82b23995ee9a38e0fb0c0d74f33c993e9ee894fb580703d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c8fa608c4ed3b78ed82b23995ee9a38e0fb0c0d74f33c993e9ee894fb580703d->leave($__internal_c8fa608c4ed3b78ed82b23995ee9a38e0fb0c0d74f33c993e9ee894fb580703d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
    }
}
