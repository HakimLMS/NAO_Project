<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_db6bac01085ddb08764573ab3415c3ccbd54b3df70729506b76f3e04429dd008 extends Twig_Template
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
        $__internal_dde8c0f0a2c2cf7d565b497b2b3a2d79eea03130d5b5ae03c024be8e3b870d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde8c0f0a2c2cf7d565b497b2b3a2d79eea03130d5b5ae03c024be8e3b870d13->enter($__internal_dde8c0f0a2c2cf7d565b497b2b3a2d79eea03130d5b5ae03c024be8e3b870d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_df1d06e57963489611807af076198edfbb1e1262fb4878164484df8a2739f78b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1d06e57963489611807af076198edfbb1e1262fb4878164484df8a2739f78b->enter($__internal_df1d06e57963489611807af076198edfbb1e1262fb4878164484df8a2739f78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_dde8c0f0a2c2cf7d565b497b2b3a2d79eea03130d5b5ae03c024be8e3b870d13->leave($__internal_dde8c0f0a2c2cf7d565b497b2b3a2d79eea03130d5b5ae03c024be8e3b870d13_prof);

        
        $__internal_df1d06e57963489611807af076198edfbb1e1262fb4878164484df8a2739f78b->leave($__internal_df1d06e57963489611807af076198edfbb1e1262fb4878164484df8a2739f78b_prof);

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
