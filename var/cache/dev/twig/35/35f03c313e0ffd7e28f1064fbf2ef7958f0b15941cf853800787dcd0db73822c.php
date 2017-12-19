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
        $__internal_1a3bcb0692cf1193b11c29aabbe5cff89f93674e606b918c37c29ca122319b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3bcb0692cf1193b11c29aabbe5cff89f93674e606b918c37c29ca122319b0e->enter($__internal_1a3bcb0692cf1193b11c29aabbe5cff89f93674e606b918c37c29ca122319b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_2bbe59e65d6c5e072d6b90c327fa5ea5421424ec2919894f4045b0ddd6783c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbe59e65d6c5e072d6b90c327fa5ea5421424ec2919894f4045b0ddd6783c89->enter($__internal_2bbe59e65d6c5e072d6b90c327fa5ea5421424ec2919894f4045b0ddd6783c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_1a3bcb0692cf1193b11c29aabbe5cff89f93674e606b918c37c29ca122319b0e->leave($__internal_1a3bcb0692cf1193b11c29aabbe5cff89f93674e606b918c37c29ca122319b0e_prof);

        
        $__internal_2bbe59e65d6c5e072d6b90c327fa5ea5421424ec2919894f4045b0ddd6783c89->leave($__internal_2bbe59e65d6c5e072d6b90c327fa5ea5421424ec2919894f4045b0ddd6783c89_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_3d8e57c3c91f9eb416a7ed24aa2fb7e5b3d8ae15da0f8589dc85e6101135d4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8e57c3c91f9eb416a7ed24aa2fb7e5b3d8ae15da0f8589dc85e6101135d4d6->enter($__internal_3d8e57c3c91f9eb416a7ed24aa2fb7e5b3d8ae15da0f8589dc85e6101135d4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_ae9ec7341ce02b961b9fd6a1ac09c88473536b43258675ba01527d1107c47b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9ec7341ce02b961b9fd6a1ac09c88473536b43258675ba01527d1107c47b2d->enter($__internal_ae9ec7341ce02b961b9fd6a1ac09c88473536b43258675ba01527d1107c47b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_ae9ec7341ce02b961b9fd6a1ac09c88473536b43258675ba01527d1107c47b2d->leave($__internal_ae9ec7341ce02b961b9fd6a1ac09c88473536b43258675ba01527d1107c47b2d_prof);

        
        $__internal_3d8e57c3c91f9eb416a7ed24aa2fb7e5b3d8ae15da0f8589dc85e6101135d4d6->leave($__internal_3d8e57c3c91f9eb416a7ed24aa2fb7e5b3d8ae15da0f8589dc85e6101135d4d6_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a35fa5b6cd0f624b4d009c7d9b84339f09b83c0b5e85052e982f0c588de63b16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35fa5b6cd0f624b4d009c7d9b84339f09b83c0b5e85052e982f0c588de63b16->enter($__internal_a35fa5b6cd0f624b4d009c7d9b84339f09b83c0b5e85052e982f0c588de63b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9db4dda3b918b18f13ba0235a4935d85ac901d871f18b6161e22b3582de001a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db4dda3b918b18f13ba0235a4935d85ac901d871f18b6161e22b3582de001a0->enter($__internal_9db4dda3b918b18f13ba0235a4935d85ac901d871f18b6161e22b3582de001a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_9db4dda3b918b18f13ba0235a4935d85ac901d871f18b6161e22b3582de001a0->leave($__internal_9db4dda3b918b18f13ba0235a4935d85ac901d871f18b6161e22b3582de001a0_prof);

        
        $__internal_a35fa5b6cd0f624b4d009c7d9b84339f09b83c0b5e85052e982f0c588de63b16->leave($__internal_a35fa5b6cd0f624b4d009c7d9b84339f09b83c0b5e85052e982f0c588de63b16_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_2cc49430b7a7b6a380ac38e89d9f9cb713ca0f872e938955d8cfb353ed862bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc49430b7a7b6a380ac38e89d9f9cb713ca0f872e938955d8cfb353ed862bee->enter($__internal_2cc49430b7a7b6a380ac38e89d9f9cb713ca0f872e938955d8cfb353ed862bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_92d65ad47cf706e480d905f897dce8eb1fe4cca2591d443e9ddb78ec810f53c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d65ad47cf706e480d905f897dce8eb1fe4cca2591d443e9ddb78ec810f53c5->enter($__internal_92d65ad47cf706e480d905f897dce8eb1fe4cca2591d443e9ddb78ec810f53c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_92d65ad47cf706e480d905f897dce8eb1fe4cca2591d443e9ddb78ec810f53c5->leave($__internal_92d65ad47cf706e480d905f897dce8eb1fe4cca2591d443e9ddb78ec810f53c5_prof);

        
        $__internal_2cc49430b7a7b6a380ac38e89d9f9cb713ca0f872e938955d8cfb353ed862bee->leave($__internal_2cc49430b7a7b6a380ac38e89d9f9cb713ca0f872e938955d8cfb353ed862bee_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8eefbcf662853e7e2f03327dc2382faa8e531e422ff1c3ae47b7117f8d72893c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eefbcf662853e7e2f03327dc2382faa8e531e422ff1c3ae47b7117f8d72893c->enter($__internal_8eefbcf662853e7e2f03327dc2382faa8e531e422ff1c3ae47b7117f8d72893c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a23c6487468a95746cfe217dcde888a76ce0531327e4a88ec1b6f476bf75e2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23c6487468a95746cfe217dcde888a76ce0531327e4a88ec1b6f476bf75e2fe->enter($__internal_a23c6487468a95746cfe217dcde888a76ce0531327e4a88ec1b6f476bf75e2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_a23c6487468a95746cfe217dcde888a76ce0531327e4a88ec1b6f476bf75e2fe->leave($__internal_a23c6487468a95746cfe217dcde888a76ce0531327e4a88ec1b6f476bf75e2fe_prof);

        
        $__internal_8eefbcf662853e7e2f03327dc2382faa8e531e422ff1c3ae47b7117f8d72893c->leave($__internal_8eefbcf662853e7e2f03327dc2382faa8e531e422ff1c3ae47b7117f8d72893c_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_a06ac5dbc1c95eef5229edacb8e758207cfef272f28de9aea70ce34f2ef6f12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06ac5dbc1c95eef5229edacb8e758207cfef272f28de9aea70ce34f2ef6f12e->enter($__internal_a06ac5dbc1c95eef5229edacb8e758207cfef272f28de9aea70ce34f2ef6f12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_b2e97f0e67695f0bdb4c6a47412a0f31e2f720be766bc075df54c749796b711d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e97f0e67695f0bdb4c6a47412a0f31e2f720be766bc075df54c749796b711d->enter($__internal_b2e97f0e67695f0bdb4c6a47412a0f31e2f720be766bc075df54c749796b711d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_b2e97f0e67695f0bdb4c6a47412a0f31e2f720be766bc075df54c749796b711d->leave($__internal_b2e97f0e67695f0bdb4c6a47412a0f31e2f720be766bc075df54c749796b711d_prof);

        
        $__internal_a06ac5dbc1c95eef5229edacb8e758207cfef272f28de9aea70ce34f2ef6f12e->leave($__internal_a06ac5dbc1c95eef5229edacb8e758207cfef272f28de9aea70ce34f2ef6f12e_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_9b28faef46eac860a274e96328014524e67f42f7ad48dfcb0d89f5cadbd1c2eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b28faef46eac860a274e96328014524e67f42f7ad48dfcb0d89f5cadbd1c2eb->enter($__internal_9b28faef46eac860a274e96328014524e67f42f7ad48dfcb0d89f5cadbd1c2eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_68718618e79febb3229d1445c4537cc6fd373f0c5ebc75228d75fc2270c21c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68718618e79febb3229d1445c4537cc6fd373f0c5ebc75228d75fc2270c21c84->enter($__internal_68718618e79febb3229d1445c4537cc6fd373f0c5ebc75228d75fc2270c21c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_68718618e79febb3229d1445c4537cc6fd373f0c5ebc75228d75fc2270c21c84->leave($__internal_68718618e79febb3229d1445c4537cc6fd373f0c5ebc75228d75fc2270c21c84_prof);

        
        $__internal_9b28faef46eac860a274e96328014524e67f42f7ad48dfcb0d89f5cadbd1c2eb->leave($__internal_9b28faef46eac860a274e96328014524e67f42f7ad48dfcb0d89f5cadbd1c2eb_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_65d87db3d176183d7ee6a2b4892e1ab035be29714a4b21335fe54d3e94be071f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d87db3d176183d7ee6a2b4892e1ab035be29714a4b21335fe54d3e94be071f->enter($__internal_65d87db3d176183d7ee6a2b4892e1ab035be29714a4b21335fe54d3e94be071f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_28d8fb4c9360c47e9825f77b62ef40c07910a36df32256253fbee262e78d8ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28d8fb4c9360c47e9825f77b62ef40c07910a36df32256253fbee262e78d8ca5->enter($__internal_28d8fb4c9360c47e9825f77b62ef40c07910a36df32256253fbee262e78d8ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_28d8fb4c9360c47e9825f77b62ef40c07910a36df32256253fbee262e78d8ca5->leave($__internal_28d8fb4c9360c47e9825f77b62ef40c07910a36df32256253fbee262e78d8ca5_prof);

        
        $__internal_65d87db3d176183d7ee6a2b4892e1ab035be29714a4b21335fe54d3e94be071f->leave($__internal_65d87db3d176183d7ee6a2b4892e1ab035be29714a4b21335fe54d3e94be071f_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_dea2d786da9764d8b1e6626181d9363df772c6cbd284ff1523acc1a7a88f9f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea2d786da9764d8b1e6626181d9363df772c6cbd284ff1523acc1a7a88f9f9a->enter($__internal_dea2d786da9764d8b1e6626181d9363df772c6cbd284ff1523acc1a7a88f9f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6cbb55abc430e98f75348b69f5922fe2ec73949ea7bebd6d2749a46aa1538e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbb55abc430e98f75348b69f5922fe2ec73949ea7bebd6d2749a46aa1538e24->enter($__internal_6cbb55abc430e98f75348b69f5922fe2ec73949ea7bebd6d2749a46aa1538e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_6cbb55abc430e98f75348b69f5922fe2ec73949ea7bebd6d2749a46aa1538e24->leave($__internal_6cbb55abc430e98f75348b69f5922fe2ec73949ea7bebd6d2749a46aa1538e24_prof);

        
        $__internal_dea2d786da9764d8b1e6626181d9363df772c6cbd284ff1523acc1a7a88f9f9a->leave($__internal_dea2d786da9764d8b1e6626181d9363df772c6cbd284ff1523acc1a7a88f9f9a_prof);

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
