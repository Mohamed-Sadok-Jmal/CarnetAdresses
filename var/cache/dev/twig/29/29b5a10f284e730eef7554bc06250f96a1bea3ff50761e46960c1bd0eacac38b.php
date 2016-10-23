<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d168efbba71bf07ab09172805a4d072ef2e24885ece3694c5c1e454dd6b70ece extends Twig_Template
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
        $__internal_24f509ee7686760c90d518ea86a87a5651ba95654a7292fcf0891d4c931c072b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f509ee7686760c90d518ea86a87a5651ba95654a7292fcf0891d4c931c072b->enter($__internal_24f509ee7686760c90d518ea86a87a5651ba95654a7292fcf0891d4c931c072b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_24f509ee7686760c90d518ea86a87a5651ba95654a7292fcf0891d4c931c072b->leave($__internal_24f509ee7686760c90d518ea86a87a5651ba95654a7292fcf0891d4c931c072b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
    }
}
