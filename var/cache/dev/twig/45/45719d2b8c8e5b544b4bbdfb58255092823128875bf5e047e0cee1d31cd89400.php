<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7b6f270b1cc8b105b78e6465854c745e2cd82980dfa3f9d8b750c18170fd43c7 extends Twig_Template
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
        $__internal_28c1de74ff39e6a12cea54824c9bd05b48fd40743e7657a863ae9e06a4d59398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28c1de74ff39e6a12cea54824c9bd05b48fd40743e7657a863ae9e06a4d59398->enter($__internal_28c1de74ff39e6a12cea54824c9bd05b48fd40743e7657a863ae9e06a4d59398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_eac56b39c052c8cebcde7c6029d9d3699ff3ea813836b3831fc5098f425f093b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac56b39c052c8cebcde7c6029d9d3699ff3ea813836b3831fc5098f425f093b->enter($__internal_eac56b39c052c8cebcde7c6029d9d3699ff3ea813836b3831fc5098f425f093b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_28c1de74ff39e6a12cea54824c9bd05b48fd40743e7657a863ae9e06a4d59398->leave($__internal_28c1de74ff39e6a12cea54824c9bd05b48fd40743e7657a863ae9e06a4d59398_prof);

        
        $__internal_eac56b39c052c8cebcde7c6029d9d3699ff3ea813836b3831fc5098f425f093b->leave($__internal_eac56b39c052c8cebcde7c6029d9d3699ff3ea813836b3831fc5098f425f093b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
