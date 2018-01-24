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
        $__internal_36d92c06ad6168360028dab1cdb7bdfd813fbbc755c21c3083fd306127051ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d92c06ad6168360028dab1cdb7bdfd813fbbc755c21c3083fd306127051ead->enter($__internal_36d92c06ad6168360028dab1cdb7bdfd813fbbc755c21c3083fd306127051ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_c38a9ee61224969f393ae503cc6c2e00996abb0788198b961f6e76bccd86313a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38a9ee61224969f393ae503cc6c2e00996abb0788198b961f6e76bccd86313a->enter($__internal_c38a9ee61224969f393ae503cc6c2e00996abb0788198b961f6e76bccd86313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_36d92c06ad6168360028dab1cdb7bdfd813fbbc755c21c3083fd306127051ead->leave($__internal_36d92c06ad6168360028dab1cdb7bdfd813fbbc755c21c3083fd306127051ead_prof);

        
        $__internal_c38a9ee61224969f393ae503cc6c2e00996abb0788198b961f6e76bccd86313a->leave($__internal_c38a9ee61224969f393ae503cc6c2e00996abb0788198b961f6e76bccd86313a_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ce2686d49a52b47ebeb52ab154442511be6f12d16fdb497f150e3aacfa015b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce2686d49a52b47ebeb52ab154442511be6f12d16fdb497f150e3aacfa015b8f->enter($__internal_ce2686d49a52b47ebeb52ab154442511be6f12d16fdb497f150e3aacfa015b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_2f49d33aeb60b50dd3b63d37e67c263a7ba0f7b3f89d0fc89485339c001a2c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f49d33aeb60b50dd3b63d37e67c263a7ba0f7b3f89d0fc89485339c001a2c48->enter($__internal_2f49d33aeb60b50dd3b63d37e67c263a7ba0f7b3f89d0fc89485339c001a2c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_2f49d33aeb60b50dd3b63d37e67c263a7ba0f7b3f89d0fc89485339c001a2c48->leave($__internal_2f49d33aeb60b50dd3b63d37e67c263a7ba0f7b3f89d0fc89485339c001a2c48_prof);

        
        $__internal_ce2686d49a52b47ebeb52ab154442511be6f12d16fdb497f150e3aacfa015b8f->leave($__internal_ce2686d49a52b47ebeb52ab154442511be6f12d16fdb497f150e3aacfa015b8f_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_83c4a676956666812889e56d4b88eb97e382f549fdad6c6aba21edfb59a7769d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c4a676956666812889e56d4b88eb97e382f549fdad6c6aba21edfb59a7769d->enter($__internal_83c4a676956666812889e56d4b88eb97e382f549fdad6c6aba21edfb59a7769d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_a036f8106c732cc5dfcc580bd748b7343e4bbb71f1705f835f792905712e98c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a036f8106c732cc5dfcc580bd748b7343e4bbb71f1705f835f792905712e98c4->enter($__internal_a036f8106c732cc5dfcc580bd748b7343e4bbb71f1705f835f792905712e98c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_a036f8106c732cc5dfcc580bd748b7343e4bbb71f1705f835f792905712e98c4->leave($__internal_a036f8106c732cc5dfcc580bd748b7343e4bbb71f1705f835f792905712e98c4_prof);

        
        $__internal_83c4a676956666812889e56d4b88eb97e382f549fdad6c6aba21edfb59a7769d->leave($__internal_83c4a676956666812889e56d4b88eb97e382f549fdad6c6aba21edfb59a7769d_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e1c8fa398fff7faff61ec85dc0fceca876f1570947a3404d1472d978ac9ab0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c8fa398fff7faff61ec85dc0fceca876f1570947a3404d1472d978ac9ab0db->enter($__internal_e1c8fa398fff7faff61ec85dc0fceca876f1570947a3404d1472d978ac9ab0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c809b72b47f9c0f028b7e3a772b1348fe9bbfdab8643d33fdb4d48e1cf2e3fee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c809b72b47f9c0f028b7e3a772b1348fe9bbfdab8643d33fdb4d48e1cf2e3fee->enter($__internal_c809b72b47f9c0f028b7e3a772b1348fe9bbfdab8643d33fdb4d48e1cf2e3fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c809b72b47f9c0f028b7e3a772b1348fe9bbfdab8643d33fdb4d48e1cf2e3fee->leave($__internal_c809b72b47f9c0f028b7e3a772b1348fe9bbfdab8643d33fdb4d48e1cf2e3fee_prof);

        
        $__internal_e1c8fa398fff7faff61ec85dc0fceca876f1570947a3404d1472d978ac9ab0db->leave($__internal_e1c8fa398fff7faff61ec85dc0fceca876f1570947a3404d1472d978ac9ab0db_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_a351c09aa25d0895a683cd2c4ee8525acf39f96fd8f53581050087be8042e97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a351c09aa25d0895a683cd2c4ee8525acf39f96fd8f53581050087be8042e97b->enter($__internal_a351c09aa25d0895a683cd2c4ee8525acf39f96fd8f53581050087be8042e97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_688877972e59c7e58fc6f8525d2e36f3dedf083ee52d4d921a18d5db1ba65b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688877972e59c7e58fc6f8525d2e36f3dedf083ee52d4d921a18d5db1ba65b72->enter($__internal_688877972e59c7e58fc6f8525d2e36f3dedf083ee52d4d921a18d5db1ba65b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_688877972e59c7e58fc6f8525d2e36f3dedf083ee52d4d921a18d5db1ba65b72->leave($__internal_688877972e59c7e58fc6f8525d2e36f3dedf083ee52d4d921a18d5db1ba65b72_prof);

        
        $__internal_a351c09aa25d0895a683cd2c4ee8525acf39f96fd8f53581050087be8042e97b->leave($__internal_a351c09aa25d0895a683cd2c4ee8525acf39f96fd8f53581050087be8042e97b_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_e515b08366844c205b2fbdc95dd6a475a2632277958fb393507663f4a18cc232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e515b08366844c205b2fbdc95dd6a475a2632277958fb393507663f4a18cc232->enter($__internal_e515b08366844c205b2fbdc95dd6a475a2632277958fb393507663f4a18cc232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9855519372a928ae2a4f78f01d27ad6b612c856295fd6d1d76badbe30556ad37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9855519372a928ae2a4f78f01d27ad6b612c856295fd6d1d76badbe30556ad37->enter($__internal_9855519372a928ae2a4f78f01d27ad6b612c856295fd6d1d76badbe30556ad37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_9855519372a928ae2a4f78f01d27ad6b612c856295fd6d1d76badbe30556ad37->leave($__internal_9855519372a928ae2a4f78f01d27ad6b612c856295fd6d1d76badbe30556ad37_prof);

        
        $__internal_e515b08366844c205b2fbdc95dd6a475a2632277958fb393507663f4a18cc232->leave($__internal_e515b08366844c205b2fbdc95dd6a475a2632277958fb393507663f4a18cc232_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_17849ea2136a185ff89597c0f1b36a785c3014140161625a810a4cc24286c567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17849ea2136a185ff89597c0f1b36a785c3014140161625a810a4cc24286c567->enter($__internal_17849ea2136a185ff89597c0f1b36a785c3014140161625a810a4cc24286c567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_fbf9cea1b1aec6bbd44dba61c2d74e8d6343c2579a87d59e793e415bf0b504f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf9cea1b1aec6bbd44dba61c2d74e8d6343c2579a87d59e793e415bf0b504f5->enter($__internal_fbf9cea1b1aec6bbd44dba61c2d74e8d6343c2579a87d59e793e415bf0b504f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_fbf9cea1b1aec6bbd44dba61c2d74e8d6343c2579a87d59e793e415bf0b504f5->leave($__internal_fbf9cea1b1aec6bbd44dba61c2d74e8d6343c2579a87d59e793e415bf0b504f5_prof);

        
        $__internal_17849ea2136a185ff89597c0f1b36a785c3014140161625a810a4cc24286c567->leave($__internal_17849ea2136a185ff89597c0f1b36a785c3014140161625a810a4cc24286c567_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_7581ae3b1b6e0ca751a0ee1647979619bf9bff46dac45287b75bbe7038fe877c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7581ae3b1b6e0ca751a0ee1647979619bf9bff46dac45287b75bbe7038fe877c->enter($__internal_7581ae3b1b6e0ca751a0ee1647979619bf9bff46dac45287b75bbe7038fe877c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_d8f404c9df31c6d72d3313f420dd23a31394cc5b7786cbd1d3505ccb7dff2ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f404c9df31c6d72d3313f420dd23a31394cc5b7786cbd1d3505ccb7dff2ac0->enter($__internal_d8f404c9df31c6d72d3313f420dd23a31394cc5b7786cbd1d3505ccb7dff2ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_d8f404c9df31c6d72d3313f420dd23a31394cc5b7786cbd1d3505ccb7dff2ac0->leave($__internal_d8f404c9df31c6d72d3313f420dd23a31394cc5b7786cbd1d3505ccb7dff2ac0_prof);

        
        $__internal_7581ae3b1b6e0ca751a0ee1647979619bf9bff46dac45287b75bbe7038fe877c->leave($__internal_7581ae3b1b6e0ca751a0ee1647979619bf9bff46dac45287b75bbe7038fe877c_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0491a4bb55d1cc4decaacad0e21fc1efe34d17145ff1cb569d925fc7068d0c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0491a4bb55d1cc4decaacad0e21fc1efe34d17145ff1cb569d925fc7068d0c09->enter($__internal_0491a4bb55d1cc4decaacad0e21fc1efe34d17145ff1cb569d925fc7068d0c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_87104800d4d8e2441e692547d815eaa3e028954a652b7f38a5d23fa9cd353722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87104800d4d8e2441e692547d815eaa3e028954a652b7f38a5d23fa9cd353722->enter($__internal_87104800d4d8e2441e692547d815eaa3e028954a652b7f38a5d23fa9cd353722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_87104800d4d8e2441e692547d815eaa3e028954a652b7f38a5d23fa9cd353722->leave($__internal_87104800d4d8e2441e692547d815eaa3e028954a652b7f38a5d23fa9cd353722_prof);

        
        $__internal_0491a4bb55d1cc4decaacad0e21fc1efe34d17145ff1cb569d925fc7068d0c09->leave($__internal_0491a4bb55d1cc4decaacad0e21fc1efe34d17145ff1cb569d925fc7068d0c09_prof);

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
