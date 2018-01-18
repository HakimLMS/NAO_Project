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
        $__internal_b55af28a7d8c0585a8ef293f556183bfb3054ddfebac3e42b2a9421926d4fbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b55af28a7d8c0585a8ef293f556183bfb3054ddfebac3e42b2a9421926d4fbb5->enter($__internal_b55af28a7d8c0585a8ef293f556183bfb3054ddfebac3e42b2a9421926d4fbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e51d9aea74af9dd23e733aa4c33170285591dbc8060be4551a03a364f57afcdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51d9aea74af9dd23e733aa4c33170285591dbc8060be4551a03a364f57afcdb->enter($__internal_e51d9aea74af9dd23e733aa4c33170285591dbc8060be4551a03a364f57afcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b55af28a7d8c0585a8ef293f556183bfb3054ddfebac3e42b2a9421926d4fbb5->leave($__internal_b55af28a7d8c0585a8ef293f556183bfb3054ddfebac3e42b2a9421926d4fbb5_prof);

        
        $__internal_e51d9aea74af9dd23e733aa4c33170285591dbc8060be4551a03a364f57afcdb->leave($__internal_e51d9aea74af9dd23e733aa4c33170285591dbc8060be4551a03a364f57afcdb_prof);

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
