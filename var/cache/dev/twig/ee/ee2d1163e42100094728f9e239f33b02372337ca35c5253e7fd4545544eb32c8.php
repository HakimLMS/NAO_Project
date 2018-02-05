<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b4954f9d844b1631458226410b587b564ece22a6fb27429ea51800a95a5206d5 extends Twig_Template
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
        $__internal_09ee56fc3e788ae4f13c51c8d187a9e385ca9b1aba246a728e6506cc4a2bddd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ee56fc3e788ae4f13c51c8d187a9e385ca9b1aba246a728e6506cc4a2bddd3->enter($__internal_09ee56fc3e788ae4f13c51c8d187a9e385ca9b1aba246a728e6506cc4a2bddd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_ae746f73272a8cb724ca03ff616479ff8c74048ad5d5f28ead29c8e4cf9382df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae746f73272a8cb724ca03ff616479ff8c74048ad5d5f28ead29c8e4cf9382df->enter($__internal_ae746f73272a8cb724ca03ff616479ff8c74048ad5d5f28ead29c8e4cf9382df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_09ee56fc3e788ae4f13c51c8d187a9e385ca9b1aba246a728e6506cc4a2bddd3->leave($__internal_09ee56fc3e788ae4f13c51c8d187a9e385ca9b1aba246a728e6506cc4a2bddd3_prof);

        
        $__internal_ae746f73272a8cb724ca03ff616479ff8c74048ad5d5f28ead29c8e4cf9382df->leave($__internal_ae746f73272a8cb724ca03ff616479ff8c74048ad5d5f28ead29c8e4cf9382df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
