<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_c4bc26f7203e5f39eb05147e24068f05ee0caf85932ce27b317313b834fe3186 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73551e128c2b1191580231f1e3f2a03962fe43643593618ba4d5b94c92790c0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73551e128c2b1191580231f1e3f2a03962fe43643593618ba4d5b94c92790c0a->enter($__internal_73551e128c2b1191580231f1e3f2a03962fe43643593618ba4d5b94c92790c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_b5701d6590f79d70cbcf2a8cf9f2cd2bd6515001564caa3c8b4b146137482726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5701d6590f79d70cbcf2a8cf9f2cd2bd6515001564caa3c8b4b146137482726->enter($__internal_b5701d6590f79d70cbcf2a8cf9f2cd2bd6515001564caa3c8b4b146137482726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_73551e128c2b1191580231f1e3f2a03962fe43643593618ba4d5b94c92790c0a->leave($__internal_73551e128c2b1191580231f1e3f2a03962fe43643593618ba4d5b94c92790c0a_prof);

        
        $__internal_b5701d6590f79d70cbcf2a8cf9f2cd2bd6515001564caa3c8b4b146137482726->leave($__internal_b5701d6590f79d70cbcf2a8cf9f2cd2bd6515001564caa3c8b4b146137482726_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_7056fd13000c26edacaf59a8983a688ea1985629538e4c6aedc7e77c6b56e9b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7056fd13000c26edacaf59a8983a688ea1985629538e4c6aedc7e77c6b56e9b6->enter($__internal_7056fd13000c26edacaf59a8983a688ea1985629538e4c6aedc7e77c6b56e9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_7e675289df681877cb96a1afc21839fa55558cc02ec059715ede82cdb5aeadb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e675289df681877cb96a1afc21839fa55558cc02ec059715ede82cdb5aeadb1->enter($__internal_7e675289df681877cb96a1afc21839fa55558cc02ec059715ede82cdb5aeadb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_7e675289df681877cb96a1afc21839fa55558cc02ec059715ede82cdb5aeadb1->leave($__internal_7e675289df681877cb96a1afc21839fa55558cc02ec059715ede82cdb5aeadb1_prof);

        
        $__internal_7056fd13000c26edacaf59a8983a688ea1985629538e4c6aedc7e77c6b56e9b6->leave($__internal_7056fd13000c26edacaf59a8983a688ea1985629538e4c6aedc7e77c6b56e9b6_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9a29bff75096f369042f3313a9ae6b689445d47b552a0248e421f387b10608cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a29bff75096f369042f3313a9ae6b689445d47b552a0248e421f387b10608cf->enter($__internal_9a29bff75096f369042f3313a9ae6b689445d47b552a0248e421f387b10608cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_61ee0f555cf0bc80f269cd9b2561e9e6bc87c54a1265a915bda86dbcdb16cbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ee0f555cf0bc80f269cd9b2561e9e6bc87c54a1265a915bda86dbcdb16cbe0->enter($__internal_61ee0f555cf0bc80f269cd9b2561e9e6bc87c54a1265a915bda86dbcdb16cbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_61ee0f555cf0bc80f269cd9b2561e9e6bc87c54a1265a915bda86dbcdb16cbe0->leave($__internal_61ee0f555cf0bc80f269cd9b2561e9e6bc87c54a1265a915bda86dbcdb16cbe0_prof);

        
        $__internal_9a29bff75096f369042f3313a9ae6b689445d47b552a0248e421f387b10608cf->leave($__internal_9a29bff75096f369042f3313a9ae6b689445d47b552a0248e421f387b10608cf_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_78dc5a99868aaa336c77618d7b68fafcbdd566d3a2e72c51e702760d7f4577a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78dc5a99868aaa336c77618d7b68fafcbdd566d3a2e72c51e702760d7f4577a1->enter($__internal_78dc5a99868aaa336c77618d7b68fafcbdd566d3a2e72c51e702760d7f4577a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_16db877925ec6a48998bc948203dafe5e61a78ec88f5633c0ac07e4477309da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16db877925ec6a48998bc948203dafe5e61a78ec88f5633c0ac07e4477309da3->enter($__internal_16db877925ec6a48998bc948203dafe5e61a78ec88f5633c0ac07e4477309da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_16db877925ec6a48998bc948203dafe5e61a78ec88f5633c0ac07e4477309da3->leave($__internal_16db877925ec6a48998bc948203dafe5e61a78ec88f5633c0ac07e4477309da3_prof);

        
        $__internal_78dc5a99868aaa336c77618d7b68fafcbdd566d3a2e72c51e702760d7f4577a1->leave($__internal_78dc5a99868aaa336c77618d7b68fafcbdd566d3a2e72c51e702760d7f4577a1_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_323fe7b84b77db20f5dff6cab5050ce5876554c90c7e492fcea654ff550afe83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323fe7b84b77db20f5dff6cab5050ce5876554c90c7e492fcea654ff550afe83->enter($__internal_323fe7b84b77db20f5dff6cab5050ce5876554c90c7e492fcea654ff550afe83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f279d20d948f423ac00de08db5ca19a57d3783f48750c7381b0c724052acfa30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f279d20d948f423ac00de08db5ca19a57d3783f48750c7381b0c724052acfa30->enter($__internal_f279d20d948f423ac00de08db5ca19a57d3783f48750c7381b0c724052acfa30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_f279d20d948f423ac00de08db5ca19a57d3783f48750c7381b0c724052acfa30->leave($__internal_f279d20d948f423ac00de08db5ca19a57d3783f48750c7381b0c724052acfa30_prof);

        
        $__internal_323fe7b84b77db20f5dff6cab5050ce5876554c90c7e492fcea654ff550afe83->leave($__internal_323fe7b84b77db20f5dff6cab5050ce5876554c90c7e492fcea654ff550afe83_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_755f218e1563fe079ff44cca3877f4203a53d096cbf17f8f00478fdadc1855a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755f218e1563fe079ff44cca3877f4203a53d096cbf17f8f00478fdadc1855a5->enter($__internal_755f218e1563fe079ff44cca3877f4203a53d096cbf17f8f00478fdadc1855a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_a34b687b2cd24791f03290ba6f977bfa6c0a83917f332976cbb4f9faaa6a521b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34b687b2cd24791f03290ba6f977bfa6c0a83917f332976cbb4f9faaa6a521b->enter($__internal_a34b687b2cd24791f03290ba6f977bfa6c0a83917f332976cbb4f9faaa6a521b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_a34b687b2cd24791f03290ba6f977bfa6c0a83917f332976cbb4f9faaa6a521b->leave($__internal_a34b687b2cd24791f03290ba6f977bfa6c0a83917f332976cbb4f9faaa6a521b_prof);

        
        $__internal_755f218e1563fe079ff44cca3877f4203a53d096cbf17f8f00478fdadc1855a5->leave($__internal_755f218e1563fe079ff44cca3877f4203a53d096cbf17f8f00478fdadc1855a5_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_6d721bde4176ab08661690a06738a69b373efff117c8d76b835e2a4ce8ba992b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d721bde4176ab08661690a06738a69b373efff117c8d76b835e2a4ce8ba992b->enter($__internal_6d721bde4176ab08661690a06738a69b373efff117c8d76b835e2a4ce8ba992b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ae4aa0c66389d00835a1be0aaa9419387304e726c1d583811324dea2a29db944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4aa0c66389d00835a1be0aaa9419387304e726c1d583811324dea2a29db944->enter($__internal_ae4aa0c66389d00835a1be0aaa9419387304e726c1d583811324dea2a29db944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_ae4aa0c66389d00835a1be0aaa9419387304e726c1d583811324dea2a29db944->leave($__internal_ae4aa0c66389d00835a1be0aaa9419387304e726c1d583811324dea2a29db944_prof);

        
        $__internal_6d721bde4176ab08661690a06738a69b373efff117c8d76b835e2a4ce8ba992b->leave($__internal_6d721bde4176ab08661690a06738a69b373efff117c8d76b835e2a4ce8ba992b_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_4da4cd95d4e27c1765b3eb81a3fdb180b792a77ce480c79676b35c478618d510 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da4cd95d4e27c1765b3eb81a3fdb180b792a77ce480c79676b35c478618d510->enter($__internal_4da4cd95d4e27c1765b3eb81a3fdb180b792a77ce480c79676b35c478618d510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_282915d7d88791a58ad7045a4c39b6b8386a2c1d34639e60fc348174786b5f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282915d7d88791a58ad7045a4c39b6b8386a2c1d34639e60fc348174786b5f49->enter($__internal_282915d7d88791a58ad7045a4c39b6b8386a2c1d34639e60fc348174786b5f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_282915d7d88791a58ad7045a4c39b6b8386a2c1d34639e60fc348174786b5f49->leave($__internal_282915d7d88791a58ad7045a4c39b6b8386a2c1d34639e60fc348174786b5f49_prof);

        
        $__internal_4da4cd95d4e27c1765b3eb81a3fdb180b792a77ce480c79676b35c478618d510->leave($__internal_4da4cd95d4e27c1765b3eb81a3fdb180b792a77ce480c79676b35c478618d510_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_10a45127e28d278326ffde52160a4e471c4e8497656bb2ca74264e0a7f095918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a45127e28d278326ffde52160a4e471c4e8497656bb2ca74264e0a7f095918->enter($__internal_10a45127e28d278326ffde52160a4e471c4e8497656bb2ca74264e0a7f095918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f2c7d5f393b4d8db32d7ddb38f920f442433609f4bacf65f624fa0e1bf7b2273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c7d5f393b4d8db32d7ddb38f920f442433609f4bacf65f624fa0e1bf7b2273->enter($__internal_f2c7d5f393b4d8db32d7ddb38f920f442433609f4bacf65f624fa0e1bf7b2273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_f2c7d5f393b4d8db32d7ddb38f920f442433609f4bacf65f624fa0e1bf7b2273->leave($__internal_f2c7d5f393b4d8db32d7ddb38f920f442433609f4bacf65f624fa0e1bf7b2273_prof);

        
        $__internal_10a45127e28d278326ffde52160a4e471c4e8497656bb2ca74264e0a7f095918->leave($__internal_10a45127e28d278326ffde52160a4e471c4e8497656bb2ca74264e0a7f095918_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
