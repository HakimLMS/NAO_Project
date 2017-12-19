<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_25c6dd6500fc6b430f2197892b94274c86bf89194d8e7bff23268db5afca929c extends Twig_Template
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
        $__internal_6373dc5ce8cca5f484bb705e61e0fb95f4ac53f29cc4919c394a7e89811b8faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6373dc5ce8cca5f484bb705e61e0fb95f4ac53f29cc4919c394a7e89811b8faa->enter($__internal_6373dc5ce8cca5f484bb705e61e0fb95f4ac53f29cc4919c394a7e89811b8faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0b39e331668b07fa2e54ac57531c0710c547f7b29770375d7428555bfc8da16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b39e331668b07fa2e54ac57531c0710c547f7b29770375d7428555bfc8da16d->enter($__internal_0b39e331668b07fa2e54ac57531c0710c547f7b29770375d7428555bfc8da16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6373dc5ce8cca5f484bb705e61e0fb95f4ac53f29cc4919c394a7e89811b8faa->leave($__internal_6373dc5ce8cca5f484bb705e61e0fb95f4ac53f29cc4919c394a7e89811b8faa_prof);

        
        $__internal_0b39e331668b07fa2e54ac57531c0710c547f7b29770375d7428555bfc8da16d->leave($__internal_0b39e331668b07fa2e54ac57531c0710c547f7b29770375d7428555bfc8da16d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
