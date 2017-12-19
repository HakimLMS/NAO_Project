<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ffe92f19597278f5166115e886d83a5021239eed17ce680c52920148694321e extends Twig_Template
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
        $__internal_d6e881764b6a1897fabf71452c05041c1d51aef90835f2626465dfc6802b22ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6e881764b6a1897fabf71452c05041c1d51aef90835f2626465dfc6802b22ea->enter($__internal_d6e881764b6a1897fabf71452c05041c1d51aef90835f2626465dfc6802b22ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_bba7d6f1cd311b97eeae63c75dfa0d21c84232bd1ab469307ec32391d165eaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba7d6f1cd311b97eeae63c75dfa0d21c84232bd1ab469307ec32391d165eaa5->enter($__internal_bba7d6f1cd311b97eeae63c75dfa0d21c84232bd1ab469307ec32391d165eaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d6e881764b6a1897fabf71452c05041c1d51aef90835f2626465dfc6802b22ea->leave($__internal_d6e881764b6a1897fabf71452c05041c1d51aef90835f2626465dfc6802b22ea_prof);

        
        $__internal_bba7d6f1cd311b97eeae63c75dfa0d21c84232bd1ab469307ec32391d165eaa5->leave($__internal_bba7d6f1cd311b97eeae63c75dfa0d21c84232bd1ab469307ec32391d165eaa5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
