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
        $__internal_942d5563bfbb8eba3c19d41c5dd2a8cf5eb89f4ed30c91ed0dc31ffa2e2e299d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942d5563bfbb8eba3c19d41c5dd2a8cf5eb89f4ed30c91ed0dc31ffa2e2e299d->enter($__internal_942d5563bfbb8eba3c19d41c5dd2a8cf5eb89f4ed30c91ed0dc31ffa2e2e299d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ee9a498f4ed1c817448bfeb69e8e270d14a1f061f1c190fedf51572e7f98437c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee9a498f4ed1c817448bfeb69e8e270d14a1f061f1c190fedf51572e7f98437c->enter($__internal_ee9a498f4ed1c817448bfeb69e8e270d14a1f061f1c190fedf51572e7f98437c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_942d5563bfbb8eba3c19d41c5dd2a8cf5eb89f4ed30c91ed0dc31ffa2e2e299d->leave($__internal_942d5563bfbb8eba3c19d41c5dd2a8cf5eb89f4ed30c91ed0dc31ffa2e2e299d_prof);

        
        $__internal_ee9a498f4ed1c817448bfeb69e8e270d14a1f061f1c190fedf51572e7f98437c->leave($__internal_ee9a498f4ed1c817448bfeb69e8e270d14a1f061f1c190fedf51572e7f98437c_prof);

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
