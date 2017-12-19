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
        $__internal_2bd3090d6a57f90f2c247a37a4eef6cc0334c1c12f2c4d9a86e7fa34695079dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd3090d6a57f90f2c247a37a4eef6cc0334c1c12f2c4d9a86e7fa34695079dd->enter($__internal_2bd3090d6a57f90f2c247a37a4eef6cc0334c1c12f2c4d9a86e7fa34695079dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4f55e4e157e72d6864459256aca71c8eab9915fa34d065890836dea03a0b64ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f55e4e157e72d6864459256aca71c8eab9915fa34d065890836dea03a0b64ca->enter($__internal_4f55e4e157e72d6864459256aca71c8eab9915fa34d065890836dea03a0b64ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_2bd3090d6a57f90f2c247a37a4eef6cc0334c1c12f2c4d9a86e7fa34695079dd->leave($__internal_2bd3090d6a57f90f2c247a37a4eef6cc0334c1c12f2c4d9a86e7fa34695079dd_prof);

        
        $__internal_4f55e4e157e72d6864459256aca71c8eab9915fa34d065890836dea03a0b64ca->leave($__internal_4f55e4e157e72d6864459256aca71c8eab9915fa34d065890836dea03a0b64ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_10b4b3488f05412ec3176e48d7681a32064f7174f3bf11352724f51dee966076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b4b3488f05412ec3176e48d7681a32064f7174f3bf11352724f51dee966076->enter($__internal_10b4b3488f05412ec3176e48d7681a32064f7174f3bf11352724f51dee966076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_807c5d9282a5ef59b265cb07e1ef871e3829af3ff1955cc5e0087a1fd2363e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807c5d9282a5ef59b265cb07e1ef871e3829af3ff1955cc5e0087a1fd2363e20->enter($__internal_807c5d9282a5ef59b265cb07e1ef871e3829af3ff1955cc5e0087a1fd2363e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_807c5d9282a5ef59b265cb07e1ef871e3829af3ff1955cc5e0087a1fd2363e20->leave($__internal_807c5d9282a5ef59b265cb07e1ef871e3829af3ff1955cc5e0087a1fd2363e20_prof);

        
        $__internal_10b4b3488f05412ec3176e48d7681a32064f7174f3bf11352724f51dee966076->leave($__internal_10b4b3488f05412ec3176e48d7681a32064f7174f3bf11352724f51dee966076_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_67f5694bbb2378051ad1073785b070535fdd132f85e37aa692e9e4d351677889 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f5694bbb2378051ad1073785b070535fdd132f85e37aa692e9e4d351677889->enter($__internal_67f5694bbb2378051ad1073785b070535fdd132f85e37aa692e9e4d351677889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2fb39059fa7e607f110423d6bbd0bd1cff70bb399caff5329c5e1fa3c5c35532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fb39059fa7e607f110423d6bbd0bd1cff70bb399caff5329c5e1fa3c5c35532->enter($__internal_2fb39059fa7e607f110423d6bbd0bd1cff70bb399caff5329c5e1fa3c5c35532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2fb39059fa7e607f110423d6bbd0bd1cff70bb399caff5329c5e1fa3c5c35532->leave($__internal_2fb39059fa7e607f110423d6bbd0bd1cff70bb399caff5329c5e1fa3c5c35532_prof);

        
        $__internal_67f5694bbb2378051ad1073785b070535fdd132f85e37aa692e9e4d351677889->leave($__internal_67f5694bbb2378051ad1073785b070535fdd132f85e37aa692e9e4d351677889_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7790f02c693af1d1ee6db76d44324fef923fcc4663966c8b925a2245f2a0987d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7790f02c693af1d1ee6db76d44324fef923fcc4663966c8b925a2245f2a0987d->enter($__internal_7790f02c693af1d1ee6db76d44324fef923fcc4663966c8b925a2245f2a0987d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb618c6f01a2b1cbd064af4f1290ea6227236cde992c696293de139b9fde72fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb618c6f01a2b1cbd064af4f1290ea6227236cde992c696293de139b9fde72fa->enter($__internal_bb618c6f01a2b1cbd064af4f1290ea6227236cde992c696293de139b9fde72fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb618c6f01a2b1cbd064af4f1290ea6227236cde992c696293de139b9fde72fa->leave($__internal_bb618c6f01a2b1cbd064af4f1290ea6227236cde992c696293de139b9fde72fa_prof);

        
        $__internal_7790f02c693af1d1ee6db76d44324fef923fcc4663966c8b925a2245f2a0987d->leave($__internal_7790f02c693af1d1ee6db76d44324fef923fcc4663966c8b925a2245f2a0987d_prof);

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
