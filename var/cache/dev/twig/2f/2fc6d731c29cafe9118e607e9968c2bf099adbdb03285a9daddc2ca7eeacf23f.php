<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_87dd8a5fa973cccffc6c518901a6877f3058045d699583ca5466004d6d6376a8 extends Twig_Template
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
        $__internal_3fd9d561c05493a3bf4ad7f25207263ee1eb67c5c2d0210292c9a667fd0e2e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd9d561c05493a3bf4ad7f25207263ee1eb67c5c2d0210292c9a667fd0e2e09->enter($__internal_3fd9d561c05493a3bf4ad7f25207263ee1eb67c5c2d0210292c9a667fd0e2e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_616339d26365e82b54697fc38488ac6c09793140a00f163eb0b24ee5c833c67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616339d26365e82b54697fc38488ac6c09793140a00f163eb0b24ee5c833c67b->enter($__internal_616339d26365e82b54697fc38488ac6c09793140a00f163eb0b24ee5c833c67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3fd9d561c05493a3bf4ad7f25207263ee1eb67c5c2d0210292c9a667fd0e2e09->leave($__internal_3fd9d561c05493a3bf4ad7f25207263ee1eb67c5c2d0210292c9a667fd0e2e09_prof);

        
        $__internal_616339d26365e82b54697fc38488ac6c09793140a00f163eb0b24ee5c833c67b->leave($__internal_616339d26365e82b54697fc38488ac6c09793140a00f163eb0b24ee5c833c67b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
