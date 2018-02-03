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
        $__internal_98b25bf8d94403d90d2a7fa61bfda50c312e101e5dfec26c7f6bc06b29370eea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b25bf8d94403d90d2a7fa61bfda50c312e101e5dfec26c7f6bc06b29370eea->enter($__internal_98b25bf8d94403d90d2a7fa61bfda50c312e101e5dfec26c7f6bc06b29370eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_b329920f9f1d8236ac843ded688419b626934c8560da7ffa3782ce4258607c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b329920f9f1d8236ac843ded688419b626934c8560da7ffa3782ce4258607c74->enter($__internal_b329920f9f1d8236ac843ded688419b626934c8560da7ffa3782ce4258607c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_98b25bf8d94403d90d2a7fa61bfda50c312e101e5dfec26c7f6bc06b29370eea->leave($__internal_98b25bf8d94403d90d2a7fa61bfda50c312e101e5dfec26c7f6bc06b29370eea_prof);

        
        $__internal_b329920f9f1d8236ac843ded688419b626934c8560da7ffa3782ce4258607c74->leave($__internal_b329920f9f1d8236ac843ded688419b626934c8560da7ffa3782ce4258607c74_prof);

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
