<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_8a92342e4ae8d50d927362c4beefe5da0b935023ad57b7de00ba834cb69e4571 extends Twig_Template
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
        $__internal_7c67cd265bde423c2fc90759869b66f83ecb366e77fae4e09b0d758a1671cd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c67cd265bde423c2fc90759869b66f83ecb366e77fae4e09b0d758a1671cd4c->enter($__internal_7c67cd265bde423c2fc90759869b66f83ecb366e77fae4e09b0d758a1671cd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_7c67cd265bde423c2fc90759869b66f83ecb366e77fae4e09b0d758a1671cd4c->leave($__internal_7c67cd265bde423c2fc90759869b66f83ecb366e77fae4e09b0d758a1671cd4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
    }
}
