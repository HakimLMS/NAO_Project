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
        $__internal_0f651f5c41bc791ac89205dfee9d38fd7a91a75c9065bc8df4a3d8bd222606ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f651f5c41bc791ac89205dfee9d38fd7a91a75c9065bc8df4a3d8bd222606ff->enter($__internal_0f651f5c41bc791ac89205dfee9d38fd7a91a75c9065bc8df4a3d8bd222606ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_666e34e9bf75f8d30e14ae53855a18db31f46b27434f9c8179f36bf994c42093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666e34e9bf75f8d30e14ae53855a18db31f46b27434f9c8179f36bf994c42093->enter($__internal_666e34e9bf75f8d30e14ae53855a18db31f46b27434f9c8179f36bf994c42093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0f651f5c41bc791ac89205dfee9d38fd7a91a75c9065bc8df4a3d8bd222606ff->leave($__internal_0f651f5c41bc791ac89205dfee9d38fd7a91a75c9065bc8df4a3d8bd222606ff_prof);

        
        $__internal_666e34e9bf75f8d30e14ae53855a18db31f46b27434f9c8179f36bf994c42093->leave($__internal_666e34e9bf75f8d30e14ae53855a18db31f46b27434f9c8179f36bf994c42093_prof);

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
