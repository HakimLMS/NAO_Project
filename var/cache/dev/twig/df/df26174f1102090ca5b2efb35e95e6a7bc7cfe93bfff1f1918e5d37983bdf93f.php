<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_f0964555d776509c00691aa1257eaab97ec305027eac6d7d67b2af2f1cb7250b extends Twig_Template
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
        $__internal_cecbd8f0e99a9380003975260f1ef563542f0c4f5e4629d76b1398479c7a585e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecbd8f0e99a9380003975260f1ef563542f0c4f5e4629d76b1398479c7a585e->enter($__internal_cecbd8f0e99a9380003975260f1ef563542f0c4f5e4629d76b1398479c7a585e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4b3929346dc2ec88dfad10e30cd4f8b68e21164327771b4d0d04d7df0e03a5a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3929346dc2ec88dfad10e30cd4f8b68e21164327771b4d0d04d7df0e03a5a2->enter($__internal_4b3929346dc2ec88dfad10e30cd4f8b68e21164327771b4d0d04d7df0e03a5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cecbd8f0e99a9380003975260f1ef563542f0c4f5e4629d76b1398479c7a585e->leave($__internal_cecbd8f0e99a9380003975260f1ef563542f0c4f5e4629d76b1398479c7a585e_prof);

        
        $__internal_4b3929346dc2ec88dfad10e30cd4f8b68e21164327771b4d0d04d7df0e03a5a2->leave($__internal_4b3929346dc2ec88dfad10e30cd4f8b68e21164327771b4d0d04d7df0e03a5a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
