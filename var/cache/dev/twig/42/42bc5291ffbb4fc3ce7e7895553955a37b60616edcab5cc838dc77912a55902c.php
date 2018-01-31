<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5e4ed48d35bdc7bb92ab8ee323316b698ec1785b2e0c3c919ff248520f068740 extends Twig_Template
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
        $__internal_15a89e3eaefeb102182cc35a8d510b2686feda7f35049a7b11f72fcd68951cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a89e3eaefeb102182cc35a8d510b2686feda7f35049a7b11f72fcd68951cba->enter($__internal_15a89e3eaefeb102182cc35a8d510b2686feda7f35049a7b11f72fcd68951cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ed73a1b6642fa2b41f83380838c9baecf404331092c95d5d0ac1b667c8a8fb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed73a1b6642fa2b41f83380838c9baecf404331092c95d5d0ac1b667c8a8fb14->enter($__internal_ed73a1b6642fa2b41f83380838c9baecf404331092c95d5d0ac1b667c8a8fb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_15a89e3eaefeb102182cc35a8d510b2686feda7f35049a7b11f72fcd68951cba->leave($__internal_15a89e3eaefeb102182cc35a8d510b2686feda7f35049a7b11f72fcd68951cba_prof);

        
        $__internal_ed73a1b6642fa2b41f83380838c9baecf404331092c95d5d0ac1b667c8a8fb14->leave($__internal_ed73a1b6642fa2b41f83380838c9baecf404331092c95d5d0ac1b667c8a8fb14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\framework-bundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
