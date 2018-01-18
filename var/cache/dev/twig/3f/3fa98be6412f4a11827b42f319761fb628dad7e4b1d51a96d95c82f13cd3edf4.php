<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e6f6d26453be800602cf8b4c1fb154d33c4d877ecdde439de867574d9c2b2b57 extends Twig_Template
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
        $__internal_6fc01c8b522cef34bc878df7d32c929817a7d17e6db28838ce20e47f57a9f341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc01c8b522cef34bc878df7d32c929817a7d17e6db28838ce20e47f57a9f341->enter($__internal_6fc01c8b522cef34bc878df7d32c929817a7d17e6db28838ce20e47f57a9f341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0c3afd05bf4d6acc28cf219cc88960e58750aecc86420453e6634484f9edd70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3afd05bf4d6acc28cf219cc88960e58750aecc86420453e6634484f9edd70f->enter($__internal_0c3afd05bf4d6acc28cf219cc88960e58750aecc86420453e6634484f9edd70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6fc01c8b522cef34bc878df7d32c929817a7d17e6db28838ce20e47f57a9f341->leave($__internal_6fc01c8b522cef34bc878df7d32c929817a7d17e6db28838ce20e47f57a9f341_prof);

        
        $__internal_0c3afd05bf4d6acc28cf219cc88960e58750aecc86420453e6634484f9edd70f->leave($__internal_0c3afd05bf4d6acc28cf219cc88960e58750aecc86420453e6634484f9edd70f_prof);

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
