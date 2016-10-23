<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_eeaaf11ee1a0cde32d25a9fb112bcc3074c51a4526a18e11ac6d24d585af2e65 extends Twig_Template
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
        $__internal_c1924a9333cc8261f46b7dfa8d9edb645e85d56f0f84c2c4bd55a73fb70a83e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1924a9333cc8261f46b7dfa8d9edb645e85d56f0f84c2c4bd55a73fb70a83e2->enter($__internal_c1924a9333cc8261f46b7dfa8d9edb645e85d56f0f84c2c4bd55a73fb70a83e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c1924a9333cc8261f46b7dfa8d9edb645e85d56f0f84c2c4bd55a73fb70a83e2->leave($__internal_c1924a9333cc8261f46b7dfa8d9edb645e85d56f0f84c2c4bd55a73fb70a83e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
    }
}
