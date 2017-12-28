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
        $__internal_db1375004b1cea7ffd175feece006d5017329f7caf2e45a6ba58b2b302b8af07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1375004b1cea7ffd175feece006d5017329f7caf2e45a6ba58b2b302b8af07->enter($__internal_db1375004b1cea7ffd175feece006d5017329f7caf2e45a6ba58b2b302b8af07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b140e8147c21a46baff61b56132d230b26efb33d0a7c0768c5a8544548261d7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b140e8147c21a46baff61b56132d230b26efb33d0a7c0768c5a8544548261d7c->enter($__internal_b140e8147c21a46baff61b56132d230b26efb33d0a7c0768c5a8544548261d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_db1375004b1cea7ffd175feece006d5017329f7caf2e45a6ba58b2b302b8af07->leave($__internal_db1375004b1cea7ffd175feece006d5017329f7caf2e45a6ba58b2b302b8af07_prof);

        
        $__internal_b140e8147c21a46baff61b56132d230b26efb33d0a7c0768c5a8544548261d7c->leave($__internal_b140e8147c21a46baff61b56132d230b26efb33d0a7c0768c5a8544548261d7c_prof);

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
