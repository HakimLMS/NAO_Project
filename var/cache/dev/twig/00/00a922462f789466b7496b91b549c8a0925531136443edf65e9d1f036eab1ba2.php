<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_edd4daac465432530d42a1691d39899af67994cfe1b820125526dad86a77e3cc extends Twig_Template
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
        $__internal_c0d8606e730066615dc5f5add6370b39be549ec644050cd2716278fd67b9781b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d8606e730066615dc5f5add6370b39be549ec644050cd2716278fd67b9781b->enter($__internal_c0d8606e730066615dc5f5add6370b39be549ec644050cd2716278fd67b9781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c0f87bbede4406070531c0b395e8ee8fb715681e337e52c14a12bf3cb5629682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f87bbede4406070531c0b395e8ee8fb715681e337e52c14a12bf3cb5629682->enter($__internal_c0f87bbede4406070531c0b395e8ee8fb715681e337e52c14a12bf3cb5629682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c0d8606e730066615dc5f5add6370b39be549ec644050cd2716278fd67b9781b->leave($__internal_c0d8606e730066615dc5f5add6370b39be549ec644050cd2716278fd67b9781b_prof);

        
        $__internal_c0f87bbede4406070531c0b395e8ee8fb715681e337e52c14a12bf3cb5629682->leave($__internal_c0f87bbede4406070531c0b395e8ee8fb715681e337e52c14a12bf3cb5629682_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
