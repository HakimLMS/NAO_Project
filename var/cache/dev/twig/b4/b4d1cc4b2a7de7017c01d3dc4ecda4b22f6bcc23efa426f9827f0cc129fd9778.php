<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fe9da6a346bfd605db31a21f20134cb92f2e57df31e5905ddb2bde0649c8bf1c extends Twig_Template
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
        $__internal_7f5f81622a1f9a4ee6303cf8d53131a3b5c8aa165818f0b8ab07d3d99bb609d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5f81622a1f9a4ee6303cf8d53131a3b5c8aa165818f0b8ab07d3d99bb609d3->enter($__internal_7f5f81622a1f9a4ee6303cf8d53131a3b5c8aa165818f0b8ab07d3d99bb609d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6410d6fa22299de6eb921a7328b419aa5a166e56f84be7581bca5b71a8f8b650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6410d6fa22299de6eb921a7328b419aa5a166e56f84be7581bca5b71a8f8b650->enter($__internal_6410d6fa22299de6eb921a7328b419aa5a166e56f84be7581bca5b71a8f8b650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_7f5f81622a1f9a4ee6303cf8d53131a3b5c8aa165818f0b8ab07d3d99bb609d3->leave($__internal_7f5f81622a1f9a4ee6303cf8d53131a3b5c8aa165818f0b8ab07d3d99bb609d3_prof);

        
        $__internal_6410d6fa22299de6eb921a7328b419aa5a166e56f84be7581bca5b71a8f8b650->leave($__internal_6410d6fa22299de6eb921a7328b419aa5a166e56f84be7581bca5b71a8f8b650_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
