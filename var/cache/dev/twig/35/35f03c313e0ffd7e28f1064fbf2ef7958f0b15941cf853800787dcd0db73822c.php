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
        $__internal_2f9f671ce24c61a76090cac4fda6951fff68fefc611595eec874b5957ff794ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9f671ce24c61a76090cac4fda6951fff68fefc611595eec874b5957ff794ca->enter($__internal_2f9f671ce24c61a76090cac4fda6951fff68fefc611595eec874b5957ff794ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_cf44a948edc07680304542092f74efe729769e7f8f1266cd31cdae74c6a5f6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf44a948edc07680304542092f74efe729769e7f8f1266cd31cdae74c6a5f6c2->enter($__internal_cf44a948edc07680304542092f74efe729769e7f8f1266cd31cdae74c6a5f6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_2f9f671ce24c61a76090cac4fda6951fff68fefc611595eec874b5957ff794ca->leave($__internal_2f9f671ce24c61a76090cac4fda6951fff68fefc611595eec874b5957ff794ca_prof);

        
        $__internal_cf44a948edc07680304542092f74efe729769e7f8f1266cd31cdae74c6a5f6c2->leave($__internal_cf44a948edc07680304542092f74efe729769e7f8f1266cd31cdae74c6a5f6c2_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_cf4ed62a4eac38666166b6b68046f39327a64a590ed2ada1f9007a3dcee09550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4ed62a4eac38666166b6b68046f39327a64a590ed2ada1f9007a3dcee09550->enter($__internal_cf4ed62a4eac38666166b6b68046f39327a64a590ed2ada1f9007a3dcee09550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_cdba3cbe7ffd2cc4258733a95bfad36b04145dd8f48f758898cbea371bd80f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdba3cbe7ffd2cc4258733a95bfad36b04145dd8f48f758898cbea371bd80f96->enter($__internal_cdba3cbe7ffd2cc4258733a95bfad36b04145dd8f48f758898cbea371bd80f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_cdba3cbe7ffd2cc4258733a95bfad36b04145dd8f48f758898cbea371bd80f96->leave($__internal_cdba3cbe7ffd2cc4258733a95bfad36b04145dd8f48f758898cbea371bd80f96_prof);

        
        $__internal_cf4ed62a4eac38666166b6b68046f39327a64a590ed2ada1f9007a3dcee09550->leave($__internal_cf4ed62a4eac38666166b6b68046f39327a64a590ed2ada1f9007a3dcee09550_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b024fb5a66a37e6cc8e8a0d51187a4a0e4d4b1c433739706699a8b323f190df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b024fb5a66a37e6cc8e8a0d51187a4a0e4d4b1c433739706699a8b323f190df1->enter($__internal_b024fb5a66a37e6cc8e8a0d51187a4a0e4d4b1c433739706699a8b323f190df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5784c8bab6a37d36587cd60fa11592897f2ada66fa8850cdbaec9251c2d50c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5784c8bab6a37d36587cd60fa11592897f2ada66fa8850cdbaec9251c2d50c56->enter($__internal_5784c8bab6a37d36587cd60fa11592897f2ada66fa8850cdbaec9251c2d50c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_5784c8bab6a37d36587cd60fa11592897f2ada66fa8850cdbaec9251c2d50c56->leave($__internal_5784c8bab6a37d36587cd60fa11592897f2ada66fa8850cdbaec9251c2d50c56_prof);

        
        $__internal_b024fb5a66a37e6cc8e8a0d51187a4a0e4d4b1c433739706699a8b323f190df1->leave($__internal_b024fb5a66a37e6cc8e8a0d51187a4a0e4d4b1c433739706699a8b323f190df1_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_8d567600de2e0aa1da0618e0a3e90e537a355780afe0d7ba3ba3b2a6becf954f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d567600de2e0aa1da0618e0a3e90e537a355780afe0d7ba3ba3b2a6becf954f->enter($__internal_8d567600de2e0aa1da0618e0a3e90e537a355780afe0d7ba3ba3b2a6becf954f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_08a8cf0bc1fba0198c76279e45952a177f34cf67e19cd9d34bac5f2e68f6d0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a8cf0bc1fba0198c76279e45952a177f34cf67e19cd9d34bac5f2e68f6d0ec->enter($__internal_08a8cf0bc1fba0198c76279e45952a177f34cf67e19cd9d34bac5f2e68f6d0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_08a8cf0bc1fba0198c76279e45952a177f34cf67e19cd9d34bac5f2e68f6d0ec->leave($__internal_08a8cf0bc1fba0198c76279e45952a177f34cf67e19cd9d34bac5f2e68f6d0ec_prof);

        
        $__internal_8d567600de2e0aa1da0618e0a3e90e537a355780afe0d7ba3ba3b2a6becf954f->leave($__internal_8d567600de2e0aa1da0618e0a3e90e537a355780afe0d7ba3ba3b2a6becf954f_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5b195da113415fb060da40095ed18f5b0bafa14e56462a6965c686707f2d2457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b195da113415fb060da40095ed18f5b0bafa14e56462a6965c686707f2d2457->enter($__internal_5b195da113415fb060da40095ed18f5b0bafa14e56462a6965c686707f2d2457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c352f060358073655fda24170062fef1ec17a0d66d0d78281aed586e17abc8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c352f060358073655fda24170062fef1ec17a0d66d0d78281aed586e17abc8a2->enter($__internal_c352f060358073655fda24170062fef1ec17a0d66d0d78281aed586e17abc8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c352f060358073655fda24170062fef1ec17a0d66d0d78281aed586e17abc8a2->leave($__internal_c352f060358073655fda24170062fef1ec17a0d66d0d78281aed586e17abc8a2_prof);

        
        $__internal_5b195da113415fb060da40095ed18f5b0bafa14e56462a6965c686707f2d2457->leave($__internal_5b195da113415fb060da40095ed18f5b0bafa14e56462a6965c686707f2d2457_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_ff5fd8a16d3a23ec8cecf6f2fdec0e3a0997a60f0c015c181dea063e02031d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff5fd8a16d3a23ec8cecf6f2fdec0e3a0997a60f0c015c181dea063e02031d50->enter($__internal_ff5fd8a16d3a23ec8cecf6f2fdec0e3a0997a60f0c015c181dea063e02031d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_c3664df4cd5d987ca1aa2959e21bdeb4cff5802e4396dddedf22b1c33c1bd46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3664df4cd5d987ca1aa2959e21bdeb4cff5802e4396dddedf22b1c33c1bd46a->enter($__internal_c3664df4cd5d987ca1aa2959e21bdeb4cff5802e4396dddedf22b1c33c1bd46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_c3664df4cd5d987ca1aa2959e21bdeb4cff5802e4396dddedf22b1c33c1bd46a->leave($__internal_c3664df4cd5d987ca1aa2959e21bdeb4cff5802e4396dddedf22b1c33c1bd46a_prof);

        
        $__internal_ff5fd8a16d3a23ec8cecf6f2fdec0e3a0997a60f0c015c181dea063e02031d50->leave($__internal_ff5fd8a16d3a23ec8cecf6f2fdec0e3a0997a60f0c015c181dea063e02031d50_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_35c07c70d57cd96bcb3c0956bee08b74b166f7b8b9e1f8083d23d8d54a9395a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c07c70d57cd96bcb3c0956bee08b74b166f7b8b9e1f8083d23d8d54a9395a9->enter($__internal_35c07c70d57cd96bcb3c0956bee08b74b166f7b8b9e1f8083d23d8d54a9395a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_d7cd198718bdd5a20def20ad6f71aea055a7ae1b2b66870dc8c89998ef4ea41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cd198718bdd5a20def20ad6f71aea055a7ae1b2b66870dc8c89998ef4ea41d->enter($__internal_d7cd198718bdd5a20def20ad6f71aea055a7ae1b2b66870dc8c89998ef4ea41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_d7cd198718bdd5a20def20ad6f71aea055a7ae1b2b66870dc8c89998ef4ea41d->leave($__internal_d7cd198718bdd5a20def20ad6f71aea055a7ae1b2b66870dc8c89998ef4ea41d_prof);

        
        $__internal_35c07c70d57cd96bcb3c0956bee08b74b166f7b8b9e1f8083d23d8d54a9395a9->leave($__internal_35c07c70d57cd96bcb3c0956bee08b74b166f7b8b9e1f8083d23d8d54a9395a9_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_4fbe68138ad1904a8194ae3bcd104417cb384236d36dee11aeb42a18706b5ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbe68138ad1904a8194ae3bcd104417cb384236d36dee11aeb42a18706b5ad6->enter($__internal_4fbe68138ad1904a8194ae3bcd104417cb384236d36dee11aeb42a18706b5ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_2fa78f3653bffeea4c7b3aea501449c8e23c6db26ef4b4f3844837cb1b5bbae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa78f3653bffeea4c7b3aea501449c8e23c6db26ef4b4f3844837cb1b5bbae0->enter($__internal_2fa78f3653bffeea4c7b3aea501449c8e23c6db26ef4b4f3844837cb1b5bbae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_2fa78f3653bffeea4c7b3aea501449c8e23c6db26ef4b4f3844837cb1b5bbae0->leave($__internal_2fa78f3653bffeea4c7b3aea501449c8e23c6db26ef4b4f3844837cb1b5bbae0_prof);

        
        $__internal_4fbe68138ad1904a8194ae3bcd104417cb384236d36dee11aeb42a18706b5ad6->leave($__internal_4fbe68138ad1904a8194ae3bcd104417cb384236d36dee11aeb42a18706b5ad6_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_083506b37e43f1f4327cf18afc078c240856d03b43bc61502e6fa0d0b623757a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_083506b37e43f1f4327cf18afc078c240856d03b43bc61502e6fa0d0b623757a->enter($__internal_083506b37e43f1f4327cf18afc078c240856d03b43bc61502e6fa0d0b623757a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_91467dfbc03ea033892227692ecf0dacc2aef986180dde2bfacb22853b08ab08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91467dfbc03ea033892227692ecf0dacc2aef986180dde2bfacb22853b08ab08->enter($__internal_91467dfbc03ea033892227692ecf0dacc2aef986180dde2bfacb22853b08ab08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_91467dfbc03ea033892227692ecf0dacc2aef986180dde2bfacb22853b08ab08->leave($__internal_91467dfbc03ea033892227692ecf0dacc2aef986180dde2bfacb22853b08ab08_prof);

        
        $__internal_083506b37e43f1f4327cf18afc078c240856d03b43bc61502e6fa0d0b623757a->leave($__internal_083506b37e43f1f4327cf18afc078c240856d03b43bc61502e6fa0d0b623757a_prof);

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
