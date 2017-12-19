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
        $__internal_1b295d21c0fbfb5bb35c759df1a07691e81f324a5443135481e546432c6119b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b295d21c0fbfb5bb35c759df1a07691e81f324a5443135481e546432c6119b2->enter($__internal_1b295d21c0fbfb5bb35c759df1a07691e81f324a5443135481e546432c6119b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_509a9353a7383bce2d6fde86897cb6b3c27cc039ba8503d93bd5078e7df9ef1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509a9353a7383bce2d6fde86897cb6b3c27cc039ba8503d93bd5078e7df9ef1e->enter($__internal_509a9353a7383bce2d6fde86897cb6b3c27cc039ba8503d93bd5078e7df9ef1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1b295d21c0fbfb5bb35c759df1a07691e81f324a5443135481e546432c6119b2->leave($__internal_1b295d21c0fbfb5bb35c759df1a07691e81f324a5443135481e546432c6119b2_prof);

        
        $__internal_509a9353a7383bce2d6fde86897cb6b3c27cc039ba8503d93bd5078e7df9ef1e->leave($__internal_509a9353a7383bce2d6fde86897cb6b3c27cc039ba8503d93bd5078e7df9ef1e_prof);

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
