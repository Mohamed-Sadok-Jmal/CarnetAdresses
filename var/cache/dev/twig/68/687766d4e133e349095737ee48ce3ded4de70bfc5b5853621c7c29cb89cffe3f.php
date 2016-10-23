<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3cb273375e84ef5673d6ec088a0257620d9ea637c1ed2a8ac1e63102bc8e4fe3 extends Twig_Template
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
        $__internal_286ac630e760cf44a7cd417b559b225c0ba6e0cd1745cf1f9c520c6f73bfb531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286ac630e760cf44a7cd417b559b225c0ba6e0cd1745cf1f9c520c6f73bfb531->enter($__internal_286ac630e760cf44a7cd417b559b225c0ba6e0cd1745cf1f9c520c6f73bfb531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_286ac630e760cf44a7cd417b559b225c0ba6e0cd1745cf1f9c520c6f73bfb531->leave($__internal_286ac630e760cf44a7cd417b559b225c0ba6e0cd1745cf1f9c520c6f73bfb531_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
    }
}
