<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_12c43f5b48cd5fb54c36765ceb62eb52409ca7c856516a0dbc527758a0bd91c4 extends Twig_Template
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
        $__internal_2769e569e8429bfdbaeaf61282a02de489c8e96732f582801f86cf3ea0246812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2769e569e8429bfdbaeaf61282a02de489c8e96732f582801f86cf3ea0246812->enter($__internal_2769e569e8429bfdbaeaf61282a02de489c8e96732f582801f86cf3ea0246812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e374ada09d52200a5eb29ba4a81e61cd66b4607b65d37c37db9837cd34d59dc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e374ada09d52200a5eb29ba4a81e61cd66b4607b65d37c37db9837cd34d59dc8->enter($__internal_e374ada09d52200a5eb29ba4a81e61cd66b4607b65d37c37db9837cd34d59dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2769e569e8429bfdbaeaf61282a02de489c8e96732f582801f86cf3ea0246812->leave($__internal_2769e569e8429bfdbaeaf61282a02de489c8e96732f582801f86cf3ea0246812_prof);

        
        $__internal_e374ada09d52200a5eb29ba4a81e61cd66b4607b65d37c37db9837cd34d59dc8->leave($__internal_e374ada09d52200a5eb29ba4a81e61cd66b4607b65d37c37db9837cd34d59dc8_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
