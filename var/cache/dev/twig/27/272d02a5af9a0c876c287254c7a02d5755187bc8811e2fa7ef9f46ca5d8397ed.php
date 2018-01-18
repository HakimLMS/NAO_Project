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
        $__internal_4462135650165ecd82e585331888280fae16cd9f327af848ee726f6a36312636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4462135650165ecd82e585331888280fae16cd9f327af848ee726f6a36312636->enter($__internal_4462135650165ecd82e585331888280fae16cd9f327af848ee726f6a36312636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_894c5fe1d7fb4394a1d0b597146655b6ff9805fea01ff1b1654f8a6c4b355050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_894c5fe1d7fb4394a1d0b597146655b6ff9805fea01ff1b1654f8a6c4b355050->enter($__internal_894c5fe1d7fb4394a1d0b597146655b6ff9805fea01ff1b1654f8a6c4b355050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_4462135650165ecd82e585331888280fae16cd9f327af848ee726f6a36312636->leave($__internal_4462135650165ecd82e585331888280fae16cd9f327af848ee726f6a36312636_prof);

        
        $__internal_894c5fe1d7fb4394a1d0b597146655b6ff9805fea01ff1b1654f8a6c4b355050->leave($__internal_894c5fe1d7fb4394a1d0b597146655b6ff9805fea01ff1b1654f8a6c4b355050_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_532e70a8a1e43a41599f079c928423f1df912e87949295d80b8628a367447974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532e70a8a1e43a41599f079c928423f1df912e87949295d80b8628a367447974->enter($__internal_532e70a8a1e43a41599f079c928423f1df912e87949295d80b8628a367447974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c09c0693edd7b2d4b7dfdc5d42b6de11eba69703ca7845cc5723ba9e29afcb85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09c0693edd7b2d4b7dfdc5d42b6de11eba69703ca7845cc5723ba9e29afcb85->enter($__internal_c09c0693edd7b2d4b7dfdc5d42b6de11eba69703ca7845cc5723ba9e29afcb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_c09c0693edd7b2d4b7dfdc5d42b6de11eba69703ca7845cc5723ba9e29afcb85->leave($__internal_c09c0693edd7b2d4b7dfdc5d42b6de11eba69703ca7845cc5723ba9e29afcb85_prof);

        
        $__internal_532e70a8a1e43a41599f079c928423f1df912e87949295d80b8628a367447974->leave($__internal_532e70a8a1e43a41599f079c928423f1df912e87949295d80b8628a367447974_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_4ccf2c650c81ac35403d181cb3de3a4fe6f2e771a337f41e33213df83aaa736c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccf2c650c81ac35403d181cb3de3a4fe6f2e771a337f41e33213df83aaa736c->enter($__internal_4ccf2c650c81ac35403d181cb3de3a4fe6f2e771a337f41e33213df83aaa736c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_acc92184d271aa9db8c208673b883d5dd8ea0475cc4ea5c4e7862cfbe19011ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc92184d271aa9db8c208673b883d5dd8ea0475cc4ea5c4e7862cfbe19011ee->enter($__internal_acc92184d271aa9db8c208673b883d5dd8ea0475cc4ea5c4e7862cfbe19011ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_acc92184d271aa9db8c208673b883d5dd8ea0475cc4ea5c4e7862cfbe19011ee->leave($__internal_acc92184d271aa9db8c208673b883d5dd8ea0475cc4ea5c4e7862cfbe19011ee_prof);

        
        $__internal_4ccf2c650c81ac35403d181cb3de3a4fe6f2e771a337f41e33213df83aaa736c->leave($__internal_4ccf2c650c81ac35403d181cb3de3a4fe6f2e771a337f41e33213df83aaa736c_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5ac3006b41dff842cc519233e3600d2c3524b113d4346b2de4d6262a097c304d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac3006b41dff842cc519233e3600d2c3524b113d4346b2de4d6262a097c304d->enter($__internal_5ac3006b41dff842cc519233e3600d2c3524b113d4346b2de4d6262a097c304d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f8b7bdd3c00403cf9a24e43afbfab567ce730056f6476727a6274a902391be24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b7bdd3c00403cf9a24e43afbfab567ce730056f6476727a6274a902391be24->enter($__internal_f8b7bdd3c00403cf9a24e43afbfab567ce730056f6476727a6274a902391be24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_f8b7bdd3c00403cf9a24e43afbfab567ce730056f6476727a6274a902391be24->leave($__internal_f8b7bdd3c00403cf9a24e43afbfab567ce730056f6476727a6274a902391be24_prof);

        
        $__internal_5ac3006b41dff842cc519233e3600d2c3524b113d4346b2de4d6262a097c304d->leave($__internal_5ac3006b41dff842cc519233e3600d2c3524b113d4346b2de4d6262a097c304d_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_a651be685146e882a46544528e565f60b98e099f6d0942e011c5717b063631ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a651be685146e882a46544528e565f60b98e099f6d0942e011c5717b063631ec->enter($__internal_a651be685146e882a46544528e565f60b98e099f6d0942e011c5717b063631ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_8e0326560ebc93fbd7bc2ac13432752492e675b836f94bad65096e2ab8401b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0326560ebc93fbd7bc2ac13432752492e675b836f94bad65096e2ab8401b44->enter($__internal_8e0326560ebc93fbd7bc2ac13432752492e675b836f94bad65096e2ab8401b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_8e0326560ebc93fbd7bc2ac13432752492e675b836f94bad65096e2ab8401b44->leave($__internal_8e0326560ebc93fbd7bc2ac13432752492e675b836f94bad65096e2ab8401b44_prof);

        
        $__internal_a651be685146e882a46544528e565f60b98e099f6d0942e011c5717b063631ec->leave($__internal_a651be685146e882a46544528e565f60b98e099f6d0942e011c5717b063631ec_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4a1d1d5e6b957bf47dff645d58eb7690da8411adf21a6f939eaeb1344fe316a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1d1d5e6b957bf47dff645d58eb7690da8411adf21a6f939eaeb1344fe316a7->enter($__internal_4a1d1d5e6b957bf47dff645d58eb7690da8411adf21a6f939eaeb1344fe316a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_0953b779efb1e5448e6db1a2a29819fef00e7c2f2bf81dfdabfeeffc806d1b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0953b779efb1e5448e6db1a2a29819fef00e7c2f2bf81dfdabfeeffc806d1b6f->enter($__internal_0953b779efb1e5448e6db1a2a29819fef00e7c2f2bf81dfdabfeeffc806d1b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_0953b779efb1e5448e6db1a2a29819fef00e7c2f2bf81dfdabfeeffc806d1b6f->leave($__internal_0953b779efb1e5448e6db1a2a29819fef00e7c2f2bf81dfdabfeeffc806d1b6f_prof);

        
        $__internal_4a1d1d5e6b957bf47dff645d58eb7690da8411adf21a6f939eaeb1344fe316a7->leave($__internal_4a1d1d5e6b957bf47dff645d58eb7690da8411adf21a6f939eaeb1344fe316a7_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_ac5322bbb0ea02f3be4ac258076fe87a8c57178a7136725585f698605673c6eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5322bbb0ea02f3be4ac258076fe87a8c57178a7136725585f698605673c6eb->enter($__internal_ac5322bbb0ea02f3be4ac258076fe87a8c57178a7136725585f698605673c6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_61986224b8786900d671d416decbc6fc89cf8095105b36be18d3270b47419488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61986224b8786900d671d416decbc6fc89cf8095105b36be18d3270b47419488->enter($__internal_61986224b8786900d671d416decbc6fc89cf8095105b36be18d3270b47419488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_61986224b8786900d671d416decbc6fc89cf8095105b36be18d3270b47419488->leave($__internal_61986224b8786900d671d416decbc6fc89cf8095105b36be18d3270b47419488_prof);

        
        $__internal_ac5322bbb0ea02f3be4ac258076fe87a8c57178a7136725585f698605673c6eb->leave($__internal_ac5322bbb0ea02f3be4ac258076fe87a8c57178a7136725585f698605673c6eb_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_6d75e2fab70ecf79b6aefc1260e6f8ab30eafe0296a34992a32d0c971cbd6129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d75e2fab70ecf79b6aefc1260e6f8ab30eafe0296a34992a32d0c971cbd6129->enter($__internal_6d75e2fab70ecf79b6aefc1260e6f8ab30eafe0296a34992a32d0c971cbd6129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_0ba1a2ce7b6a649e00ad3992f4629fd56235797ffdd19ecbb4edd956e0f1160b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba1a2ce7b6a649e00ad3992f4629fd56235797ffdd19ecbb4edd956e0f1160b->enter($__internal_0ba1a2ce7b6a649e00ad3992f4629fd56235797ffdd19ecbb4edd956e0f1160b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_0ba1a2ce7b6a649e00ad3992f4629fd56235797ffdd19ecbb4edd956e0f1160b->leave($__internal_0ba1a2ce7b6a649e00ad3992f4629fd56235797ffdd19ecbb4edd956e0f1160b_prof);

        
        $__internal_6d75e2fab70ecf79b6aefc1260e6f8ab30eafe0296a34992a32d0c971cbd6129->leave($__internal_6d75e2fab70ecf79b6aefc1260e6f8ab30eafe0296a34992a32d0c971cbd6129_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_fec4880358c63dc51c3602da6e8a7b5532dd4c534d6a9495092fc74af56f2b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec4880358c63dc51c3602da6e8a7b5532dd4c534d6a9495092fc74af56f2b9c->enter($__internal_fec4880358c63dc51c3602da6e8a7b5532dd4c534d6a9495092fc74af56f2b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6c5565f66694c47ef15defe65d509793f1c52a9b88c5507298c9465b31c6abae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5565f66694c47ef15defe65d509793f1c52a9b88c5507298c9465b31c6abae->enter($__internal_6c5565f66694c47ef15defe65d509793f1c52a9b88c5507298c9465b31c6abae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_6c5565f66694c47ef15defe65d509793f1c52a9b88c5507298c9465b31c6abae->leave($__internal_6c5565f66694c47ef15defe65d509793f1c52a9b88c5507298c9465b31c6abae_prof);

        
        $__internal_fec4880358c63dc51c3602da6e8a7b5532dd4c534d6a9495092fc74af56f2b9c->leave($__internal_fec4880358c63dc51c3602da6e8a7b5532dd4c534d6a9495092fc74af56f2b9c_prof);

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
