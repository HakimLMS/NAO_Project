<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_2b648f8a55138f24463339b839bf659b1d8c8632e2d50760a7f9cc8301ab65fd extends Twig_Template
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
        $__internal_382d9b4e6c3f9f32e409ba78cdbd1edd0c588744d47b2895a08cbcf417982574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382d9b4e6c3f9f32e409ba78cdbd1edd0c588744d47b2895a08cbcf417982574->enter($__internal_382d9b4e6c3f9f32e409ba78cdbd1edd0c588744d47b2895a08cbcf417982574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_60c9137a5926aa992553e8678e436e1f5dc382ab84b200333e6b37723d4b71fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c9137a5926aa992553e8678e436e1f5dc382ab84b200333e6b37723d4b71fb->enter($__internal_60c9137a5926aa992553e8678e436e1f5dc382ab84b200333e6b37723d4b71fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_382d9b4e6c3f9f32e409ba78cdbd1edd0c588744d47b2895a08cbcf417982574->leave($__internal_382d9b4e6c3f9f32e409ba78cdbd1edd0c588744d47b2895a08cbcf417982574_prof);

        
        $__internal_60c9137a5926aa992553e8678e436e1f5dc382ab84b200333e6b37723d4b71fb->leave($__internal_60c9137a5926aa992553e8678e436e1f5dc382ab84b200333e6b37723d4b71fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
