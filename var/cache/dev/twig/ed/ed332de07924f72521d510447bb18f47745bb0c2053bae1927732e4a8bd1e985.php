<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2801eb251d4aefb798ff649cf0d600f09869ec165956b272fa833146214f8e55 extends Twig_Template
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
        $__internal_7a3af100d23034d0b8a931e092d62c4f51d0792c2d8c5a9f6793b7df2ad9b420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3af100d23034d0b8a931e092d62c4f51d0792c2d8c5a9f6793b7df2ad9b420->enter($__internal_7a3af100d23034d0b8a931e092d62c4f51d0792c2d8c5a9f6793b7df2ad9b420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_25b50d7cbb76389f2a97e8eef6e65ddf75c1f0ed2a8a3112bf6af1dd0864cc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b50d7cbb76389f2a97e8eef6e65ddf75c1f0ed2a8a3112bf6af1dd0864cc03->enter($__internal_25b50d7cbb76389f2a97e8eef6e65ddf75c1f0ed2a8a3112bf6af1dd0864cc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_7a3af100d23034d0b8a931e092d62c4f51d0792c2d8c5a9f6793b7df2ad9b420->leave($__internal_7a3af100d23034d0b8a931e092d62c4f51d0792c2d8c5a9f6793b7df2ad9b420_prof);

        
        $__internal_25b50d7cbb76389f2a97e8eef6e65ddf75c1f0ed2a8a3112bf6af1dd0864cc03->leave($__internal_25b50d7cbb76389f2a97e8eef6e65ddf75c1f0ed2a8a3112bf6af1dd0864cc03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
