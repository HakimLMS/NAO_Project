<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8c013ededfdd548338f365dbd26982edf74c72500a006320dd679711499bb0bf extends Twig_Template
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
        $__internal_8cf1e03e20fc94d8c784124143683e688c32d6e3fc5b54cbc94068962ac985be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf1e03e20fc94d8c784124143683e688c32d6e3fc5b54cbc94068962ac985be->enter($__internal_8cf1e03e20fc94d8c784124143683e688c32d6e3fc5b54cbc94068962ac985be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_18e5ec19c426db780962014dcf31d3e2c7ec2548e4b2016c8f1e0280d9e9656e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e5ec19c426db780962014dcf31d3e2c7ec2548e4b2016c8f1e0280d9e9656e->enter($__internal_18e5ec19c426db780962014dcf31d3e2c7ec2548e4b2016c8f1e0280d9e9656e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8cf1e03e20fc94d8c784124143683e688c32d6e3fc5b54cbc94068962ac985be->leave($__internal_8cf1e03e20fc94d8c784124143683e688c32d6e3fc5b54cbc94068962ac985be_prof);

        
        $__internal_18e5ec19c426db780962014dcf31d3e2c7ec2548e4b2016c8f1e0280d9e9656e->leave($__internal_18e5ec19c426db780962014dcf31d3e2c7ec2548e4b2016c8f1e0280d9e9656e_prof);

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
