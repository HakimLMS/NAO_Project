<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ffe92f19597278f5166115e886d83a5021239eed17ce680c52920148694321e extends Twig_Template
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
        $__internal_2da7d98154901cf7d840b45c9f2fcb8fb6e601e5ff47fa90db8c1da5cc7f6450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da7d98154901cf7d840b45c9f2fcb8fb6e601e5ff47fa90db8c1da5cc7f6450->enter($__internal_2da7d98154901cf7d840b45c9f2fcb8fb6e601e5ff47fa90db8c1da5cc7f6450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_86b6faa039ebf2cb0d50daae0b6722ec54dd2557f4e81c6f7ec080025302720e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86b6faa039ebf2cb0d50daae0b6722ec54dd2557f4e81c6f7ec080025302720e->enter($__internal_86b6faa039ebf2cb0d50daae0b6722ec54dd2557f4e81c6f7ec080025302720e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2da7d98154901cf7d840b45c9f2fcb8fb6e601e5ff47fa90db8c1da5cc7f6450->leave($__internal_2da7d98154901cf7d840b45c9f2fcb8fb6e601e5ff47fa90db8c1da5cc7f6450_prof);

        
        $__internal_86b6faa039ebf2cb0d50daae0b6722ec54dd2557f4e81c6f7ec080025302720e->leave($__internal_86b6faa039ebf2cb0d50daae0b6722ec54dd2557f4e81c6f7ec080025302720e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
