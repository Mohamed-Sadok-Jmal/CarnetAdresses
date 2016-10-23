<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_0917a84420ad9b972e474fbbcc82688dab47d760e057d1d82b8abc6e2292dc02 extends Twig_Template
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
        $__internal_8c045a35dac4523870d96b08447111640b2004cff213bba8da004827961a1b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c045a35dac4523870d96b08447111640b2004cff213bba8da004827961a1b90->enter($__internal_8c045a35dac4523870d96b08447111640b2004cff213bba8da004827961a1b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8c045a35dac4523870d96b08447111640b2004cff213bba8da004827961a1b90->leave($__internal_8c045a35dac4523870d96b08447111640b2004cff213bba8da004827961a1b90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
    }
}
