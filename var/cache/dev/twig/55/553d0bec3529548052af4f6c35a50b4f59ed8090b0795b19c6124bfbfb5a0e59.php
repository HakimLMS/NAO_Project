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
        $__internal_d6f2c83309eb9b03148416c1d7196e37048c790d12f30bee187a101b5cda6a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f2c83309eb9b03148416c1d7196e37048c790d12f30bee187a101b5cda6a54->enter($__internal_d6f2c83309eb9b03148416c1d7196e37048c790d12f30bee187a101b5cda6a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_89bbfd65b6fd543bec018379d7bb41f47c6608beccba0705987713f207dab408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89bbfd65b6fd543bec018379d7bb41f47c6608beccba0705987713f207dab408->enter($__internal_89bbfd65b6fd543bec018379d7bb41f47c6608beccba0705987713f207dab408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_d6f2c83309eb9b03148416c1d7196e37048c790d12f30bee187a101b5cda6a54->leave($__internal_d6f2c83309eb9b03148416c1d7196e37048c790d12f30bee187a101b5cda6a54_prof);

        
        $__internal_89bbfd65b6fd543bec018379d7bb41f47c6608beccba0705987713f207dab408->leave($__internal_89bbfd65b6fd543bec018379d7bb41f47c6608beccba0705987713f207dab408_prof);

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
