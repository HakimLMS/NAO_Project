<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2801eb251d4aefb798ff649cf0d600f09869ec165956b272fa833146214f8e55 extends Twig_Template
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
        $__internal_923cb33754722834a529e752f56b641c06bc9f271bed21015fac9be5f6128a95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923cb33754722834a529e752f56b641c06bc9f271bed21015fac9be5f6128a95->enter($__internal_923cb33754722834a529e752f56b641c06bc9f271bed21015fac9be5f6128a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3dda172a630fe6ff9b5f3bf91be2ed13dc41d52027c30e91baf5d47e331d93c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dda172a630fe6ff9b5f3bf91be2ed13dc41d52027c30e91baf5d47e331d93c9->enter($__internal_3dda172a630fe6ff9b5f3bf91be2ed13dc41d52027c30e91baf5d47e331d93c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_923cb33754722834a529e752f56b641c06bc9f271bed21015fac9be5f6128a95->leave($__internal_923cb33754722834a529e752f56b641c06bc9f271bed21015fac9be5f6128a95_prof);

        
        $__internal_3dda172a630fe6ff9b5f3bf91be2ed13dc41d52027c30e91baf5d47e331d93c9->leave($__internal_3dda172a630fe6ff9b5f3bf91be2ed13dc41d52027c30e91baf5d47e331d93c9_prof);

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
