<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_d1b15d051e68037f93b2312dba1d1747ab4fc5725f7cbb42213c066db204c7f1 extends Twig_Template
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
        $__internal_30da2ff99a0215aae8e6edfb43c66da814209c667b81e9bdebc36831e2d2801f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30da2ff99a0215aae8e6edfb43c66da814209c667b81e9bdebc36831e2d2801f->enter($__internal_30da2ff99a0215aae8e6edfb43c66da814209c667b81e9bdebc36831e2d2801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_30da2ff99a0215aae8e6edfb43c66da814209c667b81e9bdebc36831e2d2801f->leave($__internal_30da2ff99a0215aae8e6edfb43c66da814209c667b81e9bdebc36831e2d2801f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
    }
}
