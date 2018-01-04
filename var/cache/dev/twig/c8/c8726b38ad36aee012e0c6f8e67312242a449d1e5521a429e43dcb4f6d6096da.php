<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_80ef58ed6a679c748733376ba4aa7115b9438be19eac5712f7854767f689cf68 extends Twig_Template
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
        $__internal_82c6934ab0915d28a3ed39172c31949213cca926e6070c707edf22bf3c8f74ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c6934ab0915d28a3ed39172c31949213cca926e6070c707edf22bf3c8f74ae->enter($__internal_82c6934ab0915d28a3ed39172c31949213cca926e6070c707edf22bf3c8f74ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_98a7e8873704cf3afdea288b22f06712e350b56eab981ab13ee46ecad1f9f48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a7e8873704cf3afdea288b22f06712e350b56eab981ab13ee46ecad1f9f48a->enter($__internal_98a7e8873704cf3afdea288b22f06712e350b56eab981ab13ee46ecad1f9f48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_82c6934ab0915d28a3ed39172c31949213cca926e6070c707edf22bf3c8f74ae->leave($__internal_82c6934ab0915d28a3ed39172c31949213cca926e6070c707edf22bf3c8f74ae_prof);

        
        $__internal_98a7e8873704cf3afdea288b22f06712e350b56eab981ab13ee46ecad1f9f48a->leave($__internal_98a7e8873704cf3afdea288b22f06712e350b56eab981ab13ee46ecad1f9f48a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
