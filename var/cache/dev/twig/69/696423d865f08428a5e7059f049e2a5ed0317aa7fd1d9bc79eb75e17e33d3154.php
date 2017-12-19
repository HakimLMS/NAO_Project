<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_0ef9d984b538bd3d84bfaeb12c283505a90dbfee1eab9b0aee8dabeb4d3a327a extends Twig_Template
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
        $__internal_c7448d0c8218725517ef3ff24bccd9ed1099b44b6ef8a9dbf0df730611fd8c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7448d0c8218725517ef3ff24bccd9ed1099b44b6ef8a9dbf0df730611fd8c8c->enter($__internal_c7448d0c8218725517ef3ff24bccd9ed1099b44b6ef8a9dbf0df730611fd8c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_cf989d0b7e7c1ffcfd07e6808afb6613dc09c2be73a55824c55b28361cd5f65f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf989d0b7e7c1ffcfd07e6808afb6613dc09c2be73a55824c55b28361cd5f65f->enter($__internal_cf989d0b7e7c1ffcfd07e6808afb6613dc09c2be73a55824c55b28361cd5f65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c7448d0c8218725517ef3ff24bccd9ed1099b44b6ef8a9dbf0df730611fd8c8c->leave($__internal_c7448d0c8218725517ef3ff24bccd9ed1099b44b6ef8a9dbf0df730611fd8c8c_prof);

        
        $__internal_cf989d0b7e7c1ffcfd07e6808afb6613dc09c2be73a55824c55b28361cd5f65f->leave($__internal_cf989d0b7e7c1ffcfd07e6808afb6613dc09c2be73a55824c55b28361cd5f65f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
