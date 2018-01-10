<?php

/* base.html.twig */
class __TwigTemplate_9b82483fd9f189b036f072471c7129831d5df7a2101ce1d4c27fd63bbd10799e extends Twig_Template
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
        $__internal_e25d8ac1821c32e88888957fb91badec79b74c4c57dad6fe9381042bf31f2845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25d8ac1821c32e88888957fb91badec79b74c4c57dad6fe9381042bf31f2845->enter($__internal_e25d8ac1821c32e88888957fb91badec79b74c4c57dad6fe9381042bf31f2845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_22ff48d73f05e7f865d619e7a89c2e7a2195eac5966772b883b2f87f6e563640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ff48d73f05e7f865d619e7a89c2e7a2195eac5966772b883b2f87f6e563640->enter($__internal_22ff48d73f05e7f865d619e7a89c2e7a2195eac5966772b883b2f87f6e563640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_e25d8ac1821c32e88888957fb91badec79b74c4c57dad6fe9381042bf31f2845->leave($__internal_e25d8ac1821c32e88888957fb91badec79b74c4c57dad6fe9381042bf31f2845_prof);

        
        $__internal_22ff48d73f05e7f865d619e7a89c2e7a2195eac5966772b883b2f87f6e563640->leave($__internal_22ff48d73f05e7f865d619e7a89c2e7a2195eac5966772b883b2f87f6e563640_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_53d71110a2efb36813cfff6bd1c4856b0b18d7a260c2f7ba9eb1d0b0e10d77b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d71110a2efb36813cfff6bd1c4856b0b18d7a260c2f7ba9eb1d0b0e10d77b6->enter($__internal_53d71110a2efb36813cfff6bd1c4856b0b18d7a260c2f7ba9eb1d0b0e10d77b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91f015fdc9a2d5964b94d6fc48f2c2b5feabdab3eae3352436d161db11e84f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f015fdc9a2d5964b94d6fc48f2c2b5feabdab3eae3352436d161db11e84f64->enter($__internal_91f015fdc9a2d5964b94d6fc48f2c2b5feabdab3eae3352436d161db11e84f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_91f015fdc9a2d5964b94d6fc48f2c2b5feabdab3eae3352436d161db11e84f64->leave($__internal_91f015fdc9a2d5964b94d6fc48f2c2b5feabdab3eae3352436d161db11e84f64_prof);

        
        $__internal_53d71110a2efb36813cfff6bd1c4856b0b18d7a260c2f7ba9eb1d0b0e10d77b6->leave($__internal_53d71110a2efb36813cfff6bd1c4856b0b18d7a260c2f7ba9eb1d0b0e10d77b6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e00a9fcc7fee3c2621d2ba2e9cefb65dce9bfb43e8b0e9ea24a6a61b774c22cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00a9fcc7fee3c2621d2ba2e9cefb65dce9bfb43e8b0e9ea24a6a61b774c22cd->enter($__internal_e00a9fcc7fee3c2621d2ba2e9cefb65dce9bfb43e8b0e9ea24a6a61b774c22cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e919940ed5dc58cad8f602b87e196dbc29de7671eece2edb2c394bb384fbb1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e919940ed5dc58cad8f602b87e196dbc29de7671eece2edb2c394bb384fbb1af->enter($__internal_e919940ed5dc58cad8f602b87e196dbc29de7671eece2edb2c394bb384fbb1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e919940ed5dc58cad8f602b87e196dbc29de7671eece2edb2c394bb384fbb1af->leave($__internal_e919940ed5dc58cad8f602b87e196dbc29de7671eece2edb2c394bb384fbb1af_prof);

        
        $__internal_e00a9fcc7fee3c2621d2ba2e9cefb65dce9bfb43e8b0e9ea24a6a61b774c22cd->leave($__internal_e00a9fcc7fee3c2621d2ba2e9cefb65dce9bfb43e8b0e9ea24a6a61b774c22cd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2b930b89d88d4e7876b0b1398273f09bffcb3415393a68c9d8b23b61625feb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b930b89d88d4e7876b0b1398273f09bffcb3415393a68c9d8b23b61625feb5->enter($__internal_b2b930b89d88d4e7876b0b1398273f09bffcb3415393a68c9d8b23b61625feb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb34cf9b2855e94b443a497280fd110047f53b146a855e9d464d9a77faa9e6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb34cf9b2855e94b443a497280fd110047f53b146a855e9d464d9a77faa9e6de->enter($__internal_bb34cf9b2855e94b443a497280fd110047f53b146a855e9d464d9a77faa9e6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bb34cf9b2855e94b443a497280fd110047f53b146a855e9d464d9a77faa9e6de->leave($__internal_bb34cf9b2855e94b443a497280fd110047f53b146a855e9d464d9a77faa9e6de_prof);

        
        $__internal_b2b930b89d88d4e7876b0b1398273f09bffcb3415393a68c9d8b23b61625feb5->leave($__internal_b2b930b89d88d4e7876b0b1398273f09bffcb3415393a68c9d8b23b61625feb5_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2705003c45a6c5afc79055e0f9745ea6ccbdfb5b3181d53f61d4834651f8d72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2705003c45a6c5afc79055e0f9745ea6ccbdfb5b3181d53f61d4834651f8d72e->enter($__internal_2705003c45a6c5afc79055e0f9745ea6ccbdfb5b3181d53f61d4834651f8d72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_44734f9c0f37102792cec644a001f2426a8ebc37be613fcbeab4e73a6dc4932f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44734f9c0f37102792cec644a001f2426a8ebc37be613fcbeab4e73a6dc4932f->enter($__internal_44734f9c0f37102792cec644a001f2426a8ebc37be613fcbeab4e73a6dc4932f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_44734f9c0f37102792cec644a001f2426a8ebc37be613fcbeab4e73a6dc4932f->leave($__internal_44734f9c0f37102792cec644a001f2426a8ebc37be613fcbeab4e73a6dc4932f_prof);

        
        $__internal_2705003c45a6c5afc79055e0f9745ea6ccbdfb5b3181d53f61d4834651f8d72e->leave($__internal_2705003c45a6c5afc79055e0f9745ea6ccbdfb5b3181d53f61d4834651f8d72e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 10,  96 => 9,  79 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>L'oiseau rare - {% block title %}{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\NAO_Project\\templates\\base.html.twig");
    }
}
