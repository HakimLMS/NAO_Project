<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_003e0f0140e53be7130c206136732ad1856f9e32c0bc3dc81ef76081c77eca30 extends Twig_Template
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
        $__internal_307e964d376627e5eb2e9a2c471c7f41dbe9e895e24229310779dc876a92456a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307e964d376627e5eb2e9a2c471c7f41dbe9e895e24229310779dc876a92456a->enter($__internal_307e964d376627e5eb2e9a2c471c7f41dbe9e895e24229310779dc876a92456a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ae1d00858c3cdeb6d7f971f904ad48c5c37282472ceb00a9782c6acb8b891b54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1d00858c3cdeb6d7f971f904ad48c5c37282472ceb00a9782c6acb8b891b54->enter($__internal_ae1d00858c3cdeb6d7f971f904ad48c5c37282472ceb00a9782c6acb8b891b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_307e964d376627e5eb2e9a2c471c7f41dbe9e895e24229310779dc876a92456a->leave($__internal_307e964d376627e5eb2e9a2c471c7f41dbe9e895e24229310779dc876a92456a_prof);

        
        $__internal_ae1d00858c3cdeb6d7f971f904ad48c5c37282472ceb00a9782c6acb8b891b54->leave($__internal_ae1d00858c3cdeb6d7f971f904ad48c5c37282472ceb00a9782c6acb8b891b54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
