<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3b569a9a975c224bc21a9d5d03703963c73a9564fe857ae3b5e47f709ef5f910 extends Twig_Template
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
        $__internal_93b77773b5cf20eb68ca02acb6176600c359d416ce298a3c89f4751a0eb93b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b77773b5cf20eb68ca02acb6176600c359d416ce298a3c89f4751a0eb93b5c->enter($__internal_93b77773b5cf20eb68ca02acb6176600c359d416ce298a3c89f4751a0eb93b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_93b77773b5cf20eb68ca02acb6176600c359d416ce298a3c89f4751a0eb93b5c->leave($__internal_93b77773b5cf20eb68ca02acb6176600c359d416ce298a3c89f4751a0eb93b5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
    }
}
