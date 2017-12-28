<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fe9da6a346bfd605db31a21f20134cb92f2e57df31e5905ddb2bde0649c8bf1c extends Twig_Template
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
        $__internal_f0f10be133d65e5eeccdb447bdd54b62ba239e4e6e42b66eb1160c172224d652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0f10be133d65e5eeccdb447bdd54b62ba239e4e6e42b66eb1160c172224d652->enter($__internal_f0f10be133d65e5eeccdb447bdd54b62ba239e4e6e42b66eb1160c172224d652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4d527508ea70bda775a1252ba3b926057bcbde22c22fa04b0dbf9bc8dc99e4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d527508ea70bda775a1252ba3b926057bcbde22c22fa04b0dbf9bc8dc99e4fe->enter($__internal_4d527508ea70bda775a1252ba3b926057bcbde22c22fa04b0dbf9bc8dc99e4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f0f10be133d65e5eeccdb447bdd54b62ba239e4e6e42b66eb1160c172224d652->leave($__internal_f0f10be133d65e5eeccdb447bdd54b62ba239e4e6e42b66eb1160c172224d652_prof);

        
        $__internal_4d527508ea70bda775a1252ba3b926057bcbde22c22fa04b0dbf9bc8dc99e4fe->leave($__internal_4d527508ea70bda775a1252ba3b926057bcbde22c22fa04b0dbf9bc8dc99e4fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
