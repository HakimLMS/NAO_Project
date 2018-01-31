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
        $__internal_559d08213ee26e8807a24f7cb93a5027ebbfe1f03738633aee9d930fa969a25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_559d08213ee26e8807a24f7cb93a5027ebbfe1f03738633aee9d930fa969a25f->enter($__internal_559d08213ee26e8807a24f7cb93a5027ebbfe1f03738633aee9d930fa969a25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9aa9ee23a609a08d63d15c392c1b01f488c685527b8505c87dd8de0217579547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa9ee23a609a08d63d15c392c1b01f488c685527b8505c87dd8de0217579547->enter($__internal_9aa9ee23a609a08d63d15c392c1b01f488c685527b8505c87dd8de0217579547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_559d08213ee26e8807a24f7cb93a5027ebbfe1f03738633aee9d930fa969a25f->leave($__internal_559d08213ee26e8807a24f7cb93a5027ebbfe1f03738633aee9d930fa969a25f_prof);

        
        $__internal_9aa9ee23a609a08d63d15c392c1b01f488c685527b8505c87dd8de0217579547->leave($__internal_9aa9ee23a609a08d63d15c392c1b01f488c685527b8505c87dd8de0217579547_prof);

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
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
