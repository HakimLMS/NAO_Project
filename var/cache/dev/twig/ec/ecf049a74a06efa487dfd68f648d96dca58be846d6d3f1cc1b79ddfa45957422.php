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
        $__internal_ab9da92feb9320fda036a5489349e84b445dd6653634087040c88f4abc9ab1c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9da92feb9320fda036a5489349e84b445dd6653634087040c88f4abc9ab1c8->enter($__internal_ab9da92feb9320fda036a5489349e84b445dd6653634087040c88f4abc9ab1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6d82d82cc2eac01e3115ad6ccb45caf8ae46feed253c28e705f6b65d065efccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d82d82cc2eac01e3115ad6ccb45caf8ae46feed253c28e705f6b65d065efccc->enter($__internal_6d82d82cc2eac01e3115ad6ccb45caf8ae46feed253c28e705f6b65d065efccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ab9da92feb9320fda036a5489349e84b445dd6653634087040c88f4abc9ab1c8->leave($__internal_ab9da92feb9320fda036a5489349e84b445dd6653634087040c88f4abc9ab1c8_prof);

        
        $__internal_6d82d82cc2eac01e3115ad6ccb45caf8ae46feed253c28e705f6b65d065efccc->leave($__internal_6d82d82cc2eac01e3115ad6ccb45caf8ae46feed253c28e705f6b65d065efccc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de7fc196d4cb69637826ade13309002baf19bb6452c4dc16c172368cc34a7f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7fc196d4cb69637826ade13309002baf19bb6452c4dc16c172368cc34a7f66->enter($__internal_de7fc196d4cb69637826ade13309002baf19bb6452c4dc16c172368cc34a7f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ec3a5d5bf307c43ebb9963c0aba774cfa7861b3b3fe7847727b0624a0770b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ec3a5d5bf307c43ebb9963c0aba774cfa7861b3b3fe7847727b0624a0770b4f->enter($__internal_1ec3a5d5bf307c43ebb9963c0aba774cfa7861b3b3fe7847727b0624a0770b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1ec3a5d5bf307c43ebb9963c0aba774cfa7861b3b3fe7847727b0624a0770b4f->leave($__internal_1ec3a5d5bf307c43ebb9963c0aba774cfa7861b3b3fe7847727b0624a0770b4f_prof);

        
        $__internal_de7fc196d4cb69637826ade13309002baf19bb6452c4dc16c172368cc34a7f66->leave($__internal_de7fc196d4cb69637826ade13309002baf19bb6452c4dc16c172368cc34a7f66_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9defdfc4cc6b5ed9b22dd1852be6ec8856add079281a83caa6b02987c754a0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9defdfc4cc6b5ed9b22dd1852be6ec8856add079281a83caa6b02987c754a0d1->enter($__internal_9defdfc4cc6b5ed9b22dd1852be6ec8856add079281a83caa6b02987c754a0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e72f406684702244f9d304c5ff088572f6f7fd668932f0dc71ff18cd601a211b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72f406684702244f9d304c5ff088572f6f7fd668932f0dc71ff18cd601a211b->enter($__internal_e72f406684702244f9d304c5ff088572f6f7fd668932f0dc71ff18cd601a211b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e72f406684702244f9d304c5ff088572f6f7fd668932f0dc71ff18cd601a211b->leave($__internal_e72f406684702244f9d304c5ff088572f6f7fd668932f0dc71ff18cd601a211b_prof);

        
        $__internal_9defdfc4cc6b5ed9b22dd1852be6ec8856add079281a83caa6b02987c754a0d1->leave($__internal_9defdfc4cc6b5ed9b22dd1852be6ec8856add079281a83caa6b02987c754a0d1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7804b6154865019bc1a9fc336819dda91f5fe67670b5d876c903f765533c0c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7804b6154865019bc1a9fc336819dda91f5fe67670b5d876c903f765533c0c22->enter($__internal_7804b6154865019bc1a9fc336819dda91f5fe67670b5d876c903f765533c0c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce4fa681ed84150dcf87cce1d9e7d2735924620cacbddd8e0ae88dbd813c69dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce4fa681ed84150dcf87cce1d9e7d2735924620cacbddd8e0ae88dbd813c69dc->enter($__internal_ce4fa681ed84150dcf87cce1d9e7d2735924620cacbddd8e0ae88dbd813c69dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce4fa681ed84150dcf87cce1d9e7d2735924620cacbddd8e0ae88dbd813c69dc->leave($__internal_ce4fa681ed84150dcf87cce1d9e7d2735924620cacbddd8e0ae88dbd813c69dc_prof);

        
        $__internal_7804b6154865019bc1a9fc336819dda91f5fe67670b5d876c903f765533c0c22->leave($__internal_7804b6154865019bc1a9fc336819dda91f5fe67670b5d876c903f765533c0c22_prof);

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
