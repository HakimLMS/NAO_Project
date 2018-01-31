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
        $__internal_12a373c9a0b327aee7aaa063a78700ac2ea19e86291c44cb7f07c44f151bed61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12a373c9a0b327aee7aaa063a78700ac2ea19e86291c44cb7f07c44f151bed61->enter($__internal_12a373c9a0b327aee7aaa063a78700ac2ea19e86291c44cb7f07c44f151bed61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/VIR.html.twig"));

        $__internal_2adaf6fc75cda9faa2001f92014a1a147b5b73a13bfecebb51c4da94c7725278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2adaf6fc75cda9faa2001f92014a1a147b5b73a13bfecebb51c4da94c7725278->enter($__internal_2adaf6fc75cda9faa2001f92014a1a147b5b73a13bfecebb51c4da94c7725278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Don/VIR.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12a373c9a0b327aee7aaa063a78700ac2ea19e86291c44cb7f07c44f151bed61->leave($__internal_12a373c9a0b327aee7aaa063a78700ac2ea19e86291c44cb7f07c44f151bed61_prof);

        
        $__internal_2adaf6fc75cda9faa2001f92014a1a147b5b73a13bfecebb51c4da94c7725278->leave($__internal_2adaf6fc75cda9faa2001f92014a1a147b5b73a13bfecebb51c4da94c7725278_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cbd7c4899fe05fae509415ba4263d0646796a39a309261ee0673d64907f9c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cbd7c4899fe05fae509415ba4263d0646796a39a309261ee0673d64907f9c1e->enter($__internal_7cbd7c4899fe05fae509415ba4263d0646796a39a309261ee0673d64907f9c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27e17ba93aae4f63a8f864348ed8d75d3bc265e16edd324d12619bb98fcaec83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e17ba93aae4f63a8f864348ed8d75d3bc265e16edd324d12619bb98fcaec83->enter($__internal_27e17ba93aae4f63a8f864348ed8d75d3bc265e16edd324d12619bb98fcaec83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Don - Virement";
        
        $__internal_27e17ba93aae4f63a8f864348ed8d75d3bc265e16edd324d12619bb98fcaec83->leave($__internal_27e17ba93aae4f63a8f864348ed8d75d3bc265e16edd324d12619bb98fcaec83_prof);

        
        $__internal_7cbd7c4899fe05fae509415ba4263d0646796a39a309261ee0673d64907f9c1e->leave($__internal_7cbd7c4899fe05fae509415ba4263d0646796a39a309261ee0673d64907f9c1e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd193e75b815bd11f666c35f1ce79fcb764a367d2c30a4d068d01c8ff2f18149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd193e75b815bd11f666c35f1ce79fcb764a367d2c30a4d068d01c8ff2f18149->enter($__internal_cd193e75b815bd11f666c35f1ce79fcb764a367d2c30a4d068d01c8ff2f18149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89af8254bf23a2af6b673909e9ae6e5d75e4176037649aee4a85b2fba5055cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89af8254bf23a2af6b673909e9ae6e5d75e4176037649aee4a85b2fba5055cb7->enter($__internal_89af8254bf23a2af6b673909e9ae6e5d75e4176037649aee4a85b2fba5055cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89af8254bf23a2af6b673909e9ae6e5d75e4176037649aee4a85b2fba5055cb7->leave($__internal_89af8254bf23a2af6b673909e9ae6e5d75e4176037649aee4a85b2fba5055cb7_prof);

        
        $__internal_cd193e75b815bd11f666c35f1ce79fcb764a367d2c30a4d068d01c8ff2f18149->leave($__internal_cd193e75b815bd11f666c35f1ce79fcb764a367d2c30a4d068d01c8ff2f18149_prof);

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
