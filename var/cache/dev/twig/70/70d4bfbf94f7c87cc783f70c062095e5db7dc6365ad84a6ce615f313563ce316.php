<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a84ce1a90837db50b7bbd5d89ec22f52db7477ef54eb2aa701ac3a1d8505d134 extends Twig_Template
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
        $__internal_e889c1a5d41d0d63800a077838b26a07471208ead5d71f6d5eb70a9b7d3b3170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e889c1a5d41d0d63800a077838b26a07471208ead5d71f6d5eb70a9b7d3b3170->enter($__internal_e889c1a5d41d0d63800a077838b26a07471208ead5d71f6d5eb70a9b7d3b3170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e889c1a5d41d0d63800a077838b26a07471208ead5d71f6d5eb70a9b7d3b3170->leave($__internal_e889c1a5d41d0d63800a077838b26a07471208ead5d71f6d5eb70a9b7d3b3170_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
    }
}
