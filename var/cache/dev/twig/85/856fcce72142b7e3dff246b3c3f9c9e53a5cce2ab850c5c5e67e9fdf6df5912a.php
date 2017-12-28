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
        $__internal_add722f2fa756e6281afda8ac5d3ea88785371162518fb55e7bce7860de511ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add722f2fa756e6281afda8ac5d3ea88785371162518fb55e7bce7860de511ef->enter($__internal_add722f2fa756e6281afda8ac5d3ea88785371162518fb55e7bce7860de511ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_51c4c03dae47a4f9ef3059666155a6e86bf070a4dce43bafb90320ed0d3ecd3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c4c03dae47a4f9ef3059666155a6e86bf070a4dce43bafb90320ed0d3ecd3f->enter($__internal_51c4c03dae47a4f9ef3059666155a6e86bf070a4dce43bafb90320ed0d3ecd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_add722f2fa756e6281afda8ac5d3ea88785371162518fb55e7bce7860de511ef->leave($__internal_add722f2fa756e6281afda8ac5d3ea88785371162518fb55e7bce7860de511ef_prof);

        
        $__internal_51c4c03dae47a4f9ef3059666155a6e86bf070a4dce43bafb90320ed0d3ecd3f->leave($__internal_51c4c03dae47a4f9ef3059666155a6e86bf070a4dce43bafb90320ed0d3ecd3f_prof);

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
