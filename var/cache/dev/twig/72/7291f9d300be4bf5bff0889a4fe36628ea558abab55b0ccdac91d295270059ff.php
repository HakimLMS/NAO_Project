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
        $__internal_03d361615ec7e73919e6f2739d7a2ac6509a5e30c1c0eea17730c1352aa1a641 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d361615ec7e73919e6f2739d7a2ac6509a5e30c1c0eea17730c1352aa1a641->enter($__internal_03d361615ec7e73919e6f2739d7a2ac6509a5e30c1c0eea17730c1352aa1a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_d1b55c1cd270195da4a8da7102c4a689c7c15fda32d246d7ac09529277c25cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b55c1cd270195da4a8da7102c4a689c7c15fda32d246d7ac09529277c25cfd->enter($__internal_d1b55c1cd270195da4a8da7102c4a689c7c15fda32d246d7ac09529277c25cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_03d361615ec7e73919e6f2739d7a2ac6509a5e30c1c0eea17730c1352aa1a641->leave($__internal_03d361615ec7e73919e6f2739d7a2ac6509a5e30c1c0eea17730c1352aa1a641_prof);

        
        $__internal_d1b55c1cd270195da4a8da7102c4a689c7c15fda32d246d7ac09529277c25cfd->leave($__internal_d1b55c1cd270195da4a8da7102c4a689c7c15fda32d246d7ac09529277c25cfd_prof);

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
