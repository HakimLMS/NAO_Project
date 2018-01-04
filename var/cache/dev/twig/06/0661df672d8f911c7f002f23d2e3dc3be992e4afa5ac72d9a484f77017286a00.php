<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_ceb2fd8a5ca703ea63a98955184f8a6f436b51b97a12ce6419aaab574c74d94b extends Twig_Template
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
        $__internal_73f6a49f7de1159cb95f843726bbd8153fc523138152b71fb9934c2eff6d96a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f6a49f7de1159cb95f843726bbd8153fc523138152b71fb9934c2eff6d96a8->enter($__internal_73f6a49f7de1159cb95f843726bbd8153fc523138152b71fb9934c2eff6d96a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_3605aa7396ba526298ed7d957ae8aa263af1e8154916f802f43afde70f0364f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3605aa7396ba526298ed7d957ae8aa263af1e8154916f802f43afde70f0364f9->enter($__internal_3605aa7396ba526298ed7d957ae8aa263af1e8154916f802f43afde70f0364f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_73f6a49f7de1159cb95f843726bbd8153fc523138152b71fb9934c2eff6d96a8->leave($__internal_73f6a49f7de1159cb95f843726bbd8153fc523138152b71fb9934c2eff6d96a8_prof);

        
        $__internal_3605aa7396ba526298ed7d957ae8aa263af1e8154916f802f43afde70f0364f9->leave($__internal_3605aa7396ba526298ed7d957ae8aa263af1e8154916f802f43afde70f0364f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\date_widget.html.php");
    }
}
