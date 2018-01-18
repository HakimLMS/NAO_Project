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
        $__internal_318dbaccb3c06d154455ee85ffd8b7b1c0be2e686de2a43e02578065f113f0b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318dbaccb3c06d154455ee85ffd8b7b1c0be2e686de2a43e02578065f113f0b0->enter($__internal_318dbaccb3c06d154455ee85ffd8b7b1c0be2e686de2a43e02578065f113f0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_08ca964bca285a9bb0f183475de81c7477e7f13420753826256c4452061451c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ca964bca285a9bb0f183475de81c7477e7f13420753826256c4452061451c9->enter($__internal_08ca964bca285a9bb0f183475de81c7477e7f13420753826256c4452061451c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_318dbaccb3c06d154455ee85ffd8b7b1c0be2e686de2a43e02578065f113f0b0->leave($__internal_318dbaccb3c06d154455ee85ffd8b7b1c0be2e686de2a43e02578065f113f0b0_prof);

        
        $__internal_08ca964bca285a9bb0f183475de81c7477e7f13420753826256c4452061451c9->leave($__internal_08ca964bca285a9bb0f183475de81c7477e7f13420753826256c4452061451c9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0770980db203712ab03e4bcbe5800ce756082ad814d7827ac0ac032fc890456f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0770980db203712ab03e4bcbe5800ce756082ad814d7827ac0ac032fc890456f->enter($__internal_0770980db203712ab03e4bcbe5800ce756082ad814d7827ac0ac032fc890456f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9d656e61793ec63521c89c701fdaeb737b67fc5a230ca680ea1200a29cdf913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9d656e61793ec63521c89c701fdaeb737b67fc5a230ca680ea1200a29cdf913->enter($__internal_a9d656e61793ec63521c89c701fdaeb737b67fc5a230ca680ea1200a29cdf913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a9d656e61793ec63521c89c701fdaeb737b67fc5a230ca680ea1200a29cdf913->leave($__internal_a9d656e61793ec63521c89c701fdaeb737b67fc5a230ca680ea1200a29cdf913_prof);

        
        $__internal_0770980db203712ab03e4bcbe5800ce756082ad814d7827ac0ac032fc890456f->leave($__internal_0770980db203712ab03e4bcbe5800ce756082ad814d7827ac0ac032fc890456f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a13a17c4b0ee4a279f392cc661078ef9550c4fbe936949022d2ba5641a857111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13a17c4b0ee4a279f392cc661078ef9550c4fbe936949022d2ba5641a857111->enter($__internal_a13a17c4b0ee4a279f392cc661078ef9550c4fbe936949022d2ba5641a857111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_be9efdfcc52ceb8aed2b937b81c968be6ef7b7fcb3a1712402513624aa4cfb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9efdfcc52ceb8aed2b937b81c968be6ef7b7fcb3a1712402513624aa4cfb55->enter($__internal_be9efdfcc52ceb8aed2b937b81c968be6ef7b7fcb3a1712402513624aa4cfb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_be9efdfcc52ceb8aed2b937b81c968be6ef7b7fcb3a1712402513624aa4cfb55->leave($__internal_be9efdfcc52ceb8aed2b937b81c968be6ef7b7fcb3a1712402513624aa4cfb55_prof);

        
        $__internal_a13a17c4b0ee4a279f392cc661078ef9550c4fbe936949022d2ba5641a857111->leave($__internal_a13a17c4b0ee4a279f392cc661078ef9550c4fbe936949022d2ba5641a857111_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7fca984562f597a02bed94679595030c0ab4ec61a9293ddcf3d6ba90f69849c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fca984562f597a02bed94679595030c0ab4ec61a9293ddcf3d6ba90f69849c->enter($__internal_e7fca984562f597a02bed94679595030c0ab4ec61a9293ddcf3d6ba90f69849c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5f14986603b5a1622d39e189a51479c5650f2b011513fd49df671ac53807864d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f14986603b5a1622d39e189a51479c5650f2b011513fd49df671ac53807864d->enter($__internal_5f14986603b5a1622d39e189a51479c5650f2b011513fd49df671ac53807864d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5f14986603b5a1622d39e189a51479c5650f2b011513fd49df671ac53807864d->leave($__internal_5f14986603b5a1622d39e189a51479c5650f2b011513fd49df671ac53807864d_prof);

        
        $__internal_e7fca984562f597a02bed94679595030c0ab4ec61a9293ddcf3d6ba90f69849c->leave($__internal_e7fca984562f597a02bed94679595030c0ab4ec61a9293ddcf3d6ba90f69849c_prof);

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
