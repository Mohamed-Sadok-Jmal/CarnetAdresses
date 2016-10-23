<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5ea69169a8052c1bae3367bf684b09e3b50361ab26fb37cd3fb2f169d6b6ed59 extends Twig_Template
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
        $__internal_9dfcf0f19c63d9a406ecec3b6e8afd86bcf4732435e5ecd19afeb56410c34c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dfcf0f19c63d9a406ecec3b6e8afd86bcf4732435e5ecd19afeb56410c34c10->enter($__internal_9dfcf0f19c63d9a406ecec3b6e8afd86bcf4732435e5ecd19afeb56410c34c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9dfcf0f19c63d9a406ecec3b6e8afd86bcf4732435e5ecd19afeb56410c34c10->leave($__internal_9dfcf0f19c63d9a406ecec3b6e8afd86bcf4732435e5ecd19afeb56410c34c10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
    }
}
