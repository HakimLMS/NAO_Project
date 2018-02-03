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
        $__internal_614e2c1a201a1d0472e6c2d190e82f93cbfcfd243981f441034adcc8578115f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614e2c1a201a1d0472e6c2d190e82f93cbfcfd243981f441034adcc8578115f1->enter($__internal_614e2c1a201a1d0472e6c2d190e82f93cbfcfd243981f441034adcc8578115f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_fba9dd47559d0f93b373884a0ee048a575a81ebd83302775cb7a46da9e895590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba9dd47559d0f93b373884a0ee048a575a81ebd83302775cb7a46da9e895590->enter($__internal_fba9dd47559d0f93b373884a0ee048a575a81ebd83302775cb7a46da9e895590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_614e2c1a201a1d0472e6c2d190e82f93cbfcfd243981f441034adcc8578115f1->leave($__internal_614e2c1a201a1d0472e6c2d190e82f93cbfcfd243981f441034adcc8578115f1_prof);

        
        $__internal_fba9dd47559d0f93b373884a0ee048a575a81ebd83302775cb7a46da9e895590->leave($__internal_fba9dd47559d0f93b373884a0ee048a575a81ebd83302775cb7a46da9e895590_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9fe9be8233cbf8e82aeb61e4bd7c5026081f2e4221a64bcaa3bcdfee27a6033c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe9be8233cbf8e82aeb61e4bd7c5026081f2e4221a64bcaa3bcdfee27a6033c->enter($__internal_9fe9be8233cbf8e82aeb61e4bd7c5026081f2e4221a64bcaa3bcdfee27a6033c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_db3e3626adb5e40686e098134f2584da771b8a2b585884703bd2021b13387193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3e3626adb5e40686e098134f2584da771b8a2b585884703bd2021b13387193->enter($__internal_db3e3626adb5e40686e098134f2584da771b8a2b585884703bd2021b13387193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_db3e3626adb5e40686e098134f2584da771b8a2b585884703bd2021b13387193->leave($__internal_db3e3626adb5e40686e098134f2584da771b8a2b585884703bd2021b13387193_prof);

        
        $__internal_9fe9be8233cbf8e82aeb61e4bd7c5026081f2e4221a64bcaa3bcdfee27a6033c->leave($__internal_9fe9be8233cbf8e82aeb61e4bd7c5026081f2e4221a64bcaa3bcdfee27a6033c_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d5a336d4ab6ac83ff32983268c0f301e840f9d2307fe99d1de107b68e7cf4fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5a336d4ab6ac83ff32983268c0f301e840f9d2307fe99d1de107b68e7cf4fba->enter($__internal_d5a336d4ab6ac83ff32983268c0f301e840f9d2307fe99d1de107b68e7cf4fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7c7e29027c628f96ea5c86edad95a4d95bacf49810abcdaa6901acb4d371a1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7e29027c628f96ea5c86edad95a4d95bacf49810abcdaa6901acb4d371a1da->enter($__internal_7c7e29027c628f96ea5c86edad95a4d95bacf49810abcdaa6901acb4d371a1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_7c7e29027c628f96ea5c86edad95a4d95bacf49810abcdaa6901acb4d371a1da->leave($__internal_7c7e29027c628f96ea5c86edad95a4d95bacf49810abcdaa6901acb4d371a1da_prof);

        
        $__internal_d5a336d4ab6ac83ff32983268c0f301e840f9d2307fe99d1de107b68e7cf4fba->leave($__internal_d5a336d4ab6ac83ff32983268c0f301e840f9d2307fe99d1de107b68e7cf4fba_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fcb9757944dea874d3930f8ee32a1566b850d4930963cd2ee3a56bfb4b8a295a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb9757944dea874d3930f8ee32a1566b850d4930963cd2ee3a56bfb4b8a295a->enter($__internal_fcb9757944dea874d3930f8ee32a1566b850d4930963cd2ee3a56bfb4b8a295a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_cc895f504ee0542fdba88740138fee96f0dbc5a2f825fad2cd515006ee5d9d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc895f504ee0542fdba88740138fee96f0dbc5a2f825fad2cd515006ee5d9d5e->enter($__internal_cc895f504ee0542fdba88740138fee96f0dbc5a2f825fad2cd515006ee5d9d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_cc895f504ee0542fdba88740138fee96f0dbc5a2f825fad2cd515006ee5d9d5e->leave($__internal_cc895f504ee0542fdba88740138fee96f0dbc5a2f825fad2cd515006ee5d9d5e_prof);

        
        $__internal_fcb9757944dea874d3930f8ee32a1566b850d4930963cd2ee3a56bfb4b8a295a->leave($__internal_fcb9757944dea874d3930f8ee32a1566b850d4930963cd2ee3a56bfb4b8a295a_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_2bd306ccca14a0259ccb02b2aa8b3c470ef8b29a917d494bc93a3c41be345608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd306ccca14a0259ccb02b2aa8b3c470ef8b29a917d494bc93a3c41be345608->enter($__internal_2bd306ccca14a0259ccb02b2aa8b3c470ef8b29a917d494bc93a3c41be345608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_b5e42965a0e2e856997eed87767057df7e31137b19a95e86f7708c76e172736b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e42965a0e2e856997eed87767057df7e31137b19a95e86f7708c76e172736b->enter($__internal_b5e42965a0e2e856997eed87767057df7e31137b19a95e86f7708c76e172736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_b5e42965a0e2e856997eed87767057df7e31137b19a95e86f7708c76e172736b->leave($__internal_b5e42965a0e2e856997eed87767057df7e31137b19a95e86f7708c76e172736b_prof);

        
        $__internal_2bd306ccca14a0259ccb02b2aa8b3c470ef8b29a917d494bc93a3c41be345608->leave($__internal_2bd306ccca14a0259ccb02b2aa8b3c470ef8b29a917d494bc93a3c41be345608_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_463d12c4d38b45717ad538a00ba178b4dbe882e8eb200fc113b32c5151148e83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_463d12c4d38b45717ad538a00ba178b4dbe882e8eb200fc113b32c5151148e83->enter($__internal_463d12c4d38b45717ad538a00ba178b4dbe882e8eb200fc113b32c5151148e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_4699adcfdc9a4e1a20de34d275307ddcf02fd55d96609f047da91ba0e7e2773a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4699adcfdc9a4e1a20de34d275307ddcf02fd55d96609f047da91ba0e7e2773a->enter($__internal_4699adcfdc9a4e1a20de34d275307ddcf02fd55d96609f047da91ba0e7e2773a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_4699adcfdc9a4e1a20de34d275307ddcf02fd55d96609f047da91ba0e7e2773a->leave($__internal_4699adcfdc9a4e1a20de34d275307ddcf02fd55d96609f047da91ba0e7e2773a_prof);

        
        $__internal_463d12c4d38b45717ad538a00ba178b4dbe882e8eb200fc113b32c5151148e83->leave($__internal_463d12c4d38b45717ad538a00ba178b4dbe882e8eb200fc113b32c5151148e83_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4153deb2d7868d434c3ce3eb675b64b0ff105aa779314d38c73ec510f1300e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4153deb2d7868d434c3ce3eb675b64b0ff105aa779314d38c73ec510f1300e51->enter($__internal_4153deb2d7868d434c3ce3eb675b64b0ff105aa779314d38c73ec510f1300e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_874a33002c0f9a34a0a2308f22299c73990c0acc76427e3644673d6694b7d85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874a33002c0f9a34a0a2308f22299c73990c0acc76427e3644673d6694b7d85c->enter($__internal_874a33002c0f9a34a0a2308f22299c73990c0acc76427e3644673d6694b7d85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_874a33002c0f9a34a0a2308f22299c73990c0acc76427e3644673d6694b7d85c->leave($__internal_874a33002c0f9a34a0a2308f22299c73990c0acc76427e3644673d6694b7d85c_prof);

        
        $__internal_4153deb2d7868d434c3ce3eb675b64b0ff105aa779314d38c73ec510f1300e51->leave($__internal_4153deb2d7868d434c3ce3eb675b64b0ff105aa779314d38c73ec510f1300e51_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_69c91c2a84a79621b9fd28c557b71bc07749e8157bd7a14086c9754f0e3963d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c91c2a84a79621b9fd28c557b71bc07749e8157bd7a14086c9754f0e3963d5->enter($__internal_69c91c2a84a79621b9fd28c557b71bc07749e8157bd7a14086c9754f0e3963d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_0d47b3c42764e653ad9e1d9c482d51d61e107db661be1c6eafb07f485da95f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d47b3c42764e653ad9e1d9c482d51d61e107db661be1c6eafb07f485da95f7c->enter($__internal_0d47b3c42764e653ad9e1d9c482d51d61e107db661be1c6eafb07f485da95f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_0d47b3c42764e653ad9e1d9c482d51d61e107db661be1c6eafb07f485da95f7c->leave($__internal_0d47b3c42764e653ad9e1d9c482d51d61e107db661be1c6eafb07f485da95f7c_prof);

        
        $__internal_69c91c2a84a79621b9fd28c557b71bc07749e8157bd7a14086c9754f0e3963d5->leave($__internal_69c91c2a84a79621b9fd28c557b71bc07749e8157bd7a14086c9754f0e3963d5_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b9f7d6246a22c7c26bdf48c250381bad83b6da53987a52106e8f089f4d84ce54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f7d6246a22c7c26bdf48c250381bad83b6da53987a52106e8f089f4d84ce54->enter($__internal_b9f7d6246a22c7c26bdf48c250381bad83b6da53987a52106e8f089f4d84ce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c6aef4c303bab57c3a32f0d091c0b89956dcd399a39a6e972075cf6dde4da119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6aef4c303bab57c3a32f0d091c0b89956dcd399a39a6e972075cf6dde4da119->enter($__internal_c6aef4c303bab57c3a32f0d091c0b89956dcd399a39a6e972075cf6dde4da119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_c6aef4c303bab57c3a32f0d091c0b89956dcd399a39a6e972075cf6dde4da119->leave($__internal_c6aef4c303bab57c3a32f0d091c0b89956dcd399a39a6e972075cf6dde4da119_prof);

        
        $__internal_b9f7d6246a22c7c26bdf48c250381bad83b6da53987a52106e8f089f4d84ce54->leave($__internal_b9f7d6246a22c7c26bdf48c250381bad83b6da53987a52106e8f089f4d84ce54_prof);

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
