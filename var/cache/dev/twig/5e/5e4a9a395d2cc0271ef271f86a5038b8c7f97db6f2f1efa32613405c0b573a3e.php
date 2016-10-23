<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3357e92c1f2c5fb0d0444dc965c1a6ba5fc1fb5ca1c6a5425732a0e9bbebfacd extends Twig_Template
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
        $__internal_6c94fcd228b6ef27d5ca41cebd47e81f25a75f6218f41c285f74502ba4270763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c94fcd228b6ef27d5ca41cebd47e81f25a75f6218f41c285f74502ba4270763->enter($__internal_6c94fcd228b6ef27d5ca41cebd47e81f25a75f6218f41c285f74502ba4270763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6c94fcd228b6ef27d5ca41cebd47e81f25a75f6218f41c285f74502ba4270763->leave($__internal_6c94fcd228b6ef27d5ca41cebd47e81f25a75f6218f41c285f74502ba4270763_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
    }
}
