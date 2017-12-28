<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_07893b9e4bc18711a6736bb17eb6a5e28f2fdc0d1c2d33afc723b396a4f78aaf extends Twig_Template
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
        $__internal_71a5be90e3e633b6db5cdebb482333429e7de4b97dab2f7f4b10c32c115cc777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71a5be90e3e633b6db5cdebb482333429e7de4b97dab2f7f4b10c32c115cc777->enter($__internal_71a5be90e3e633b6db5cdebb482333429e7de4b97dab2f7f4b10c32c115cc777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_37fc08ef72b73dd268f6a34c7eded24ac4ad33be058d7f692c035ea2fb86999a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fc08ef72b73dd268f6a34c7eded24ac4ad33be058d7f692c035ea2fb86999a->enter($__internal_37fc08ef72b73dd268f6a34c7eded24ac4ad33be058d7f692c035ea2fb86999a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_71a5be90e3e633b6db5cdebb482333429e7de4b97dab2f7f4b10c32c115cc777->leave($__internal_71a5be90e3e633b6db5cdebb482333429e7de4b97dab2f7f4b10c32c115cc777_prof);

        
        $__internal_37fc08ef72b73dd268f6a34c7eded24ac4ad33be058d7f692c035ea2fb86999a->leave($__internal_37fc08ef72b73dd268f6a34c7eded24ac4ad33be058d7f692c035ea2fb86999a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
