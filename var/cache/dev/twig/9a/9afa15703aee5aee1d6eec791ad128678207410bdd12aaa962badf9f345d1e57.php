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
        $__internal_c763f8ebf467436045b98af3ee341c87718a0d52b876a67909a2ff2e1740b15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c763f8ebf467436045b98af3ee341c87718a0d52b876a67909a2ff2e1740b15b->enter($__internal_c763f8ebf467436045b98af3ee341c87718a0d52b876a67909a2ff2e1740b15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1b56c0edc33d43e42bc78e3f9156527f0fbfd1bccd96dc4e85ae7cb7854e7944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b56c0edc33d43e42bc78e3f9156527f0fbfd1bccd96dc4e85ae7cb7854e7944->enter($__internal_1b56c0edc33d43e42bc78e3f9156527f0fbfd1bccd96dc4e85ae7cb7854e7944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c763f8ebf467436045b98af3ee341c87718a0d52b876a67909a2ff2e1740b15b->leave($__internal_c763f8ebf467436045b98af3ee341c87718a0d52b876a67909a2ff2e1740b15b_prof);

        
        $__internal_1b56c0edc33d43e42bc78e3f9156527f0fbfd1bccd96dc4e85ae7cb7854e7944->leave($__internal_1b56c0edc33d43e42bc78e3f9156527f0fbfd1bccd96dc4e85ae7cb7854e7944_prof);

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
