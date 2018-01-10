<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_659f12b7afe169625686fbbfab6accecb94bb81a82685295e58b84e812497aab extends Twig_Template
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
        $__internal_9004d1b3fc36016ad552e217576db4112f516d2a13a5d923605a30dd9e39ac13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9004d1b3fc36016ad552e217576db4112f516d2a13a5d923605a30dd9e39ac13->enter($__internal_9004d1b3fc36016ad552e217576db4112f516d2a13a5d923605a30dd9e39ac13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c01466efe76588067fa4ebda4a2b92bb050da91675b7ac799e0068b8ebde72f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01466efe76588067fa4ebda4a2b92bb050da91675b7ac799e0068b8ebde72f6->enter($__internal_c01466efe76588067fa4ebda4a2b92bb050da91675b7ac799e0068b8ebde72f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9004d1b3fc36016ad552e217576db4112f516d2a13a5d923605a30dd9e39ac13->leave($__internal_9004d1b3fc36016ad552e217576db4112f516d2a13a5d923605a30dd9e39ac13_prof);

        
        $__internal_c01466efe76588067fa4ebda4a2b92bb050da91675b7ac799e0068b8ebde72f6->leave($__internal_c01466efe76588067fa4ebda4a2b92bb050da91675b7ac799e0068b8ebde72f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
