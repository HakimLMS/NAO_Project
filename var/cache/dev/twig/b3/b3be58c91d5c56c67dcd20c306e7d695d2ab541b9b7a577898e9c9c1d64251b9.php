<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_3bc09884a31fe565789c1d15cdc2d91a86bfe1b1acb7d7fcdb0f52722cb85fd5 extends Twig_Template
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
        $__internal_76bde311e96a51d6a707bf845a6d815f890cbd7a4d95f16db99783e3082e7fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bde311e96a51d6a707bf845a6d815f890cbd7a4d95f16db99783e3082e7fc1->enter($__internal_76bde311e96a51d6a707bf845a6d815f890cbd7a4d95f16db99783e3082e7fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_c46493666b1691ddfcc2b0a14f6ecaa09ee1ca09669dc76943fe415b2edfe329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46493666b1691ddfcc2b0a14f6ecaa09ee1ca09669dc76943fe415b2edfe329->enter($__internal_c46493666b1691ddfcc2b0a14f6ecaa09ee1ca09669dc76943fe415b2edfe329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_76bde311e96a51d6a707bf845a6d815f890cbd7a4d95f16db99783e3082e7fc1->leave($__internal_76bde311e96a51d6a707bf845a6d815f890cbd7a4d95f16db99783e3082e7fc1_prof);

        
        $__internal_c46493666b1691ddfcc2b0a14f6ecaa09ee1ca09669dc76943fe415b2edfe329->leave($__internal_c46493666b1691ddfcc2b0a14f6ecaa09ee1ca09669dc76943fe415b2edfe329_prof);

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
