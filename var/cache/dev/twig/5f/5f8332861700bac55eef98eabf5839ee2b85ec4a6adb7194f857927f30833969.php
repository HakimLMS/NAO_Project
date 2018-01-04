<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_653b3a902c2757f5e6004712ee426b53f84164542345fe1282b611824d56680c extends Twig_Template
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
        $__internal_68dd92aee75e91a395e3096de3077b9de398a464de364cde36f310c9f17ea8b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68dd92aee75e91a395e3096de3077b9de398a464de364cde36f310c9f17ea8b2->enter($__internal_68dd92aee75e91a395e3096de3077b9de398a464de364cde36f310c9f17ea8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_5df0aa57fabab8b770c794ebda37c58a588b270f5dea42eaa9378f376132e895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df0aa57fabab8b770c794ebda37c58a588b270f5dea42eaa9378f376132e895->enter($__internal_5df0aa57fabab8b770c794ebda37c58a588b270f5dea42eaa9378f376132e895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_68dd92aee75e91a395e3096de3077b9de398a464de364cde36f310c9f17ea8b2->leave($__internal_68dd92aee75e91a395e3096de3077b9de398a464de364cde36f310c9f17ea8b2_prof);

        
        $__internal_5df0aa57fabab8b770c794ebda37c58a588b270f5dea42eaa9378f376132e895->leave($__internal_5df0aa57fabab8b770c794ebda37c58a588b270f5dea42eaa9378f376132e895_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
