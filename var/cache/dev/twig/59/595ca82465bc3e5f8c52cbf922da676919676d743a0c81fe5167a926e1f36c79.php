<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_651a6e6e36005918cf94111409d1feeb4f2660694fcfd728b158fdde0625d7e3 extends Twig_Template
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
        $__internal_5ca636b5d42a5c8e5f6fe702dce4ed5422093df6802a59f0f1c8e3e0f981f16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca636b5d42a5c8e5f6fe702dce4ed5422093df6802a59f0f1c8e3e0f981f16e->enter($__internal_5ca636b5d42a5c8e5f6fe702dce4ed5422093df6802a59f0f1c8e3e0f981f16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f59a935d09e3f616f6bc61f0cf694fea4b698b9aa4a1437731c2665fb1214efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59a935d09e3f616f6bc61f0cf694fea4b698b9aa4a1437731c2665fb1214efd->enter($__internal_f59a935d09e3f616f6bc61f0cf694fea4b698b9aa4a1437731c2665fb1214efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5ca636b5d42a5c8e5f6fe702dce4ed5422093df6802a59f0f1c8e3e0f981f16e->leave($__internal_5ca636b5d42a5c8e5f6fe702dce4ed5422093df6802a59f0f1c8e3e0f981f16e_prof);

        
        $__internal_f59a935d09e3f616f6bc61f0cf694fea4b698b9aa4a1437731c2665fb1214efd->leave($__internal_f59a935d09e3f616f6bc61f0cf694fea4b698b9aa4a1437731c2665fb1214efd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
