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
        $__internal_3e3f5c6cd24a2539c68471edbc6177adfde11225c4c976b5f8ac66038d01fc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3f5c6cd24a2539c68471edbc6177adfde11225c4c976b5f8ac66038d01fc2e->enter($__internal_3e3f5c6cd24a2539c68471edbc6177adfde11225c4c976b5f8ac66038d01fc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5021def4f80e1bcdf8d4590c41382f32a3f86ca353c154777a917658936a15d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5021def4f80e1bcdf8d4590c41382f32a3f86ca353c154777a917658936a15d6->enter($__internal_5021def4f80e1bcdf8d4590c41382f32a3f86ca353c154777a917658936a15d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3e3f5c6cd24a2539c68471edbc6177adfde11225c4c976b5f8ac66038d01fc2e->leave($__internal_3e3f5c6cd24a2539c68471edbc6177adfde11225c4c976b5f8ac66038d01fc2e_prof);

        
        $__internal_5021def4f80e1bcdf8d4590c41382f32a3f86ca353c154777a917658936a15d6->leave($__internal_5021def4f80e1bcdf8d4590c41382f32a3f86ca353c154777a917658936a15d6_prof);

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
