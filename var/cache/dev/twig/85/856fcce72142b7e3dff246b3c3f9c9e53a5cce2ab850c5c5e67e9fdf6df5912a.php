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
        $__internal_ab438e064a84e39f60122644a2e11e1cd97b36fa69c70b82929eeb80657c1aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab438e064a84e39f60122644a2e11e1cd97b36fa69c70b82929eeb80657c1aa6->enter($__internal_ab438e064a84e39f60122644a2e11e1cd97b36fa69c70b82929eeb80657c1aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ffe807e399ff6eee2f44f18219c0f5641ec878bdbcc116d52c35521f132c16e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe807e399ff6eee2f44f18219c0f5641ec878bdbcc116d52c35521f132c16e9->enter($__internal_ffe807e399ff6eee2f44f18219c0f5641ec878bdbcc116d52c35521f132c16e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ab438e064a84e39f60122644a2e11e1cd97b36fa69c70b82929eeb80657c1aa6->leave($__internal_ab438e064a84e39f60122644a2e11e1cd97b36fa69c70b82929eeb80657c1aa6_prof);

        
        $__internal_ffe807e399ff6eee2f44f18219c0f5641ec878bdbcc116d52c35521f132c16e9->leave($__internal_ffe807e399ff6eee2f44f18219c0f5641ec878bdbcc116d52c35521f132c16e9_prof);

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
