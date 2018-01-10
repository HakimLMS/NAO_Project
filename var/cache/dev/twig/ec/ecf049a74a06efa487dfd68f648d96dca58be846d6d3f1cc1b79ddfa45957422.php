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
        $__internal_db6598d54931ee6d130523ce56bf60305c5f57eb63e6828dc1d5655341d1065a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db6598d54931ee6d130523ce56bf60305c5f57eb63e6828dc1d5655341d1065a->enter($__internal_db6598d54931ee6d130523ce56bf60305c5f57eb63e6828dc1d5655341d1065a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_acf096fb451b76235b57041670932603c87f894a336957423ddbebddbec95036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf096fb451b76235b57041670932603c87f894a336957423ddbebddbec95036->enter($__internal_acf096fb451b76235b57041670932603c87f894a336957423ddbebddbec95036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_db6598d54931ee6d130523ce56bf60305c5f57eb63e6828dc1d5655341d1065a->leave($__internal_db6598d54931ee6d130523ce56bf60305c5f57eb63e6828dc1d5655341d1065a_prof);

        
        $__internal_acf096fb451b76235b57041670932603c87f894a336957423ddbebddbec95036->leave($__internal_acf096fb451b76235b57041670932603c87f894a336957423ddbebddbec95036_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_94c5200c7eb95f98a6c1249085434933443ffb99fc63db06f61b1e4fe77b635c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c5200c7eb95f98a6c1249085434933443ffb99fc63db06f61b1e4fe77b635c->enter($__internal_94c5200c7eb95f98a6c1249085434933443ffb99fc63db06f61b1e4fe77b635c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cbe892521705f50a32308070012a623b86e4b0032951277bf10d985d7a7c533a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe892521705f50a32308070012a623b86e4b0032951277bf10d985d7a7c533a->enter($__internal_cbe892521705f50a32308070012a623b86e4b0032951277bf10d985d7a7c533a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_cbe892521705f50a32308070012a623b86e4b0032951277bf10d985d7a7c533a->leave($__internal_cbe892521705f50a32308070012a623b86e4b0032951277bf10d985d7a7c533a_prof);

        
        $__internal_94c5200c7eb95f98a6c1249085434933443ffb99fc63db06f61b1e4fe77b635c->leave($__internal_94c5200c7eb95f98a6c1249085434933443ffb99fc63db06f61b1e4fe77b635c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a467644ee8eccde20e35a4f3e062f3d2744b4f41636fa7a7d6a53d41fcfae93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a467644ee8eccde20e35a4f3e062f3d2744b4f41636fa7a7d6a53d41fcfae93e->enter($__internal_a467644ee8eccde20e35a4f3e062f3d2744b4f41636fa7a7d6a53d41fcfae93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dfc03cf58a9e437572e7637fcba25b9fe05e1311d13d245bbaae2b61ca6edd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc03cf58a9e437572e7637fcba25b9fe05e1311d13d245bbaae2b61ca6edd4b->enter($__internal_dfc03cf58a9e437572e7637fcba25b9fe05e1311d13d245bbaae2b61ca6edd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_dfc03cf58a9e437572e7637fcba25b9fe05e1311d13d245bbaae2b61ca6edd4b->leave($__internal_dfc03cf58a9e437572e7637fcba25b9fe05e1311d13d245bbaae2b61ca6edd4b_prof);

        
        $__internal_a467644ee8eccde20e35a4f3e062f3d2744b4f41636fa7a7d6a53d41fcfae93e->leave($__internal_a467644ee8eccde20e35a4f3e062f3d2744b4f41636fa7a7d6a53d41fcfae93e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_531710d97d4859b08a42c7c3ffbaf0053862903c5731c535609f9a35ad13f84b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_531710d97d4859b08a42c7c3ffbaf0053862903c5731c535609f9a35ad13f84b->enter($__internal_531710d97d4859b08a42c7c3ffbaf0053862903c5731c535609f9a35ad13f84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b38d5d818a78634fe5ae8b9d79344bc9cef4166028ad7013f4250120bfc7a5a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38d5d818a78634fe5ae8b9d79344bc9cef4166028ad7013f4250120bfc7a5a1->enter($__internal_b38d5d818a78634fe5ae8b9d79344bc9cef4166028ad7013f4250120bfc7a5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b38d5d818a78634fe5ae8b9d79344bc9cef4166028ad7013f4250120bfc7a5a1->leave($__internal_b38d5d818a78634fe5ae8b9d79344bc9cef4166028ad7013f4250120bfc7a5a1_prof);

        
        $__internal_531710d97d4859b08a42c7c3ffbaf0053862903c5731c535609f9a35ad13f84b->leave($__internal_531710d97d4859b08a42c7c3ffbaf0053862903c5731c535609f9a35ad13f84b_prof);

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
