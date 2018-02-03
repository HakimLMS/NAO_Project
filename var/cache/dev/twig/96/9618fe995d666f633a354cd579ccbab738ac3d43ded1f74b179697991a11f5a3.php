<?php

/* Don/VIR.html.twig */
class __TwigTemplate_393b5575fcc9d3a15c9559441a0c70e0867b462e41c582146fbe6dde023b99a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "Don/VIR.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7ef35bf524448311e6497444adb15792147a033444e84105c5cc6988271ec9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ef35bf524448311e6497444adb15792147a033444e84105c5cc6988271ec9e->enter($__internal_f7ef35bf524448311e6497444adb15792147a033444e84105c5cc6988271ec9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/VIR.html.twig"));

        $__internal_a2c57546b91fc0b9d12c18fe249e1285f768c379b4704c25f86134700b2fe269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c57546b91fc0b9d12c18fe249e1285f768c379b4704c25f86134700b2fe269->enter($__internal_a2c57546b91fc0b9d12c18fe249e1285f768c379b4704c25f86134700b2fe269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/VIR.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7ef35bf524448311e6497444adb15792147a033444e84105c5cc6988271ec9e->leave($__internal_f7ef35bf524448311e6497444adb15792147a033444e84105c5cc6988271ec9e_prof);

        
        $__internal_a2c57546b91fc0b9d12c18fe249e1285f768c379b4704c25f86134700b2fe269->leave($__internal_a2c57546b91fc0b9d12c18fe249e1285f768c379b4704c25f86134700b2fe269_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7eed5fe77f79ee524543a6be7bbc50e1c1ac0c70814dd3ffc9ed34e12044b737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eed5fe77f79ee524543a6be7bbc50e1c1ac0c70814dd3ffc9ed34e12044b737->enter($__internal_7eed5fe77f79ee524543a6be7bbc50e1c1ac0c70814dd3ffc9ed34e12044b737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_101c9169c359823c80b0b2c08ecf8f90a8ece27e13c92ec57d1f865748742566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101c9169c359823c80b0b2c08ecf8f90a8ece27e13c92ec57d1f865748742566->enter($__internal_101c9169c359823c80b0b2c08ecf8f90a8ece27e13c92ec57d1f865748742566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Don - Virement";
        
        $__internal_101c9169c359823c80b0b2c08ecf8f90a8ece27e13c92ec57d1f865748742566->leave($__internal_101c9169c359823c80b0b2c08ecf8f90a8ece27e13c92ec57d1f865748742566_prof);

        
        $__internal_7eed5fe77f79ee524543a6be7bbc50e1c1ac0c70814dd3ffc9ed34e12044b737->leave($__internal_7eed5fe77f79ee524543a6be7bbc50e1c1ac0c70814dd3ffc9ed34e12044b737_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_213182b51f5e247c4e2ea3b341887372faa87e254cdbbffcf0906301de0ee02f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213182b51f5e247c4e2ea3b341887372faa87e254cdbbffcf0906301de0ee02f->enter($__internal_213182b51f5e247c4e2ea3b341887372faa87e254cdbbffcf0906301de0ee02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b4f087e6bb42f9d33570843a55fad1bdf7ce32a31c871fce67bbb170955c5a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4f087e6bb42f9d33570843a55fad1bdf7ce32a31c871fce67bbb170955c5a3->enter($__internal_5b4f087e6bb42f9d33570843a55fad1bdf7ce32a31c871fce67bbb170955c5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container-fluid\" id=\"don\">
        <div class=\"white-filter\">
            <div class=\"container\" id=\"block-vir\">
                <div class=\"row\">
                    <div class=\"offset-1 col-10 col-md-5\" id=\"don-form\">
                        <h3>Merci</h3>
                        <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/img/don-blanc.svg"), "html", null, true);
        echo "\" width=\"65px\" height=\"65px\">
                        <p id=\"p-chq\">Veuillez effectuer votre virement au compte bancaire de <strong>\"Nos Amis les Oiseaux\"</strong></p>

                        <div id=\"table-vir\">
                            <table class=\"table\">
                              <tr>
                                <th scope=\"row\">IBAN</th>
                                <td>0000000000</td>
                              </tr>
                              <tr>
                                <th scope=\"row\">BIC</th>
                                <td>0000000000</td>
                              </tr>
                            </table>
                        </div>

                        <a id=\"btn-chq\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><button class=\"btn\"> Retour à l'accueil</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>     

";
        
        $__internal_5b4f087e6bb42f9d33570843a55fad1bdf7ce32a31c871fce67bbb170955c5a3->leave($__internal_5b4f087e6bb42f9d33570843a55fad1bdf7ce32a31c871fce67bbb170955c5a3_prof);

        
        $__internal_213182b51f5e247c4e2ea3b341887372faa87e254cdbbffcf0906301de0ee02f->leave($__internal_213182b51f5e247c4e2ea3b341887372faa87e254cdbbffcf0906301de0ee02f_prof);

    }

    public function getTemplateName()
    {
        return "Don/VIR.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}Don - Virement{% endblock %}

{% block body %}

    <div class=\"container-fluid\" id=\"don\">
        <div class=\"white-filter\">
            <div class=\"container\" id=\"block-vir\">
                <div class=\"row\">
                    <div class=\"offset-1 col-10 col-md-5\" id=\"don-form\">
                        <h3>Merci</h3>
                        <img src=\"{{ asset('build/img/don-blanc.svg') }}\" width=\"65px\" height=\"65px\">
                        <p id=\"p-chq\">Veuillez effectuer votre virement au compte bancaire de <strong>\"Nos Amis les Oiseaux\"</strong></p>

                        <div id=\"table-vir\">
                            <table class=\"table\">
                              <tr>
                                <th scope=\"row\">IBAN</th>
                                <td>0000000000</td>
                              </tr>
                              <tr>
                                <th scope=\"row\">BIC</th>
                                <td>0000000000</td>
                              </tr>
                            </table>
                        </div>

                        <a id=\"btn-chq\" href=\"{{ path('home') }}\"><button class=\"btn\"> Retour à l'accueil</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>     

{% endblock %}", "Don/VIR.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\Don\\VIR.html.twig");
    }
}
