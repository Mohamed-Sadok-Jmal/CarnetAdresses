<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5c24411f1374aaee2ef8493af5305dfd0bbc286fa1fb1dea1f62eae3fe4ebd2f extends Twig_Template
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
        $__internal_82f18fa21327ca404b8a2ab1a6d18945666befc071008926d21618686e303b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f18fa21327ca404b8a2ab1a6d18945666befc071008926d21618686e303b4f->enter($__internal_82f18fa21327ca404b8a2ab1a6d18945666befc071008926d21618686e303b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_82f18fa21327ca404b8a2ab1a6d18945666befc071008926d21618686e303b4f->leave($__internal_82f18fa21327ca404b8a2ab1a6d18945666befc071008926d21618686e303b4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
    }
}
