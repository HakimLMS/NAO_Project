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
        $__internal_fe40c1846636e31ac45d356a44060e6f0a633e2518586821978672cce2d45539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe40c1846636e31ac45d356a44060e6f0a633e2518586821978672cce2d45539->enter($__internal_fe40c1846636e31ac45d356a44060e6f0a633e2518586821978672cce2d45539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_df05d8c765e62f159b224be9a1032365eca25a26fd50804bf792e53b08c030ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df05d8c765e62f159b224be9a1032365eca25a26fd50804bf792e53b08c030ea->enter($__internal_df05d8c765e62f159b224be9a1032365eca25a26fd50804bf792e53b08c030ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_fe40c1846636e31ac45d356a44060e6f0a633e2518586821978672cce2d45539->leave($__internal_fe40c1846636e31ac45d356a44060e6f0a633e2518586821978672cce2d45539_prof);

        
        $__internal_df05d8c765e62f159b224be9a1032365eca25a26fd50804bf792e53b08c030ea->leave($__internal_df05d8c765e62f159b224be9a1032365eca25a26fd50804bf792e53b08c030ea_prof);

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
