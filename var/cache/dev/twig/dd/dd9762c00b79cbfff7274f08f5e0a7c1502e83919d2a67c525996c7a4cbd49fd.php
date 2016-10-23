<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_629fbea8d9ba879597cc03fb5de27b9c4d324a8c455976d5fa48af071e948f91 extends Twig_Template
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
        $__internal_51809d54bfe691130771414d9857d093f02ac22c3235bef9f6eeb9ee3a6a60d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51809d54bfe691130771414d9857d093f02ac22c3235bef9f6eeb9ee3a6a60d9->enter($__internal_51809d54bfe691130771414d9857d093f02ac22c3235bef9f6eeb9ee3a6a60d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_51809d54bfe691130771414d9857d093f02ac22c3235bef9f6eeb9ee3a6a60d9->leave($__internal_51809d54bfe691130771414d9857d093f02ac22c3235bef9f6eeb9ee3a6a60d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
    }
}
