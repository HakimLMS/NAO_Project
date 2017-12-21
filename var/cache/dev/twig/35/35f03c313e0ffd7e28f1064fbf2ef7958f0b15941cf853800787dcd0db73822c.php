<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_e95f75826dc9efff97ed9f00f92a8f716916a9755ed81f906136c46530d09923 extends Twig_Template
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
        $__internal_d552482c30caa781e6662142a43196cabe58c3713557d40fe663fb012189c760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d552482c30caa781e6662142a43196cabe58c3713557d40fe663fb012189c760->enter($__internal_d552482c30caa781e6662142a43196cabe58c3713557d40fe663fb012189c760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_52bcf20c6c92913bd613357a50d8757d3731e71f2da7583765a4c0c94da2845d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bcf20c6c92913bd613357a50d8757d3731e71f2da7583765a4c0c94da2845d->enter($__internal_52bcf20c6c92913bd613357a50d8757d3731e71f2da7583765a4c0c94da2845d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_d552482c30caa781e6662142a43196cabe58c3713557d40fe663fb012189c760->leave($__internal_d552482c30caa781e6662142a43196cabe58c3713557d40fe663fb012189c760_prof);

        
        $__internal_52bcf20c6c92913bd613357a50d8757d3731e71f2da7583765a4c0c94da2845d->leave($__internal_52bcf20c6c92913bd613357a50d8757d3731e71f2da7583765a4c0c94da2845d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_469821dd680e2e30354698612304cd06157986f5bf3fe6c84be858718a3d1002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469821dd680e2e30354698612304cd06157986f5bf3fe6c84be858718a3d1002->enter($__internal_469821dd680e2e30354698612304cd06157986f5bf3fe6c84be858718a3d1002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_2e0d03a75070bf224cd9f2aaf37b0132a470fc2aade6a68fb06d66f770e79727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0d03a75070bf224cd9f2aaf37b0132a470fc2aade6a68fb06d66f770e79727->enter($__internal_2e0d03a75070bf224cd9f2aaf37b0132a470fc2aade6a68fb06d66f770e79727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_2e0d03a75070bf224cd9f2aaf37b0132a470fc2aade6a68fb06d66f770e79727->leave($__internal_2e0d03a75070bf224cd9f2aaf37b0132a470fc2aade6a68fb06d66f770e79727_prof);

        
        $__internal_469821dd680e2e30354698612304cd06157986f5bf3fe6c84be858718a3d1002->leave($__internal_469821dd680e2e30354698612304cd06157986f5bf3fe6c84be858718a3d1002_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8697b6f2bd3eb80e91f93810bcc19f4b5a3da89b614497def20490d036b4dc90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8697b6f2bd3eb80e91f93810bcc19f4b5a3da89b614497def20490d036b4dc90->enter($__internal_8697b6f2bd3eb80e91f93810bcc19f4b5a3da89b614497def20490d036b4dc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8b337109c719a670f5c462c34606f8b610fd4d7186ba0a4436e06e4363517742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b337109c719a670f5c462c34606f8b610fd4d7186ba0a4436e06e4363517742->enter($__internal_8b337109c719a670f5c462c34606f8b610fd4d7186ba0a4436e06e4363517742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_8b337109c719a670f5c462c34606f8b610fd4d7186ba0a4436e06e4363517742->leave($__internal_8b337109c719a670f5c462c34606f8b610fd4d7186ba0a4436e06e4363517742_prof);

        
        $__internal_8697b6f2bd3eb80e91f93810bcc19f4b5a3da89b614497def20490d036b4dc90->leave($__internal_8697b6f2bd3eb80e91f93810bcc19f4b5a3da89b614497def20490d036b4dc90_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_10d00e08083d95a320699585aecaade07d8df1b61d4cd7643ff003cd241a91b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d00e08083d95a320699585aecaade07d8df1b61d4cd7643ff003cd241a91b8->enter($__internal_10d00e08083d95a320699585aecaade07d8df1b61d4cd7643ff003cd241a91b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a9ab8e8135180973859c4fdd4fa51f26f689a13595b906532ee0ca6eb48072dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ab8e8135180973859c4fdd4fa51f26f689a13595b906532ee0ca6eb48072dd->enter($__internal_a9ab8e8135180973859c4fdd4fa51f26f689a13595b906532ee0ca6eb48072dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_a9ab8e8135180973859c4fdd4fa51f26f689a13595b906532ee0ca6eb48072dd->leave($__internal_a9ab8e8135180973859c4fdd4fa51f26f689a13595b906532ee0ca6eb48072dd_prof);

        
        $__internal_10d00e08083d95a320699585aecaade07d8df1b61d4cd7643ff003cd241a91b8->leave($__internal_10d00e08083d95a320699585aecaade07d8df1b61d4cd7643ff003cd241a91b8_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e331445db6acd0e1fb823170b6d80183f8e84361ff2143621d0c7a8318b6f8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e331445db6acd0e1fb823170b6d80183f8e84361ff2143621d0c7a8318b6f8a3->enter($__internal_e331445db6acd0e1fb823170b6d80183f8e84361ff2143621d0c7a8318b6f8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_24d349ed2c905f639a14c5007a24e270355f276ad76654fa788e4184d0d7cb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d349ed2c905f639a14c5007a24e270355f276ad76654fa788e4184d0d7cb92->enter($__internal_24d349ed2c905f639a14c5007a24e270355f276ad76654fa788e4184d0d7cb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_24d349ed2c905f639a14c5007a24e270355f276ad76654fa788e4184d0d7cb92->leave($__internal_24d349ed2c905f639a14c5007a24e270355f276ad76654fa788e4184d0d7cb92_prof);

        
        $__internal_e331445db6acd0e1fb823170b6d80183f8e84361ff2143621d0c7a8318b6f8a3->leave($__internal_e331445db6acd0e1fb823170b6d80183f8e84361ff2143621d0c7a8318b6f8a3_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_39a59f4fb5388ac1134d2f66a53ec479a30fbd94de1250434b5b6c1424d9ff74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a59f4fb5388ac1134d2f66a53ec479a30fbd94de1250434b5b6c1424d9ff74->enter($__internal_39a59f4fb5388ac1134d2f66a53ec479a30fbd94de1250434b5b6c1424d9ff74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_8c2b71351f8aadc9382c96962d2e5967b48c73bf899bcb123801357adf6b3753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2b71351f8aadc9382c96962d2e5967b48c73bf899bcb123801357adf6b3753->enter($__internal_8c2b71351f8aadc9382c96962d2e5967b48c73bf899bcb123801357adf6b3753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_8c2b71351f8aadc9382c96962d2e5967b48c73bf899bcb123801357adf6b3753->leave($__internal_8c2b71351f8aadc9382c96962d2e5967b48c73bf899bcb123801357adf6b3753_prof);

        
        $__internal_39a59f4fb5388ac1134d2f66a53ec479a30fbd94de1250434b5b6c1424d9ff74->leave($__internal_39a59f4fb5388ac1134d2f66a53ec479a30fbd94de1250434b5b6c1424d9ff74_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_26a052742f4d4e15479262e9ffee6fbba7a16edb58dd866b056670be319075b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a052742f4d4e15479262e9ffee6fbba7a16edb58dd866b056670be319075b5->enter($__internal_26a052742f4d4e15479262e9ffee6fbba7a16edb58dd866b056670be319075b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_4b71622777a8a349b2a96a0e588e1ed19c6cd97f4004dfb1b42132c79abe4d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b71622777a8a349b2a96a0e588e1ed19c6cd97f4004dfb1b42132c79abe4d8b->enter($__internal_4b71622777a8a349b2a96a0e588e1ed19c6cd97f4004dfb1b42132c79abe4d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_4b71622777a8a349b2a96a0e588e1ed19c6cd97f4004dfb1b42132c79abe4d8b->leave($__internal_4b71622777a8a349b2a96a0e588e1ed19c6cd97f4004dfb1b42132c79abe4d8b_prof);

        
        $__internal_26a052742f4d4e15479262e9ffee6fbba7a16edb58dd866b056670be319075b5->leave($__internal_26a052742f4d4e15479262e9ffee6fbba7a16edb58dd866b056670be319075b5_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_2291229c4dd109dbe90d58e9d071438e826de35ad4e3b9b3f6deb97477861d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2291229c4dd109dbe90d58e9d071438e826de35ad4e3b9b3f6deb97477861d21->enter($__internal_2291229c4dd109dbe90d58e9d071438e826de35ad4e3b9b3f6deb97477861d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_4d229b2c3c0abaa9fb1d2b461b8d9cb93f448e89a899683acb729f27060f8237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d229b2c3c0abaa9fb1d2b461b8d9cb93f448e89a899683acb729f27060f8237->enter($__internal_4d229b2c3c0abaa9fb1d2b461b8d9cb93f448e89a899683acb729f27060f8237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_4d229b2c3c0abaa9fb1d2b461b8d9cb93f448e89a899683acb729f27060f8237->leave($__internal_4d229b2c3c0abaa9fb1d2b461b8d9cb93f448e89a899683acb729f27060f8237_prof);

        
        $__internal_2291229c4dd109dbe90d58e9d071438e826de35ad4e3b9b3f6deb97477861d21->leave($__internal_2291229c4dd109dbe90d58e9d071438e826de35ad4e3b9b3f6deb97477861d21_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ed237270c757084d3da39a001d90537325111ca312d272853dd0c75e0611d51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed237270c757084d3da39a001d90537325111ca312d272853dd0c75e0611d51a->enter($__internal_ed237270c757084d3da39a001d90537325111ca312d272853dd0c75e0611d51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3a05664ef367ebfd21bcd1ccad7c412aea63f2c50d634e096df93934345cef0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a05664ef367ebfd21bcd1ccad7c412aea63f2c50d634e096df93934345cef0a->enter($__internal_3a05664ef367ebfd21bcd1ccad7c412aea63f2c50d634e096df93934345cef0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_3a05664ef367ebfd21bcd1ccad7c412aea63f2c50d634e096df93934345cef0a->leave($__internal_3a05664ef367ebfd21bcd1ccad7c412aea63f2c50d634e096df93934345cef0a_prof);

        
        $__internal_ed237270c757084d3da39a001d90537325111ca312d272853dd0c75e0611d51a->leave($__internal_ed237270c757084d3da39a001d90537325111ca312d272853dd0c75e0611d51a_prof);

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
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
