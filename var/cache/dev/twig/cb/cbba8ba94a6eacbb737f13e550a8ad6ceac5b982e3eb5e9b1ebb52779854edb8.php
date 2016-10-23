<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f0e0d5533c6066dfc5a9b02032d289b3774317bfb2ead03ed937a2b85dbe379f extends Twig_Template
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
        $__internal_5b826546d711cab0c68c5b66bdf64310aa491962af9887b0b7ea7559d6b08deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b826546d711cab0c68c5b66bdf64310aa491962af9887b0b7ea7559d6b08deb->enter($__internal_5b826546d711cab0c68c5b66bdf64310aa491962af9887b0b7ea7559d6b08deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_5b826546d711cab0c68c5b66bdf64310aa491962af9887b0b7ea7559d6b08deb->leave($__internal_5b826546d711cab0c68c5b66bdf64310aa491962af9887b0b7ea7559d6b08deb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
