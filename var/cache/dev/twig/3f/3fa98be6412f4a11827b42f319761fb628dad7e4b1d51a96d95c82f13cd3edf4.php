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
        $__internal_dc9dac2a11e0ce3819d31f5a141a80a12138799e2c7fcb03daee85d6f9597843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9dac2a11e0ce3819d31f5a141a80a12138799e2c7fcb03daee85d6f9597843->enter($__internal_dc9dac2a11e0ce3819d31f5a141a80a12138799e2c7fcb03daee85d6f9597843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_2b8bccc76e233230cd348b30e95a0ffdca5ebdc3aab2ea18f632c232977fc208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b8bccc76e233230cd348b30e95a0ffdca5ebdc3aab2ea18f632c232977fc208->enter($__internal_2b8bccc76e233230cd348b30e95a0ffdca5ebdc3aab2ea18f632c232977fc208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dc9dac2a11e0ce3819d31f5a141a80a12138799e2c7fcb03daee85d6f9597843->leave($__internal_dc9dac2a11e0ce3819d31f5a141a80a12138799e2c7fcb03daee85d6f9597843_prof);

        
        $__internal_2b8bccc76e233230cd348b30e95a0ffdca5ebdc3aab2ea18f632c232977fc208->leave($__internal_2b8bccc76e233230cd348b30e95a0ffdca5ebdc3aab2ea18f632c232977fc208_prof);

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
