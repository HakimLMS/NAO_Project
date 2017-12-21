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
        $__internal_f56e7e85aabae45a25c8a7236e8861f6d20ae69f32903e42b17ce3fe23a4d208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56e7e85aabae45a25c8a7236e8861f6d20ae69f32903e42b17ce3fe23a4d208->enter($__internal_f56e7e85aabae45a25c8a7236e8861f6d20ae69f32903e42b17ce3fe23a4d208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_cff9bdd630dfbb8fb15aeb5e5450df3b40f989a0e44c354de72d193ba07f90a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff9bdd630dfbb8fb15aeb5e5450df3b40f989a0e44c354de72d193ba07f90a1->enter($__internal_cff9bdd630dfbb8fb15aeb5e5450df3b40f989a0e44c354de72d193ba07f90a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f56e7e85aabae45a25c8a7236e8861f6d20ae69f32903e42b17ce3fe23a4d208->leave($__internal_f56e7e85aabae45a25c8a7236e8861f6d20ae69f32903e42b17ce3fe23a4d208_prof);

        
        $__internal_cff9bdd630dfbb8fb15aeb5e5450df3b40f989a0e44c354de72d193ba07f90a1->leave($__internal_cff9bdd630dfbb8fb15aeb5e5450df3b40f989a0e44c354de72d193ba07f90a1_prof);

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
