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
        $__internal_e8695b714f700e3041962c36c7be13b9c98c31d69294215927b6d9a4a4dc3755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8695b714f700e3041962c36c7be13b9c98c31d69294215927b6d9a4a4dc3755->enter($__internal_e8695b714f700e3041962c36c7be13b9c98c31d69294215927b6d9a4a4dc3755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ff34b7be10f3d5e4dc68873c6828a43b4790bd952be94848b7226269cfeeb2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff34b7be10f3d5e4dc68873c6828a43b4790bd952be94848b7226269cfeeb2c4->enter($__internal_ff34b7be10f3d5e4dc68873c6828a43b4790bd952be94848b7226269cfeeb2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e8695b714f700e3041962c36c7be13b9c98c31d69294215927b6d9a4a4dc3755->leave($__internal_e8695b714f700e3041962c36c7be13b9c98c31d69294215927b6d9a4a4dc3755_prof);

        
        $__internal_ff34b7be10f3d5e4dc68873c6828a43b4790bd952be94848b7226269cfeeb2c4->leave($__internal_ff34b7be10f3d5e4dc68873c6828a43b4790bd952be94848b7226269cfeeb2c4_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a0aec0461af66d9d0a637ee835e02e0ca9008cb844d900e77efe05ae711e4f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0aec0461af66d9d0a637ee835e02e0ca9008cb844d900e77efe05ae711e4f0->enter($__internal_5a0aec0461af66d9d0a637ee835e02e0ca9008cb844d900e77efe05ae711e4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d396ff80e3a56add6d6c4b050af4473bc61f1519e9125dcffe9e10b5405a702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d396ff80e3a56add6d6c4b050af4473bc61f1519e9125dcffe9e10b5405a702->enter($__internal_0d396ff80e3a56add6d6c4b050af4473bc61f1519e9125dcffe9e10b5405a702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0d396ff80e3a56add6d6c4b050af4473bc61f1519e9125dcffe9e10b5405a702->leave($__internal_0d396ff80e3a56add6d6c4b050af4473bc61f1519e9125dcffe9e10b5405a702_prof);

        
        $__internal_5a0aec0461af66d9d0a637ee835e02e0ca9008cb844d900e77efe05ae711e4f0->leave($__internal_5a0aec0461af66d9d0a637ee835e02e0ca9008cb844d900e77efe05ae711e4f0_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_caffa5a3ae96ddc4c4fc129f3ed577c6257132fcbc282a4bad0104c8f204ae1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caffa5a3ae96ddc4c4fc129f3ed577c6257132fcbc282a4bad0104c8f204ae1f->enter($__internal_caffa5a3ae96ddc4c4fc129f3ed577c6257132fcbc282a4bad0104c8f204ae1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_570fc6e228ac600c46e908ef803f0739c556f63b89aad502bf17c75b5cb7923a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570fc6e228ac600c46e908ef803f0739c556f63b89aad502bf17c75b5cb7923a->enter($__internal_570fc6e228ac600c46e908ef803f0739c556f63b89aad502bf17c75b5cb7923a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_570fc6e228ac600c46e908ef803f0739c556f63b89aad502bf17c75b5cb7923a->leave($__internal_570fc6e228ac600c46e908ef803f0739c556f63b89aad502bf17c75b5cb7923a_prof);

        
        $__internal_caffa5a3ae96ddc4c4fc129f3ed577c6257132fcbc282a4bad0104c8f204ae1f->leave($__internal_caffa5a3ae96ddc4c4fc129f3ed577c6257132fcbc282a4bad0104c8f204ae1f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0453e29330318d6f8f2cb7ba2e645a3b43903027c1c6298519bacc7df8b8f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0453e29330318d6f8f2cb7ba2e645a3b43903027c1c6298519bacc7df8b8f89->enter($__internal_d0453e29330318d6f8f2cb7ba2e645a3b43903027c1c6298519bacc7df8b8f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad9bd79bc2d135748a20f09ab2354847a777b3b469637bf1066ec69c66b9afa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9bd79bc2d135748a20f09ab2354847a777b3b469637bf1066ec69c66b9afa5->enter($__internal_ad9bd79bc2d135748a20f09ab2354847a777b3b469637bf1066ec69c66b9afa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ad9bd79bc2d135748a20f09ab2354847a777b3b469637bf1066ec69c66b9afa5->leave($__internal_ad9bd79bc2d135748a20f09ab2354847a777b3b469637bf1066ec69c66b9afa5_prof);

        
        $__internal_d0453e29330318d6f8f2cb7ba2e645a3b43903027c1c6298519bacc7df8b8f89->leave($__internal_d0453e29330318d6f8f2cb7ba2e645a3b43903027c1c6298519bacc7df8b8f89_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10a94849973310491dd2c407aa14e5fc4c2f8f65680ec092e84a958e133e1eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a94849973310491dd2c407aa14e5fc4c2f8f65680ec092e84a958e133e1eac->enter($__internal_10a94849973310491dd2c407aa14e5fc4c2f8f65680ec092e84a958e133e1eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c6fc22c5f103f7063b07f1439d50539477c6e1a873c2934b8b1cab0aa50579cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fc22c5f103f7063b07f1439d50539477c6e1a873c2934b8b1cab0aa50579cc->enter($__internal_c6fc22c5f103f7063b07f1439d50539477c6e1a873c2934b8b1cab0aa50579cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c6fc22c5f103f7063b07f1439d50539477c6e1a873c2934b8b1cab0aa50579cc->leave($__internal_c6fc22c5f103f7063b07f1439d50539477c6e1a873c2934b8b1cab0aa50579cc_prof);

        
        $__internal_10a94849973310491dd2c407aa14e5fc4c2f8f65680ec092e84a958e133e1eac->leave($__internal_10a94849973310491dd2c407aa14e5fc4c2f8f65680ec092e84a958e133e1eac_prof);

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
