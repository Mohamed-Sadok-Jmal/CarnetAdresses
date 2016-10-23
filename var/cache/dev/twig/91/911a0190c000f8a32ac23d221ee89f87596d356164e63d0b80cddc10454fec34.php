<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_3dbdefe3bf0beefb7b3f2ba3af57c2373e03a68ca4d9e5e95d8a01e78a482cb2 extends Twig_Template
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
        $__internal_38ad845bd3641fb986e2cec7e1cc2a4d96fc29725d4d8f77414a3108d28a1764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ad845bd3641fb986e2cec7e1cc2a4d96fc29725d4d8f77414a3108d28a1764->enter($__internal_38ad845bd3641fb986e2cec7e1cc2a4d96fc29725d4d8f77414a3108d28a1764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_38ad845bd3641fb986e2cec7e1cc2a4d96fc29725d4d8f77414a3108d28a1764->leave($__internal_38ad845bd3641fb986e2cec7e1cc2a4d96fc29725d4d8f77414a3108d28a1764_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
    }
}
