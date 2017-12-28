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
        $__internal_3427d1f4b50e1abd469cc42f99b32cffb40bc4226837440743b3739987995455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3427d1f4b50e1abd469cc42f99b32cffb40bc4226837440743b3739987995455->enter($__internal_3427d1f4b50e1abd469cc42f99b32cffb40bc4226837440743b3739987995455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_ec42a5166c70a2b97818ca0037db6cc33cc93eb34bdc0f09d516b8439d08d55e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec42a5166c70a2b97818ca0037db6cc33cc93eb34bdc0f09d516b8439d08d55e->enter($__internal_ec42a5166c70a2b97818ca0037db6cc33cc93eb34bdc0f09d516b8439d08d55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

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
        
        $__internal_3427d1f4b50e1abd469cc42f99b32cffb40bc4226837440743b3739987995455->leave($__internal_3427d1f4b50e1abd469cc42f99b32cffb40bc4226837440743b3739987995455_prof);

        
        $__internal_ec42a5166c70a2b97818ca0037db6cc33cc93eb34bdc0f09d516b8439d08d55e->leave($__internal_ec42a5166c70a2b97818ca0037db6cc33cc93eb34bdc0f09d516b8439d08d55e_prof);

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
