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
        $__internal_c361b9ac30f6aefa66890cb1edf4ade30cc413c3c7d180d06954389217a9af50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c361b9ac30f6aefa66890cb1edf4ade30cc413c3c7d180d06954389217a9af50->enter($__internal_c361b9ac30f6aefa66890cb1edf4ade30cc413c3c7d180d06954389217a9af50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d79007f089c0030b5b8f0568341e280b7d1469bf3d15fa48030da70e7e36712c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79007f089c0030b5b8f0568341e280b7d1469bf3d15fa48030da70e7e36712c->enter($__internal_d79007f089c0030b5b8f0568341e280b7d1469bf3d15fa48030da70e7e36712c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_c361b9ac30f6aefa66890cb1edf4ade30cc413c3c7d180d06954389217a9af50->leave($__internal_c361b9ac30f6aefa66890cb1edf4ade30cc413c3c7d180d06954389217a9af50_prof);

        
        $__internal_d79007f089c0030b5b8f0568341e280b7d1469bf3d15fa48030da70e7e36712c->leave($__internal_d79007f089c0030b5b8f0568341e280b7d1469bf3d15fa48030da70e7e36712c_prof);

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
", "@Framework/FormTable/form_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
