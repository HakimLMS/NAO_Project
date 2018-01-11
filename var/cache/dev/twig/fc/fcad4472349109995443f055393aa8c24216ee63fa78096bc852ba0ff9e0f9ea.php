<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_a750a83805fb78793ec0a8dc030054cc8dc725d15ea92766b6878fdf167f98b6 extends Twig_Template
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
        $__internal_b806e17d6d24adbec92db50849e90c82dcb0076560b71e184e9a0d2255757e1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b806e17d6d24adbec92db50849e90c82dcb0076560b71e184e9a0d2255757e1c->enter($__internal_b806e17d6d24adbec92db50849e90c82dcb0076560b71e184e9a0d2255757e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_a8d28adb146599a78f31c4f540553386663f1735bd720e37a782817914a96b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d28adb146599a78f31c4f540553386663f1735bd720e37a782817914a96b8d->enter($__internal_a8d28adb146599a78f31c4f540553386663f1735bd720e37a782817914a96b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b806e17d6d24adbec92db50849e90c82dcb0076560b71e184e9a0d2255757e1c->leave($__internal_b806e17d6d24adbec92db50849e90c82dcb0076560b71e184e9a0d2255757e1c_prof);

        
        $__internal_a8d28adb146599a78f31c4f540553386663f1735bd720e37a782817914a96b8d->leave($__internal_a8d28adb146599a78f31c4f540553386663f1735bd720e37a782817914a96b8d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
