<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2f781b7660c2146f506e8273bbddfd9634abf497c1b3a9d7d52a5aac2d834241 extends Twig_Template
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
        $__internal_9cd3cde8a4c02d0783946538b3466dae24498c980196f3edb0fc41b0bed4dad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd3cde8a4c02d0783946538b3466dae24498c980196f3edb0fc41b0bed4dad8->enter($__internal_9cd3cde8a4c02d0783946538b3466dae24498c980196f3edb0fc41b0bed4dad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9cd3cde8a4c02d0783946538b3466dae24498c980196f3edb0fc41b0bed4dad8->leave($__internal_9cd3cde8a4c02d0783946538b3466dae24498c980196f3edb0fc41b0bed4dad8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
    }
}
