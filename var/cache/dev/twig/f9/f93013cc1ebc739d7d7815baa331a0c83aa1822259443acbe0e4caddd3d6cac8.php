<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_96cf16723a9e3744f30017e8072fc24e00dbc37f21a1f4850437413a13043bb0 extends Twig_Template
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
        $__internal_e296c1abc0595f419b81ecad3391b88f9a9e648ea2e1b2bef4be4764249ac89e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e296c1abc0595f419b81ecad3391b88f9a9e648ea2e1b2bef4be4764249ac89e->enter($__internal_e296c1abc0595f419b81ecad3391b88f9a9e648ea2e1b2bef4be4764249ac89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e296c1abc0595f419b81ecad3391b88f9a9e648ea2e1b2bef4be4764249ac89e->leave($__internal_e296c1abc0595f419b81ecad3391b88f9a9e648ea2e1b2bef4be4764249ac89e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
