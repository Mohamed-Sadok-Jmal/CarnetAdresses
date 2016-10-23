<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8d9b6156da7fc110b33bcbb3d7f01aff8883f3ff8caf976cb9106cec90677c2f extends Twig_Template
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
        $__internal_59dbbe53c64a0bbfa73439104e67d8029c814615698be4ce39f8382dcb322d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59dbbe53c64a0bbfa73439104e67d8029c814615698be4ce39f8382dcb322d4b->enter($__internal_59dbbe53c64a0bbfa73439104e67d8029c814615698be4ce39f8382dcb322d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_59dbbe53c64a0bbfa73439104e67d8029c814615698be4ce39f8382dcb322d4b->leave($__internal_59dbbe53c64a0bbfa73439104e67d8029c814615698be4ce39f8382dcb322d4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
    }
}
