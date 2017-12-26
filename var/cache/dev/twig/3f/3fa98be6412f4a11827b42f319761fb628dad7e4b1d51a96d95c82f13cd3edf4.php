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
        $__internal_74f0a2765a6908eef84a811e0d50b3602805c9259c7ce896b1443c5bfac901f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74f0a2765a6908eef84a811e0d50b3602805c9259c7ce896b1443c5bfac901f0->enter($__internal_74f0a2765a6908eef84a811e0d50b3602805c9259c7ce896b1443c5bfac901f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a4d97a5a116bafd4f472539b34dfda3be4659e8200ed020c4acbff25ffa82c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d97a5a116bafd4f472539b34dfda3be4659e8200ed020c4acbff25ffa82c73->enter($__internal_a4d97a5a116bafd4f472539b34dfda3be4659e8200ed020c4acbff25ffa82c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_74f0a2765a6908eef84a811e0d50b3602805c9259c7ce896b1443c5bfac901f0->leave($__internal_74f0a2765a6908eef84a811e0d50b3602805c9259c7ce896b1443c5bfac901f0_prof);

        
        $__internal_a4d97a5a116bafd4f472539b34dfda3be4659e8200ed020c4acbff25ffa82c73->leave($__internal_a4d97a5a116bafd4f472539b34dfda3be4659e8200ed020c4acbff25ffa82c73_prof);

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
", "@Framework/Form/form_rest.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
