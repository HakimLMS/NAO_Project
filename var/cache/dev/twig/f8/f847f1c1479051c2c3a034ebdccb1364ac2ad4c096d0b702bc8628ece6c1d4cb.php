<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7ff23be161c27d690a1308a53faebce87df25a1e7ef5162f50415cc9e27f2fbd extends Twig_Template
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
        $__internal_5bbbbd015c2f1292dbb68583a4a7ae03ace83afb4e33269977cbab37ef37a24b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bbbbd015c2f1292dbb68583a4a7ae03ace83afb4e33269977cbab37ef37a24b->enter($__internal_5bbbbd015c2f1292dbb68583a4a7ae03ace83afb4e33269977cbab37ef37a24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ffc6c122e8b96a64fd31c31239975259b86cdb11e58ebea6e082e39e76408c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc6c122e8b96a64fd31c31239975259b86cdb11e58ebea6e082e39e76408c5b->enter($__internal_ffc6c122e8b96a64fd31c31239975259b86cdb11e58ebea6e082e39e76408c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_5bbbbd015c2f1292dbb68583a4a7ae03ace83afb4e33269977cbab37ef37a24b->leave($__internal_5bbbbd015c2f1292dbb68583a4a7ae03ace83afb4e33269977cbab37ef37a24b_prof);

        
        $__internal_ffc6c122e8b96a64fd31c31239975259b86cdb11e58ebea6e082e39e76408c5b->leave($__internal_ffc6c122e8b96a64fd31c31239975259b86cdb11e58ebea6e082e39e76408c5b_prof);

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
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
