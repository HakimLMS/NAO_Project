<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_9e417e9835b218452b31ba26cda5119878fa069c4b19d64c052d3b64f8f99f41 extends Twig_Template
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
        $__internal_87d9cfa25b22be920b619c88fa2f07688a4b9ec815fc8677a6e3f002b532c117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d9cfa25b22be920b619c88fa2f07688a4b9ec815fc8677a6e3f002b532c117->enter($__internal_87d9cfa25b22be920b619c88fa2f07688a4b9ec815fc8677a6e3f002b532c117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_130be6a979269ca4c87199e0a8717583f11e0c2e0a3579b694b3a40ea23c39ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130be6a979269ca4c87199e0a8717583f11e0c2e0a3579b694b3a40ea23c39ee->enter($__internal_130be6a979269ca4c87199e0a8717583f11e0c2e0a3579b694b3a40ea23c39ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_87d9cfa25b22be920b619c88fa2f07688a4b9ec815fc8677a6e3f002b532c117->leave($__internal_87d9cfa25b22be920b619c88fa2f07688a4b9ec815fc8677a6e3f002b532c117_prof);

        
        $__internal_130be6a979269ca4c87199e0a8717583f11e0c2e0a3579b694b3a40ea23c39ee->leave($__internal_130be6a979269ca4c87199e0a8717583f11e0c2e0a3579b694b3a40ea23c39ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
