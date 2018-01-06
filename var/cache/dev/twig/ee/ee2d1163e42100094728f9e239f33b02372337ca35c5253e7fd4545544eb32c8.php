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
        $__internal_47bf6f89eabb0b5a0064c5bf25c3d424113aad6645f363b5f5b8130b2d93f24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47bf6f89eabb0b5a0064c5bf25c3d424113aad6645f363b5f5b8130b2d93f24a->enter($__internal_47bf6f89eabb0b5a0064c5bf25c3d424113aad6645f363b5f5b8130b2d93f24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_705a0cb3a2a9c88b828312c49be1eabb562d353cb160552dd2293a39e1dc92a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705a0cb3a2a9c88b828312c49be1eabb562d353cb160552dd2293a39e1dc92a3->enter($__internal_705a0cb3a2a9c88b828312c49be1eabb562d353cb160552dd2293a39e1dc92a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_47bf6f89eabb0b5a0064c5bf25c3d424113aad6645f363b5f5b8130b2d93f24a->leave($__internal_47bf6f89eabb0b5a0064c5bf25c3d424113aad6645f363b5f5b8130b2d93f24a_prof);

        
        $__internal_705a0cb3a2a9c88b828312c49be1eabb562d353cb160552dd2293a39e1dc92a3->leave($__internal_705a0cb3a2a9c88b828312c49be1eabb562d353cb160552dd2293a39e1dc92a3_prof);

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
