<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1d2b09e63f09bccc912bf34f7a307a95ad104ea28de32efd3ffa2ba0675819b8 extends Twig_Template
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
        $__internal_b3735dfe50a491eb1d91993dc7b018f02e265aaf1e3869077683dd88545ec746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3735dfe50a491eb1d91993dc7b018f02e265aaf1e3869077683dd88545ec746->enter($__internal_b3735dfe50a491eb1d91993dc7b018f02e265aaf1e3869077683dd88545ec746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b3735dfe50a491eb1d91993dc7b018f02e265aaf1e3869077683dd88545ec746->leave($__internal_b3735dfe50a491eb1d91993dc7b018f02e265aaf1e3869077683dd88545ec746_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
    }
}
