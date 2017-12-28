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
        $__internal_86dfa6dd417717333e1c7ba767a726c00dfb3bff3e41278e43cb830bbcef3902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86dfa6dd417717333e1c7ba767a726c00dfb3bff3e41278e43cb830bbcef3902->enter($__internal_86dfa6dd417717333e1c7ba767a726c00dfb3bff3e41278e43cb830bbcef3902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_70e8ca87dcd25d64adbec0fa800d68bb714bf7f8f5ac93d9f0d7d41842f6306a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e8ca87dcd25d64adbec0fa800d68bb714bf7f8f5ac93d9f0d7d41842f6306a->enter($__internal_70e8ca87dcd25d64adbec0fa800d68bb714bf7f8f5ac93d9f0d7d41842f6306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_86dfa6dd417717333e1c7ba767a726c00dfb3bff3e41278e43cb830bbcef3902->leave($__internal_86dfa6dd417717333e1c7ba767a726c00dfb3bff3e41278e43cb830bbcef3902_prof);

        
        $__internal_70e8ca87dcd25d64adbec0fa800d68bb714bf7f8f5ac93d9f0d7d41842f6306a->leave($__internal_70e8ca87dcd25d64adbec0fa800d68bb714bf7f8f5ac93d9f0d7d41842f6306a_prof);

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
