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
        $__internal_35c3c5c20a31f04005e306822b78ef23c63ea9fa5bef57b6b678c049f12540aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c3c5c20a31f04005e306822b78ef23c63ea9fa5bef57b6b678c049f12540aa->enter($__internal_35c3c5c20a31f04005e306822b78ef23c63ea9fa5bef57b6b678c049f12540aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_29b40f8ae1d516a0a247ee7a13c83efcc673af08d112a13fcbf20199900c1fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b40f8ae1d516a0a247ee7a13c83efcc673af08d112a13fcbf20199900c1fcb->enter($__internal_29b40f8ae1d516a0a247ee7a13c83efcc673af08d112a13fcbf20199900c1fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_35c3c5c20a31f04005e306822b78ef23c63ea9fa5bef57b6b678c049f12540aa->leave($__internal_35c3c5c20a31f04005e306822b78ef23c63ea9fa5bef57b6b678c049f12540aa_prof);

        
        $__internal_29b40f8ae1d516a0a247ee7a13c83efcc673af08d112a13fcbf20199900c1fcb->leave($__internal_29b40f8ae1d516a0a247ee7a13c83efcc673af08d112a13fcbf20199900c1fcb_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_66cd3666e6a5a0fc35e1915287cb5c82099c43764d0dc15677b4105d0b5465be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66cd3666e6a5a0fc35e1915287cb5c82099c43764d0dc15677b4105d0b5465be->enter($__internal_66cd3666e6a5a0fc35e1915287cb5c82099c43764d0dc15677b4105d0b5465be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc959439a76c2a73696eb95a310909dae06fce4a1dc3991924192aa201915b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc959439a76c2a73696eb95a310909dae06fce4a1dc3991924192aa201915b79->enter($__internal_fc959439a76c2a73696eb95a310909dae06fce4a1dc3991924192aa201915b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fc959439a76c2a73696eb95a310909dae06fce4a1dc3991924192aa201915b79->leave($__internal_fc959439a76c2a73696eb95a310909dae06fce4a1dc3991924192aa201915b79_prof);

        
        $__internal_66cd3666e6a5a0fc35e1915287cb5c82099c43764d0dc15677b4105d0b5465be->leave($__internal_66cd3666e6a5a0fc35e1915287cb5c82099c43764d0dc15677b4105d0b5465be_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7fe6748bf6a9c36c49403dc423554237fa5ef6d5cb7675a9c42760616f2ae44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fe6748bf6a9c36c49403dc423554237fa5ef6d5cb7675a9c42760616f2ae44->enter($__internal_d7fe6748bf6a9c36c49403dc423554237fa5ef6d5cb7675a9c42760616f2ae44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3aaf4ec2da65201f7fc96549289a22cb9b460544e70b47633c98a86d3c78159d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aaf4ec2da65201f7fc96549289a22cb9b460544e70b47633c98a86d3c78159d->enter($__internal_3aaf4ec2da65201f7fc96549289a22cb9b460544e70b47633c98a86d3c78159d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3aaf4ec2da65201f7fc96549289a22cb9b460544e70b47633c98a86d3c78159d->leave($__internal_3aaf4ec2da65201f7fc96549289a22cb9b460544e70b47633c98a86d3c78159d_prof);

        
        $__internal_d7fe6748bf6a9c36c49403dc423554237fa5ef6d5cb7675a9c42760616f2ae44->leave($__internal_d7fe6748bf6a9c36c49403dc423554237fa5ef6d5cb7675a9c42760616f2ae44_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_d17b763d4fb6b13373db3822c5abe12fd8b6b1bc01d37ee6b87bb2b78f0dad92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17b763d4fb6b13373db3822c5abe12fd8b6b1bc01d37ee6b87bb2b78f0dad92->enter($__internal_d17b763d4fb6b13373db3822c5abe12fd8b6b1bc01d37ee6b87bb2b78f0dad92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0730959764edbf0c10b17e5c8561016f1bc827a985603dd57f36bcc4e830d712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0730959764edbf0c10b17e5c8561016f1bc827a985603dd57f36bcc4e830d712->enter($__internal_0730959764edbf0c10b17e5c8561016f1bc827a985603dd57f36bcc4e830d712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0730959764edbf0c10b17e5c8561016f1bc827a985603dd57f36bcc4e830d712->leave($__internal_0730959764edbf0c10b17e5c8561016f1bc827a985603dd57f36bcc4e830d712_prof);

        
        $__internal_d17b763d4fb6b13373db3822c5abe12fd8b6b1bc01d37ee6b87bb2b78f0dad92->leave($__internal_d17b763d4fb6b13373db3822c5abe12fd8b6b1bc01d37ee6b87bb2b78f0dad92_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d48189182196efc35c51b24d4afe09a6932ab58d7f1186328d43a22baf6ce257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48189182196efc35c51b24d4afe09a6932ab58d7f1186328d43a22baf6ce257->enter($__internal_d48189182196efc35c51b24d4afe09a6932ab58d7f1186328d43a22baf6ce257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8c50b6e07d0c9052ab198f34ab0d03fcb9a0fb975c36256450f725b1f9cc833f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c50b6e07d0c9052ab198f34ab0d03fcb9a0fb975c36256450f725b1f9cc833f->enter($__internal_8c50b6e07d0c9052ab198f34ab0d03fcb9a0fb975c36256450f725b1f9cc833f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8c50b6e07d0c9052ab198f34ab0d03fcb9a0fb975c36256450f725b1f9cc833f->leave($__internal_8c50b6e07d0c9052ab198f34ab0d03fcb9a0fb975c36256450f725b1f9cc833f_prof);

        
        $__internal_d48189182196efc35c51b24d4afe09a6932ab58d7f1186328d43a22baf6ce257->leave($__internal_d48189182196efc35c51b24d4afe09a6932ab58d7f1186328d43a22baf6ce257_prof);

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
