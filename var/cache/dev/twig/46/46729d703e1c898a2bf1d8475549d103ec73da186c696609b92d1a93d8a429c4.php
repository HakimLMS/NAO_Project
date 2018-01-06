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
        $__internal_9e1f6d7d2f8f3a9e4b669bcee973d0f63d7b06fb86b2fe17778cd77918c242a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1f6d7d2f8f3a9e4b669bcee973d0f63d7b06fb86b2fe17778cd77918c242a0->enter($__internal_9e1f6d7d2f8f3a9e4b669bcee973d0f63d7b06fb86b2fe17778cd77918c242a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_694c537b71d01c7543b95ec203da13ee30b19deeeecf08702cb961019c2f9e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_694c537b71d01c7543b95ec203da13ee30b19deeeecf08702cb961019c2f9e34->enter($__internal_694c537b71d01c7543b95ec203da13ee30b19deeeecf08702cb961019c2f9e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9e1f6d7d2f8f3a9e4b669bcee973d0f63d7b06fb86b2fe17778cd77918c242a0->leave($__internal_9e1f6d7d2f8f3a9e4b669bcee973d0f63d7b06fb86b2fe17778cd77918c242a0_prof);

        
        $__internal_694c537b71d01c7543b95ec203da13ee30b19deeeecf08702cb961019c2f9e34->leave($__internal_694c537b71d01c7543b95ec203da13ee30b19deeeecf08702cb961019c2f9e34_prof);

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
