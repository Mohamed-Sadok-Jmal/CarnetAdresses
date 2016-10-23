<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2e066ab57c6f950b1e3f6539622a344273944a4d831906737f1358144fba0a1d extends Twig_Template
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
        $__internal_1cb5151187e7c67de025eea09eb5f5a03da3027df8893ce7cab78c00ad34ea1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb5151187e7c67de025eea09eb5f5a03da3027df8893ce7cab78c00ad34ea1e->enter($__internal_1cb5151187e7c67de025eea09eb5f5a03da3027df8893ce7cab78c00ad34ea1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_1cb5151187e7c67de025eea09eb5f5a03da3027df8893ce7cab78c00ad34ea1e->leave($__internal_1cb5151187e7c67de025eea09eb5f5a03da3027df8893ce7cab78c00ad34ea1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
    }
}
