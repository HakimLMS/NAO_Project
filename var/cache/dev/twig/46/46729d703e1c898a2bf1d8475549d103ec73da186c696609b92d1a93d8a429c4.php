<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2a712492e610c8ebdadeb612d8ecf38b0edfe42ba2bbce37be44f9f49de92d11 extends Twig_Template
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
        $__internal_82a494bdfa0f684045f0d5550fbd67c36ee870e65bc977db3e6b542144e112b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a494bdfa0f684045f0d5550fbd67c36ee870e65bc977db3e6b542144e112b9->enter($__internal_82a494bdfa0f684045f0d5550fbd67c36ee870e65bc977db3e6b542144e112b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f982dc4e5cd0febafb1151f5de8a70ed0195e5af1daa8e34b10cd7dfcd629c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f982dc4e5cd0febafb1151f5de8a70ed0195e5af1daa8e34b10cd7dfcd629c88->enter($__internal_f982dc4e5cd0febafb1151f5de8a70ed0195e5af1daa8e34b10cd7dfcd629c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_82a494bdfa0f684045f0d5550fbd67c36ee870e65bc977db3e6b542144e112b9->leave($__internal_82a494bdfa0f684045f0d5550fbd67c36ee870e65bc977db3e6b542144e112b9_prof);

        
        $__internal_f982dc4e5cd0febafb1151f5de8a70ed0195e5af1daa8e34b10cd7dfcd629c88->leave($__internal_f982dc4e5cd0febafb1151f5de8a70ed0195e5af1daa8e34b10cd7dfcd629c88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
