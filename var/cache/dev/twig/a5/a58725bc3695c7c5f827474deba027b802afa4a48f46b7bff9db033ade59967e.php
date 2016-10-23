<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_bde55409fd620fa6699019e05f3cb36ca92b77a030b5be277e68628c26c0097b extends Twig_Template
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
        $__internal_75b86d26a08930910bb450ddae2b35b392c655c98f6b6f51d50774ab1a60aaed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b86d26a08930910bb450ddae2b35b392c655c98f6b6f51d50774ab1a60aaed->enter($__internal_75b86d26a08930910bb450ddae2b35b392c655c98f6b6f51d50774ab1a60aaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_75b86d26a08930910bb450ddae2b35b392c655c98f6b6f51d50774ab1a60aaed->leave($__internal_75b86d26a08930910bb450ddae2b35b392c655c98f6b6f51d50774ab1a60aaed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
    }
}
