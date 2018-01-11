<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c551e3336fcd8dcb9dc56daa5a568e8e82af37aca6fdb500b626416b87c4f659 extends Twig_Template
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
        $__internal_1c9f3d77bc3a668f89785ec00908c4b21628dc3a81cd1200b0b4c2ea4d98c5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9f3d77bc3a668f89785ec00908c4b21628dc3a81cd1200b0b4c2ea4d98c5bf->enter($__internal_1c9f3d77bc3a668f89785ec00908c4b21628dc3a81cd1200b0b4c2ea4d98c5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_68630925b5cd074066ac9a16c3d7118dfb5c3a19ab97b0cfb8277ad86d0c8a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68630925b5cd074066ac9a16c3d7118dfb5c3a19ab97b0cfb8277ad86d0c8a1a->enter($__internal_68630925b5cd074066ac9a16c3d7118dfb5c3a19ab97b0cfb8277ad86d0c8a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_1c9f3d77bc3a668f89785ec00908c4b21628dc3a81cd1200b0b4c2ea4d98c5bf->leave($__internal_1c9f3d77bc3a668f89785ec00908c4b21628dc3a81cd1200b0b4c2ea4d98c5bf_prof);

        
        $__internal_68630925b5cd074066ac9a16c3d7118dfb5c3a19ab97b0cfb8277ad86d0c8a1a->leave($__internal_68630925b5cd074066ac9a16c3d7118dfb5c3a19ab97b0cfb8277ad86d0c8a1a_prof);

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
