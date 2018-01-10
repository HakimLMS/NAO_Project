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
        $__internal_c34aa30a3f22b7b46e2c31456142d1a54821008d8cd9ecb12ea115b86d2a9cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34aa30a3f22b7b46e2c31456142d1a54821008d8cd9ecb12ea115b86d2a9cfa->enter($__internal_c34aa30a3f22b7b46e2c31456142d1a54821008d8cd9ecb12ea115b86d2a9cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a7e17c188df0f3c0a07055c94ba9ab365311441e227eef27f864c0c965f454bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e17c188df0f3c0a07055c94ba9ab365311441e227eef27f864c0c965f454bc->enter($__internal_a7e17c188df0f3c0a07055c94ba9ab365311441e227eef27f864c0c965f454bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c34aa30a3f22b7b46e2c31456142d1a54821008d8cd9ecb12ea115b86d2a9cfa->leave($__internal_c34aa30a3f22b7b46e2c31456142d1a54821008d8cd9ecb12ea115b86d2a9cfa_prof);

        
        $__internal_a7e17c188df0f3c0a07055c94ba9ab365311441e227eef27f864c0c965f454bc->leave($__internal_a7e17c188df0f3c0a07055c94ba9ab365311441e227eef27f864c0c965f454bc_prof);

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
