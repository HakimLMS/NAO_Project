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
        $__internal_2cdde2502d59b7fb21dab801fe3a65fa0136f51aa4387d52b580ced92c248573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cdde2502d59b7fb21dab801fe3a65fa0136f51aa4387d52b580ced92c248573->enter($__internal_2cdde2502d59b7fb21dab801fe3a65fa0136f51aa4387d52b580ced92c248573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_dfa03bc487b04cf29f101819de757845cf122a43cc837e1745cbf9a457115bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa03bc487b04cf29f101819de757845cf122a43cc837e1745cbf9a457115bc1->enter($__internal_dfa03bc487b04cf29f101819de757845cf122a43cc837e1745cbf9a457115bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2cdde2502d59b7fb21dab801fe3a65fa0136f51aa4387d52b580ced92c248573->leave($__internal_2cdde2502d59b7fb21dab801fe3a65fa0136f51aa4387d52b580ced92c248573_prof);

        
        $__internal_dfa03bc487b04cf29f101819de757845cf122a43cc837e1745cbf9a457115bc1->leave($__internal_dfa03bc487b04cf29f101819de757845cf122a43cc837e1745cbf9a457115bc1_prof);

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
