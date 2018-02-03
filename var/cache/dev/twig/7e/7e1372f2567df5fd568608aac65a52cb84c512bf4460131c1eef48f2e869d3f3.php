<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_92e65d389137044282dd410fa5b86be6dcc64e36719619f7b2e4662fec3d6c1d extends Twig_Template
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
        $__internal_254c0ded095b8bd55539dac72edd306350987a17df894bb01f1542f9ac12c798 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_254c0ded095b8bd55539dac72edd306350987a17df894bb01f1542f9ac12c798->enter($__internal_254c0ded095b8bd55539dac72edd306350987a17df894bb01f1542f9ac12c798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_8df152ab0bb9ea115aae6229c49cb84507ecf294370d0e88c7e858d46dfa85c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df152ab0bb9ea115aae6229c49cb84507ecf294370d0e88c7e858d46dfa85c6->enter($__internal_8df152ab0bb9ea115aae6229c49cb84507ecf294370d0e88c7e858d46dfa85c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_254c0ded095b8bd55539dac72edd306350987a17df894bb01f1542f9ac12c798->leave($__internal_254c0ded095b8bd55539dac72edd306350987a17df894bb01f1542f9ac12c798_prof);

        
        $__internal_8df152ab0bb9ea115aae6229c49cb84507ecf294370d0e88c7e858d46dfa85c6->leave($__internal_8df152ab0bb9ea115aae6229c49cb84507ecf294370d0e88c7e858d46dfa85c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\time_widget.html.php");
    }
}
