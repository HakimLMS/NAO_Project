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
        $__internal_551ffc26e40fdc6ac968455b6469e2ae6c4cf6551ee2947d2abebfe268c49cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551ffc26e40fdc6ac968455b6469e2ae6c4cf6551ee2947d2abebfe268c49cb6->enter($__internal_551ffc26e40fdc6ac968455b6469e2ae6c4cf6551ee2947d2abebfe268c49cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1d419e7f962eeb1889dbdd1a616d30cd56e30b05f53c3912f8c06c4fa71b8ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d419e7f962eeb1889dbdd1a616d30cd56e30b05f53c3912f8c06c4fa71b8ab6->enter($__internal_1d419e7f962eeb1889dbdd1a616d30cd56e30b05f53c3912f8c06c4fa71b8ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_551ffc26e40fdc6ac968455b6469e2ae6c4cf6551ee2947d2abebfe268c49cb6->leave($__internal_551ffc26e40fdc6ac968455b6469e2ae6c4cf6551ee2947d2abebfe268c49cb6_prof);

        
        $__internal_1d419e7f962eeb1889dbdd1a616d30cd56e30b05f53c3912f8c06c4fa71b8ab6->leave($__internal_1d419e7f962eeb1889dbdd1a616d30cd56e30b05f53c3912f8c06c4fa71b8ab6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_442a206f64726c6d6175589fe21938bf72ae654de71c0de4d7ad86dc3f87b2a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442a206f64726c6d6175589fe21938bf72ae654de71c0de4d7ad86dc3f87b2a3->enter($__internal_442a206f64726c6d6175589fe21938bf72ae654de71c0de4d7ad86dc3f87b2a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_26b709a7e57a0491e3d72bffca1b8f7ee82b48f8ff3c95c153a4238dac94023e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b709a7e57a0491e3d72bffca1b8f7ee82b48f8ff3c95c153a4238dac94023e->enter($__internal_26b709a7e57a0491e3d72bffca1b8f7ee82b48f8ff3c95c153a4238dac94023e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_26b709a7e57a0491e3d72bffca1b8f7ee82b48f8ff3c95c153a4238dac94023e->leave($__internal_26b709a7e57a0491e3d72bffca1b8f7ee82b48f8ff3c95c153a4238dac94023e_prof);

        
        $__internal_442a206f64726c6d6175589fe21938bf72ae654de71c0de4d7ad86dc3f87b2a3->leave($__internal_442a206f64726c6d6175589fe21938bf72ae654de71c0de4d7ad86dc3f87b2a3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e069862c72a41e29949e5e44d17753d26a273420903d3b1867432fdc0c0844b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e069862c72a41e29949e5e44d17753d26a273420903d3b1867432fdc0c0844b7->enter($__internal_e069862c72a41e29949e5e44d17753d26a273420903d3b1867432fdc0c0844b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf955d91dc9241522b0848fa0cd92c60d4f6792186f49f8c1851f719f7274655 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf955d91dc9241522b0848fa0cd92c60d4f6792186f49f8c1851f719f7274655->enter($__internal_bf955d91dc9241522b0848fa0cd92c60d4f6792186f49f8c1851f719f7274655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bf955d91dc9241522b0848fa0cd92c60d4f6792186f49f8c1851f719f7274655->leave($__internal_bf955d91dc9241522b0848fa0cd92c60d4f6792186f49f8c1851f719f7274655_prof);

        
        $__internal_e069862c72a41e29949e5e44d17753d26a273420903d3b1867432fdc0c0844b7->leave($__internal_e069862c72a41e29949e5e44d17753d26a273420903d3b1867432fdc0c0844b7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac62b8410f8c7646c79260f22ef34f13aeb83b054666390f3aaa9a990e86c8d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac62b8410f8c7646c79260f22ef34f13aeb83b054666390f3aaa9a990e86c8d2->enter($__internal_ac62b8410f8c7646c79260f22ef34f13aeb83b054666390f3aaa9a990e86c8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83991448bf9653da84af4bfbe474d18ad3ec4001806be0a9f29c0a159ab1a2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83991448bf9653da84af4bfbe474d18ad3ec4001806be0a9f29c0a159ab1a2f2->enter($__internal_83991448bf9653da84af4bfbe474d18ad3ec4001806be0a9f29c0a159ab1a2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_83991448bf9653da84af4bfbe474d18ad3ec4001806be0a9f29c0a159ab1a2f2->leave($__internal_83991448bf9653da84af4bfbe474d18ad3ec4001806be0a9f29c0a159ab1a2f2_prof);

        
        $__internal_ac62b8410f8c7646c79260f22ef34f13aeb83b054666390f3aaa9a990e86c8d2->leave($__internal_ac62b8410f8c7646c79260f22ef34f13aeb83b054666390f3aaa9a990e86c8d2_prof);

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
