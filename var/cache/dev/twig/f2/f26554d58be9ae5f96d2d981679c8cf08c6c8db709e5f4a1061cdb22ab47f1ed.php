<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_41746329882c6bf46ed3556061310d163cfc2a114b4a8f1a6418f324b078adcb extends Twig_Template
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
        $__internal_e7597ff06ea66f02689241250b9ed07d8fc328eb70dde02fb93572f86500a14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7597ff06ea66f02689241250b9ed07d8fc328eb70dde02fb93572f86500a14b->enter($__internal_e7597ff06ea66f02689241250b9ed07d8fc328eb70dde02fb93572f86500a14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_c246e4771a64fff011c75693f12698e07b3d05d381b289fbb4ea80965c9a7b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c246e4771a64fff011c75693f12698e07b3d05d381b289fbb4ea80965c9a7b4f->enter($__internal_c246e4771a64fff011c75693f12698e07b3d05d381b289fbb4ea80965c9a7b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_e7597ff06ea66f02689241250b9ed07d8fc328eb70dde02fb93572f86500a14b->leave($__internal_e7597ff06ea66f02689241250b9ed07d8fc328eb70dde02fb93572f86500a14b_prof);

        
        $__internal_c246e4771a64fff011c75693f12698e07b3d05d381b289fbb4ea80965c9a7b4f->leave($__internal_c246e4771a64fff011c75693f12698e07b3d05d381b289fbb4ea80965c9a7b4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
