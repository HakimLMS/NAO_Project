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
        $__internal_b3dfc4a3690492e5f7f816e8fd272b74446e087918301218349c7a5f65960b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3dfc4a3690492e5f7f816e8fd272b74446e087918301218349c7a5f65960b9b->enter($__internal_b3dfc4a3690492e5f7f816e8fd272b74446e087918301218349c7a5f65960b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_198b9707748195d37d8937e0eb8594a2a4c010e032617ea50a75d962573e4cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198b9707748195d37d8937e0eb8594a2a4c010e032617ea50a75d962573e4cf0->enter($__internal_198b9707748195d37d8937e0eb8594a2a4c010e032617ea50a75d962573e4cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b3dfc4a3690492e5f7f816e8fd272b74446e087918301218349c7a5f65960b9b->leave($__internal_b3dfc4a3690492e5f7f816e8fd272b74446e087918301218349c7a5f65960b9b_prof);

        
        $__internal_198b9707748195d37d8937e0eb8594a2a4c010e032617ea50a75d962573e4cf0->leave($__internal_198b9707748195d37d8937e0eb8594a2a4c010e032617ea50a75d962573e4cf0_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
