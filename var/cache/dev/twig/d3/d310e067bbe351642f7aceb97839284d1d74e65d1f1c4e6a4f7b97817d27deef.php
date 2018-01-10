<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f2d58f29dfa6ef85aaa2d861b7edee9deff288dff07879fa21a5741247c6c804 extends Twig_Template
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
        $__internal_c0b361369e133bd15cf24860ca520e1b7e77ca9d0bbdb7e61c367bdaf8256976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b361369e133bd15cf24860ca520e1b7e77ca9d0bbdb7e61c367bdaf8256976->enter($__internal_c0b361369e133bd15cf24860ca520e1b7e77ca9d0bbdb7e61c367bdaf8256976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_3340b01a78d245e6ac19bae1e4edda0bd78088d94331222bbab88c305f4fcd9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3340b01a78d245e6ac19bae1e4edda0bd78088d94331222bbab88c305f4fcd9e->enter($__internal_3340b01a78d245e6ac19bae1e4edda0bd78088d94331222bbab88c305f4fcd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c0b361369e133bd15cf24860ca520e1b7e77ca9d0bbdb7e61c367bdaf8256976->leave($__internal_c0b361369e133bd15cf24860ca520e1b7e77ca9d0bbdb7e61c367bdaf8256976_prof);

        
        $__internal_3340b01a78d245e6ac19bae1e4edda0bd78088d94331222bbab88c305f4fcd9e->leave($__internal_3340b01a78d245e6ac19bae1e4edda0bd78088d94331222bbab88c305f4fcd9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
