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
        $__internal_05b06b751131db667aa3be19b2b485fa49e7e1b3ff9cdfd67966a8dc15bbe64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b06b751131db667aa3be19b2b485fa49e7e1b3ff9cdfd67966a8dc15bbe64b->enter($__internal_05b06b751131db667aa3be19b2b485fa49e7e1b3ff9cdfd67966a8dc15bbe64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_25868f58b49f51e41275de5329de7092c03f64c28a19a26874b14f563c9390a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25868f58b49f51e41275de5329de7092c03f64c28a19a26874b14f563c9390a1->enter($__internal_25868f58b49f51e41275de5329de7092c03f64c28a19a26874b14f563c9390a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_05b06b751131db667aa3be19b2b485fa49e7e1b3ff9cdfd67966a8dc15bbe64b->leave($__internal_05b06b751131db667aa3be19b2b485fa49e7e1b3ff9cdfd67966a8dc15bbe64b_prof);

        
        $__internal_25868f58b49f51e41275de5329de7092c03f64c28a19a26874b14f563c9390a1->leave($__internal_25868f58b49f51e41275de5329de7092c03f64c28a19a26874b14f563c9390a1_prof);

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
