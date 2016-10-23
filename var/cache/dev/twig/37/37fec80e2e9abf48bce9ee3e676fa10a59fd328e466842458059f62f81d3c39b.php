<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e113c5ae8f9f693496af03da86b3354439a163560e5c756c8e1edabf1f489d41 extends Twig_Template
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
        $__internal_a8efae7665d08c4b1ebfb2655004fcddde27b7108d098164cd864efde16b3d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8efae7665d08c4b1ebfb2655004fcddde27b7108d098164cd864efde16b3d9f->enter($__internal_a8efae7665d08c4b1ebfb2655004fcddde27b7108d098164cd864efde16b3d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a8efae7665d08c4b1ebfb2655004fcddde27b7108d098164cd864efde16b3d9f->leave($__internal_a8efae7665d08c4b1ebfb2655004fcddde27b7108d098164cd864efde16b3d9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }
}
