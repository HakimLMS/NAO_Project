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
        $__internal_6fb7aacf14866da248aecbb1202d9e977c95971a398e273771ee53d01085bd23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb7aacf14866da248aecbb1202d9e977c95971a398e273771ee53d01085bd23->enter($__internal_6fb7aacf14866da248aecbb1202d9e977c95971a398e273771ee53d01085bd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_2be8ab6ce39c892beccfc72a8509bae14db795e18192588c9522161ad7d56025 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be8ab6ce39c892beccfc72a8509bae14db795e18192588c9522161ad7d56025->enter($__internal_2be8ab6ce39c892beccfc72a8509bae14db795e18192588c9522161ad7d56025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6fb7aacf14866da248aecbb1202d9e977c95971a398e273771ee53d01085bd23->leave($__internal_6fb7aacf14866da248aecbb1202d9e977c95971a398e273771ee53d01085bd23_prof);

        
        $__internal_2be8ab6ce39c892beccfc72a8509bae14db795e18192588c9522161ad7d56025->leave($__internal_2be8ab6ce39c892beccfc72a8509bae14db795e18192588c9522161ad7d56025_prof);

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
