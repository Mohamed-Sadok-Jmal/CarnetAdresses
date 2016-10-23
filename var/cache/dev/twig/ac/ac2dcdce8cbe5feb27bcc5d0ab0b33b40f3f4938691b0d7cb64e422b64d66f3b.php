<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a634a9264ed362720b43f50057aa359fa8caee70b1eb11c6ef96323fd1a1addc extends Twig_Template
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
        $__internal_ed6b32c58ffa7c43e9a2fac4ff2b4548dc71becea04ebb6eb1a5820f5f866ad0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6b32c58ffa7c43e9a2fac4ff2b4548dc71becea04ebb6eb1a5820f5f866ad0->enter($__internal_ed6b32c58ffa7c43e9a2fac4ff2b4548dc71becea04ebb6eb1a5820f5f866ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ed6b32c58ffa7c43e9a2fac4ff2b4548dc71becea04ebb6eb1a5820f5f866ad0->leave($__internal_ed6b32c58ffa7c43e9a2fac4ff2b4548dc71becea04ebb6eb1a5820f5f866ad0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
    }
}
