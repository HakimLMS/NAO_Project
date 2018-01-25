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
        $__internal_39b8dc7f593b1ec0610690b9343e2f5310cccad2a0ab8032ba4206dec5d523c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b8dc7f593b1ec0610690b9343e2f5310cccad2a0ab8032ba4206dec5d523c1->enter($__internal_39b8dc7f593b1ec0610690b9343e2f5310cccad2a0ab8032ba4206dec5d523c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_02afc4e8152721cb33c3bc89c8fa1eb8dd228bdf8273ec8e36c3c7f438bfda4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02afc4e8152721cb33c3bc89c8fa1eb8dd228bdf8273ec8e36c3c7f438bfda4a->enter($__internal_02afc4e8152721cb33c3bc89c8fa1eb8dd228bdf8273ec8e36c3c7f438bfda4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_39b8dc7f593b1ec0610690b9343e2f5310cccad2a0ab8032ba4206dec5d523c1->leave($__internal_39b8dc7f593b1ec0610690b9343e2f5310cccad2a0ab8032ba4206dec5d523c1_prof);

        
        $__internal_02afc4e8152721cb33c3bc89c8fa1eb8dd228bdf8273ec8e36c3c7f438bfda4a->leave($__internal_02afc4e8152721cb33c3bc89c8fa1eb8dd228bdf8273ec8e36c3c7f438bfda4a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_97cf393cc82e6d31869b999409326d5fc16f8b64b6ca89780124dbf40b1c1e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97cf393cc82e6d31869b999409326d5fc16f8b64b6ca89780124dbf40b1c1e33->enter($__internal_97cf393cc82e6d31869b999409326d5fc16f8b64b6ca89780124dbf40b1c1e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2629f9293f9ec02357b56713fd0c6fb9451abfc4dfa406574c2c1669b2e8455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2629f9293f9ec02357b56713fd0c6fb9451abfc4dfa406574c2c1669b2e8455->enter($__internal_c2629f9293f9ec02357b56713fd0c6fb9451abfc4dfa406574c2c1669b2e8455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c2629f9293f9ec02357b56713fd0c6fb9451abfc4dfa406574c2c1669b2e8455->leave($__internal_c2629f9293f9ec02357b56713fd0c6fb9451abfc4dfa406574c2c1669b2e8455_prof);

        
        $__internal_97cf393cc82e6d31869b999409326d5fc16f8b64b6ca89780124dbf40b1c1e33->leave($__internal_97cf393cc82e6d31869b999409326d5fc16f8b64b6ca89780124dbf40b1c1e33_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbe96a318ebf3da04f73683f216eb0022ebc309443a874b83693cb85b739bbb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe96a318ebf3da04f73683f216eb0022ebc309443a874b83693cb85b739bbb8->enter($__internal_fbe96a318ebf3da04f73683f216eb0022ebc309443a874b83693cb85b739bbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6366daa32175cebd7b86d9ddb7a264f8071c53f3f40f0fe37e2be57af296f4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6366daa32175cebd7b86d9ddb7a264f8071c53f3f40f0fe37e2be57af296f4fc->enter($__internal_6366daa32175cebd7b86d9ddb7a264f8071c53f3f40f0fe37e2be57af296f4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6366daa32175cebd7b86d9ddb7a264f8071c53f3f40f0fe37e2be57af296f4fc->leave($__internal_6366daa32175cebd7b86d9ddb7a264f8071c53f3f40f0fe37e2be57af296f4fc_prof);

        
        $__internal_fbe96a318ebf3da04f73683f216eb0022ebc309443a874b83693cb85b739bbb8->leave($__internal_fbe96a318ebf3da04f73683f216eb0022ebc309443a874b83693cb85b739bbb8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c847fa21e524bbf6549accd646827892827c666141ed8c37f04c029066de5c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c847fa21e524bbf6549accd646827892827c666141ed8c37f04c029066de5c78->enter($__internal_c847fa21e524bbf6549accd646827892827c666141ed8c37f04c029066de5c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f12e0a37710385c890649cf44a89132f9f6603f20758d4b9b9ffc6baa8a4ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f12e0a37710385c890649cf44a89132f9f6603f20758d4b9b9ffc6baa8a4ba5->enter($__internal_7f12e0a37710385c890649cf44a89132f9f6603f20758d4b9b9ffc6baa8a4ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f12e0a37710385c890649cf44a89132f9f6603f20758d4b9b9ffc6baa8a4ba5->leave($__internal_7f12e0a37710385c890649cf44a89132f9f6603f20758d4b9b9ffc6baa8a4ba5_prof);

        
        $__internal_c847fa21e524bbf6549accd646827892827c666141ed8c37f04c029066de5c78->leave($__internal_c847fa21e524bbf6549accd646827892827c666141ed8c37f04c029066de5c78_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_37b104a30d785d00d8a1c9c9c4c5d0efdb30384ee6167a91278b873d2d223ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b104a30d785d00d8a1c9c9c4c5d0efdb30384ee6167a91278b873d2d223ce9->enter($__internal_37b104a30d785d00d8a1c9c9c4c5d0efdb30384ee6167a91278b873d2d223ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_92bf8f1fb7753ba3376b4f8983ae5f1a1859308091df994268a53a5ccca28b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92bf8f1fb7753ba3376b4f8983ae5f1a1859308091df994268a53a5ccca28b3e->enter($__internal_92bf8f1fb7753ba3376b4f8983ae5f1a1859308091df994268a53a5ccca28b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_92bf8f1fb7753ba3376b4f8983ae5f1a1859308091df994268a53a5ccca28b3e->leave($__internal_92bf8f1fb7753ba3376b4f8983ae5f1a1859308091df994268a53a5ccca28b3e_prof);

        
        $__internal_37b104a30d785d00d8a1c9c9c4c5d0efdb30384ee6167a91278b873d2d223ce9->leave($__internal_37b104a30d785d00d8a1c9c9c4c5d0efdb30384ee6167a91278b873d2d223ce9_prof);

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
