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
        $__internal_4860ba8b20f3fdb739a96b706f46854046776a2df2a5a6baeb74bf38448cfeb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4860ba8b20f3fdb739a96b706f46854046776a2df2a5a6baeb74bf38448cfeb0->enter($__internal_4860ba8b20f3fdb739a96b706f46854046776a2df2a5a6baeb74bf38448cfeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4e63c34d8f48b7f3cce0e013de8d1ebe6f3d463b9334a1ec6cd3d899504c1a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e63c34d8f48b7f3cce0e013de8d1ebe6f3d463b9334a1ec6cd3d899504c1a67->enter($__internal_4e63c34d8f48b7f3cce0e013de8d1ebe6f3d463b9334a1ec6cd3d899504c1a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4860ba8b20f3fdb739a96b706f46854046776a2df2a5a6baeb74bf38448cfeb0->leave($__internal_4860ba8b20f3fdb739a96b706f46854046776a2df2a5a6baeb74bf38448cfeb0_prof);

        
        $__internal_4e63c34d8f48b7f3cce0e013de8d1ebe6f3d463b9334a1ec6cd3d899504c1a67->leave($__internal_4e63c34d8f48b7f3cce0e013de8d1ebe6f3d463b9334a1ec6cd3d899504c1a67_prof);

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
