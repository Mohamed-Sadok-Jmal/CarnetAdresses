<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_75d38a310b8dd185171b6474628b1ce66d7d25a7b2cb24fce972d39546236108 extends Twig_Template
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
        $__internal_e83653180acf6154d5d1a5856253d32b2998363d9963a8df497a611aabe10afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e83653180acf6154d5d1a5856253d32b2998363d9963a8df497a611aabe10afa->enter($__internal_e83653180acf6154d5d1a5856253d32b2998363d9963a8df497a611aabe10afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e83653180acf6154d5d1a5856253d32b2998363d9963a8df497a611aabe10afa->leave($__internal_e83653180acf6154d5d1a5856253d32b2998363d9963a8df497a611aabe10afa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
