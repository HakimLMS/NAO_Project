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
        $__internal_e62be7f6c51a54ff6af2c144e82db4380af7a71e8f2c512dc61d8fce00ec3a4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62be7f6c51a54ff6af2c144e82db4380af7a71e8f2c512dc61d8fce00ec3a4f->enter($__internal_e62be7f6c51a54ff6af2c144e82db4380af7a71e8f2c512dc61d8fce00ec3a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_869b6d4f35c27615d53b00d7c568fb938e7a0fb4a6b02abf9c51763e6a313430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869b6d4f35c27615d53b00d7c568fb938e7a0fb4a6b02abf9c51763e6a313430->enter($__internal_869b6d4f35c27615d53b00d7c568fb938e7a0fb4a6b02abf9c51763e6a313430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e62be7f6c51a54ff6af2c144e82db4380af7a71e8f2c512dc61d8fce00ec3a4f->leave($__internal_e62be7f6c51a54ff6af2c144e82db4380af7a71e8f2c512dc61d8fce00ec3a4f_prof);

        
        $__internal_869b6d4f35c27615d53b00d7c568fb938e7a0fb4a6b02abf9c51763e6a313430->leave($__internal_869b6d4f35c27615d53b00d7c568fb938e7a0fb4a6b02abf9c51763e6a313430_prof);

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
