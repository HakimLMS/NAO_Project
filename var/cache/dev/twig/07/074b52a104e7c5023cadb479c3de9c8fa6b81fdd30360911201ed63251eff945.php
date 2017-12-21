<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b648f8a55138f24463339b839bf659b1d8c8632e2d50760a7f9cc8301ab65fd extends Twig_Template
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
        $__internal_7b82dacc718095ae6b96095fcab4e595c815ed7fb4262e4f54406c05e6a09d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b82dacc718095ae6b96095fcab4e595c815ed7fb4262e4f54406c05e6a09d43->enter($__internal_7b82dacc718095ae6b96095fcab4e595c815ed7fb4262e4f54406c05e6a09d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e60422f3847e5491a48b26a04eb3b72fccb666f31ce5d89802b9d8d521496340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60422f3847e5491a48b26a04eb3b72fccb666f31ce5d89802b9d8d521496340->enter($__internal_e60422f3847e5491a48b26a04eb3b72fccb666f31ce5d89802b9d8d521496340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7b82dacc718095ae6b96095fcab4e595c815ed7fb4262e4f54406c05e6a09d43->leave($__internal_7b82dacc718095ae6b96095fcab4e595c815ed7fb4262e4f54406c05e6a09d43_prof);

        
        $__internal_e60422f3847e5491a48b26a04eb3b72fccb666f31ce5d89802b9d8d521496340->leave($__internal_e60422f3847e5491a48b26a04eb3b72fccb666f31ce5d89802b9d8d521496340_prof);

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
