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
        $__internal_5f8a3aaec68b5724951b82fb3023f99e39251ac0dfbd9970edb97274cd3944fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8a3aaec68b5724951b82fb3023f99e39251ac0dfbd9970edb97274cd3944fb->enter($__internal_5f8a3aaec68b5724951b82fb3023f99e39251ac0dfbd9970edb97274cd3944fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_9986f06697e4cbc498116cb1d83048daa072646f51509510fefbc1632c4e5c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9986f06697e4cbc498116cb1d83048daa072646f51509510fefbc1632c4e5c92->enter($__internal_9986f06697e4cbc498116cb1d83048daa072646f51509510fefbc1632c4e5c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_5f8a3aaec68b5724951b82fb3023f99e39251ac0dfbd9970edb97274cd3944fb->leave($__internal_5f8a3aaec68b5724951b82fb3023f99e39251ac0dfbd9970edb97274cd3944fb_prof);

        
        $__internal_9986f06697e4cbc498116cb1d83048daa072646f51509510fefbc1632c4e5c92->leave($__internal_9986f06697e4cbc498116cb1d83048daa072646f51509510fefbc1632c4e5c92_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_c1bb8b001b2828d57a08731f62ce5b7af22da7aa0ea4af4740305b297953f6df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1bb8b001b2828d57a08731f62ce5b7af22da7aa0ea4af4740305b297953f6df->enter($__internal_c1bb8b001b2828d57a08731f62ce5b7af22da7aa0ea4af4740305b297953f6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_bcf63f613cd4eb59c829d2bd5f08ce02bf0b0f798e34de790637882ffa6d33ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf63f613cd4eb59c829d2bd5f08ce02bf0b0f798e34de790637882ffa6d33ec->enter($__internal_bcf63f613cd4eb59c829d2bd5f08ce02bf0b0f798e34de790637882ffa6d33ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_bcf63f613cd4eb59c829d2bd5f08ce02bf0b0f798e34de790637882ffa6d33ec->leave($__internal_bcf63f613cd4eb59c829d2bd5f08ce02bf0b0f798e34de790637882ffa6d33ec_prof);

        
        $__internal_c1bb8b001b2828d57a08731f62ce5b7af22da7aa0ea4af4740305b297953f6df->leave($__internal_c1bb8b001b2828d57a08731f62ce5b7af22da7aa0ea4af4740305b297953f6df_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d8709cc78fbd239ebb073155cd800f7ee05fceb2d70cc106c23c3ccbc7259a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8709cc78fbd239ebb073155cd800f7ee05fceb2d70cc106c23c3ccbc7259a2d->enter($__internal_d8709cc78fbd239ebb073155cd800f7ee05fceb2d70cc106c23c3ccbc7259a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_07380bc4342e34af23ba3d3980905d8c6d4d9f54f487b087fe0b14890c7662ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07380bc4342e34af23ba3d3980905d8c6d4d9f54f487b087fe0b14890c7662ba->enter($__internal_07380bc4342e34af23ba3d3980905d8c6d4d9f54f487b087fe0b14890c7662ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_07380bc4342e34af23ba3d3980905d8c6d4d9f54f487b087fe0b14890c7662ba->leave($__internal_07380bc4342e34af23ba3d3980905d8c6d4d9f54f487b087fe0b14890c7662ba_prof);

        
        $__internal_d8709cc78fbd239ebb073155cd800f7ee05fceb2d70cc106c23c3ccbc7259a2d->leave($__internal_d8709cc78fbd239ebb073155cd800f7ee05fceb2d70cc106c23c3ccbc7259a2d_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_4f9e5452fec3494a84aecbd6897887e4f03713bc041766ab21a5585a6671cdad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9e5452fec3494a84aecbd6897887e4f03713bc041766ab21a5585a6671cdad->enter($__internal_4f9e5452fec3494a84aecbd6897887e4f03713bc041766ab21a5585a6671cdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a8bbabc56550cb411d3e7c69ab217c9da67a13aad582447e33cda3e8d9d478f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bbabc56550cb411d3e7c69ab217c9da67a13aad582447e33cda3e8d9d478f4->enter($__internal_a8bbabc56550cb411d3e7c69ab217c9da67a13aad582447e33cda3e8d9d478f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_a8bbabc56550cb411d3e7c69ab217c9da67a13aad582447e33cda3e8d9d478f4->leave($__internal_a8bbabc56550cb411d3e7c69ab217c9da67a13aad582447e33cda3e8d9d478f4_prof);

        
        $__internal_4f9e5452fec3494a84aecbd6897887e4f03713bc041766ab21a5585a6671cdad->leave($__internal_4f9e5452fec3494a84aecbd6897887e4f03713bc041766ab21a5585a6671cdad_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9543c8ad9901766053f5302a42faf72408a8a4d5fc02e6edea5edc4cdc8d4d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9543c8ad9901766053f5302a42faf72408a8a4d5fc02e6edea5edc4cdc8d4d68->enter($__internal_9543c8ad9901766053f5302a42faf72408a8a4d5fc02e6edea5edc4cdc8d4d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6df5b96030aa650dd18a0fa8a78a1fa05d4b413d7fea1ea9b5f50ced63b29108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df5b96030aa650dd18a0fa8a78a1fa05d4b413d7fea1ea9b5f50ced63b29108->enter($__internal_6df5b96030aa650dd18a0fa8a78a1fa05d4b413d7fea1ea9b5f50ced63b29108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_6df5b96030aa650dd18a0fa8a78a1fa05d4b413d7fea1ea9b5f50ced63b29108->leave($__internal_6df5b96030aa650dd18a0fa8a78a1fa05d4b413d7fea1ea9b5f50ced63b29108_prof);

        
        $__internal_9543c8ad9901766053f5302a42faf72408a8a4d5fc02e6edea5edc4cdc8d4d68->leave($__internal_9543c8ad9901766053f5302a42faf72408a8a4d5fc02e6edea5edc4cdc8d4d68_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_c525d5ab1767e59a1680477b064812dc92cd683a6ce4c282a30b8c8373c4029c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c525d5ab1767e59a1680477b064812dc92cd683a6ce4c282a30b8c8373c4029c->enter($__internal_c525d5ab1767e59a1680477b064812dc92cd683a6ce4c282a30b8c8373c4029c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_89b1739ef09695d24e95f1782e6973ae12b70198caebbc21516613b27cbcef18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b1739ef09695d24e95f1782e6973ae12b70198caebbc21516613b27cbcef18->enter($__internal_89b1739ef09695d24e95f1782e6973ae12b70198caebbc21516613b27cbcef18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_89b1739ef09695d24e95f1782e6973ae12b70198caebbc21516613b27cbcef18->leave($__internal_89b1739ef09695d24e95f1782e6973ae12b70198caebbc21516613b27cbcef18_prof);

        
        $__internal_c525d5ab1767e59a1680477b064812dc92cd683a6ce4c282a30b8c8373c4029c->leave($__internal_c525d5ab1767e59a1680477b064812dc92cd683a6ce4c282a30b8c8373c4029c_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_f0366a0cd4405e387c55aa774ae1254bf2f1e2cf266f9364d9db274456ff5091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0366a0cd4405e387c55aa774ae1254bf2f1e2cf266f9364d9db274456ff5091->enter($__internal_f0366a0cd4405e387c55aa774ae1254bf2f1e2cf266f9364d9db274456ff5091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_d72c76ee9079106b91b9adc4c621fae94279ab561457a109b6842751fe14aec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72c76ee9079106b91b9adc4c621fae94279ab561457a109b6842751fe14aec7->enter($__internal_d72c76ee9079106b91b9adc4c621fae94279ab561457a109b6842751fe14aec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_d72c76ee9079106b91b9adc4c621fae94279ab561457a109b6842751fe14aec7->leave($__internal_d72c76ee9079106b91b9adc4c621fae94279ab561457a109b6842751fe14aec7_prof);

        
        $__internal_f0366a0cd4405e387c55aa774ae1254bf2f1e2cf266f9364d9db274456ff5091->leave($__internal_f0366a0cd4405e387c55aa774ae1254bf2f1e2cf266f9364d9db274456ff5091_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e7d558557c9ff052b37435d485c8d56d5ad980cfdfa3ffe50f838a03382374d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d558557c9ff052b37435d485c8d56d5ad980cfdfa3ffe50f838a03382374d0->enter($__internal_e7d558557c9ff052b37435d485c8d56d5ad980cfdfa3ffe50f838a03382374d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_a3429d3bd0cf40e7f7d50034fdde63163641e981dfc9a14c57fbd3f993cb68eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3429d3bd0cf40e7f7d50034fdde63163641e981dfc9a14c57fbd3f993cb68eb->enter($__internal_a3429d3bd0cf40e7f7d50034fdde63163641e981dfc9a14c57fbd3f993cb68eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_a3429d3bd0cf40e7f7d50034fdde63163641e981dfc9a14c57fbd3f993cb68eb->leave($__internal_a3429d3bd0cf40e7f7d50034fdde63163641e981dfc9a14c57fbd3f993cb68eb_prof);

        
        $__internal_e7d558557c9ff052b37435d485c8d56d5ad980cfdfa3ffe50f838a03382374d0->leave($__internal_e7d558557c9ff052b37435d485c8d56d5ad980cfdfa3ffe50f838a03382374d0_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a4275a7c6fa55724992e438e69e33aa014d987ba9bb8d86e57e3c252f21f9444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4275a7c6fa55724992e438e69e33aa014d987ba9bb8d86e57e3c252f21f9444->enter($__internal_a4275a7c6fa55724992e438e69e33aa014d987ba9bb8d86e57e3c252f21f9444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b394d9580ca233a37adfa68d096e3a3918217c80dd4bddc237ef444e22873465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b394d9580ca233a37adfa68d096e3a3918217c80dd4bddc237ef444e22873465->enter($__internal_b394d9580ca233a37adfa68d096e3a3918217c80dd4bddc237ef444e22873465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_b394d9580ca233a37adfa68d096e3a3918217c80dd4bddc237ef444e22873465->leave($__internal_b394d9580ca233a37adfa68d096e3a3918217c80dd4bddc237ef444e22873465_prof);

        
        $__internal_a4275a7c6fa55724992e438e69e33aa014d987ba9bb8d86e57e3c252f21f9444->leave($__internal_a4275a7c6fa55724992e438e69e33aa014d987ba9bb8d86e57e3c252f21f9444_prof);

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
