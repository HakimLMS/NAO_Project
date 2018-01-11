<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2801eb251d4aefb798ff649cf0d600f09869ec165956b272fa833146214f8e55 extends Twig_Template
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
        $__internal_07203f52cd90677c3f23cb883c6c8bd3b61209fa4e3043f3820169a9e7112708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07203f52cd90677c3f23cb883c6c8bd3b61209fa4e3043f3820169a9e7112708->enter($__internal_07203f52cd90677c3f23cb883c6c8bd3b61209fa4e3043f3820169a9e7112708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_84305e04a264cf415a44698e70df84dc7b046257554808b598ebc7ed6125ffa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84305e04a264cf415a44698e70df84dc7b046257554808b598ebc7ed6125ffa5->enter($__internal_84305e04a264cf415a44698e70df84dc7b046257554808b598ebc7ed6125ffa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_07203f52cd90677c3f23cb883c6c8bd3b61209fa4e3043f3820169a9e7112708->leave($__internal_07203f52cd90677c3f23cb883c6c8bd3b61209fa4e3043f3820169a9e7112708_prof);

        
        $__internal_84305e04a264cf415a44698e70df84dc7b046257554808b598ebc7ed6125ffa5->leave($__internal_84305e04a264cf415a44698e70df84dc7b046257554808b598ebc7ed6125ffa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
