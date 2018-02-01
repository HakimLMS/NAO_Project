<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7b6f270b1cc8b105b78e6465854c745e2cd82980dfa3f9d8b750c18170fd43c7 extends Twig_Template
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
        $__internal_d993d6b690ead0d6e298cf932127472e3b25ac9263491a2bd3f60217c77c2710 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d993d6b690ead0d6e298cf932127472e3b25ac9263491a2bd3f60217c77c2710->enter($__internal_d993d6b690ead0d6e298cf932127472e3b25ac9263491a2bd3f60217c77c2710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_5eca9f2c46d5b181b074b28fcea4933e2067918ba69a180d06a872620d95ecfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eca9f2c46d5b181b074b28fcea4933e2067918ba69a180d06a872620d95ecfe->enter($__internal_5eca9f2c46d5b181b074b28fcea4933e2067918ba69a180d06a872620d95ecfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d993d6b690ead0d6e298cf932127472e3b25ac9263491a2bd3f60217c77c2710->leave($__internal_d993d6b690ead0d6e298cf932127472e3b25ac9263491a2bd3f60217c77c2710_prof);

        
        $__internal_5eca9f2c46d5b181b074b28fcea4933e2067918ba69a180d06a872620d95ecfe->leave($__internal_5eca9f2c46d5b181b074b28fcea4933e2067918ba69a180d06a872620d95ecfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
