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
        $__internal_5cf1d2fbab7f8386483ae6023029c2adf31ca36edb8ad2393061fd68f1a86000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf1d2fbab7f8386483ae6023029c2adf31ca36edb8ad2393061fd68f1a86000->enter($__internal_5cf1d2fbab7f8386483ae6023029c2adf31ca36edb8ad2393061fd68f1a86000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1518fcfc86c211231069660e0deb8442558ddd559883df83ff6e3da942ec10db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1518fcfc86c211231069660e0deb8442558ddd559883df83ff6e3da942ec10db->enter($__internal_1518fcfc86c211231069660e0deb8442558ddd559883df83ff6e3da942ec10db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        <title>L'oiseau rare - ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>

    \t";
        // line 13
        echo twig_include($this->env, $context, "header.html.twig");
        echo "

        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "

        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
        
        $__internal_5cf1d2fbab7f8386483ae6023029c2adf31ca36edb8ad2393061fd68f1a86000->leave($__internal_5cf1d2fbab7f8386483ae6023029c2adf31ca36edb8ad2393061fd68f1a86000_prof);

        
        $__internal_1518fcfc86c211231069660e0deb8442558ddd559883df83ff6e3da942ec10db->leave($__internal_1518fcfc86c211231069660e0deb8442558ddd559883df83ff6e3da942ec10db_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ee3af3baae1c882c3b51273d55d2f7bcdaa80e2b0197b1e6e8349d79c69c8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee3af3baae1c882c3b51273d55d2f7bcdaa80e2b0197b1e6e8349d79c69c8de->enter($__internal_0ee3af3baae1c882c3b51273d55d2f7bcdaa80e2b0197b1e6e8349d79c69c8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aedb8389378b82caedea4650ffb8ec88734205d2ee62f68846b1a5cf894bcf4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedb8389378b82caedea4650ffb8ec88734205d2ee62f68846b1a5cf894bcf4f->enter($__internal_aedb8389378b82caedea4650ffb8ec88734205d2ee62f68846b1a5cf894bcf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_aedb8389378b82caedea4650ffb8ec88734205d2ee62f68846b1a5cf894bcf4f->leave($__internal_aedb8389378b82caedea4650ffb8ec88734205d2ee62f68846b1a5cf894bcf4f_prof);

        
        $__internal_0ee3af3baae1c882c3b51273d55d2f7bcdaa80e2b0197b1e6e8349d79c69c8de->leave($__internal_0ee3af3baae1c882c3b51273d55d2f7bcdaa80e2b0197b1e6e8349d79c69c8de_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_802697868fff1bdd8ad5823e97ea61d69086e9367c64393ae1cf601f7950fe8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802697868fff1bdd8ad5823e97ea61d69086e9367c64393ae1cf601f7950fe8d->enter($__internal_802697868fff1bdd8ad5823e97ea61d69086e9367c64393ae1cf601f7950fe8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fa5336fc9ff7590614b8e10bdc15bb5d2adc38e7879cc935a4a3b4873a86cda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5336fc9ff7590614b8e10bdc15bb5d2adc38e7879cc935a4a3b4873a86cda0->enter($__internal_fa5336fc9ff7590614b8e10bdc15bb5d2adc38e7879cc935a4a3b4873a86cda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fa5336fc9ff7590614b8e10bdc15bb5d2adc38e7879cc935a4a3b4873a86cda0->leave($__internal_fa5336fc9ff7590614b8e10bdc15bb5d2adc38e7879cc935a4a3b4873a86cda0_prof);

        
        $__internal_802697868fff1bdd8ad5823e97ea61d69086e9367c64393ae1cf601f7950fe8d->leave($__internal_802697868fff1bdd8ad5823e97ea61d69086e9367c64393ae1cf601f7950fe8d_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c99d9af547d27a24092f38cfae91625fb614e84de461de82a053f37ba2c31da0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99d9af547d27a24092f38cfae91625fb614e84de461de82a053f37ba2c31da0->enter($__internal_c99d9af547d27a24092f38cfae91625fb614e84de461de82a053f37ba2c31da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cde54c12a0071c9b5fe7c948b18c4be2e381875974a09780fd94b39dca394978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde54c12a0071c9b5fe7c948b18c4be2e381875974a09780fd94b39dca394978->enter($__internal_cde54c12a0071c9b5fe7c948b18c4be2e381875974a09780fd94b39dca394978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cde54c12a0071c9b5fe7c948b18c4be2e381875974a09780fd94b39dca394978->leave($__internal_cde54c12a0071c9b5fe7c948b18c4be2e381875974a09780fd94b39dca394978_prof);

        
        $__internal_c99d9af547d27a24092f38cfae91625fb614e84de461de82a053f37ba2c31da0->leave($__internal_c99d9af547d27a24092f38cfae91625fb614e84de461de82a053f37ba2c31da0_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d6ae4ac457b0fbcad39e28ca715953ce96094a50479ed709ece3321ca05703ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ae4ac457b0fbcad39e28ca715953ce96094a50479ed709ece3321ca05703ab->enter($__internal_d6ae4ac457b0fbcad39e28ca715953ce96094a50479ed709ece3321ca05703ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_80b30bda09786740a801e4f48b1e681330612e8cc1458a8afa7b1dc1f20fec1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b30bda09786740a801e4f48b1e681330612e8cc1458a8afa7b1dc1f20fec1b->enter($__internal_80b30bda09786740a801e4f48b1e681330612e8cc1458a8afa7b1dc1f20fec1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_80b30bda09786740a801e4f48b1e681330612e8cc1458a8afa7b1dc1f20fec1b->leave($__internal_80b30bda09786740a801e4f48b1e681330612e8cc1458a8afa7b1dc1f20fec1b_prof);

        
        $__internal_d6ae4ac457b0fbcad39e28ca715953ce96094a50479ed709ece3321ca05703ab->leave($__internal_d6ae4ac457b0fbcad39e28ca715953ce96094a50479ed709ece3321ca05703ab_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 23,  122 => 15,  105 => 9,  88 => 8,  76 => 24,  74 => 23,  70 => 22,  62 => 17,  59 => 16,  57 => 15,  52 => 13,  47 => 10,  45 => 9,  41 => 8,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('build/css/app.css') }}\">
        <title>L'oiseau rare - {% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>

    \t{{ include('header.html.twig') }}

        {% block body %}{% endblock %}

        {{ include('footer.html.twig') }}

        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.2.1.min.js\" integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\" crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('build/js/app.js') }}\"></script>
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "E:\\wamp64\\www\\NAO_project\\templates\\base.html.twig");
    }
}
