<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7cbdb7e5ba2bdd7e92570420984af2ac7be147b25716784697052dc2db4cc475 extends Twig_Template
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
        $__internal_89c043c03b674e8436a4e1cdd2e639b694bd0be0bcee7d0166f0ee4dfb1e71f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c043c03b674e8436a4e1cdd2e639b694bd0be0bcee7d0166f0ee4dfb1e71f3->enter($__internal_89c043c03b674e8436a4e1cdd2e639b694bd0be0bcee7d0166f0ee4dfb1e71f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_89c043c03b674e8436a4e1cdd2e639b694bd0be0bcee7d0166f0ee4dfb1e71f3->leave($__internal_89c043c03b674e8436a4e1cdd2e639b694bd0be0bcee7d0166f0ee4dfb1e71f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'url')) ?>
";
    }
}
