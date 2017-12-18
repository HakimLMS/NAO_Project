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
        $__internal_6147854e278563ae871fdad1eaf7d1af15500ef54b1c24ae11854be34b472892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6147854e278563ae871fdad1eaf7d1af15500ef54b1c24ae11854be34b472892->enter($__internal_6147854e278563ae871fdad1eaf7d1af15500ef54b1c24ae11854be34b472892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_cee26aa1489c1c39edccea9cc37dd1fbd67c8f87d2115594a338be72753761ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee26aa1489c1c39edccea9cc37dd1fbd67c8f87d2115594a338be72753761ed->enter($__internal_cee26aa1489c1c39edccea9cc37dd1fbd67c8f87d2115594a338be72753761ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6147854e278563ae871fdad1eaf7d1af15500ef54b1c24ae11854be34b472892->leave($__internal_6147854e278563ae871fdad1eaf7d1af15500ef54b1c24ae11854be34b472892_prof);

        
        $__internal_cee26aa1489c1c39edccea9cc37dd1fbd67c8f87d2115594a338be72753761ed->leave($__internal_cee26aa1489c1c39edccea9cc37dd1fbd67c8f87d2115594a338be72753761ed_prof);

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
", "@Framework/FormTable/button_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
