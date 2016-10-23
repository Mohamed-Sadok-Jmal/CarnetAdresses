<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_123df767d2970c9857d2b4751be5b67783a92ba3e2fd498699425648afe3c2cb extends Twig_Template
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
        $__internal_f91339d8f2ff2bdd9f15f78bd72daf5e8060e138a51009bc1468083e6ec1eed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91339d8f2ff2bdd9f15f78bd72daf5e8060e138a51009bc1468083e6ec1eed3->enter($__internal_f91339d8f2ff2bdd9f15f78bd72daf5e8060e138a51009bc1468083e6ec1eed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f91339d8f2ff2bdd9f15f78bd72daf5e8060e138a51009bc1468083e6ec1eed3->leave($__internal_f91339d8f2ff2bdd9f15f78bd72daf5e8060e138a51009bc1468083e6ec1eed3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
    }
}
