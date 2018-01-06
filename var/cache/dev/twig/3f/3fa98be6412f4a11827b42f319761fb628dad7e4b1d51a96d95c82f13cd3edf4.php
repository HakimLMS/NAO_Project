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
        $__internal_e19f85d6047ce69cf45c9cd3a9d81acbdf7c115ac86316ee04156d60e311d150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19f85d6047ce69cf45c9cd3a9d81acbdf7c115ac86316ee04156d60e311d150->enter($__internal_e19f85d6047ce69cf45c9cd3a9d81acbdf7c115ac86316ee04156d60e311d150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_fe5ff6d2d11b818432312f20df03e79cb2ace84b24bda94965f65d1c45b31ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5ff6d2d11b818432312f20df03e79cb2ace84b24bda94965f65d1c45b31ae6->enter($__internal_fe5ff6d2d11b818432312f20df03e79cb2ace84b24bda94965f65d1c45b31ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e19f85d6047ce69cf45c9cd3a9d81acbdf7c115ac86316ee04156d60e311d150->leave($__internal_e19f85d6047ce69cf45c9cd3a9d81acbdf7c115ac86316ee04156d60e311d150_prof);

        
        $__internal_fe5ff6d2d11b818432312f20df03e79cb2ace84b24bda94965f65d1c45b31ae6->leave($__internal_fe5ff6d2d11b818432312f20df03e79cb2ace84b24bda94965f65d1c45b31ae6_prof);

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
