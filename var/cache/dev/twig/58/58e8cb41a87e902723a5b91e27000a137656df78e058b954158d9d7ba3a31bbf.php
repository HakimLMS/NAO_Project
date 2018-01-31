<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f55db766d1463b2556b290d0956361c7098c61b5f4462088ec68d2da5182c513 extends Twig_Template
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
        $__internal_cb33310e0efd2db2f3b1e0e02789813157fc2779e6ad0f6d995fe66194cb95fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb33310e0efd2db2f3b1e0e02789813157fc2779e6ad0f6d995fe66194cb95fc->enter($__internal_cb33310e0efd2db2f3b1e0e02789813157fc2779e6ad0f6d995fe66194cb95fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_c1324b412c01859eece24a19db02cac8cf7149ed7164d0fa0ac4238e087d7dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1324b412c01859eece24a19db02cac8cf7149ed7164d0fa0ac4238e087d7dca->enter($__internal_c1324b412c01859eece24a19db02cac8cf7149ed7164d0fa0ac4238e087d7dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_cb33310e0efd2db2f3b1e0e02789813157fc2779e6ad0f6d995fe66194cb95fc->leave($__internal_cb33310e0efd2db2f3b1e0e02789813157fc2779e6ad0f6d995fe66194cb95fc_prof);

        
        $__internal_c1324b412c01859eece24a19db02cac8cf7149ed7164d0fa0ac4238e087d7dca->leave($__internal_c1324b412c01859eece24a19db02cac8cf7149ed7164d0fa0ac4238e087d7dca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
