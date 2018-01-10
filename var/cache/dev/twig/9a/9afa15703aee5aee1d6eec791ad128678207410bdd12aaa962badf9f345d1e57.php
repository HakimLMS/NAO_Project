<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4ffe92f19597278f5166115e886d83a5021239eed17ce680c52920148694321e extends Twig_Template
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
        $__internal_02e6fee99c586de3685bcfe532b1b5365fc77917a0a4dc4b854138ac3fc4d9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02e6fee99c586de3685bcfe532b1b5365fc77917a0a4dc4b854138ac3fc4d9a7->enter($__internal_02e6fee99c586de3685bcfe532b1b5365fc77917a0a4dc4b854138ac3fc4d9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_af7db2b3fca0e4dea3acda277787e8e317ff1aba3b4f20c83a9d5f08fca24f9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7db2b3fca0e4dea3acda277787e8e317ff1aba3b4f20c83a9d5f08fca24f9f->enter($__internal_af7db2b3fca0e4dea3acda277787e8e317ff1aba3b4f20c83a9d5f08fca24f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_02e6fee99c586de3685bcfe532b1b5365fc77917a0a4dc4b854138ac3fc4d9a7->leave($__internal_02e6fee99c586de3685bcfe532b1b5365fc77917a0a4dc4b854138ac3fc4d9a7_prof);

        
        $__internal_af7db2b3fca0e4dea3acda277787e8e317ff1aba3b4f20c83a9d5f08fca24f9f->leave($__internal_af7db2b3fca0e4dea3acda277787e8e317ff1aba3b4f20c83a9d5f08fca24f9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
