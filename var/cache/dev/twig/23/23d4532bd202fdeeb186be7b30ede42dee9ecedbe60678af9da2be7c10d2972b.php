<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c29d398a3421eaf002eaacdc953f52e87d8c7dbd58c185c1a02e5c564da0f444 extends Twig_Template
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
        $__internal_05c50af84d0ffd2873337a30d268ca6d4a2d4a58850f1e926e8a78228ee75b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c50af84d0ffd2873337a30d268ca6d4a2d4a58850f1e926e8a78228ee75b40->enter($__internal_05c50af84d0ffd2873337a30d268ca6d4a2d4a58850f1e926e8a78228ee75b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_618c5baf9d36d2259558dd8eafb27f4d7d04a3ee203dd08d0ac9f2d130cd5c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618c5baf9d36d2259558dd8eafb27f4d7d04a3ee203dd08d0ac9f2d130cd5c2f->enter($__internal_618c5baf9d36d2259558dd8eafb27f4d7d04a3ee203dd08d0ac9f2d130cd5c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_05c50af84d0ffd2873337a30d268ca6d4a2d4a58850f1e926e8a78228ee75b40->leave($__internal_05c50af84d0ffd2873337a30d268ca6d4a2d4a58850f1e926e8a78228ee75b40_prof);

        
        $__internal_618c5baf9d36d2259558dd8eafb27f4d7d04a3ee203dd08d0ac9f2d130cd5c2f->leave($__internal_618c5baf9d36d2259558dd8eafb27f4d7d04a3ee203dd08d0ac9f2d130cd5c2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
