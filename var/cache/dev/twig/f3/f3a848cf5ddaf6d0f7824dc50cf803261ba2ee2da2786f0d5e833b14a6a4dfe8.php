<?php

/* @WebProfiler/Profiler/base.html.twig */
class __TwigTemplate_8a4fb16e41520e3ccefb55764959a084eed590fd0c4f4aa87b24d02b0bcb66d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e7a7c5074f6eb22ff8d62e4e7656db006f04fdd3977760ab9be721a9c9fdca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7a7c5074f6eb22ff8d62e4e7656db006f04fdd3977760ab9be721a9c9fdca9->enter($__internal_6e7a7c5074f6eb22ff8d62e4e7656db006f04fdd3977760ab9be721a9c9fdca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        $__internal_ba0764cd8aade43b2247d0a01181a0360e4a160512796ea56554e285dea2f176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0764cd8aade43b2247d0a01181a0360e4a160512796ea56554e285dea2f176->enter($__internal_ba0764cd8aade43b2247d0a01181a0360e4a160512796ea56554e285dea2f176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>Symfony Profiler</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFEUlEQVR4AZVXA4wm2RMf27bXDM/+3/+sYBGfrbVtezc6BWtzfPbYXtvDL9906t6v0vWl05me7q1JzXuvvu4yXnvZgJ9hH6bwZYXLFR739vauUGuDwhq1L1N4Uv/tRYUhFjwcg49hn6aYr1V4TiGp86CoP9Oh1tV414KnM6t9fHymKUZ3DAI0hW4b1AyK3lE8phh5OxWeoJgUGhi5mLm95YzBwcHuhIQEV1JSEoWGhoKWHxYWFmenhJ/B5W0GwZpDt5Ovry9lZWWRyWOu5ORk7JsUpogsq5gnmISTU+HKQoLFQv/qq6/os88+I+EVFRUlSsRZ5oRiVmwlXMWShQkahUdERJCfnx/vd+3aRTU1NXTixAmqrq6mK1eu0PTp05mnrmD+QK6XhLO0XP2O2FJAQICRjjMU4P1PP/1EfX19NGfOHM8Z0N7ezueQkBBXYGAgSWIaQ5Em2T5QzFNSUig9PV3OHOe4uDjZ87p//34C7Nm7x/NcRUUFAX799Vec8Y7m7+8Pz92SfBDXr7VwPYRbxn/MmDG8Tps2jQBd3V30/PPPe35/6qmnaPXq1TR69Gg+h4eHiwwosdLT4dBkQDSXWmJiIq/vv/8+/fvvv3ThwgWqr6+n/Px8oyCmAerq6jy03Nxc2Yv7ySSjQzrmi4i92fVpaWlYOZ79/f2MW7dtpSlTptDp06epo6ODPvroI850ASiGdyZOnEjXrl2jyspKT4XA9cgjkaPL/D8UWG62HokieyQQoKSkRGiMs2bNotraWmprayOBNWvWyO+scGdnp5zF/WYvLEb8TwpRykp1MV7feust6uzqJMD169fpueeeY/rDDz/MKzzgdrsJoGkaffvtt/TFF19wQsIDmzZtssojt+6Fo1CgzKiAvAB3DRs2jAULtLS0eErPGB5Ad3c3lZaWUnFxMfeAd955h5+JjY3FaqXAPwhBnRCNySK4b98+Aoilv/z6i/zGggSk1g0opWupAMvGP91yt96zadWqVdTc3Ezz58/31LOAy+US6zgHBP766y+mDR8+HBUgFWSnQI2EAFnqlpcaGxsJIFkMN8L9AnPnzmX6jRs3SACeAi0vL888JwYPgTEJpauhnADo6/LSgQMHCHD37l2Cp15//XXq7eslgKb+Fi1exM9lZmbaCDclIcpQQhATE4OVsrOzuamg+cyePZuzG64Hrlu3jp9ZuWolCdy+fZueeOIJpkdHR1sLHqgM0Yh0bTRz1m7fvp2KiopYkYKCApo8ebLZIwzlFeXSOXEnsLPe2Ij+p5DbYYdOdOtDQ0rNjFya5sTcsGGDcTDZoXTcNoVBMoxWyzDS2yXmOyeUtGSskmDjx4/nRgPAfBDmMpZtUIbRcsi2GsfSD2QYyd2OcdmyZSSwdu1apuXk5GB16v4bak0yX0imyIUEgwNovFTglhMZGcm0srIy43zAVUxuTLbW4xn17Fci23wly9dngUummrTaixcvMpOtW7fiiBwQpqKYU9efHuxDJE5hC9wvL9TW1RLg+PHjPGTQ8wsLC4WpDC5Y5UR4k5qKMSLT6lqeAiX0nuAaMmSI9sMPP9CZM2foyJEj9O677wpTVIuTjidNp0HibvttoH9E5OMqbWKkSaNSlojldoLF7TEP+nUEmKI62y1kOBINbVaNarcI0PuGGUlHyfYvLHg7/jhFSFYqZh0P8KHSptd5ksOPU3tvqAEUot/hFmOIYJLp87wGe9Dwm95eg5xa/R8G6d8U5EcFhwAAAABJRU5ErkJggg==\">

        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_6e7a7c5074f6eb22ff8d62e4e7656db006f04fdd3977760ab9be721a9c9fdca9->leave($__internal_6e7a7c5074f6eb22ff8d62e4e7656db006f04fdd3977760ab9be721a9c9fdca9_prof);

        
        $__internal_ba0764cd8aade43b2247d0a01181a0360e4a160512796ea56554e285dea2f176->leave($__internal_ba0764cd8aade43b2247d0a01181a0360e4a160512796ea56554e285dea2f176_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_106d40887fba24b56f23234335c3bd7b7b41d8aae3a1bcdb91bfc2a63c117e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106d40887fba24b56f23234335c3bd7b7b41d8aae3a1bcdb91bfc2a63c117e3d->enter($__internal_106d40887fba24b56f23234335c3bd7b7b41d8aae3a1bcdb91bfc2a63c117e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4fc0a2c3a2e5cc120a31413e5851295de8f13eb15cc1dace8fc0223ec6d85e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc0a2c3a2e5cc120a31413e5851295de8f13eb15cc1dace8fc0223ec6d85e01->enter($__internal_4fc0a2c3a2e5cc120a31413e5851295de8f13eb15cc1dace8fc0223ec6d85e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 11
        echo "            <style>
                ";
        // line 12
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/profiler.css.twig");
        echo "
            </style>
        ";
        
        $__internal_4fc0a2c3a2e5cc120a31413e5851295de8f13eb15cc1dace8fc0223ec6d85e01->leave($__internal_4fc0a2c3a2e5cc120a31413e5851295de8f13eb15cc1dace8fc0223ec6d85e01_prof);

        
        $__internal_106d40887fba24b56f23234335c3bd7b7b41d8aae3a1bcdb91bfc2a63c117e3d->leave($__internal_106d40887fba24b56f23234335c3bd7b7b41d8aae3a1bcdb91bfc2a63c117e3d_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_ede9dc266073eaab5a2cb5ecb40495fded3c0e5f4519da74eaf4745f4b5fa29e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede9dc266073eaab5a2cb5ecb40495fded3c0e5f4519da74eaf4745f4b5fa29e->enter($__internal_ede9dc266073eaab5a2cb5ecb40495fded3c0e5f4519da74eaf4745f4b5fa29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85fbbbe4c459cb045cdcfb1a70cf77b83cc09fe4e18199c1fcddf4cdb4d4fd75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85fbbbe4c459cb045cdcfb1a70cf77b83cc09fe4e18199c1fcddf4cdb4d4fd75->enter($__internal_85fbbbe4c459cb045cdcfb1a70cf77b83cc09fe4e18199c1fcddf4cdb4d4fd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_85fbbbe4c459cb045cdcfb1a70cf77b83cc09fe4e18199c1fcddf4cdb4d4fd75->leave($__internal_85fbbbe4c459cb045cdcfb1a70cf77b83cc09fe4e18199c1fcddf4cdb4d4fd75_prof);

        
        $__internal_ede9dc266073eaab5a2cb5ecb40495fded3c0e5f4519da74eaf4745f4b5fa29e->leave($__internal_ede9dc266073eaab5a2cb5ecb40495fded3c0e5f4519da74eaf4745f4b5fa29e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  73 => 12,  70 => 11,  61 => 10,  49 => 18,  47 => 17,  43 => 15,  41 => 10,  32 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>Symfony Profiler</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFEUlEQVR4AZVXA4wm2RMf27bXDM/+3/+sYBGfrbVtezc6BWtzfPbYXtvDL9906t6v0vWl05me7q1JzXuvvu4yXnvZgJ9hH6bwZYXLFR739vauUGuDwhq1L1N4Uv/tRYUhFjwcg49hn6aYr1V4TiGp86CoP9Oh1tV414KnM6t9fHymKUZ3DAI0hW4b1AyK3lE8phh5OxWeoJgUGhi5mLm95YzBwcHuhIQEV1JSEoWGhoKWHxYWFmenhJ/B5W0GwZpDt5Ovry9lZWWRyWOu5ORk7JsUpogsq5gnmISTU+HKQoLFQv/qq6/os88+I+EVFRUlSsRZ5oRiVmwlXMWShQkahUdERJCfnx/vd+3aRTU1NXTixAmqrq6mK1eu0PTp05mnrmD+QK6XhLO0XP2O2FJAQICRjjMU4P1PP/1EfX19NGfOHM8Z0N7ezueQkBBXYGAgSWIaQ5Em2T5QzFNSUig9PV3OHOe4uDjZ87p//34C7Nm7x/NcRUUFAX799Vec8Y7m7+8Pz92SfBDXr7VwPYRbxn/MmDG8Tps2jQBd3V30/PPPe35/6qmnaPXq1TR69Gg+h4eHiwwosdLT4dBkQDSXWmJiIq/vv/8+/fvvv3ThwgWqr6+n/Px8oyCmAerq6jy03Nxc2Yv7ySSjQzrmi4i92fVpaWlYOZ79/f2MW7dtpSlTptDp06epo6ODPvroI850ASiGdyZOnEjXrl2jyspKT4XA9cgjkaPL/D8UWG62HokieyQQoKSkRGiMs2bNotraWmprayOBNWvWyO+scGdnp5zF/WYvLEb8TwpRykp1MV7feust6uzqJMD169fpueeeY/rDDz/MKzzgdrsJoGkaffvtt/TFF19wQsIDmzZtssojt+6Fo1CgzKiAvAB3DRs2jAULtLS0eErPGB5Ad3c3lZaWUnFxMfeAd955h5+JjY3FaqXAPwhBnRCNySK4b98+Aoilv/z6i/zGggSk1g0opWupAMvGP91yt96zadWqVdTc3Ezz58/31LOAy+US6zgHBP766y+mDR8+HBUgFWSnQI2EAFnqlpcaGxsJIFkMN8L9AnPnzmX6jRs3SACeAi0vL888JwYPgTEJpauhnADo6/LSgQMHCHD37l2Cp15//XXq7eslgKb+Fi1exM9lZmbaCDclIcpQQhATE4OVsrOzuamg+cyePZuzG64Hrlu3jp9ZuWolCdy+fZueeOIJpkdHR1sLHqgM0Yh0bTRz1m7fvp2KiopYkYKCApo8ebLZIwzlFeXSOXEnsLPe2Ij+p5DbYYdOdOtDQ0rNjFya5sTcsGGDcTDZoXTcNoVBMoxWyzDS2yXmOyeUtGSskmDjx4/nRgPAfBDmMpZtUIbRcsi2GsfSD2QYyd2OcdmyZSSwdu1apuXk5GB16v4bak0yX0imyIUEgwNovFTglhMZGcm0srIy43zAVUxuTLbW4xn17Fci23wly9dngUummrTaixcvMpOtW7fiiBwQpqKYU9efHuxDJE5hC9wvL9TW1RLg+PHjPGTQ8wsLC4WpDC5Y5UR4k5qKMSLT6lqeAiX0nuAaMmSI9sMPP9CZM2foyJEj9O677wpTVIuTjidNp0HibvttoH9E5OMqbWKkSaNSlojldoLF7TEP+nUEmKI62y1kOBINbVaNarcI0PuGGUlHyfYvLHg7/jhFSFYqZh0P8KHSptd5ksOPU3tvqAEUot/hFmOIYJLp87wGe9Dwm95eg5xa/R8G6d8U5EcFhwAAAABJRU5ErkJggg==\">

        {% block head %}
            <style>
                {{ include('@WebProfiler/Profiler/profiler.css.twig') }}
            </style>
        {% endblock %}
    </head>
    <body>
        {% block body '' %}
    </body>
</html>
", "@WebProfiler/Profiler/base.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\base.html.twig");
    }
}
