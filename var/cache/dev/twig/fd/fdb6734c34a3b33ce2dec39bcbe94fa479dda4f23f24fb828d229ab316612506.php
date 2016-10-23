<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7cc7842b65369918ffd1a1a91d1f2e32c2534dc51c34fa65e29dcdb9c8c25116 extends Twig_Template
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
        $__internal_b7562af32e252d82162db5f4ded89cce9fad0890fe7233d1b68accb86248c5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7562af32e252d82162db5f4ded89cce9fad0890fe7233d1b68accb86248c5fa->enter($__internal_b7562af32e252d82162db5f4ded89cce9fad0890fe7233d1b68accb86248c5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b7562af32e252d82162db5f4ded89cce9fad0890fe7233d1b68accb86248c5fa->leave($__internal_b7562af32e252d82162db5f4ded89cce9fad0890fe7233d1b68accb86248c5fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
    }
}
