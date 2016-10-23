<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_44b3274b28ad19f6c167fd1b485493537061bef4a0dd88a1fe612122f05233dd extends Twig_Template
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
        $__internal_88f9f6501850b9fb323a82ef3ffa9443d968936d9ae85167817e9a31349aff28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f9f6501850b9fb323a82ef3ffa9443d968936d9ae85167817e9a31349aff28->enter($__internal_88f9f6501850b9fb323a82ef3ffa9443d968936d9ae85167817e9a31349aff28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_88f9f6501850b9fb323a82ef3ffa9443d968936d9ae85167817e9a31349aff28->leave($__internal_88f9f6501850b9fb323a82ef3ffa9443d968936d9ae85167817e9a31349aff28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
    }
}
