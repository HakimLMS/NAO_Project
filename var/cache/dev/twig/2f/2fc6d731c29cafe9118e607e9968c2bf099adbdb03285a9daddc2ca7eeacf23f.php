<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_87dd8a5fa973cccffc6c518901a6877f3058045d699583ca5466004d6d6376a8 extends Twig_Template
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
        $__internal_3753a26d71e77df055df75870c71967aba47fa56d2746fa90198c8c082db40bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3753a26d71e77df055df75870c71967aba47fa56d2746fa90198c8c082db40bf->enter($__internal_3753a26d71e77df055df75870c71967aba47fa56d2746fa90198c8c082db40bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d06d1e46da9aa3bc151301b4e05742be4394ffd143e44fa4103102ece2b612fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06d1e46da9aa3bc151301b4e05742be4394ffd143e44fa4103102ece2b612fb->enter($__internal_d06d1e46da9aa3bc151301b4e05742be4394ffd143e44fa4103102ece2b612fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3753a26d71e77df055df75870c71967aba47fa56d2746fa90198c8c082db40bf->leave($__internal_3753a26d71e77df055df75870c71967aba47fa56d2746fa90198c8c082db40bf_prof);

        
        $__internal_d06d1e46da9aa3bc151301b4e05742be4394ffd143e44fa4103102ece2b612fb->leave($__internal_d06d1e46da9aa3bc151301b4e05742be4394ffd143e44fa4103102ece2b612fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
