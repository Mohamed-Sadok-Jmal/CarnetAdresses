<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_488870e27b8f36ae58cec9a8d95ddcede287616de4aad56c65da65c6c43e6850 extends Twig_Template
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
        $__internal_772c7613cea7a21130c6262d50e064cdba8372c71c896b77972eacf29dec45f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772c7613cea7a21130c6262d50e064cdba8372c71c896b77972eacf29dec45f3->enter($__internal_772c7613cea7a21130c6262d50e064cdba8372c71c896b77972eacf29dec45f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_772c7613cea7a21130c6262d50e064cdba8372c71c896b77972eacf29dec45f3->leave($__internal_772c7613cea7a21130c6262d50e064cdba8372c71c896b77972eacf29dec45f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
