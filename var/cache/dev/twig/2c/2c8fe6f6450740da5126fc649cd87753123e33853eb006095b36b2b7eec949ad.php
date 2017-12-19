<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_83657210829d16a97141356e831671d02788501e00bec4e518986f0bf916f6ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1f95a4b8c3a4111081812a43574a865a8b897df24e022c1cbe9ed32da8563af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f95a4b8c3a4111081812a43574a865a8b897df24e022c1cbe9ed32da8563af->enter($__internal_c1f95a4b8c3a4111081812a43574a865a8b897df24e022c1cbe9ed32da8563af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_4a866866aa2b488a261c231e6773967cf7dcc827d9491c0fb72f5d08f702a268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a866866aa2b488a261c231e6773967cf7dcc827d9491c0fb72f5d08f702a268->enter($__internal_4a866866aa2b488a261c231e6773967cf7dcc827d9491c0fb72f5d08f702a268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_c1f95a4b8c3a4111081812a43574a865a8b897df24e022c1cbe9ed32da8563af->leave($__internal_c1f95a4b8c3a4111081812a43574a865a8b897df24e022c1cbe9ed32da8563af_prof);

        
        $__internal_4a866866aa2b488a261c231e6773967cf7dcc827d9491c0fb72f5d08f702a268->leave($__internal_4a866866aa2b488a261c231e6773967cf7dcc827d9491c0fb72f5d08f702a268_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ca2aec50a0b81b4454d0f41f9f335da140f5176fd276b27b981050e70f220578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2aec50a0b81b4454d0f41f9f335da140f5176fd276b27b981050e70f220578->enter($__internal_ca2aec50a0b81b4454d0f41f9f335da140f5176fd276b27b981050e70f220578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_567a0fddbf05cf0ef5efb1b4435ceb654a5769bdaed52678a0fa1804e5b5afb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567a0fddbf05cf0ef5efb1b4435ceb654a5769bdaed52678a0fa1804e5b5afb6->enter($__internal_567a0fddbf05cf0ef5efb1b4435ceb654a5769bdaed52678a0fa1804e5b5afb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_567a0fddbf05cf0ef5efb1b4435ceb654a5769bdaed52678a0fa1804e5b5afb6->leave($__internal_567a0fddbf05cf0ef5efb1b4435ceb654a5769bdaed52678a0fa1804e5b5afb6_prof);

        
        $__internal_ca2aec50a0b81b4454d0f41f9f335da140f5176fd276b27b981050e70f220578->leave($__internal_ca2aec50a0b81b4454d0f41f9f335da140f5176fd276b27b981050e70f220578_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_6d854aa9ccf2261b62a5987b80da54710a23c3db19d90a849456f1771e56a6c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d854aa9ccf2261b62a5987b80da54710a23c3db19d90a849456f1771e56a6c5->enter($__internal_6d854aa9ccf2261b62a5987b80da54710a23c3db19d90a849456f1771e56a6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_dc7a6f8d575e362b46fafc21d068b8b029a66279e800cfdccd998c8132150e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7a6f8d575e362b46fafc21d068b8b029a66279e800cfdccd998c8132150e6a->enter($__internal_dc7a6f8d575e362b46fafc21d068b8b029a66279e800cfdccd998c8132150e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_dc7a6f8d575e362b46fafc21d068b8b029a66279e800cfdccd998c8132150e6a->leave($__internal_dc7a6f8d575e362b46fafc21d068b8b029a66279e800cfdccd998c8132150e6a_prof);

        
        $__internal_6d854aa9ccf2261b62a5987b80da54710a23c3db19d90a849456f1771e56a6c5->leave($__internal_6d854aa9ccf2261b62a5987b80da54710a23c3db19d90a849456f1771e56a6c5_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_96f53cc813a1c495491f56b221f5f9316a040b23d098142b2f617213604dfa49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f53cc813a1c495491f56b221f5f9316a040b23d098142b2f617213604dfa49->enter($__internal_96f53cc813a1c495491f56b221f5f9316a040b23d098142b2f617213604dfa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6fa5afeb2d1942fc2e5cf582b5caf6f88daf1690d4a685d89548f8d52d4f3587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa5afeb2d1942fc2e5cf582b5caf6f88daf1690d4a685d89548f8d52d4f3587->enter($__internal_6fa5afeb2d1942fc2e5cf582b5caf6f88daf1690d4a685d89548f8d52d4f3587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_6fa5afeb2d1942fc2e5cf582b5caf6f88daf1690d4a685d89548f8d52d4f3587->leave($__internal_6fa5afeb2d1942fc2e5cf582b5caf6f88daf1690d4a685d89548f8d52d4f3587_prof);

        
        $__internal_96f53cc813a1c495491f56b221f5f9316a040b23d098142b2f617213604dfa49->leave($__internal_96f53cc813a1c495491f56b221f5f9316a040b23d098142b2f617213604dfa49_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_b1c40065bd52ebe33714b8728aad083e2128f1ac0ab01ba15568d6760ab5f9ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c40065bd52ebe33714b8728aad083e2128f1ac0ab01ba15568d6760ab5f9ee->enter($__internal_b1c40065bd52ebe33714b8728aad083e2128f1ac0ab01ba15568d6760ab5f9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_63d57b8a787f4c883d1bc77af175bfb8a07e5e5c00861d271853ce7ead48b265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d57b8a787f4c883d1bc77af175bfb8a07e5e5c00861d271853ce7ead48b265->enter($__internal_63d57b8a787f4c883d1bc77af175bfb8a07e5e5c00861d271853ce7ead48b265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_63d57b8a787f4c883d1bc77af175bfb8a07e5e5c00861d271853ce7ead48b265->leave($__internal_63d57b8a787f4c883d1bc77af175bfb8a07e5e5c00861d271853ce7ead48b265_prof);

        
        $__internal_b1c40065bd52ebe33714b8728aad083e2128f1ac0ab01ba15568d6760ab5f9ee->leave($__internal_b1c40065bd52ebe33714b8728aad083e2128f1ac0ab01ba15568d6760ab5f9ee_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4b18a37b77c174ec0a694384636be5e3e5d5574ac57b057a481d7cf12139705f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b18a37b77c174ec0a694384636be5e3e5d5574ac57b057a481d7cf12139705f->enter($__internal_4b18a37b77c174ec0a694384636be5e3e5d5574ac57b057a481d7cf12139705f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_ce5b0ee7d55a589ff1593d6948fff582c89cbdcd489913cd1209d561eecf0b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5b0ee7d55a589ff1593d6948fff582c89cbdcd489913cd1209d561eecf0b91->enter($__internal_ce5b0ee7d55a589ff1593d6948fff582c89cbdcd489913cd1209d561eecf0b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_ce5b0ee7d55a589ff1593d6948fff582c89cbdcd489913cd1209d561eecf0b91->leave($__internal_ce5b0ee7d55a589ff1593d6948fff582c89cbdcd489913cd1209d561eecf0b91_prof);

        
        $__internal_4b18a37b77c174ec0a694384636be5e3e5d5574ac57b057a481d7cf12139705f->leave($__internal_4b18a37b77c174ec0a694384636be5e3e5d5574ac57b057a481d7cf12139705f_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_98b2f90e0361f945c3e0f0b36821ce62e4cc8d89c2afa0f55d2e3ba304d3328e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b2f90e0361f945c3e0f0b36821ce62e4cc8d89c2afa0f55d2e3ba304d3328e->enter($__internal_98b2f90e0361f945c3e0f0b36821ce62e4cc8d89c2afa0f55d2e3ba304d3328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_e68b654509b0b63038c0246dc075992bad0b09fd03acf1faa0ce970568fdde2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68b654509b0b63038c0246dc075992bad0b09fd03acf1faa0ce970568fdde2b->enter($__internal_e68b654509b0b63038c0246dc075992bad0b09fd03acf1faa0ce970568fdde2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_e68b654509b0b63038c0246dc075992bad0b09fd03acf1faa0ce970568fdde2b->leave($__internal_e68b654509b0b63038c0246dc075992bad0b09fd03acf1faa0ce970568fdde2b_prof);

        
        $__internal_98b2f90e0361f945c3e0f0b36821ce62e4cc8d89c2afa0f55d2e3ba304d3328e->leave($__internal_98b2f90e0361f945c3e0f0b36821ce62e4cc8d89c2afa0f55d2e3ba304d3328e_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_888cc78186ded46ac2f1ed720c6cea502393646e0e13052c9c9f94b400956fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888cc78186ded46ac2f1ed720c6cea502393646e0e13052c9c9f94b400956fc4->enter($__internal_888cc78186ded46ac2f1ed720c6cea502393646e0e13052c9c9f94b400956fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_588469746a25e4538031c5f9b26f4bd26c167847876faf0cdca66a0fe3cddc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588469746a25e4538031c5f9b26f4bd26c167847876faf0cdca66a0fe3cddc8d->enter($__internal_588469746a25e4538031c5f9b26f4bd26c167847876faf0cdca66a0fe3cddc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_588469746a25e4538031c5f9b26f4bd26c167847876faf0cdca66a0fe3cddc8d->leave($__internal_588469746a25e4538031c5f9b26f4bd26c167847876faf0cdca66a0fe3cddc8d_prof);

        
        $__internal_888cc78186ded46ac2f1ed720c6cea502393646e0e13052c9c9f94b400956fc4->leave($__internal_888cc78186ded46ac2f1ed720c6cea502393646e0e13052c9c9f94b400956fc4_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_2242a7b6526e03c0c30b2d52390347d6d9336faff9925d88488eed87430b929b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2242a7b6526e03c0c30b2d52390347d6d9336faff9925d88488eed87430b929b->enter($__internal_2242a7b6526e03c0c30b2d52390347d6d9336faff9925d88488eed87430b929b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a95cc6cbe8a3ec2ede016bd1b94ce760d2d696655a33bf385431ec0b3a65e4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95cc6cbe8a3ec2ede016bd1b94ce760d2d696655a33bf385431ec0b3a65e4ec->enter($__internal_a95cc6cbe8a3ec2ede016bd1b94ce760d2d696655a33bf385431ec0b3a65e4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_a95cc6cbe8a3ec2ede016bd1b94ce760d2d696655a33bf385431ec0b3a65e4ec->leave($__internal_a95cc6cbe8a3ec2ede016bd1b94ce760d2d696655a33bf385431ec0b3a65e4ec_prof);

        
        $__internal_2242a7b6526e03c0c30b2d52390347d6d9336faff9925d88488eed87430b929b->leave($__internal_2242a7b6526e03c0c30b2d52390347d6d9336faff9925d88488eed87430b929b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
