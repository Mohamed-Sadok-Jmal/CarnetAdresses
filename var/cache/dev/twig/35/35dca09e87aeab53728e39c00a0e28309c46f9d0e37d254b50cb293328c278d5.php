<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_412fb7f32638e9d96bb88e9a1a9523f2b5793dc1075625f79b7e00d9f71944cf extends Twig_Template
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
        $__internal_decb8fbfae452a2cd109a0ebdb89bd08d2eaa01910c83bf872d739c6124cab3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_decb8fbfae452a2cd109a0ebdb89bd08d2eaa01910c83bf872d739c6124cab3d->enter($__internal_decb8fbfae452a2cd109a0ebdb89bd08d2eaa01910c83bf872d739c6124cab3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_decb8fbfae452a2cd109a0ebdb89bd08d2eaa01910c83bf872d739c6124cab3d->leave($__internal_decb8fbfae452a2cd109a0ebdb89bd08d2eaa01910c83bf872d739c6124cab3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
    }
}
