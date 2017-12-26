<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3a9c3e8d977c37532f13c91841dc4e9aac51245b9a714c7fad283b42eec59b01 extends Twig_Template
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
        $__internal_cf5f479f5cabd245da9ec756c51db75813db103450e901f53e11a426aae0257d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5f479f5cabd245da9ec756c51db75813db103450e901f53e11a426aae0257d->enter($__internal_cf5f479f5cabd245da9ec756c51db75813db103450e901f53e11a426aae0257d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_41b64c21e87ca6f9b7fa9dea714adff0206ac6c774a44a506e83461f12873a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b64c21e87ca6f9b7fa9dea714adff0206ac6c774a44a506e83461f12873a20->enter($__internal_41b64c21e87ca6f9b7fa9dea714adff0206ac6c774a44a506e83461f12873a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cf5f479f5cabd245da9ec756c51db75813db103450e901f53e11a426aae0257d->leave($__internal_cf5f479f5cabd245da9ec756c51db75813db103450e901f53e11a426aae0257d_prof);

        
        $__internal_41b64c21e87ca6f9b7fa9dea714adff0206ac6c774a44a506e83461f12873a20->leave($__internal_41b64c21e87ca6f9b7fa9dea714adff0206ac6c774a44a506e83461f12873a20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
