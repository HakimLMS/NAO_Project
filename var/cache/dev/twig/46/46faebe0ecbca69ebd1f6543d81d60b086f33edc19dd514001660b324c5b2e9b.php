<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2a5fd5b3999a6a6e53295c30a0c6dc369156bcbecd87308d6be069aa3069a3b2 extends Twig_Template
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
        $__internal_f9bd1bcec41a9eb7d0671a628dfed75f677fd36c722f935869db43ee0fc5c912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bd1bcec41a9eb7d0671a628dfed75f677fd36c722f935869db43ee0fc5c912->enter($__internal_f9bd1bcec41a9eb7d0671a628dfed75f677fd36c722f935869db43ee0fc5c912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e5feab47e640c1ff9a2e766598c65c0a9aa6ffa5e6453b51d8c2ee2b518d659d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5feab47e640c1ff9a2e766598c65c0a9aa6ffa5e6453b51d8c2ee2b518d659d->enter($__internal_e5feab47e640c1ff9a2e766598c65c0a9aa6ffa5e6453b51d8c2ee2b518d659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f9bd1bcec41a9eb7d0671a628dfed75f677fd36c722f935869db43ee0fc5c912->leave($__internal_f9bd1bcec41a9eb7d0671a628dfed75f677fd36c722f935869db43ee0fc5c912_prof);

        
        $__internal_e5feab47e640c1ff9a2e766598c65c0a9aa6ffa5e6453b51d8c2ee2b518d659d->leave($__internal_e5feab47e640c1ff9a2e766598c65c0a9aa6ffa5e6453b51d8c2ee2b518d659d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
