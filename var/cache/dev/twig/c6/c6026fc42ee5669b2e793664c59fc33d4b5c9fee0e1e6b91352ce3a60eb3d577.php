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
        $__internal_833370c4657e2e3d04aafe4d2394c396f5835c83c0d071b9ed59ad436c1918d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833370c4657e2e3d04aafe4d2394c396f5835c83c0d071b9ed59ad436c1918d1->enter($__internal_833370c4657e2e3d04aafe4d2394c396f5835c83c0d071b9ed59ad436c1918d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_63862187c29281e91df7b9d811e83dd5409447ba1dc9a6526c3d8dcb0530d650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63862187c29281e91df7b9d811e83dd5409447ba1dc9a6526c3d8dcb0530d650->enter($__internal_63862187c29281e91df7b9d811e83dd5409447ba1dc9a6526c3d8dcb0530d650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_833370c4657e2e3d04aafe4d2394c396f5835c83c0d071b9ed59ad436c1918d1->leave($__internal_833370c4657e2e3d04aafe4d2394c396f5835c83c0d071b9ed59ad436c1918d1_prof);

        
        $__internal_63862187c29281e91df7b9d811e83dd5409447ba1dc9a6526c3d8dcb0530d650->leave($__internal_63862187c29281e91df7b9d811e83dd5409447ba1dc9a6526c3d8dcb0530d650_prof);

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
