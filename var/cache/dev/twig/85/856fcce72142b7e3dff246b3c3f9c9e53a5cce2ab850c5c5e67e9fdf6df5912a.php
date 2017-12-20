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
        $__internal_3b8e59014dffd420391c049345664b542d4051f885695fb6b043291969b30d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8e59014dffd420391c049345664b542d4051f885695fb6b043291969b30d0e->enter($__internal_3b8e59014dffd420391c049345664b542d4051f885695fb6b043291969b30d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_86435bb7a1be7a4fe5aade4d4ddbe3a1e3d8ce982d4b44db01c996bd54084592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86435bb7a1be7a4fe5aade4d4ddbe3a1e3d8ce982d4b44db01c996bd54084592->enter($__internal_86435bb7a1be7a4fe5aade4d4ddbe3a1e3d8ce982d4b44db01c996bd54084592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_3b8e59014dffd420391c049345664b542d4051f885695fb6b043291969b30d0e->leave($__internal_3b8e59014dffd420391c049345664b542d4051f885695fb6b043291969b30d0e_prof);

        
        $__internal_86435bb7a1be7a4fe5aade4d4ddbe3a1e3d8ce982d4b44db01c996bd54084592->leave($__internal_86435bb7a1be7a4fe5aade4d4ddbe3a1e3d8ce982d4b44db01c996bd54084592_prof);

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
