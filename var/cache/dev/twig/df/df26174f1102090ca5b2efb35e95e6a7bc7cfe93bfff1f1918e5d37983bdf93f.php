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
        $__internal_3bfd2b4373156236b794056bb7e42fdbdb9c4c28c2df5d5dbe16de7a99707043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bfd2b4373156236b794056bb7e42fdbdb9c4c28c2df5d5dbe16de7a99707043->enter($__internal_3bfd2b4373156236b794056bb7e42fdbdb9c4c28c2df5d5dbe16de7a99707043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_381ab7ee9ab1808e9a26b7be2478e88f31d9ae54efb73c88c413430c83963081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381ab7ee9ab1808e9a26b7be2478e88f31d9ae54efb73c88c413430c83963081->enter($__internal_381ab7ee9ab1808e9a26b7be2478e88f31d9ae54efb73c88c413430c83963081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3bfd2b4373156236b794056bb7e42fdbdb9c4c28c2df5d5dbe16de7a99707043->leave($__internal_3bfd2b4373156236b794056bb7e42fdbdb9c4c28c2df5d5dbe16de7a99707043_prof);

        
        $__internal_381ab7ee9ab1808e9a26b7be2478e88f31d9ae54efb73c88c413430c83963081->leave($__internal_381ab7ee9ab1808e9a26b7be2478e88f31d9ae54efb73c88c413430c83963081_prof);

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
