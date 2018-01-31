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
        $__internal_223c2936a2562e29cdccaa757ac0b9cfeb078e6b63cef943bcd57a7adad92eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223c2936a2562e29cdccaa757ac0b9cfeb078e6b63cef943bcd57a7adad92eb1->enter($__internal_223c2936a2562e29cdccaa757ac0b9cfeb078e6b63cef943bcd57a7adad92eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f56376114bfc0f65b1f3425f72b221af830a5efa12182ce72ccf1b94e76f7c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56376114bfc0f65b1f3425f72b221af830a5efa12182ce72ccf1b94e76f7c8f->enter($__internal_f56376114bfc0f65b1f3425f72b221af830a5efa12182ce72ccf1b94e76f7c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_223c2936a2562e29cdccaa757ac0b9cfeb078e6b63cef943bcd57a7adad92eb1->leave($__internal_223c2936a2562e29cdccaa757ac0b9cfeb078e6b63cef943bcd57a7adad92eb1_prof);

        
        $__internal_f56376114bfc0f65b1f3425f72b221af830a5efa12182ce72ccf1b94e76f7c8f->leave($__internal_f56376114bfc0f65b1f3425f72b221af830a5efa12182ce72ccf1b94e76f7c8f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_43d7cbf7861ce288567243f18978ecf29e13e8f7cdee159470accbf0c7a8237f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43d7cbf7861ce288567243f18978ecf29e13e8f7cdee159470accbf0c7a8237f->enter($__internal_43d7cbf7861ce288567243f18978ecf29e13e8f7cdee159470accbf0c7a8237f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06aae97a3ec9899b25f727c13d4e4ce59c173e4a287aa39e8d198624ae124c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06aae97a3ec9899b25f727c13d4e4ce59c173e4a287aa39e8d198624ae124c82->enter($__internal_06aae97a3ec9899b25f727c13d4e4ce59c173e4a287aa39e8d198624ae124c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_06aae97a3ec9899b25f727c13d4e4ce59c173e4a287aa39e8d198624ae124c82->leave($__internal_06aae97a3ec9899b25f727c13d4e4ce59c173e4a287aa39e8d198624ae124c82_prof);

        
        $__internal_43d7cbf7861ce288567243f18978ecf29e13e8f7cdee159470accbf0c7a8237f->leave($__internal_43d7cbf7861ce288567243f18978ecf29e13e8f7cdee159470accbf0c7a8237f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_64770c75bef10e2bdf20117720959ec2cfa972890b6ff8de1c3a6c94eab5e31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64770c75bef10e2bdf20117720959ec2cfa972890b6ff8de1c3a6c94eab5e31f->enter($__internal_64770c75bef10e2bdf20117720959ec2cfa972890b6ff8de1c3a6c94eab5e31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_13df88a0a0bc9b9cbd29b7ce10d8e5bfd205aee4df2660ae642c0bb92521a1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13df88a0a0bc9b9cbd29b7ce10d8e5bfd205aee4df2660ae642c0bb92521a1bb->enter($__internal_13df88a0a0bc9b9cbd29b7ce10d8e5bfd205aee4df2660ae642c0bb92521a1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_13df88a0a0bc9b9cbd29b7ce10d8e5bfd205aee4df2660ae642c0bb92521a1bb->leave($__internal_13df88a0a0bc9b9cbd29b7ce10d8e5bfd205aee4df2660ae642c0bb92521a1bb_prof);

        
        $__internal_64770c75bef10e2bdf20117720959ec2cfa972890b6ff8de1c3a6c94eab5e31f->leave($__internal_64770c75bef10e2bdf20117720959ec2cfa972890b6ff8de1c3a6c94eab5e31f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_05c11a57a5683d88531f64616f10e0788700f4a9f774d1794fa667802a111554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c11a57a5683d88531f64616f10e0788700f4a9f774d1794fa667802a111554->enter($__internal_05c11a57a5683d88531f64616f10e0788700f4a9f774d1794fa667802a111554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a33bf654b68a90738c12135d8ffc4b7adeb8ea283f30c513c6965a48eace8ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33bf654b68a90738c12135d8ffc4b7adeb8ea283f30c513c6965a48eace8ac3->enter($__internal_a33bf654b68a90738c12135d8ffc4b7adeb8ea283f30c513c6965a48eace8ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a33bf654b68a90738c12135d8ffc4b7adeb8ea283f30c513c6965a48eace8ac3->leave($__internal_a33bf654b68a90738c12135d8ffc4b7adeb8ea283f30c513c6965a48eace8ac3_prof);

        
        $__internal_05c11a57a5683d88531f64616f10e0788700f4a9f774d1794fa667802a111554->leave($__internal_05c11a57a5683d88531f64616f10e0788700f4a9f774d1794fa667802a111554_prof);

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
