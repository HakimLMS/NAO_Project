<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b648f8a55138f24463339b839bf659b1d8c8632e2d50760a7f9cc8301ab65fd extends Twig_Template
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
        $__internal_50cd99dc9aba3d06133ae02481897d4b10be6f851a5294ca6cb18f0084f67eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cd99dc9aba3d06133ae02481897d4b10be6f851a5294ca6cb18f0084f67eb9->enter($__internal_50cd99dc9aba3d06133ae02481897d4b10be6f851a5294ca6cb18f0084f67eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_bd07d8fe5f1230582ac65b05cb8696443b7b68d7925ff13ad82f996f860a1184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd07d8fe5f1230582ac65b05cb8696443b7b68d7925ff13ad82f996f860a1184->enter($__internal_bd07d8fe5f1230582ac65b05cb8696443b7b68d7925ff13ad82f996f860a1184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_50cd99dc9aba3d06133ae02481897d4b10be6f851a5294ca6cb18f0084f67eb9->leave($__internal_50cd99dc9aba3d06133ae02481897d4b10be6f851a5294ca6cb18f0084f67eb9_prof);

        
        $__internal_bd07d8fe5f1230582ac65b05cb8696443b7b68d7925ff13ad82f996f860a1184->leave($__internal_bd07d8fe5f1230582ac65b05cb8696443b7b68d7925ff13ad82f996f860a1184_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
