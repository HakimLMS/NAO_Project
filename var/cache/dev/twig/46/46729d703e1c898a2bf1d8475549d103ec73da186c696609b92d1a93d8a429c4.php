<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2a712492e610c8ebdadeb612d8ecf38b0edfe42ba2bbce37be44f9f49de92d11 extends Twig_Template
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
        $__internal_8d45767aaeaf388f9a3fade5581d0cdcda2efae8417aaebfe331e309efb3e392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d45767aaeaf388f9a3fade5581d0cdcda2efae8417aaebfe331e309efb3e392->enter($__internal_8d45767aaeaf388f9a3fade5581d0cdcda2efae8417aaebfe331e309efb3e392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4380e6747e69bc67d810bbd89bf17a7b38f9565b41433b019ae278ab54ed8df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4380e6747e69bc67d810bbd89bf17a7b38f9565b41433b019ae278ab54ed8df1->enter($__internal_4380e6747e69bc67d810bbd89bf17a7b38f9565b41433b019ae278ab54ed8df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8d45767aaeaf388f9a3fade5581d0cdcda2efae8417aaebfe331e309efb3e392->leave($__internal_8d45767aaeaf388f9a3fade5581d0cdcda2efae8417aaebfe331e309efb3e392_prof);

        
        $__internal_4380e6747e69bc67d810bbd89bf17a7b38f9565b41433b019ae278ab54ed8df1->leave($__internal_4380e6747e69bc67d810bbd89bf17a7b38f9565b41433b019ae278ab54ed8df1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
