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
        $__internal_cfa9898ca5b9f26471e16a975dfde4ed0f0306148ee861942d1f12d30361ba0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa9898ca5b9f26471e16a975dfde4ed0f0306148ee861942d1f12d30361ba0f->enter($__internal_cfa9898ca5b9f26471e16a975dfde4ed0f0306148ee861942d1f12d30361ba0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e35348f59d660ac83914a2d3528e5a4b3b191390c8395e5c30286320f2be1d2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35348f59d660ac83914a2d3528e5a4b3b191390c8395e5c30286320f2be1d2e->enter($__internal_e35348f59d660ac83914a2d3528e5a4b3b191390c8395e5c30286320f2be1d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_cfa9898ca5b9f26471e16a975dfde4ed0f0306148ee861942d1f12d30361ba0f->leave($__internal_cfa9898ca5b9f26471e16a975dfde4ed0f0306148ee861942d1f12d30361ba0f_prof);

        
        $__internal_e35348f59d660ac83914a2d3528e5a4b3b191390c8395e5c30286320f2be1d2e->leave($__internal_e35348f59d660ac83914a2d3528e5a4b3b191390c8395e5c30286320f2be1d2e_prof);

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
