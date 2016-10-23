<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_47ab95004380b7e37b6f65c116760238965537a04c7f4b90301d59d02dce4984 extends Twig_Template
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
        $__internal_d5f652edfd639ef517c3c2409fe6baad9c68d0c328e5cbdc9afa8944ec9b1142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f652edfd639ef517c3c2409fe6baad9c68d0c328e5cbdc9afa8944ec9b1142->enter($__internal_d5f652edfd639ef517c3c2409fe6baad9c68d0c328e5cbdc9afa8944ec9b1142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d5f652edfd639ef517c3c2409fe6baad9c68d0c328e5cbdc9afa8944ec9b1142->leave($__internal_d5f652edfd639ef517c3c2409fe6baad9c68d0c328e5cbdc9afa8944ec9b1142_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
    }
}
