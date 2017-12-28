<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_07893b9e4bc18711a6736bb17eb6a5e28f2fdc0d1c2d33afc723b396a4f78aaf extends Twig_Template
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
        $__internal_82f2e07a19ffb2bf27af70e7eeaa05456f41171e83372af225b90939fe5b3c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f2e07a19ffb2bf27af70e7eeaa05456f41171e83372af225b90939fe5b3c60->enter($__internal_82f2e07a19ffb2bf27af70e7eeaa05456f41171e83372af225b90939fe5b3c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f1e94328558ac4ed9fc6514a20072ea9a13db613cbdcdbc57627f4be3ac1b401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e94328558ac4ed9fc6514a20072ea9a13db613cbdcdbc57627f4be3ac1b401->enter($__internal_f1e94328558ac4ed9fc6514a20072ea9a13db613cbdcdbc57627f4be3ac1b401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_82f2e07a19ffb2bf27af70e7eeaa05456f41171e83372af225b90939fe5b3c60->leave($__internal_82f2e07a19ffb2bf27af70e7eeaa05456f41171e83372af225b90939fe5b3c60_prof);

        
        $__internal_f1e94328558ac4ed9fc6514a20072ea9a13db613cbdcdbc57627f4be3ac1b401->leave($__internal_f1e94328558ac4ed9fc6514a20072ea9a13db613cbdcdbc57627f4be3ac1b401_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
