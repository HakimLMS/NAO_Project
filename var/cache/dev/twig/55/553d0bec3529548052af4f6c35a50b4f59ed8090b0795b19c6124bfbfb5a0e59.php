<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_afa1a892f2097b2e148133ea89cdc2c0f6a677118a66aa8ddd6234a06ac03516 extends Twig_Template
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
        $__internal_a07f41b75608322a1786709fa74d652922069cb95cc3bc0faa57a1c9e5437d1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07f41b75608322a1786709fa74d652922069cb95cc3bc0faa57a1c9e5437d1d->enter($__internal_a07f41b75608322a1786709fa74d652922069cb95cc3bc0faa57a1c9e5437d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_1ff6e250ffd24f81a86bdf7e776999128a639a06f686c5919e49aefccc26b980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff6e250ffd24f81a86bdf7e776999128a639a06f686c5919e49aefccc26b980->enter($__internal_1ff6e250ffd24f81a86bdf7e776999128a639a06f686c5919e49aefccc26b980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a07f41b75608322a1786709fa74d652922069cb95cc3bc0faa57a1c9e5437d1d->leave($__internal_a07f41b75608322a1786709fa74d652922069cb95cc3bc0faa57a1c9e5437d1d_prof);

        
        $__internal_1ff6e250ffd24f81a86bdf7e776999128a639a06f686c5919e49aefccc26b980->leave($__internal_1ff6e250ffd24f81a86bdf7e776999128a639a06f686c5919e49aefccc26b980_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
