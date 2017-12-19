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
        $__internal_47ad312a95f0386bdd9162619adc31ce000c6d904d3f0656cfad2368a716235c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ad312a95f0386bdd9162619adc31ce000c6d904d3f0656cfad2368a716235c->enter($__internal_47ad312a95f0386bdd9162619adc31ce000c6d904d3f0656cfad2368a716235c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_414ef359eef0a94fe8f7c4b9cfff455aa73f70d6c7fcbe32290a6f9bba207dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414ef359eef0a94fe8f7c4b9cfff455aa73f70d6c7fcbe32290a6f9bba207dbb->enter($__internal_414ef359eef0a94fe8f7c4b9cfff455aa73f70d6c7fcbe32290a6f9bba207dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_47ad312a95f0386bdd9162619adc31ce000c6d904d3f0656cfad2368a716235c->leave($__internal_47ad312a95f0386bdd9162619adc31ce000c6d904d3f0656cfad2368a716235c_prof);

        
        $__internal_414ef359eef0a94fe8f7c4b9cfff455aa73f70d6c7fcbe32290a6f9bba207dbb->leave($__internal_414ef359eef0a94fe8f7c4b9cfff455aa73f70d6c7fcbe32290a6f9bba207dbb_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
