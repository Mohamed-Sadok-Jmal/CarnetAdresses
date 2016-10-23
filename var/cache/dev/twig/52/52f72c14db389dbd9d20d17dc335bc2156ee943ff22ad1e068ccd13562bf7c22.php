<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_eb7dbdc49392b321f4942dd44a00901c27c14feb3876b6b8a852b9ed37d7f5e4 extends Twig_Template
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
        $__internal_749f867a38de777342a5b62721929d88e01584cc5e255ae48c18e3fe39dfc940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749f867a38de777342a5b62721929d88e01584cc5e255ae48c18e3fe39dfc940->enter($__internal_749f867a38de777342a5b62721929d88e01584cc5e255ae48c18e3fe39dfc940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_749f867a38de777342a5b62721929d88e01584cc5e255ae48c18e3fe39dfc940->leave($__internal_749f867a38de777342a5b62721929d88e01584cc5e255ae48c18e3fe39dfc940_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
    }
}
