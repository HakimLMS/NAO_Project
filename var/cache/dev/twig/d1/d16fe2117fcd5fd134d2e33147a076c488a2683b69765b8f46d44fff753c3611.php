<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a20ab32f3d65e383a13f3ed6ab89b57bcd3228f14721070d38204155bfae5303 extends Twig_Template
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
        $__internal_2a061eb36fba75437560dfef6bda0388ce93ef51ee2be5e222e5d708d12e282a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a061eb36fba75437560dfef6bda0388ce93ef51ee2be5e222e5d708d12e282a->enter($__internal_2a061eb36fba75437560dfef6bda0388ce93ef51ee2be5e222e5d708d12e282a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_dfd53b3c0afa27de8245ce4c954aa04268522ca9b7286fd6723e5a93455e48db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd53b3c0afa27de8245ce4c954aa04268522ca9b7286fd6723e5a93455e48db->enter($__internal_dfd53b3c0afa27de8245ce4c954aa04268522ca9b7286fd6723e5a93455e48db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_2a061eb36fba75437560dfef6bda0388ce93ef51ee2be5e222e5d708d12e282a->leave($__internal_2a061eb36fba75437560dfef6bda0388ce93ef51ee2be5e222e5d708d12e282a_prof);

        
        $__internal_dfd53b3c0afa27de8245ce4c954aa04268522ca9b7286fd6723e5a93455e48db->leave($__internal_dfd53b3c0afa27de8245ce4c954aa04268522ca9b7286fd6723e5a93455e48db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
