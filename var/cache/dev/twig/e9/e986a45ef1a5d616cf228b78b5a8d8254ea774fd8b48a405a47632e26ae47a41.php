<?php

/* @Doctrine/Collector/db.html.twig */
class __TwigTemplate_d49df45697beb0167adc40c399bacce1c4e9136d6f34037ba228222ea2255432 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 1, $this->getSourceContext()); })()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "@Doctrine/Collector/db.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d01a189334f2b9ffbe31f5a2c7b1a2699fd6d2144ccb599176f84231cc53d0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01a189334f2b9ffbe31f5a2c7b1a2699fd6d2144ccb599176f84231cc53d0d1->enter($__internal_d01a189334f2b9ffbe31f5a2c7b1a2699fd6d2144ccb599176f84231cc53d0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        $__internal_ce7e15f400b5a8e39dfe73f68fe977318c4a4250ab24d287bad50452ee133c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7e15f400b5a8e39dfe73f68fe977318c4a4250ab24d287bad50452ee133c0d->enter($__internal_ce7e15f400b5a8e39dfe73f68fe977318c4a4250ab24d287bad50452ee133c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Doctrine/Collector/db.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d01a189334f2b9ffbe31f5a2c7b1a2699fd6d2144ccb599176f84231cc53d0d1->leave($__internal_d01a189334f2b9ffbe31f5a2c7b1a2699fd6d2144ccb599176f84231cc53d0d1_prof);

        
        $__internal_ce7e15f400b5a8e39dfe73f68fe977318c4a4250ab24d287bad50452ee133c0d->leave($__internal_ce7e15f400b5a8e39dfe73f68fe977318c4a4250ab24d287bad50452ee133c0d_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_679d2ec3d3bb8b27dbdd0c977fa208edfbed84dc18c94a59e807843d646f3077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_679d2ec3d3bb8b27dbdd0c977fa208edfbed84dc18c94a59e807843d646f3077->enter($__internal_679d2ec3d3bb8b27dbdd0c977fa208edfbed84dc18c94a59e807843d646f3077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f3eb9eaf92c6e4932318d85b76be0951617f6ab2f2df619661012aff0fed81d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3eb9eaf92c6e4932318d85b76be0951617f6ab2f2df619661012aff0fed81d0->enter($__internal_f3eb9eaf92c6e4932318d85b76be0951617f6ab2f2df619661012aff0fed81d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "querycount", array()) > 0) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0))) {
            // line 7
            echo "
        ";
            // line 8
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 8, $this->getSourceContext()); })()), 1)) : (1));
            // line 9
            echo "
        ";
            // line 10
            ob_start();
            // line 11
            echo "            ";
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 11, $this->getSourceContext()); })()) == 1)) {
                // line 12
                echo "
                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status ";
                // line 14
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "querycount", array()) > 50)) {
                    echo "sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 14, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
                echo "</span>
                    ";
                // line 15
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 15, $this->getSourceContext()); })()), "querycount", array()) > 0)) {
                    // line 16
                    echo "                        <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
                    echo " ms</span>
                    ";
                }
                // line 18
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 18, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0)) {
                    // line 19
                    echo "                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->getSourceContext()); })()), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 21
                echo "
            ";
            } else {
                // line 23
                echo "
                ";
                // line 24
                $context["status"] = (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0)) ? ("red") : ((((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 24, $this->getSourceContext()); })()), "querycount", array()) > 50)) ? ("yellow") : (""))));
                // line 25
                echo "
                ";
                // line 26
                echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
                echo "

                ";
                // line 28
                if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 28, $this->getSourceContext()); })()), "querycount", array()) == 0) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 28, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0))) {
                    // line 29
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 29, $this->getSourceContext()); })()), "invalidEntityCount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                ";
                } else {
                    // line 32
                    echo "                    <span class=\"sf-toolbar-value\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 32, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
                    echo "</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">";
                    // line 35
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 35, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
                    echo "</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                ";
                }
                // line 39
                echo "
            ";
            }
            // line 41
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 42
            echo "
        ";
            // line 43
            ob_start();
            // line 44
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status ";
            // line 46
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "querycount", array()) > 50)) ? ("sf-toolbar-status-yellow") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>";
            // line 50
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 50, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status ";
            // line 54
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 54, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0)) ? ("sf-toolbar-status-red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 54, $this->getSourceContext()); })()), "invalidEntityCount", array()), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 56
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "cacheEnabled", array())) {
                // line 57
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 59, $this->getSourceContext()); })()), "cacheHitsCount", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status ";
                // line 63
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 63, $this->getSourceContext()); })()), "cacheMissesCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 63, $this->getSourceContext()); })()), "cacheMissesCount", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status ";
                // line 67
                echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 67, $this->getSourceContext()); })()), "cachePutsCount", array()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 67, $this->getSourceContext()); })()), "cachePutsCount", array()), "html", null, true);
                echo "</span>
                </div>
            ";
            } else {
                // line 70
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            ";
            }
            // line 75
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 76
            echo "
        ";
            // line 77
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 77, $this->getSourceContext()); })()), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 77, $this->getSourceContext()); })()), "")) : (""))));
            echo "

    ";
        }
        
        $__internal_f3eb9eaf92c6e4932318d85b76be0951617f6ab2f2df619661012aff0fed81d0->leave($__internal_f3eb9eaf92c6e4932318d85b76be0951617f6ab2f2df619661012aff0fed81d0_prof);

        
        $__internal_679d2ec3d3bb8b27dbdd0c977fa208edfbed84dc18c94a59e807843d646f3077->leave($__internal_679d2ec3d3bb8b27dbdd0c977fa208edfbed84dc18c94a59e807843d646f3077_prof);

    }

    // line 82
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f950209191384d23d8a359fd42ae36d5bef4a7da8432ce4e19d4e0bc42e966d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f950209191384d23d8a359fd42ae36d5bef4a7da8432ce4e19d4e0bc42e966d5->enter($__internal_f950209191384d23d8a359fd42ae36d5bef4a7da8432ce4e19d4e0bc42e966d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1fa6c7fb30878ee1cb879196577090cfa33da5c6b3386f46b9620c5c388c9069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa6c7fb30878ee1cb879196577090cfa33da5c6b3386f46b9620c5c388c9069->enter($__internal_1fa6c7fb30878ee1cb879196577090cfa33da5c6b3386f46b9620c5c388c9069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 83
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 83, $this->getSourceContext()); })()), 1)) : (1));
        // line 84
        echo "
    ";
        // line 85
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 85, $this->getSourceContext()); })()) == 1)) {
            // line 86
            echo "
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 91, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
            echo "</span>
                <span>";
            // line 92
            echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 92, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>

    ";
        } else {
            // line 97
            echo "
        <span class=\"label ";
            // line 98
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 98, $this->getSourceContext()); })()), "invalidEntityCount", array()) > 0)) ? ("label-status-error") : (""));
            echo " ";
            echo (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 98, $this->getSourceContext()); })()), "querycount", array()) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 99
            echo twig_include($this->env, $context, "@Doctrine/Collector/icon.svg");
            echo "</span>
            <strong>Doctrine</strong>
            ";
            // line 101
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 101, $this->getSourceContext()); })()), "invalidEntityCount", array())) {
                // line 102
                echo "                <span class=\"count\">
                    <span>";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 103, $this->getSourceContext()); })()), "invalidEntityCount", array()), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 106
            echo "        </span>

    ";
        }
        
        $__internal_1fa6c7fb30878ee1cb879196577090cfa33da5c6b3386f46b9620c5c388c9069->leave($__internal_1fa6c7fb30878ee1cb879196577090cfa33da5c6b3386f46b9620c5c388c9069_prof);

        
        $__internal_f950209191384d23d8a359fd42ae36d5bef4a7da8432ce4e19d4e0bc42e966d5->leave($__internal_f950209191384d23d8a359fd42ae36d5bef4a7da8432ce4e19d4e0bc42e966d5_prof);

    }

    // line 111
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3027e2838451550380f445f4f1fb80e33dce4ac74a8458dd966c306775e5ee18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3027e2838451550380f445f4f1fb80e33dce4ac74a8458dd966c306775e5ee18->enter($__internal_3027e2838451550380f445f4f1fb80e33dce4ac74a8458dd966c306775e5ee18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ab7318e9dbf855b21c2a476c4b3a89ee40706b8df5df1c1439310667596545c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab7318e9dbf855b21c2a476c4b3a89ee40706b8df5df1c1439310667596545c1->enter($__internal_ab7318e9dbf855b21c2a476c4b3a89ee40706b8df5df1c1439310667596545c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 112
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 112, $this->getSourceContext()); })()), 1)) : (1));
        // line 113
        echo "
    ";
        // line 114
        if (("explain" == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 114, $this->getSourceContext()); })()))) {
            // line 115
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctrineBundle:Profiler:explain", array("token" =>             // line 116
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 116, $this->getSourceContext()); })()), "panel" => "db", "connectionName" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 118
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 118, $this->getSourceContext()); })()), "query", array()), "get", array(0 => "connection"), "method"), "query" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 119
(isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 119, $this->getSourceContext()); })()), "query", array()), "get", array(0 => "query"), "method"))));
            // line 120
            echo "
    ";
        } else {
            // line 122
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_ab7318e9dbf855b21c2a476c4b3a89ee40706b8df5df1c1439310667596545c1->leave($__internal_ab7318e9dbf855b21c2a476c4b3a89ee40706b8df5df1c1439310667596545c1_prof);

        
        $__internal_3027e2838451550380f445f4f1fb80e33dce4ac74a8458dd966c306775e5ee18->leave($__internal_3027e2838451550380f445f4f1fb80e33dce4ac74a8458dd966c306775e5ee18_prof);

    }

    // line 126
    public function block_queries($context, array $blocks = array())
    {
        $__internal_b85d95a7e2120fe2ea539fd05b5d91ed76dc6967ab29e22a76e1d1212d8ec6a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b85d95a7e2120fe2ea539fd05b5d91ed76dc6967ab29e22a76e1d1212d8ec6a9->enter($__internal_b85d95a7e2120fe2ea539fd05b5d91ed76dc6967ab29e22a76e1d1212d8ec6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        $__internal_bfb62dcc6fd6880feaf5bea1ea1f6c59c2ed45917918eae32e85acf484fa030c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb62dcc6fd6880feaf5bea1ea1f6c59c2ed45917918eae32e85acf484fa030c->enter($__internal_bfb62dcc6fd6880feaf5bea1ea1f6c59c2ed45917918eae32e85acf484fa030c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        // line 127
        echo "    <style>
        ";
        // line 128
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 128, $this->getSourceContext()); })()) == 1)) {
            // line 129
            echo "            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        ";
        }
        // line 143
        echo "
        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
    </style>

    ";
        // line 149
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 149, $this->getSourceContext()); })()) > 1)) {
            // line 150
            echo "        <h2>Query Metrics</h2>
    
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 154, $this->getSourceContext()); })()), "querycount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 159, $this->getSourceContext()); })()), "groupedQueryCount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Different statements</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">";
            // line 164
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 164, $this->getSourceContext()); })()), "time", array()) * 1000)), "html", null, true);
            echo " ms</span>
                <span class=\"label\">Query time</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 169, $this->getSourceContext()); })()), "invalidEntityCount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Invalid entities</span>
            </div>
    
            ";
            // line 173
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 173, $this->getSourceContext()); })()), "cacheEnabled", array())) {
                // line 174
                echo "                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 175, $this->getSourceContext()); })()), "cacheHitsCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 179, $this->getSourceContext()); })()), "cacheMissesCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 183, $this->getSourceContext()); })()), "cachePutsCount", array()), "html", null, true);
                echo "</span>
                \t<span class=\"label\">Cache puts</span>
                </div>
            ";
            }
            // line 187
            echo "        </div>
    ";
        }
        // line 189
        echo "
    ";
        // line 190
        $context["group_queries"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new Twig_Error_Runtime('Variable "request" does not exist.', 190, $this->getSourceContext()); })()), "query", array()), "getBoolean", array(0 => "group"), "method");
        // line 191
        echo "    ";
        if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new Twig_Error_Runtime('Variable "group_queries" does not exist.', 191, $this->getSourceContext()); })())) {
            // line 192
            echo "        <h2>Grouped Statements</h2>
        <p><a href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 193, $this->getSourceContext()); })()))), "html", null, true);
            echo "\">Show all queries</a></p>
    ";
        } else {
            // line 195
            echo "        <h2>Queries</h2>
        <p><a href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 196, $this->getSourceContext()); })()), "group" => true)), "html", null, true);
            echo "\">Group similar statements</a></p>
    ";
        }
        // line 198
        echo "
    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 199, $this->getSourceContext()); })()), "queries", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 200
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 200, $this->getSourceContext()); })()), "connections", array())) > 1)) {
                // line 201
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["connection"], "html", null, true);
                echo " <small>connection</small></h3>
        ";
            }
            // line 203
            echo "
        ";
            // line 204
            if (twig_test_empty($context["queries"])) {
                // line 205
                echo "            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        ";
            } else {
                // line 209
                echo "            ";
                if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new Twig_Error_Runtime('Variable "group_queries" does not exist.', 209, $this->getSourceContext()); })())) {
                    // line 210
                    echo "                ";
                    $context["queries"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 210, $this->getSourceContext()); })()), "groupedQueries", array()), $context["connection"], array(), "array");
                    // line 211
                    echo "            ";
                }
                // line 212
                echo "            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    ";
                // line 215
                if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new Twig_Error_Runtime('Variable "group_queries" does not exist.', 215, $this->getSourceContext()); })())) {
                    // line 216
                    echo "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 217
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "')\" style=\"cursor: pointer;\">Count<span></span></th>
                    ";
                } else {
                    // line 219
                    echo "                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-";
                    // line 220
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                    echo "')\" style=\"cursor: pointer;\">Time<span></span></th>
                    ";
                }
                // line 222
                echo "                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-";
                // line 225
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                echo "\">
                    ";
                // line 226
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["queries"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 227
                    echo "                        ";
                    $context["i"] = (((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new Twig_Error_Runtime('Variable "group_queries" does not exist.', 227, $this->getSourceContext()); })())) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "index", array())) : ($context["i"]));
                    // line 228
                    echo "                        <tr id=\"queryNo-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\">
                            ";
                    // line 229
                    if ((isset($context["group_queries"]) || array_key_exists("group_queries", $context) ? $context["group_queries"] : (function () { throw new Twig_Error_Runtime('Variable "group_queries" does not exist.', 229, $this->getSourceContext()); })())) {
                        // line 230
                        echo "                                <td class=\"time-container\">
                                    <span class=\"time-bar\" style=\"width:";
                        // line 231
                        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "executionPercent", array())), "html", null, true);
                        echo "%\"></span>
                                    <span class=\"nowrap\">";
                        // line 232
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "executionMS", array()) * 1000)), "html", null, true);
                        echo "&nbsp;ms<br />(";
                        echo twig_escape_filter($this->env, sprintf("%0.2f", twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "executionPercent", array())), "html", null, true);
                        echo "%)</span>
                                </td>
                                <td class=\"nowrap\">";
                        // line 234
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "count", array()), "html", null, true);
                        echo "</td>
                            ";
                    } else {
                        // line 236
                        echo "                                <td class=\"nowrap\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
                        echo "</td>
                                <td class=\"nowrap\">";
                        // line 237
                        echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "executionMS", array()) * 1000)), "html", null, true);
                        echo "&nbsp;ms</td>
                            ";
                    }
                    // line 239
                    echo "                            <td>
                                ";
                    // line 240
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery(twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "sql", array()), true);
                    echo "

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: ";
                    // line 243
                    echo $this->env->getExtension('Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension')->dumpData($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "params", array()), 2);
                    echo "
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" ";
                    // line 247
                    echo ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 247, $this->getSourceContext()); })()) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" ";
                    // line 251
                    echo ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 251, $this->getSourceContext()); })()) == 1)) ? ("onclick=\"return toggleRunnableQuery(this);\"") : (""));
                    echo " class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    ";
                    // line 253
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "explainable", array())) {
                        // line 254
                        echo "                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"";
                        // line 255
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("panel" => "db", "token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 255, $this->getSourceContext()); })()), "page" => "explain", "connection" => $context["connection"], "query" => $context["i"])), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\">Explain query</a>
                                    ";
                    }
                    // line 257
                    echo "                                </div>

                                <div id=\"formatted-query-";
                    // line 259
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 260
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery(twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "sql", array()));
                    echo "
                                </div>

                                <div id=\"original-query-";
                    // line 263
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                    echo "\" class=\"sql-runnable hidden\">
                                    ";
                    // line 264
                    echo $this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->formatQuery($this->env->getExtension('Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension')->replaceQueryParameters((twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "sql", array()) . ";"), twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "params", array())), true);
                    echo "
                                </div>

                                ";
                    // line 267
                    if (twig_get_attribute($this->env, $this->getSourceContext(), $context["query"], "explainable", array())) {
                        // line 268
                        echo "                                    <div id=\"explain-";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "parent", array()), "loop", array()), "index", array()), "html", null, true);
                        echo "\" class=\"sql-explain\"></div>
                                ";
                    }
                    // line 270
                    echo "                            </td>
                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 273
                echo "                </tbody>
            </table>
        ";
            }
            // line 276
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "
    <h2>Database Connections</h2>

    ";
        // line 280
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 280, $this->getSourceContext()); })()), "connections", array())) {
            // line 281
            echo "        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    ";
        } else {
            // line 285
            echo "        ";
            echo $context["helper"]->macro_render_simple_table("Name", "Service", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 285, $this->getSourceContext()); })()), "connections", array()));
            echo "
    ";
        }
        // line 287
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 290
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 290, $this->getSourceContext()); })()), "managers", array())) {
            // line 291
            echo "        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    ";
        } else {
            // line 295
            echo "        ";
            echo $context["helper"]->macro_render_simple_table("Name", "Service", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 295, $this->getSourceContext()); })()), "managers", array()));
            echo "
    ";
        }
        // line 297
        echo "
    <h2>Second Level Cache</h2>

    ";
        // line 300
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 300, $this->getSourceContext()); })()), "cacheEnabled", array())) {
            // line 301
            echo "        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    ";
        } else {
            // line 305
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 305, $this->getSourceContext()); })()), "cacheCounts", array())) {
                // line 306
                echo "            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        ";
            } else {
                // line 310
                echo "            ";
                if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 310, $this->getSourceContext()); })()) == 1)) {
                    // line 311
                    echo "                ";
                    echo $context["helper"]->macro_render_simple_table("Key", "Value", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 311, $this->getSourceContext()); })()), "cacheCounts", array()));
                    echo "
            ";
                } else {
                    // line 313
                    echo "                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 315
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 315, $this->getSourceContext()); })()), "cacheCounts", array()), "hits", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 320
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 320, $this->getSourceContext()); })()), "cacheCounts", array()), "misses", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
                    // line 325
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 325, $this->getSourceContext()); })()), "cacheCounts", array()), "puts", array()), "html", null, true);
                    echo "</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            ";
                }
                // line 330
                echo "
            ";
                // line 331
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 331, $this->getSourceContext()); })()), "cacheRegions", array()), "hits", array())) {
                    // line 332
                    echo "                <h3>Number of cache hits</h3>
                ";
                    // line 333
                    echo $context["helper"]->macro_render_simple_table("Region", "Hits", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 333, $this->getSourceContext()); })()), "cacheRegions", array()), "hits", array()));
                    echo "
            ";
                }
                // line 335
                echo "
            ";
                // line 336
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 336, $this->getSourceContext()); })()), "cacheRegions", array()), "misses", array())) {
                    // line 337
                    echo "                <h3>Number of cache misses</h3>
                ";
                    // line 338
                    echo $context["helper"]->macro_render_simple_table("Region", "Misses", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 338, $this->getSourceContext()); })()), "cacheRegions", array()), "misses", array()));
                    echo "
            ";
                }
                // line 340
                echo "
            ";
                // line 341
                if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 341, $this->getSourceContext()); })()), "cacheRegions", array()), "puts", array())) {
                    // line 342
                    echo "                <h3>Number of cache puts</h3>
                ";
                    // line 343
                    echo $context["helper"]->macro_render_simple_table("Region", "Puts", twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 343, $this->getSourceContext()); })()), "cacheRegions", array()), "puts", array()));
                    echo "
            ";
                }
                // line 345
                echo "        ";
            }
            // line 346
            echo "    ";
        }
        // line 347
        echo "
    <h2>Entities Mapping</h2>

    ";
        // line 350
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 350, $this->getSourceContext()); })()), "entities", array()));
        foreach ($context['_seq'] as $context["manager"] => $context["classes"]) {
            // line 351
            echo "        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 351, $this->getSourceContext()); })()), "managers", array())) > 1)) {
                // line 352
                echo "            <h3>";
                echo twig_escape_filter($this->env, $context["manager"], "html", null, true);
                echo " <small>entity manager</small></h3>
        ";
            }
            // line 354
            echo "
        ";
            // line 355
            if (twig_test_empty($context["classes"])) {
                // line 356
                echo "            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        ";
            } else {
                // line 360
                echo "            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 368
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["classes"]);
                foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
                    // line 369
                    echo "                    ";
                    $context["contains_errors"] = (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", true, true) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "mappingErrors", array(), "any", false, true), $context["manager"], array(), "array", false, true), $context["class"], array(), "array", true, true));
                    // line 370
                    echo "                    <tr class=\"";
                    echo (((isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new Twig_Error_Runtime('Variable "contains_errors" does not exist.', 370, $this->getSourceContext()); })())) ? ("status-error") : (""));
                    echo "\">
                        <td>";
                    // line 371
                    echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                    echo "</td>
                        <td class=\"font-normal\">
                            ";
                    // line 373
                    if ((isset($context["contains_errors"]) || array_key_exists("contains_errors", $context) ? $context["contains_errors"] : (function () { throw new Twig_Error_Runtime('Variable "contains_errors" does not exist.', 373, $this->getSourceContext()); })())) {
                        // line 374
                        echo "                                <ul>
                                    ";
                        // line 375
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 375, $this->getSourceContext()); })()), "mappingErrors", array()), $context["manager"], array(), "array"), $context["class"], array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 376
                            echo "                                        <li>";
                            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                            echo "</li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 378
                        echo "                                </ul>
                            ";
                    } else {
                        // line 380
                        echo "                                No errors.
                            ";
                    }
                    // line 382
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 385
                echo "                </tbody>
            </table>
        ";
            }
            // line 388
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['manager'], $context['classes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 389
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        ";
        // line 447
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 447, $this->getSourceContext()); })()) == 1)) {
            // line 448
            echo "            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }
        ";
        }
        // line 465
        echo "
        //]]></script>
