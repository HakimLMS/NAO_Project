<?php

/* base.html.twig */
class __TwigTemplate_d677415250fbbc5080c07cd04424ba36e94a88114f6a364184b7ca339428e8b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f575748c4f3a194e00440a28b7c9d60db01d4c11d9e20cffa6f08481397df74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f575748c4f3a194e00440a28b7c9d60db01d4c11d9e20cffa6f08481397df74b->enter($__internal_f575748c4f3a194e00440a28b7c9d60db01d4c11d9e20cffa6f08481397df74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_42cb17043c9e721a00acd546b9212786f3ee2999c6479350d5f8e9d8a7da130a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42cb17043c9e721a00acd546b9212786f3ee2999c6479350d5f8e9d8a7da130a->enter($__internal_42cb17043c9e721a00acd546b9212786f3ee2999c6479350d5f8e9d8a7da130a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_f575748c4f3a194e00440a28b7c9d60db01d4c11d9e20cffa6f08481397df74b->leave($__internal_f575748c4f3a194e00440a28b7c9d60db01d4c11d9e20cffa6f08481397df74b_prof);

        
        $__internal_42cb17043c9e721a00acd546b9212786f3ee2999c6479350d5f8e9d8a7da130a->leave($__internal_42cb17043c9e721a00acd546b9212786f3ee2999c6479350d5f8e9d8a7da130a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bcf0fec2d866b9fca86d9538758f89c6a9a1280d66b9ad26012760a2847d86e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bcf0fec2d866b9fca86d9538758f89c6a9a1280d66b9ad26012760a2847d86e->enter($__internal_1bcf0fec2d866b9fca86d9538758f89c6a9a1280d66b9ad26012760a2847d86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c29c563708d6958712bb3c55ff1c814eae26f1c6be3a55cb00478a7e536b4ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c29c563708d6958712bb3c55ff1c814eae26f1c6be3a55cb00478a7e536b4ef->enter($__internal_9c29c563708d6958712bb3c55ff1c814eae26f1c6be3a55cb00478a7e536b4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9c29c563708d6958712bb3c55ff1c814eae26f1c6be3a55cb00478a7e536b4ef->leave($__internal_9c29c563708d6958712bb3c55ff1c814eae26f1c6be3a55cb00478a7e536b4ef_prof);

        
        $__internal_1bcf0fec2d866b9fca86d9538758f89c6a9a1280d66b9ad26012760a2847d86e->leave($__internal_1bcf0fec2d866b9fca86d9538758f89c6a9a1280d66b9ad26012760a2847d86e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13dd70cc457622a733ea9248951931072552205f037beb732b08e3c6140d2734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13dd70cc457622a733ea9248951931072552205f037beb732b08e3c6140d2734->enter($__internal_13dd70cc457622a733ea9248951931072552205f037beb732b08e3c6140d2734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_73e0584642a4c05ad854f69a4fbdab41d1dc31cef309e81172a8afb8683e6db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e0584642a4c05ad854f69a4fbdab41d1dc31cef309e81172a8afb8683e6db4->enter($__internal_73e0584642a4c05ad854f69a4fbdab41d1dc31cef309e81172a8afb8683e6db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_73e0584642a4c05ad854f69a4fbdab41d1dc31cef309e81172a8afb8683e6db4->leave($__internal_73e0584642a4c05ad854f69a4fbdab41d1dc31cef309e81172a8afb8683e6db4_prof);

        
        $__internal_13dd70cc457622a733ea9248951931072552205f037beb732b08e3c6140d2734->leave($__internal_13dd70cc457622a733ea9248951931072552205f037beb732b08e3c6140d2734_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5f47951eb7d2ed427aaacf25a7f281b5464a64cca42f08c0845ff0de8bb7b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f47951eb7d2ed427aaacf25a7f281b5464a64cca42f08c0845ff0de8bb7b69->enter($__internal_d5f47951eb7d2ed427aaacf25a7f281b5464a64cca42f08c0845ff0de8bb7b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce0e00111ddb7c820e6ffaea913c7d09986bff889e392c46317f0b9e12d6128b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0e00111ddb7c820e6ffaea913c7d09986bff889e392c46317f0b9e12d6128b->enter($__internal_ce0e00111ddb7c820e6ffaea913c7d09986bff889e392c46317f0b9e12d6128b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce0e00111ddb7c820e6ffaea913c7d09986bff889e392c46317f0b9e12d6128b->leave($__internal_ce0e00111ddb7c820e6ffaea913c7d09986bff889e392c46317f0b9e12d6128b_prof);

        
        $__internal_d5f47951eb7d2ed427aaacf25a7f281b5464a64cca42f08c0845ff0de8bb7b69->leave($__internal_d5f47951eb7d2ed427aaacf25a7f281b5464a64cca42f08c0845ff0de8bb7b69_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9b637c9c98743147fcf52499bc454ce27ea611a784f1d084083f05ecc4ddba63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b637c9c98743147fcf52499bc454ce27ea611a784f1d084083f05ecc4ddba63->enter($__internal_9b637c9c98743147fcf52499bc454ce27ea611a784f1d084083f05ecc4ddba63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38017451ff4932314bf40b0d7801c94dce5185431afe179d021448f8d5df5468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38017451ff4932314bf40b0d7801c94dce5185431afe179d021448f8d5df5468->enter($__internal_38017451ff4932314bf40b0d7801c94dce5185431afe179d021448f8d5df5468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38017451ff4932314bf40b0d7801c94dce5185431afe179d021448f8d5df5468->leave($__internal_38017451ff4932314bf40b0d7801c94dce5185431afe179d021448f8d5df5468_prof);

        
        $__internal_9b637c9c98743147fcf52499bc454ce27ea611a784f1d084083f05ecc4ddba63->leave($__internal_9b637c9c98743147fcf52499bc454ce27ea611a784f1d084083f05ecc4ddba63_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 10,  96 => 9,  79 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - {% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\base.html.twig");
    }
}
