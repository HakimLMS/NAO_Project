<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1fccbcb4bbe07d3bd48672c6a3bb4f7d505eb2ba00db6bb6d9dc9622320f96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14233101600fb609517fee850d2b7da6846db09c2dbab5c41108f53d72e1e9d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14233101600fb609517fee850d2b7da6846db09c2dbab5c41108f53d72e1e9d4->enter($__internal_14233101600fb609517fee850d2b7da6846db09c2dbab5c41108f53d72e1e9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4100a1fa9481a4f9ce4e1ba5f8f9b00049e64badff4b0e27bfbdc26f60ac293b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4100a1fa9481a4f9ce4e1ba5f8f9b00049e64badff4b0e27bfbdc26f60ac293b->enter($__internal_4100a1fa9481a4f9ce4e1ba5f8f9b00049e64badff4b0e27bfbdc26f60ac293b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_14233101600fb609517fee850d2b7da6846db09c2dbab5c41108f53d72e1e9d4->leave($__internal_14233101600fb609517fee850d2b7da6846db09c2dbab5c41108f53d72e1e9d4_prof);

        
        $__internal_4100a1fa9481a4f9ce4e1ba5f8f9b00049e64badff4b0e27bfbdc26f60ac293b->leave($__internal_4100a1fa9481a4f9ce4e1ba5f8f9b00049e64badff4b0e27bfbdc26f60ac293b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_01085458b30197fadd8131e1b144b276a4040b49916335fef2a9796f38a26af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01085458b30197fadd8131e1b144b276a4040b49916335fef2a9796f38a26af4->enter($__internal_01085458b30197fadd8131e1b144b276a4040b49916335fef2a9796f38a26af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d11bef330f0b5a0f309af3d8d0e3db2be96305abc89274713e58e3435d25174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d11bef330f0b5a0f309af3d8d0e3db2be96305abc89274713e58e3435d25174->enter($__internal_6d11bef330f0b5a0f309af3d8d0e3db2be96305abc89274713e58e3435d25174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6d11bef330f0b5a0f309af3d8d0e3db2be96305abc89274713e58e3435d25174->leave($__internal_6d11bef330f0b5a0f309af3d8d0e3db2be96305abc89274713e58e3435d25174_prof);

        
        $__internal_01085458b30197fadd8131e1b144b276a4040b49916335fef2a9796f38a26af4->leave($__internal_01085458b30197fadd8131e1b144b276a4040b49916335fef2a9796f38a26af4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a3a099bfd7762ed9ea9156ce031f42112018e557b147add013d4165898f8e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a3a099bfd7762ed9ea9156ce031f42112018e557b147add013d4165898f8e82->enter($__internal_2a3a099bfd7762ed9ea9156ce031f42112018e557b147add013d4165898f8e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebef5526177b07acb064d60f52dca3775e8babadbe49a5eeeb2d5e884eb683bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebef5526177b07acb064d60f52dca3775e8babadbe49a5eeeb2d5e884eb683bf->enter($__internal_ebef5526177b07acb064d60f52dca3775e8babadbe49a5eeeb2d5e884eb683bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ebef5526177b07acb064d60f52dca3775e8babadbe49a5eeeb2d5e884eb683bf->leave($__internal_ebef5526177b07acb064d60f52dca3775e8babadbe49a5eeeb2d5e884eb683bf_prof);

        
        $__internal_2a3a099bfd7762ed9ea9156ce031f42112018e557b147add013d4165898f8e82->leave($__internal_2a3a099bfd7762ed9ea9156ce031f42112018e557b147add013d4165898f8e82_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b32039d6ae423d8fb3cf9c1b48acdeec7a49ad553f4ce260507d7e45aeff066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b32039d6ae423d8fb3cf9c1b48acdeec7a49ad553f4ce260507d7e45aeff066->enter($__internal_3b32039d6ae423d8fb3cf9c1b48acdeec7a49ad553f4ce260507d7e45aeff066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa3eb9be92d7792cd2dd0d115d024b9ef4c47e2f51cfde378ad1eccfad9a968a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3eb9be92d7792cd2dd0d115d024b9ef4c47e2f51cfde378ad1eccfad9a968a->enter($__internal_fa3eb9be92d7792cd2dd0d115d024b9ef4c47e2f51cfde378ad1eccfad9a968a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa3eb9be92d7792cd2dd0d115d024b9ef4c47e2f51cfde378ad1eccfad9a968a->leave($__internal_fa3eb9be92d7792cd2dd0d115d024b9ef4c47e2f51cfde378ad1eccfad9a968a_prof);

        
        $__internal_3b32039d6ae423d8fb3cf9c1b48acdeec7a49ad553f4ce260507d7e45aeff066->leave($__internal_3b32039d6ae423d8fb3cf9c1b48acdeec7a49ad553f4ce260507d7e45aeff066_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
