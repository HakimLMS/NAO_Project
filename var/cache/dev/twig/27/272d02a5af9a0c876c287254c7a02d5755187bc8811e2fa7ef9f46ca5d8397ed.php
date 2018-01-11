<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_5db87d4d5d8514bbe3dad148daa4f348b2532089d7e9f602725fdc7822d6eee6 extends Twig_Template
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
        $__internal_49931ebcef3af50c0bbc97c835cc34a5d92b687334cfe980ef9c994b4424f5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49931ebcef3af50c0bbc97c835cc34a5d92b687334cfe980ef9c994b4424f5be->enter($__internal_49931ebcef3af50c0bbc97c835cc34a5d92b687334cfe980ef9c994b4424f5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_c9beeab721a12b3de09c9887621211d6bbb503a4579b40617f84086a118690aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9beeab721a12b3de09c9887621211d6bbb503a4579b40617f84086a118690aa->enter($__internal_c9beeab721a12b3de09c9887621211d6bbb503a4579b40617f84086a118690aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_49931ebcef3af50c0bbc97c835cc34a5d92b687334cfe980ef9c994b4424f5be->leave($__internal_49931ebcef3af50c0bbc97c835cc34a5d92b687334cfe980ef9c994b4424f5be_prof);

        
        $__internal_c9beeab721a12b3de09c9887621211d6bbb503a4579b40617f84086a118690aa->leave($__internal_c9beeab721a12b3de09c9887621211d6bbb503a4579b40617f84086a118690aa_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_063ad254e42e2d33614103d9be64a16e3922b15b58126af952e826476f8979c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063ad254e42e2d33614103d9be64a16e3922b15b58126af952e826476f8979c7->enter($__internal_063ad254e42e2d33614103d9be64a16e3922b15b58126af952e826476f8979c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2df811b910aa96ab46adca59902ab3d74d23b532720dd2b162a6bfba62faab0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df811b910aa96ab46adca59902ab3d74d23b532720dd2b162a6bfba62faab0f->enter($__internal_2df811b910aa96ab46adca59902ab3d74d23b532720dd2b162a6bfba62faab0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_2df811b910aa96ab46adca59902ab3d74d23b532720dd2b162a6bfba62faab0f->leave($__internal_2df811b910aa96ab46adca59902ab3d74d23b532720dd2b162a6bfba62faab0f_prof);

        
        $__internal_063ad254e42e2d33614103d9be64a16e3922b15b58126af952e826476f8979c7->leave($__internal_063ad254e42e2d33614103d9be64a16e3922b15b58126af952e826476f8979c7_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_9597b1634a0d0acd6720a02338acd828af1f844f65cd1309b8de6638af001018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9597b1634a0d0acd6720a02338acd828af1f844f65cd1309b8de6638af001018->enter($__internal_9597b1634a0d0acd6720a02338acd828af1f844f65cd1309b8de6638af001018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_8e34f3ce7873703d91c40c5eaed0bd4b132f03b1496d7d7741595aaebaeccb0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e34f3ce7873703d91c40c5eaed0bd4b132f03b1496d7d7741595aaebaeccb0e->enter($__internal_8e34f3ce7873703d91c40c5eaed0bd4b132f03b1496d7d7741595aaebaeccb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_8e34f3ce7873703d91c40c5eaed0bd4b132f03b1496d7d7741595aaebaeccb0e->leave($__internal_8e34f3ce7873703d91c40c5eaed0bd4b132f03b1496d7d7741595aaebaeccb0e_prof);

        
        $__internal_9597b1634a0d0acd6720a02338acd828af1f844f65cd1309b8de6638af001018->leave($__internal_9597b1634a0d0acd6720a02338acd828af1f844f65cd1309b8de6638af001018_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9d6b0fef267a596544ce782f5b36ba3b422ab2e8b4289b2653df6e28a99918d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6b0fef267a596544ce782f5b36ba3b422ab2e8b4289b2653df6e28a99918d3->enter($__internal_9d6b0fef267a596544ce782f5b36ba3b422ab2e8b4289b2653df6e28a99918d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a0293fe74ab7a15db7d87ca953e2eb27e5987630ee1d6e70a7435171117f3d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0293fe74ab7a15db7d87ca953e2eb27e5987630ee1d6e70a7435171117f3d98->enter($__internal_a0293fe74ab7a15db7d87ca953e2eb27e5987630ee1d6e70a7435171117f3d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a0293fe74ab7a15db7d87ca953e2eb27e5987630ee1d6e70a7435171117f3d98->leave($__internal_a0293fe74ab7a15db7d87ca953e2eb27e5987630ee1d6e70a7435171117f3d98_prof);

        
        $__internal_9d6b0fef267a596544ce782f5b36ba3b422ab2e8b4289b2653df6e28a99918d3->leave($__internal_9d6b0fef267a596544ce782f5b36ba3b422ab2e8b4289b2653df6e28a99918d3_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_7118a174a22d61896f2f7fad27ba88b1504b5fe036728356dd1e1911be4abf28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7118a174a22d61896f2f7fad27ba88b1504b5fe036728356dd1e1911be4abf28->enter($__internal_7118a174a22d61896f2f7fad27ba88b1504b5fe036728356dd1e1911be4abf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_648e34c39012ef5af26acea70f58e463c9c2d959d6a57e787a016d8de34ab2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648e34c39012ef5af26acea70f58e463c9c2d959d6a57e787a016d8de34ab2bb->enter($__internal_648e34c39012ef5af26acea70f58e463c9c2d959d6a57e787a016d8de34ab2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_648e34c39012ef5af26acea70f58e463c9c2d959d6a57e787a016d8de34ab2bb->leave($__internal_648e34c39012ef5af26acea70f58e463c9c2d959d6a57e787a016d8de34ab2bb_prof);

        
        $__internal_7118a174a22d61896f2f7fad27ba88b1504b5fe036728356dd1e1911be4abf28->leave($__internal_7118a174a22d61896f2f7fad27ba88b1504b5fe036728356dd1e1911be4abf28_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_3674fe8b63bbee73c1a8253e506025f062932f7b68f78876fb0e894b33c44e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3674fe8b63bbee73c1a8253e506025f062932f7b68f78876fb0e894b33c44e66->enter($__internal_3674fe8b63bbee73c1a8253e506025f062932f7b68f78876fb0e894b33c44e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_d4258ce6ac23b9c9632ef75ae3d0691486fed0fc0f3a6db3e2d4c1d15424addd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4258ce6ac23b9c9632ef75ae3d0691486fed0fc0f3a6db3e2d4c1d15424addd->enter($__internal_d4258ce6ac23b9c9632ef75ae3d0691486fed0fc0f3a6db3e2d4c1d15424addd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_d4258ce6ac23b9c9632ef75ae3d0691486fed0fc0f3a6db3e2d4c1d15424addd->leave($__internal_d4258ce6ac23b9c9632ef75ae3d0691486fed0fc0f3a6db3e2d4c1d15424addd_prof);

        
        $__internal_3674fe8b63bbee73c1a8253e506025f062932f7b68f78876fb0e894b33c44e66->leave($__internal_3674fe8b63bbee73c1a8253e506025f062932f7b68f78876fb0e894b33c44e66_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a1704a39b81e7db0c97fa4bb07ec4bc86286a3fa2afb61d4c4e62911ef0c76a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1704a39b81e7db0c97fa4bb07ec4bc86286a3fa2afb61d4c4e62911ef0c76a3->enter($__internal_a1704a39b81e7db0c97fa4bb07ec4bc86286a3fa2afb61d4c4e62911ef0c76a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c6bebe362bbad8ebc423a862497b9f877be37c777711756a918f823d22e7ad87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bebe362bbad8ebc423a862497b9f877be37c777711756a918f823d22e7ad87->enter($__internal_c6bebe362bbad8ebc423a862497b9f877be37c777711756a918f823d22e7ad87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_c6bebe362bbad8ebc423a862497b9f877be37c777711756a918f823d22e7ad87->leave($__internal_c6bebe362bbad8ebc423a862497b9f877be37c777711756a918f823d22e7ad87_prof);

        
        $__internal_a1704a39b81e7db0c97fa4bb07ec4bc86286a3fa2afb61d4c4e62911ef0c76a3->leave($__internal_a1704a39b81e7db0c97fa4bb07ec4bc86286a3fa2afb61d4c4e62911ef0c76a3_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_35b64d75a6267591e9539324c303252c2ea23c90c535bc7708822460bc54bbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b64d75a6267591e9539324c303252c2ea23c90c535bc7708822460bc54bbf1->enter($__internal_35b64d75a6267591e9539324c303252c2ea23c90c535bc7708822460bc54bbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_314828fd6193e5d5a8146cc960e1b5bc069021f150454ad7c8b8a69e66a3298b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314828fd6193e5d5a8146cc960e1b5bc069021f150454ad7c8b8a69e66a3298b->enter($__internal_314828fd6193e5d5a8146cc960e1b5bc069021f150454ad7c8b8a69e66a3298b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_314828fd6193e5d5a8146cc960e1b5bc069021f150454ad7c8b8a69e66a3298b->leave($__internal_314828fd6193e5d5a8146cc960e1b5bc069021f150454ad7c8b8a69e66a3298b_prof);

        
        $__internal_35b64d75a6267591e9539324c303252c2ea23c90c535bc7708822460bc54bbf1->leave($__internal_35b64d75a6267591e9539324c303252c2ea23c90c535bc7708822460bc54bbf1_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_59e05913dbc0bac03f6f88561e4985cf2140bb826e0bab0f40636f88bab1ce31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59e05913dbc0bac03f6f88561e4985cf2140bb826e0bab0f40636f88bab1ce31->enter($__internal_59e05913dbc0bac03f6f88561e4985cf2140bb826e0bab0f40636f88bab1ce31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_97a0f13a25d86a60e320c24358bfb9040ad829e62d35997d03b24812de3bfdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a0f13a25d86a60e320c24358bfb9040ad829e62d35997d03b24812de3bfdbe->enter($__internal_97a0f13a25d86a60e320c24358bfb9040ad829e62d35997d03b24812de3bfdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_97a0f13a25d86a60e320c24358bfb9040ad829e62d35997d03b24812de3bfdbe->leave($__internal_97a0f13a25d86a60e320c24358bfb9040ad829e62d35997d03b24812de3bfdbe_prof);

        
        $__internal_59e05913dbc0bac03f6f88561e4985cf2140bb826e0bab0f40636f88bab1ce31->leave($__internal_59e05913dbc0bac03f6f88561e4985cf2140bb826e0bab0f40636f88bab1ce31_prof);

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