";
        
        $__internal_bfb62dcc6fd6880feaf5bea1ea1f6c59c2ed45917918eae32e85acf484fa030c->leave($__internal_bfb62dcc6fd6880feaf5bea1ea1f6c59c2ed45917918eae32e85acf484fa030c_prof);

        
        $__internal_b85d95a7e2120fe2ea539fd05b5d91ed76dc6967ab29e22a76e1d1212d8ec6a9->leave($__internal_b85d95a7e2120fe2ea539fd05b5d91ed76dc6967ab29e22a76e1d1212d8ec6a9_prof);

    }

    // line 469
    public function macro_render_simple_table($__label1__ = null, $__label2__ = null, $__data__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label1" => $__label1__,
            "label2" => $__label2__,
            "data" => $__data__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_726a2c5f0309f31aa958af08c3a33567b219dd36ef6f83286ac6591ae639f1ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_726a2c5f0309f31aa958af08c3a33567b219dd36ef6f83286ac6591ae639f1ad->enter($__internal_726a2c5f0309f31aa958af08c3a33567b219dd36ef6f83286ac6591ae639f1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_simple_table"));

            $__internal_41d967e2e1eed03e74b9c4db7826d155a2fc890e6566350a3d41cf3049979e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_41d967e2e1eed03e74b9c4db7826d155a2fc890e6566350a3d41cf3049979e80->enter($__internal_41d967e2e1eed03e74b9c4db7826d155a2fc890e6566350a3d41cf3049979e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_simple_table"));

            // line 470
            echo "    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
            // line 473
            echo twig_escape_filter($this->env, (isset($context["label1"]) || array_key_exists("label1", $context) ? $context["label1"] : (function () { throw new Twig_Error_Runtime('Variable "label1" does not exist.', 473, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
            <th scope=\"col\">";
            // line 474
            echo twig_escape_filter($this->env, (isset($context["label2"]) || array_key_exists("label2", $context) ? $context["label2"] : (function () { throw new Twig_Error_Runtime('Variable "label2" does not exist.', 474, $this->getSourceContext()); })()), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 478
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 478, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 479
                echo "            <tr>
                <th scope=\"row\">";
                // line 480
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</th>
                <td>";
                // line 481
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 484
            echo "        </tbody>
    </table>
";
            
            $__internal_41d967e2e1eed03e74b9c4db7826d155a2fc890e6566350a3d41cf3049979e80->leave($__internal_41d967e2e1eed03e74b9c4db7826d155a2fc890e6566350a3d41cf3049979e80_prof);

            
            $__internal_726a2c5f0309f31aa958af08c3a33567b219dd36ef6f83286ac6591ae639f1ad->leave($__internal_726a2c5f0309f31aa958af08c3a33567b219dd36ef6f83286ac6591ae639f1ad_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@Doctrine/Collector/db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1139 => 484,  1130 => 481,  1126 => 480,  1123 => 479,  1119 => 478,  1112 => 474,  1108 => 473,  1103 => 470,  1083 => 469,  1071 => 465,  1052 => 448,  1050 => 447,  990 => 389,  984 => 388,  979 => 385,  971 => 382,  967 => 380,  963 => 378,  954 => 376,  950 => 375,  947 => 374,  945 => 373,  940 => 371,  935 => 370,  932 => 369,  928 => 368,  918 => 360,  912 => 356,  910 => 355,  907 => 354,  901 => 352,  898 => 351,  894 => 350,  889 => 347,  886 => 346,  883 => 345,  878 => 343,  875 => 342,  873 => 341,  870 => 340,  865 => 338,  862 => 337,  860 => 336,  857 => 335,  852 => 333,  849 => 332,  847 => 331,  844 => 330,  836 => 325,  828 => 320,  820 => 315,  816 => 313,  810 => 311,  807 => 310,  801 => 306,  798 => 305,  792 => 301,  790 => 300,  785 => 297,  779 => 295,  773 => 291,  771 => 290,  766 => 287,  760 => 285,  754 => 281,  752 => 280,  747 => 277,  733 => 276,  728 => 273,  712 => 270,  704 => 268,  702 => 267,  696 => 264,  690 => 263,  684 => 260,  678 => 259,  674 => 257,  665 => 255,  662 => 254,  660 => 253,  651 => 251,  640 => 247,  633 => 243,  627 => 240,  624 => 239,  619 => 237,  614 => 236,  609 => 234,  602 => 232,  598 => 231,  595 => 230,  593 => 229,  586 => 228,  583 => 227,  566 => 226,  562 => 225,  557 => 222,  552 => 220,  547 => 219,  542 => 217,  537 => 216,  535 => 215,  530 => 212,  527 => 211,  524 => 210,  521 => 209,  515 => 205,  513 => 204,  510 => 203,  504 => 201,  501 => 200,  484 => 199,  481 => 198,  476 => 196,  473 => 195,  468 => 193,  465 => 192,  462 => 191,  460 => 190,  457 => 189,  453 => 187,  446 => 183,  439 => 179,  432 => 175,  429 => 174,  427 => 173,  420 => 169,  412 => 164,  404 => 159,  396 => 154,  390 => 150,  388 => 149,  380 => 143,  364 => 129,  362 => 128,  359 => 127,  350 => 126,  336 => 122,  332 => 120,  330 => 119,  329 => 118,  328 => 116,  326 => 115,  324 => 114,  321 => 113,  318 => 112,  309 => 111,  296 => 106,  290 => 103,  287 => 102,  285 => 101,  280 => 99,  274 => 98,  271 => 97,  263 => 92,  259 => 91,  252 => 86,  250 => 85,  247 => 84,  244 => 83,  235 => 82,  221 => 77,  218 => 76,  215 => 75,  208 => 70,  200 => 67,  191 => 63,  184 => 59,  180 => 57,  178 => 56,  171 => 54,  164 => 50,  155 => 46,  151 => 44,  149 => 43,  146 => 42,  143 => 41,  139 => 39,  132 => 35,  125 => 32,  118 => 29,  116 => 28,  111 => 26,  108 => 25,  106 => 24,  103 => 23,  99 => 21,  93 => 19,  90 => 18,  84 => 16,  82 => 15,  74 => 14,  70 => 12,  67 => 11,  65 => 10,  62 => 9,  60 => 8,  57 => 7,  54 => 6,  45 => 5,  35 => 1,  33 => 3,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.querycount > 0 or collector.invalidEntityCount > 0 %}

        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}

                <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                    <span class=\"sf-toolbar-value sf-toolbar-status {% if collector.querycount > 50 %}sf-toolbar-status-yellow{% endif %}\">{{ collector.querycount }}</span>
                    {% if collector.querycount > 0 %}
                        <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                    {% endif %}
                    {% if collector.invalidEntityCount > 0 %}
                        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status sf-toolbar-status-red\">{{ collector.invalidEntityCount }}</span>
                    {% endif %}

            {% else %}

                {% set status = collector.invalidEntityCount > 0 ? 'red' : collector.querycount > 50 ? 'yellow' %}

                {{ include('@Doctrine/Collector/icon.svg') }}

                {% if collector.querycount == 0 and collector.invalidEntityCount > 0 %}
                    <span class=\"sf-toolbar-value\">{{ collector.invalidEntityCount }}</span>
                    <span class=\"sf-toolbar-label\">errors</span>
                {% else %}
                    <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
                    <span class=\"sf-toolbar-info-piece-additional-detail\">
                        <span class=\"sf-toolbar-label\">in</span>
                        <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                        <span class=\"sf-toolbar-label\">ms</span>
                    </span>
                {% endif %}

            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Database Queries</b>
                <span class=\"sf-toolbar-status {{ collector.querycount > 50 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.querycount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Query time</b>
                <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Invalid entities</b>
                <span class=\"sf-toolbar-status {{ collector.invalidEntityCount > 0 ? 'sf-toolbar-status-red' : '' }}\">{{ collector.invalidEntityCount }}</span>
            </div>
            {% if collector.cacheEnabled %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache hits</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.cacheHitsCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache misses</b>
                    <span class=\"sf-toolbar-status {{ collector.cacheMissesCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cacheMissesCount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Cache puts</b>
                    <span class=\"sf-toolbar-status {{ collector.cachePutsCount > 0 ? 'sf-toolbar-status-yellow' : '' }}\">{{ collector.cachePutsCount }}</span>
                </div>
            {% else %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Second Level Cache</b>
                    <span class=\"sf-toolbar-status\">disabled</span>
                </div>
            {% endif %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}

    {% endif %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}

        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"\" /></span>
            <strong>Doctrine</strong>
            <span class=\"count\">
                <span>{{ collector.querycount }}</span>
                <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
            </span>
        </span>

    {% else %}

        <span class=\"label {{ collector.invalidEntityCount > 0 ? 'label-status-error' }} {{ collector.querycount == 0 ? 'disabled' }}\">
            <span class=\"icon\">{{ include('@Doctrine/Collector/icon.svg') }}</span>
            <strong>Doctrine</strong>
            {% if collector.invalidEntityCount %}
                <span class=\"count\">
                    <span>{{ collector.invalidEntityCount }}</span>
                </span>
            {% endif %}
        </span>

    {% endif %}
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if 'explain' == page %}
        {{ render(controller('DoctrineBundle:Profiler:explain', {
            token: token,
            panel: 'db',
            connectionName: request.query.get('connection'),
            query: request.query.get('query')
        })) }}
    {% else %}
        {{ block('queries') }}
    {% endif %}
{% endblock %}

{% block queries %}
    <style>
        {% if profiler_markup_version == 1 %}
            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        {% endif %}

        .time-container { position: relative; }
        .time-container .nowrap { position: relative; z-index: 1; text-shadow: 0 0 2px #fff; }
        .time-bar { display: block; position: absolute; top: 0; left: 0; bottom: 0; background: #e0e0e0; }
    </style>

    {% if profiler_markup_version > 1 %}
        <h2>Query Metrics</h2>
    
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.querycount }}</span>
                <span class=\"label\">Database Queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.groupedQueryCount }}</span>
                <span class=\"label\">Different statements</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                <span class=\"label\">Query time</span>
            </div>
    
            <div class=\"metric\">
                <span class=\"value\">{{ collector.invalidEntityCount }}</span>
                <span class=\"label\">Invalid entities</span>
            </div>
    
            {% if collector.cacheEnabled %}
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cacheHitsCount }}</span>
                \t<span class=\"label\">Cache hits</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cacheMissesCount }}</span>
                \t<span class=\"label\">Cache misses</span>
                </div>
                <div class=\"metric\">
                \t<span class=\"value\">{{ collector.cachePutsCount }}</span>
                \t<span class=\"label\">Cache puts</span>
                </div>
            {% endif %}
        </div>
    {% endif %}

    {% set group_queries = request.query.getBoolean('group') %}
    {% if group_queries %}
        <h2>Grouped Statements</h2>
        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token }) }}\">Show all queries</a></p>
    {% else %}
        <h2>Queries</h2>
        <p><a href=\"{{ path('_profiler', { panel: 'db', token: token, group: true }) }}\">Group similar statements</a></p>
    {% endif %}

    {% for connection, queries in collector.queries %}
        {% if collector.connections|length > 1 %}
            <h3>{{ connection }} <small>connection</small></h3>
        {% endif %}

        {% if queries is empty %}
            <div class=\"empty\">
                <p>No database queries were performed.</p>
            </div>
        {% else %}
            {% if group_queries %}
                {% set queries = collector.groupedQueries[connection] %}
            {% endif %}
            <table class=\"alt queries-table\">
                <thead>
                <tr>
                    {% if group_queries %}
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"1\" style=\"cursor: pointer;\">Time<span class=\"text-muted\">&#9660;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Count<span></span></th>
                    {% else %}
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-{{ loop.index }}')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                        <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-{{ loop.index }}')\" style=\"cursor: pointer;\">Time<span></span></th>
                    {% endif %}
                    <th style=\"width: 100%;\">Info</th>
                </tr>
                </thead>
                <tbody id=\"queries-{{ loop.index }}\">
                    {% for i, query in queries %}
                        {% set i = group_queries ? query.index : i %}
                        <tr id=\"queryNo-{{ i }}-{{ loop.parent.loop.index }}\">
                            {% if group_queries %}
                                <td class=\"time-container\">
                                    <span class=\"time-bar\" style=\"width:{{ '%0.2f'|format(query.executionPercent) }}%\"></span>
                                    <span class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms<br />({{ '%0.2f'|format(query.executionPercent) }}%)</span>
                                </td>
                                <td class=\"nowrap\">{{ query.count }}</td>
                            {% else %}
                                <td class=\"nowrap\">{{ loop.index }}</td>
                                <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms</td>
                            {% endif %}
                            <td>
                                {{ query.sql|doctrine_pretty_query(highlight_only = true) }}

                                <div>
                                    <strong class=\"font-normal text-small\">Parameters</strong>: {{ profiler_dump(query.params, 2) }}
                                </div>

                                <div class=\"text-small font-normal\">
                                    <a href=\"#\" {{ profiler_markup_version == 1 ? 'onclick=\"return toggleRunnableQuery(this);\"' }} class=\"sf-toggle link-inverse\" data-toggle-selector=\"#formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide formatted query\">View formatted query</a>

                                    &nbsp;&nbsp;

                                    <a href=\"#\" {{ profiler_markup_version == 1 ? 'onclick=\"return toggleRunnableQuery(this);\"' }} class=\"sf-toggle link-inverse\" data-toggle-selector=\"#original-query-{{ i }}-{{ loop.parent.loop.index }}\" data-toggle-alt-content=\"Hide runnable query\">View runnable query</a>

                                    {% if query.explainable %}
                                        &nbsp;&nbsp;
                                        <a class=\"link-inverse\" href=\"{{ path('_profiler', { panel: 'db', token: token, page: 'explain', connection: connection, query: i }) }}\" onclick=\"return explain(this);\" data-target-id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\">Explain query</a>
                                    {% endif %}
                                </div>

                                <div id=\"formatted-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                    {{ query.sql|doctrine_pretty_query }}
                                </div>

                                <div id=\"original-query-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-runnable hidden\">
                                    {{ (query.sql ~ ';')|doctrine_replace_query_parameters(query.params)|doctrine_pretty_query(highlight_only = true) }}
                                </div>

                                {% if query.explainable %}
                                    <div id=\"explain-{{ i }}-{{ loop.parent.loop.index }}\" class=\"sql-explain\"></div>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <h2>Database Connections</h2>

    {% if not collector.connections %}
        <div class=\"empty\">
            <p>There are no configured database connections.</p>
        </div>
    {% else %}
        {{ helper.render_simple_table('Name', 'Service', collector.connections) }}
    {% endif %}

    <h2>Entity Managers</h2>

    {% if not collector.managers %}
        <div class=\"empty\">
            <p>There are no configured entity managers.</p>
        </div>
    {% else %}
        {{ helper.render_simple_table('Name', 'Service', collector.managers) }}
    {% endif %}

    <h2>Second Level Cache</h2>

    {% if not collector.cacheEnabled %}
        <div class=\"empty\">
            <p>Second Level Cache is not enabled.</p>
        </div>
    {% else %}
        {% if not collector.cacheCounts %}
            <div class=\"empty\">
                <p>Second level cache information is not available.</p>
            </div>
        {% else %}
            {% if profiler_markup_version == 1 %}
                {{ helper.render_simple_table('Key', 'Value', collector.cacheCounts) }}
            {% else %}
                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.hits }}</span>
                        <span class=\"label\">Hits</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.misses }}</span>
                        <span class=\"label\">Misses</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.cacheCounts.puts }}</span>
                        <span class=\"label\">Puts</span>
                    </div>
                </div>
            {% endif %}

            {% if collector.cacheRegions.hits %}
                <h3>Number of cache hits</h3>
                {{ helper.render_simple_table('Region', 'Hits', collector.cacheRegions.hits) }}
            {% endif %}

            {% if collector.cacheRegions.misses %}
                <h3>Number of cache misses</h3>
                {{ helper.render_simple_table('Region', 'Misses', collector.cacheRegions.misses) }}
            {% endif %}

            {% if collector.cacheRegions.puts %}
                <h3>Number of cache puts</h3>
                {{ helper.render_simple_table('Region', 'Puts', collector.cacheRegions.puts) }}
            {% endif %}
        {% endif %}
    {% endif %}

    <h2>Entities Mapping</h2>

    {% for manager, classes in collector.entities %}
        {% if collector.managers|length > 1 %}
            <h3>{{ manager }} <small>entity manager</small></h3>
        {% endif %}

        {% if classes is empty %}
            <div class=\"empty\">
                <p>No loaded entities.</p>
            </div>
        {% else %}
            <table>
                <thead>
                <tr>
                    <th scope=\"col\">Class</th>
                    <th scope=\"col\">Mapping errors</th>
                </tr>
                </thead>
                <tbody>
                {% for class in classes %}
                    {% set contains_errors = collector.mappingErrors[manager] is defined and collector.mappingErrors[manager][class] is defined %}
                    <tr class=\"{{ contains_errors ? 'status-error' }}\">
                        <td>{{ class }}</td>
                        <td class=\"font-normal\">
                            {% if contains_errors %}
                                <ul>
                                    {% for error in collector.mappingErrors[manager][class] %}
                                        <li>{{ error }}</li>
                                    {% endfor %}
                                </ul>
                            {% else %}
                                No errors.
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}

    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var targetId = link.getAttribute('data-target-id');
            var targetElement = document.getElementById(targetId);

            if (targetElement.style.display != 'block') {
                Sfjs.load(targetId, link.href, null, function(xhr, el) {
                    el.innerHTML = 'An error occurred while loading the query explanation.';
                });

                targetElement.style.display = 'block';
                link.innerHTML = 'Hide query explanation';
            } else {
                targetElement.style.display = 'none';
                link.innerHTML = 'Explain query';
            }

            return false;
        }

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        {% if profiler_markup_version == 1 %}
            function toggleRunnableQuery(target) {
                var targetSelector = target.getAttribute('data-toggle-selector');
                var targetDataAltContent = target.getAttribute('data-toggle-alt-content');
                var targetElement = document.querySelector(targetSelector);
                target.setAttribute('data-toggle-alt-content', target.innerHTML);

                if (targetElement.style.display != 'block') {
                    targetElement.style.display = 'block';
                    target.innerHTML = targetDataAltContent;
                } else {
                    targetElement.style.display = 'none';
                    target.innerHTML = targetDataAltContent;
                }

                return false;
            }
        {% endif %}

        //]]></script>
{% endblock %}

{% macro render_simple_table(label1, label2, data) %}
    <table>
        <thead>
        <tr>
            <th scope=\"col\" class=\"key\">{{ label1 }}</th>
            <th scope=\"col\">{{ label2 }}</th>
        </tr>
        </thead>
        <tbody>
        {% for key, value in data %}
            <tr>
                <th scope=\"row\">{{ key }}</th>
                <td>{{ value }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@Doctrine/Collector/db.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\doctrine\\doctrine-bundle\\Resources\\views\\Collector\\db.html.twig");
    }
}
