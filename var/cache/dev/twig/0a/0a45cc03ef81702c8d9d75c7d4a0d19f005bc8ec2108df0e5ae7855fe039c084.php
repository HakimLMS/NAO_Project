<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c551e3336fcd8dcb9dc56daa5a568e8e82af37aca6fdb500b626416b87c4f659 extends Twig_Template
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
        $__internal_ba359b17fcc6865f1651c400a567d023932763621fdadbfbafc08693070150df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba359b17fcc6865f1651c400a567d023932763621fdadbfbafc08693070150df->enter($__internal_ba359b17fcc6865f1651c400a567d023932763621fdadbfbafc08693070150df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_9443b9132947840795324d9dcfe4fe9ef4d1d8f9a79c1a07cbace45fd8451f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9443b9132947840795324d9dcfe4fe9ef4d1d8f9a79c1a07cbace45fd8451f75->enter($__internal_9443b9132947840795324d9dcfe4fe9ef4d1d8f9a79c1a07cbace45fd8451f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ba359b17fcc6865f1651c400a567d023932763621fdadbfbafc08693070150df->leave($__internal_ba359b17fcc6865f1651c400a567d023932763621fdadbfbafc08693070150df_prof);

        
        $__internal_9443b9132947840795324d9dcfe4fe9ef4d1d8f9a79c1a07cbace45fd8451f75->leave($__internal_9443b9132947840795324d9dcfe4fe9ef4d1d8f9a79c1a07cbace45fd8451f75_prof);

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
