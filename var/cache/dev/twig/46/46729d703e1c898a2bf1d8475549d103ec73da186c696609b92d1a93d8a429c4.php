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
        $__internal_c39b867196bc3cf77f4e10e279f41c7f43da6a2abeae151b2c1511da38736093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39b867196bc3cf77f4e10e279f41c7f43da6a2abeae151b2c1511da38736093->enter($__internal_c39b867196bc3cf77f4e10e279f41c7f43da6a2abeae151b2c1511da38736093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_92ce67875e55a8320cc1b9d00138cf2444417dfff01b6192fa04875e0d063de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ce67875e55a8320cc1b9d00138cf2444417dfff01b6192fa04875e0d063de0->enter($__internal_92ce67875e55a8320cc1b9d00138cf2444417dfff01b6192fa04875e0d063de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c39b867196bc3cf77f4e10e279f41c7f43da6a2abeae151b2c1511da38736093->leave($__internal_c39b867196bc3cf77f4e10e279f41c7f43da6a2abeae151b2c1511da38736093_prof);

        
        $__internal_92ce67875e55a8320cc1b9d00138cf2444417dfff01b6192fa04875e0d063de0->leave($__internal_92ce67875e55a8320cc1b9d00138cf2444417dfff01b6192fa04875e0d063de0_prof);

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
