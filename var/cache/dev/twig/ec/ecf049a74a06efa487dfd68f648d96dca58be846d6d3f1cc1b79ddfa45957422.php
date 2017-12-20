<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_22f44d9e4f80600a8d885782131d70f1532e0c0b1fc16384e9ef2e4ecbb00df4 extends Twig_Template
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
        $__internal_4f5341f0947fd5dfb70152d14cd32cf64bde896582f7f5d602a10d92f3703b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5341f0947fd5dfb70152d14cd32cf64bde896582f7f5d602a10d92f3703b97->enter($__internal_4f5341f0947fd5dfb70152d14cd32cf64bde896582f7f5d602a10d92f3703b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f5b843a03f45ad1d56eaa57b724e36a56b9c8c02d870b18700c3fbe50ca4c907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b843a03f45ad1d56eaa57b724e36a56b9c8c02d870b18700c3fbe50ca4c907->enter($__internal_f5b843a03f45ad1d56eaa57b724e36a56b9c8c02d870b18700c3fbe50ca4c907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4f5341f0947fd5dfb70152d14cd32cf64bde896582f7f5d602a10d92f3703b97->leave($__internal_4f5341f0947fd5dfb70152d14cd32cf64bde896582f7f5d602a10d92f3703b97_prof);

        
        $__internal_f5b843a03f45ad1d56eaa57b724e36a56b9c8c02d870b18700c3fbe50ca4c907->leave($__internal_f5b843a03f45ad1d56eaa57b724e36a56b9c8c02d870b18700c3fbe50ca4c907_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2c707142bd960606f2b5ddc6f28f57a89cf40d74c6f030ad65beb5e3c905a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c707142bd960606f2b5ddc6f28f57a89cf40d74c6f030ad65beb5e3c905a8c->enter($__internal_a2c707142bd960606f2b5ddc6f28f57a89cf40d74c6f030ad65beb5e3c905a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d58084a57eddf73a2ef4bb4bd06664f4154f09abab19e8ed8f19aac224e1ddc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58084a57eddf73a2ef4bb4bd06664f4154f09abab19e8ed8f19aac224e1ddc4->enter($__internal_d58084a57eddf73a2ef4bb4bd06664f4154f09abab19e8ed8f19aac224e1ddc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d58084a57eddf73a2ef4bb4bd06664f4154f09abab19e8ed8f19aac224e1ddc4->leave($__internal_d58084a57eddf73a2ef4bb4bd06664f4154f09abab19e8ed8f19aac224e1ddc4_prof);

        
        $__internal_a2c707142bd960606f2b5ddc6f28f57a89cf40d74c6f030ad65beb5e3c905a8c->leave($__internal_a2c707142bd960606f2b5ddc6f28f57a89cf40d74c6f030ad65beb5e3c905a8c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_23342a6fd0acb3cc65df667084c294f4387b84609b50b233b1a53cc53a9a8dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23342a6fd0acb3cc65df667084c294f4387b84609b50b233b1a53cc53a9a8dc9->enter($__internal_23342a6fd0acb3cc65df667084c294f4387b84609b50b233b1a53cc53a9a8dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_401ec9124f8cc4de6fdcbfa521ea63bf2d74927c57cbe55fdee2695420bb53fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_401ec9124f8cc4de6fdcbfa521ea63bf2d74927c57cbe55fdee2695420bb53fc->enter($__internal_401ec9124f8cc4de6fdcbfa521ea63bf2d74927c57cbe55fdee2695420bb53fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_401ec9124f8cc4de6fdcbfa521ea63bf2d74927c57cbe55fdee2695420bb53fc->leave($__internal_401ec9124f8cc4de6fdcbfa521ea63bf2d74927c57cbe55fdee2695420bb53fc_prof);

        
        $__internal_23342a6fd0acb3cc65df667084c294f4387b84609b50b233b1a53cc53a9a8dc9->leave($__internal_23342a6fd0acb3cc65df667084c294f4387b84609b50b233b1a53cc53a9a8dc9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_681c22464ba18f640843460b9a8cfdc0050079aa133c410bc106b1b7416d95e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681c22464ba18f640843460b9a8cfdc0050079aa133c410bc106b1b7416d95e9->enter($__internal_681c22464ba18f640843460b9a8cfdc0050079aa133c410bc106b1b7416d95e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b0249c9f348eda8635e6b6764175a356824c6039ab5db834b90565536a5a7609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0249c9f348eda8635e6b6764175a356824c6039ab5db834b90565536a5a7609->enter($__internal_b0249c9f348eda8635e6b6764175a356824c6039ab5db834b90565536a5a7609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b0249c9f348eda8635e6b6764175a356824c6039ab5db834b90565536a5a7609->leave($__internal_b0249c9f348eda8635e6b6764175a356824c6039ab5db834b90565536a5a7609_prof);

        
        $__internal_681c22464ba18f640843460b9a8cfdc0050079aa133c410bc106b1b7416d95e9->leave($__internal_681c22464ba18f640843460b9a8cfdc0050079aa133c410bc106b1b7416d95e9_prof);

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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
