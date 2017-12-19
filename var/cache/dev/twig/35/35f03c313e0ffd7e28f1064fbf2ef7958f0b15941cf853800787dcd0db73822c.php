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
        $__internal_766b9e5c0d81cb841fa6cdfafba239350522b74421370dc30166fd2e3306d76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_766b9e5c0d81cb841fa6cdfafba239350522b74421370dc30166fd2e3306d76f->enter($__internal_766b9e5c0d81cb841fa6cdfafba239350522b74421370dc30166fd2e3306d76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_089883346de1212067764b14874e78acce16fef2fc5f435ad7d9e9d5fd952df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089883346de1212067764b14874e78acce16fef2fc5f435ad7d9e9d5fd952df1->enter($__internal_089883346de1212067764b14874e78acce16fef2fc5f435ad7d9e9d5fd952df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_766b9e5c0d81cb841fa6cdfafba239350522b74421370dc30166fd2e3306d76f->leave($__internal_766b9e5c0d81cb841fa6cdfafba239350522b74421370dc30166fd2e3306d76f_prof);

        
        $__internal_089883346de1212067764b14874e78acce16fef2fc5f435ad7d9e9d5fd952df1->leave($__internal_089883346de1212067764b14874e78acce16fef2fc5f435ad7d9e9d5fd952df1_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_03d75d99677b548a43b8b0a7ce4bdf4daf168b74b7c1830ede3ab3ae8d40b882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d75d99677b548a43b8b0a7ce4bdf4daf168b74b7c1830ede3ab3ae8d40b882->enter($__internal_03d75d99677b548a43b8b0a7ce4bdf4daf168b74b7c1830ede3ab3ae8d40b882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_daac1233318efc949bf582138ebbd207e4b540ad0218f767d6a14a21af6aefb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daac1233318efc949bf582138ebbd207e4b540ad0218f767d6a14a21af6aefb9->enter($__internal_daac1233318efc949bf582138ebbd207e4b540ad0218f767d6a14a21af6aefb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_daac1233318efc949bf582138ebbd207e4b540ad0218f767d6a14a21af6aefb9->leave($__internal_daac1233318efc949bf582138ebbd207e4b540ad0218f767d6a14a21af6aefb9_prof);

        
        $__internal_03d75d99677b548a43b8b0a7ce4bdf4daf168b74b7c1830ede3ab3ae8d40b882->leave($__internal_03d75d99677b548a43b8b0a7ce4bdf4daf168b74b7c1830ede3ab3ae8d40b882_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f174ff6abb4ac7641a694ecb7d416134462ea5c74704793bf334958fcb408af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f174ff6abb4ac7641a694ecb7d416134462ea5c74704793bf334958fcb408af4->enter($__internal_f174ff6abb4ac7641a694ecb7d416134462ea5c74704793bf334958fcb408af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6d07919f7f7a08e9376c5bfad585a265db214b62d202881bcad732cba8de9fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d07919f7f7a08e9376c5bfad585a265db214b62d202881bcad732cba8de9fed->enter($__internal_6d07919f7f7a08e9376c5bfad585a265db214b62d202881bcad732cba8de9fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_6d07919f7f7a08e9376c5bfad585a265db214b62d202881bcad732cba8de9fed->leave($__internal_6d07919f7f7a08e9376c5bfad585a265db214b62d202881bcad732cba8de9fed_prof);

        
        $__internal_f174ff6abb4ac7641a694ecb7d416134462ea5c74704793bf334958fcb408af4->leave($__internal_f174ff6abb4ac7641a694ecb7d416134462ea5c74704793bf334958fcb408af4_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a6ebc75abb750f34e1eb3235f93b24323a992a1bfd10e699579f960bef24a819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ebc75abb750f34e1eb3235f93b24323a992a1bfd10e699579f960bef24a819->enter($__internal_a6ebc75abb750f34e1eb3235f93b24323a992a1bfd10e699579f960bef24a819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_65e0290dcb2a3ba488392eac23a15eb693f1123621eb9e5d3b358fd87abcae4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e0290dcb2a3ba488392eac23a15eb693f1123621eb9e5d3b358fd87abcae4e->enter($__internal_65e0290dcb2a3ba488392eac23a15eb693f1123621eb9e5d3b358fd87abcae4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_65e0290dcb2a3ba488392eac23a15eb693f1123621eb9e5d3b358fd87abcae4e->leave($__internal_65e0290dcb2a3ba488392eac23a15eb693f1123621eb9e5d3b358fd87abcae4e_prof);

        
        $__internal_a6ebc75abb750f34e1eb3235f93b24323a992a1bfd10e699579f960bef24a819->leave($__internal_a6ebc75abb750f34e1eb3235f93b24323a992a1bfd10e699579f960bef24a819_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cb709288b8992d577dd80b848113263e35a6596c7dbe5791bb04a32b4db649b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb709288b8992d577dd80b848113263e35a6596c7dbe5791bb04a32b4db649b9->enter($__internal_cb709288b8992d577dd80b848113263e35a6596c7dbe5791bb04a32b4db649b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_325645dc0a3392865c76837f23cc2db78fa57540a857996f0da14415e520f080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_325645dc0a3392865c76837f23cc2db78fa57540a857996f0da14415e520f080->enter($__internal_325645dc0a3392865c76837f23cc2db78fa57540a857996f0da14415e520f080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_325645dc0a3392865c76837f23cc2db78fa57540a857996f0da14415e520f080->leave($__internal_325645dc0a3392865c76837f23cc2db78fa57540a857996f0da14415e520f080_prof);

        
        $__internal_cb709288b8992d577dd80b848113263e35a6596c7dbe5791bb04a32b4db649b9->leave($__internal_cb709288b8992d577dd80b848113263e35a6596c7dbe5791bb04a32b4db649b9_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d6b9ba8c8c39a0c65a8710d12040c223457e282fa4fd33e40efc828a9d3214e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b9ba8c8c39a0c65a8710d12040c223457e282fa4fd33e40efc828a9d3214e7->enter($__internal_d6b9ba8c8c39a0c65a8710d12040c223457e282fa4fd33e40efc828a9d3214e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_5b4203bdc03d0f4cc2a04c14d745ba97b28973b6d7728d623e755580c8d0d4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b4203bdc03d0f4cc2a04c14d745ba97b28973b6d7728d623e755580c8d0d4ad->enter($__internal_5b4203bdc03d0f4cc2a04c14d745ba97b28973b6d7728d623e755580c8d0d4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_5b4203bdc03d0f4cc2a04c14d745ba97b28973b6d7728d623e755580c8d0d4ad->leave($__internal_5b4203bdc03d0f4cc2a04c14d745ba97b28973b6d7728d623e755580c8d0d4ad_prof);

        
        $__internal_d6b9ba8c8c39a0c65a8710d12040c223457e282fa4fd33e40efc828a9d3214e7->leave($__internal_d6b9ba8c8c39a0c65a8710d12040c223457e282fa4fd33e40efc828a9d3214e7_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_f74a73d8ad40a0a92dd73e7ea01df7d078b0c8f6bdfbd706c5da936a83651ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74a73d8ad40a0a92dd73e7ea01df7d078b0c8f6bdfbd706c5da936a83651ad1->enter($__internal_f74a73d8ad40a0a92dd73e7ea01df7d078b0c8f6bdfbd706c5da936a83651ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_b0edd8b9cdfe0dc131651e996903f324af684dba48ee3fe5de6fe5e2c0fd5a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0edd8b9cdfe0dc131651e996903f324af684dba48ee3fe5de6fe5e2c0fd5a8d->enter($__internal_b0edd8b9cdfe0dc131651e996903f324af684dba48ee3fe5de6fe5e2c0fd5a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_b0edd8b9cdfe0dc131651e996903f324af684dba48ee3fe5de6fe5e2c0fd5a8d->leave($__internal_b0edd8b9cdfe0dc131651e996903f324af684dba48ee3fe5de6fe5e2c0fd5a8d_prof);

        
        $__internal_f74a73d8ad40a0a92dd73e7ea01df7d078b0c8f6bdfbd706c5da936a83651ad1->leave($__internal_f74a73d8ad40a0a92dd73e7ea01df7d078b0c8f6bdfbd706c5da936a83651ad1_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e456c928eeb20f63ba66d19b6bab84b9b3699c31b002e7e64ab2502e7a4a868e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e456c928eeb20f63ba66d19b6bab84b9b3699c31b002e7e64ab2502e7a4a868e->enter($__internal_e456c928eeb20f63ba66d19b6bab84b9b3699c31b002e7e64ab2502e7a4a868e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_68f6206214a512f35571efdec902c4431bf4c9baf99bc06817002f16b27d54ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f6206214a512f35571efdec902c4431bf4c9baf99bc06817002f16b27d54ca->enter($__internal_68f6206214a512f35571efdec902c4431bf4c9baf99bc06817002f16b27d54ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_68f6206214a512f35571efdec902c4431bf4c9baf99bc06817002f16b27d54ca->leave($__internal_68f6206214a512f35571efdec902c4431bf4c9baf99bc06817002f16b27d54ca_prof);

        
        $__internal_e456c928eeb20f63ba66d19b6bab84b9b3699c31b002e7e64ab2502e7a4a868e->leave($__internal_e456c928eeb20f63ba66d19b6bab84b9b3699c31b002e7e64ab2502e7a4a868e_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_f5c6bb578ec7440827b753a1ac07f2f0c722c0029d6e4caeacd7957abd939d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c6bb578ec7440827b753a1ac07f2f0c722c0029d6e4caeacd7957abd939d2d->enter($__internal_f5c6bb578ec7440827b753a1ac07f2f0c722c0029d6e4caeacd7957abd939d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_2882baf442e8ff9275a26bbe95b141c95163bd656d30ee84c648084e183c4a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2882baf442e8ff9275a26bbe95b141c95163bd656d30ee84c648084e183c4a8f->enter($__internal_2882baf442e8ff9275a26bbe95b141c95163bd656d30ee84c648084e183c4a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_2882baf442e8ff9275a26bbe95b141c95163bd656d30ee84c648084e183c4a8f->leave($__internal_2882baf442e8ff9275a26bbe95b141c95163bd656d30ee84c648084e183c4a8f_prof);

        
        $__internal_f5c6bb578ec7440827b753a1ac07f2f0c722c0029d6e4caeacd7957abd939d2d->leave($__internal_f5c6bb578ec7440827b753a1ac07f2f0c722c0029d6e4caeacd7957abd939d2d_prof);

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
