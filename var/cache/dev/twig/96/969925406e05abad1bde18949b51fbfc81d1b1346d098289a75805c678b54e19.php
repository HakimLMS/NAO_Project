<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_659f12b7afe169625686fbbfab6accecb94bb81a82685295e58b84e812497aab extends Twig_Template
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
        $__internal_5829aac69573fdb9f2c197f28226f34bf6249818e5eb9a9b8790515ceacfd245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5829aac69573fdb9f2c197f28226f34bf6249818e5eb9a9b8790515ceacfd245->enter($__internal_5829aac69573fdb9f2c197f28226f34bf6249818e5eb9a9b8790515ceacfd245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_082cda2b325497feb813622db52430733a0392cb2623b132817534f3be844d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082cda2b325497feb813622db52430733a0392cb2623b132817534f3be844d02->enter($__internal_082cda2b325497feb813622db52430733a0392cb2623b132817534f3be844d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5829aac69573fdb9f2c197f28226f34bf6249818e5eb9a9b8790515ceacfd245->leave($__internal_5829aac69573fdb9f2c197f28226f34bf6249818e5eb9a9b8790515ceacfd245_prof);

        
        $__internal_082cda2b325497feb813622db52430733a0392cb2623b132817534f3be844d02->leave($__internal_082cda2b325497feb813622db52430733a0392cb2623b132817534f3be844d02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
