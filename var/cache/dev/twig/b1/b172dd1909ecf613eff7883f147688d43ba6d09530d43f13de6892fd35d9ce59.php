<?php

/* @Maker/demoPage.html.twig */
class __TwigTemplate_98b5e5e0372d692a4d4634caca97208b96c183cfa7f65972601106420cb52230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d39337059089de953a3f485c3c56ca45ea36f9b92f539dc5b530a901dafc8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d39337059089de953a3f485c3c56ca45ea36f9b92f539dc5b530a901dafc8dd->enter($__internal_8d39337059089de953a3f485c3c56ca45ea36f9b92f539dc5b530a901dafc8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Maker/demoPage.html.twig"));

        $__internal_32f995f66d5635e1dda24ea0678dae2dd65173f312741a99ffda50f6fd80df6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f995f66d5635e1dda24ea0678dae2dd65173f312741a99ffda50f6fd80df6c->enter($__internal_32f995f66d5635e1dda24ea0678dae2dd65173f312741a99ffda50f6fd80df6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Maker/demoPage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>Welcome!</title>
    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #comment p { margin-bottom: 0; }
        #icon-status { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #status a, #next a { display: block; }
            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
</head>
<body>
<div id=\"wrapper\">
    <div id=\"container\">
        <div id=\"welcome\">
            <h1><span>You just generated a new controller!</span></h1>
        </div>

        <div id=\"status\">
            <p>
                <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                Now, modify it at<br>
                <code>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
        echo "</code>
            </p>
        </div>
    </div>
</div>
</body>
</html>
";
        
        $__internal_8d39337059089de953a3f485c3c56ca45ea36f9b92f539dc5b530a901dafc8dd->leave($__internal_8d39337059089de953a3f485c3c56ca45ea36f9b92f539dc5b530a901dafc8dd_prof);

        
        $__internal_32f995f66d5635e1dda24ea0678dae2dd65173f312741a99ffda50f6fd80df6c->leave($__internal_32f995f66d5635e1dda24ea0678dae2dd65173f312741a99ffda50f6fd80df6c_prof);

    }

    public function getTemplateName()
    {
        return "@Maker/demoPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 42,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>Welcome!</title>
    <style>
        body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
        h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
        h1 { font-size: 36px; }
        h2 { font-size: 21px; margin-bottom: 1em; }
        p { margin: 0 0 1em 0; }
        a { color: #0000F0; }
        a:hover { text-decoration: none; }
        code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
        #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
        #container { padding: 2em; }
        #welcome, #status { margin-bottom: 2em; }
        #welcome h1 span { display: block; font-size: 75%; }
        #comment p { margin-bottom: 0; }
        #icon-status { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
        @media (min-width: 768px) {
            #wrapper { width: 80%; margin: 2em auto; }
            #status a, #next a { display: block; }
            @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
            .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
        }
    </style>
</head>
<body>
<div id=\"wrapper\">
    <div id=\"container\">
        <div id=\"welcome\">
            <h1><span>You just generated a new controller!</span></h1>
        </div>

        <div id=\"status\">
            <p>
                <svg id=\"icon-status\" width=\"1792\" height=\"1792\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                Now, modify it at<br>
                <code>{{ path }}</code>
            </p>
        </div>
    </div>
</div>
</body>
</html>
", "@Maker/demoPage.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\maker-bundle\\src\\Resources\\views\\demoPage.html.twig");
    }
}
