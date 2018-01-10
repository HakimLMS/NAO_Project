<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_dbe79814f0282b0cea6499199ded1c21b38f8f73b364318b51a811a12b060609 extends Twig_Template
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
        $__internal_8c0e875c104c17720db328b465fb1c55c1e8be92904132da640d45258a305a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c0e875c104c17720db328b465fb1c55c1e8be92904132da640d45258a305a70->enter($__internal_8c0e875c104c17720db328b465fb1c55c1e8be92904132da640d45258a305a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_67350bfdeb951252f29eb5035343f165d25f238f55fa29350f59fd65f8ddf3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67350bfdeb951252f29eb5035343f165d25f238f55fa29350f59fd65f8ddf3e7->enter($__internal_67350bfdeb951252f29eb5035343f165d25f238f55fa29350f59fd65f8ddf3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8c0e875c104c17720db328b465fb1c55c1e8be92904132da640d45258a305a70->leave($__internal_8c0e875c104c17720db328b465fb1c55c1e8be92904132da640d45258a305a70_prof);

        
        $__internal_67350bfdeb951252f29eb5035343f165d25f238f55fa29350f59fd65f8ddf3e7->leave($__internal_67350bfdeb951252f29eb5035343f165d25f238f55fa29350f59fd65f8ddf3e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
