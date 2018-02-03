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
        $__internal_2b18e7414111bae944cf2e413a7a16fed09e5304e92a93a31e7ea26f5d0d5e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b18e7414111bae944cf2e413a7a16fed09e5304e92a93a31e7ea26f5d0d5e28->enter($__internal_2b18e7414111bae944cf2e413a7a16fed09e5304e92a93a31e7ea26f5d0d5e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8e269e10e03f94ec261bd1c3912ae1150733ba004fa590ff6a0c55ccf4ea77cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e269e10e03f94ec261bd1c3912ae1150733ba004fa590ff6a0c55ccf4ea77cf->enter($__internal_8e269e10e03f94ec261bd1c3912ae1150733ba004fa590ff6a0c55ccf4ea77cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2b18e7414111bae944cf2e413a7a16fed09e5304e92a93a31e7ea26f5d0d5e28->leave($__internal_2b18e7414111bae944cf2e413a7a16fed09e5304e92a93a31e7ea26f5d0d5e28_prof);

        
        $__internal_8e269e10e03f94ec261bd1c3912ae1150733ba004fa590ff6a0c55ccf4ea77cf->leave($__internal_8e269e10e03f94ec261bd1c3912ae1150733ba004fa590ff6a0c55ccf4ea77cf_prof);

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
