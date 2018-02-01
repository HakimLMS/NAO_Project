<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4d234813f8a7f08eeee6b2e6f9516b605c9eeabf04cc74049326d5e11a4a37cb extends Twig_Template
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
        $__internal_4f77522dddb7045afacadaf47bfd683804f73f0493fd68de6e643b226118110f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f77522dddb7045afacadaf47bfd683804f73f0493fd68de6e643b226118110f->enter($__internal_4f77522dddb7045afacadaf47bfd683804f73f0493fd68de6e643b226118110f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_16b0c3651e3709ef8e0b0d290fd68ecbef3c53cc3a62bc458e97d6f214c6f5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b0c3651e3709ef8e0b0d290fd68ecbef3c53cc3a62bc458e97d6f214c6f5a5->enter($__internal_16b0c3651e3709ef8e0b0d290fd68ecbef3c53cc3a62bc458e97d6f214c6f5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4f77522dddb7045afacadaf47bfd683804f73f0493fd68de6e643b226118110f->leave($__internal_4f77522dddb7045afacadaf47bfd683804f73f0493fd68de6e643b226118110f_prof);

        
        $__internal_16b0c3651e3709ef8e0b0d290fd68ecbef3c53cc3a62bc458e97d6f214c6f5a5->leave($__internal_16b0c3651e3709ef8e0b0d290fd68ecbef3c53cc3a62bc458e97d6f214c6f5a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
