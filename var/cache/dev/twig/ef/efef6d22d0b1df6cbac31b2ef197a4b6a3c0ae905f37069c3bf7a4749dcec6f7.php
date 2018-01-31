<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9fd3c39394b87ea2b209f9460120e7a33707c7bb4e262d46ac0ac45d61c717af extends Twig_Template
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
        $__internal_104c6668df621ebb9a538b4b0b27ee582b2ae7adf4290873a3eaa8443a25695b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104c6668df621ebb9a538b4b0b27ee582b2ae7adf4290873a3eaa8443a25695b->enter($__internal_104c6668df621ebb9a538b4b0b27ee582b2ae7adf4290873a3eaa8443a25695b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_cd097a28e22f47a0ae1b15125d0032ddd2eb5112901ebbe6fcee736771dc141e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd097a28e22f47a0ae1b15125d0032ddd2eb5112901ebbe6fcee736771dc141e->enter($__internal_cd097a28e22f47a0ae1b15125d0032ddd2eb5112901ebbe6fcee736771dc141e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_104c6668df621ebb9a538b4b0b27ee582b2ae7adf4290873a3eaa8443a25695b->leave($__internal_104c6668df621ebb9a538b4b0b27ee582b2ae7adf4290873a3eaa8443a25695b_prof);

        
        $__internal_cd097a28e22f47a0ae1b15125d0032ddd2eb5112901ebbe6fcee736771dc141e->leave($__internal_cd097a28e22f47a0ae1b15125d0032ddd2eb5112901ebbe6fcee736771dc141e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form.html.php");
    }
}
