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
        $__internal_ba30b37ce06ecc74dd9f78b1707ff39dc3772a96bb6507395357c2453d68e147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba30b37ce06ecc74dd9f78b1707ff39dc3772a96bb6507395357c2453d68e147->enter($__internal_ba30b37ce06ecc74dd9f78b1707ff39dc3772a96bb6507395357c2453d68e147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_b4089f5f5cd885411d2f7a19bb162e50f76ee5f55e8cad576e214638464bc4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4089f5f5cd885411d2f7a19bb162e50f76ee5f55e8cad576e214638464bc4e8->enter($__internal_b4089f5f5cd885411d2f7a19bb162e50f76ee5f55e8cad576e214638464bc4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_ba30b37ce06ecc74dd9f78b1707ff39dc3772a96bb6507395357c2453d68e147->leave($__internal_ba30b37ce06ecc74dd9f78b1707ff39dc3772a96bb6507395357c2453d68e147_prof);

        
        $__internal_b4089f5f5cd885411d2f7a19bb162e50f76ee5f55e8cad576e214638464bc4e8->leave($__internal_b4089f5f5cd885411d2f7a19bb162e50f76ee5f55e8cad576e214638464bc4e8_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_dab3d682d780610d46c2dc1fc07e4fd6f42ed5029492e8d0d9684c1dafb9a87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab3d682d780610d46c2dc1fc07e4fd6f42ed5029492e8d0d9684c1dafb9a87d->enter($__internal_dab3d682d780610d46c2dc1fc07e4fd6f42ed5029492e8d0d9684c1dafb9a87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ad2362c3f91ab7e3b721f09859b91ea68ef1815506be3864a4e6432829a1358a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad2362c3f91ab7e3b721f09859b91ea68ef1815506be3864a4e6432829a1358a->enter($__internal_ad2362c3f91ab7e3b721f09859b91ea68ef1815506be3864a4e6432829a1358a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_ad2362c3f91ab7e3b721f09859b91ea68ef1815506be3864a4e6432829a1358a->leave($__internal_ad2362c3f91ab7e3b721f09859b91ea68ef1815506be3864a4e6432829a1358a_prof);

        
        $__internal_dab3d682d780610d46c2dc1fc07e4fd6f42ed5029492e8d0d9684c1dafb9a87d->leave($__internal_dab3d682d780610d46c2dc1fc07e4fd6f42ed5029492e8d0d9684c1dafb9a87d_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_b0aa97cefe7213ae5c05334dd92ecca82ac7816e5d2e98b1bb369bc2fb35dba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0aa97cefe7213ae5c05334dd92ecca82ac7816e5d2e98b1bb369bc2fb35dba5->enter($__internal_b0aa97cefe7213ae5c05334dd92ecca82ac7816e5d2e98b1bb369bc2fb35dba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_cb8b827b66a4076d60b41812c6814038bd338ae40a689eb12f774c9b7556b661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8b827b66a4076d60b41812c6814038bd338ae40a689eb12f774c9b7556b661->enter($__internal_cb8b827b66a4076d60b41812c6814038bd338ae40a689eb12f774c9b7556b661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_cb8b827b66a4076d60b41812c6814038bd338ae40a689eb12f774c9b7556b661->leave($__internal_cb8b827b66a4076d60b41812c6814038bd338ae40a689eb12f774c9b7556b661_prof);

        
        $__internal_b0aa97cefe7213ae5c05334dd92ecca82ac7816e5d2e98b1bb369bc2fb35dba5->leave($__internal_b0aa97cefe7213ae5c05334dd92ecca82ac7816e5d2e98b1bb369bc2fb35dba5_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c509ed3ab52155f0af106040c02ccac83cccd8a8f7d19c8b8586dbc8dbe0dc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c509ed3ab52155f0af106040c02ccac83cccd8a8f7d19c8b8586dbc8dbe0dc84->enter($__internal_c509ed3ab52155f0af106040c02ccac83cccd8a8f7d19c8b8586dbc8dbe0dc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_657560e7ad37aac6c2cc733ebcdc2112ef169fbe642911e2066782f03de3f60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657560e7ad37aac6c2cc733ebcdc2112ef169fbe642911e2066782f03de3f60b->enter($__internal_657560e7ad37aac6c2cc733ebcdc2112ef169fbe642911e2066782f03de3f60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_657560e7ad37aac6c2cc733ebcdc2112ef169fbe642911e2066782f03de3f60b->leave($__internal_657560e7ad37aac6c2cc733ebcdc2112ef169fbe642911e2066782f03de3f60b_prof);

        
        $__internal_c509ed3ab52155f0af106040c02ccac83cccd8a8f7d19c8b8586dbc8dbe0dc84->leave($__internal_c509ed3ab52155f0af106040c02ccac83cccd8a8f7d19c8b8586dbc8dbe0dc84_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_ba094258c13b775df68122a1d709c2cd05fe4145afe66ccfe7da1fcf5ddaa529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba094258c13b775df68122a1d709c2cd05fe4145afe66ccfe7da1fcf5ddaa529->enter($__internal_ba094258c13b775df68122a1d709c2cd05fe4145afe66ccfe7da1fcf5ddaa529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_c8e5ca09d0473bc48e06868d980d616eeb1ba593a40c295eae28b8d220f357a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e5ca09d0473bc48e06868d980d616eeb1ba593a40c295eae28b8d220f357a6->enter($__internal_c8e5ca09d0473bc48e06868d980d616eeb1ba593a40c295eae28b8d220f357a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_c8e5ca09d0473bc48e06868d980d616eeb1ba593a40c295eae28b8d220f357a6->leave($__internal_c8e5ca09d0473bc48e06868d980d616eeb1ba593a40c295eae28b8d220f357a6_prof);

        
        $__internal_ba094258c13b775df68122a1d709c2cd05fe4145afe66ccfe7da1fcf5ddaa529->leave($__internal_ba094258c13b775df68122a1d709c2cd05fe4145afe66ccfe7da1fcf5ddaa529_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_63f48732174651b878fc4e20438a708096795ae5669a0388f07c29c599c4cb06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f48732174651b878fc4e20438a708096795ae5669a0388f07c29c599c4cb06->enter($__internal_63f48732174651b878fc4e20438a708096795ae5669a0388f07c29c599c4cb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7f0b08213261bee7cd32889e3e732611fb74a2bbc4605da91c360f374c49bc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0b08213261bee7cd32889e3e732611fb74a2bbc4605da91c360f374c49bc19->enter($__internal_7f0b08213261bee7cd32889e3e732611fb74a2bbc4605da91c360f374c49bc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_7f0b08213261bee7cd32889e3e732611fb74a2bbc4605da91c360f374c49bc19->leave($__internal_7f0b08213261bee7cd32889e3e732611fb74a2bbc4605da91c360f374c49bc19_prof);

        
        $__internal_63f48732174651b878fc4e20438a708096795ae5669a0388f07c29c599c4cb06->leave($__internal_63f48732174651b878fc4e20438a708096795ae5669a0388f07c29c599c4cb06_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_41cdbccecb6bd7189fb0a30c6fee87b6b7202aa5851abe6c82e11546065528e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41cdbccecb6bd7189fb0a30c6fee87b6b7202aa5851abe6c82e11546065528e8->enter($__internal_41cdbccecb6bd7189fb0a30c6fee87b6b7202aa5851abe6c82e11546065528e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_f77eea831cb32f0dc096d499d918c2dfd5412428d8d1c97b9394fcb265f866df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77eea831cb32f0dc096d499d918c2dfd5412428d8d1c97b9394fcb265f866df->enter($__internal_f77eea831cb32f0dc096d499d918c2dfd5412428d8d1c97b9394fcb265f866df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_f77eea831cb32f0dc096d499d918c2dfd5412428d8d1c97b9394fcb265f866df->leave($__internal_f77eea831cb32f0dc096d499d918c2dfd5412428d8d1c97b9394fcb265f866df_prof);

        
        $__internal_41cdbccecb6bd7189fb0a30c6fee87b6b7202aa5851abe6c82e11546065528e8->leave($__internal_41cdbccecb6bd7189fb0a30c6fee87b6b7202aa5851abe6c82e11546065528e8_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_7ec661b0230e8acf8377e1f7dd93071d5ed39cd6a270fefd7e384cd0d5e52339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec661b0230e8acf8377e1f7dd93071d5ed39cd6a270fefd7e384cd0d5e52339->enter($__internal_7ec661b0230e8acf8377e1f7dd93071d5ed39cd6a270fefd7e384cd0d5e52339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_149a6aca91cb9bec081b1402dd3844ad43caf740f22e6160d6c06f36dcb22e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_149a6aca91cb9bec081b1402dd3844ad43caf740f22e6160d6c06f36dcb22e67->enter($__internal_149a6aca91cb9bec081b1402dd3844ad43caf740f22e6160d6c06f36dcb22e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_149a6aca91cb9bec081b1402dd3844ad43caf740f22e6160d6c06f36dcb22e67->leave($__internal_149a6aca91cb9bec081b1402dd3844ad43caf740f22e6160d6c06f36dcb22e67_prof);

        
        $__internal_7ec661b0230e8acf8377e1f7dd93071d5ed39cd6a270fefd7e384cd0d5e52339->leave($__internal_7ec661b0230e8acf8377e1f7dd93071d5ed39cd6a270fefd7e384cd0d5e52339_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4aab8a592d6cd4c74fdab3f62a82c24e37485e0e51a8dbb1fb2be51e6aeab186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aab8a592d6cd4c74fdab3f62a82c24e37485e0e51a8dbb1fb2be51e6aeab186->enter($__internal_4aab8a592d6cd4c74fdab3f62a82c24e37485e0e51a8dbb1fb2be51e6aeab186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_2b007afcb36650e5817d5ebd42c87899a33fd2bdd7ee4425f71263b7a949ec7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b007afcb36650e5817d5ebd42c87899a33fd2bdd7ee4425f71263b7a949ec7d->enter($__internal_2b007afcb36650e5817d5ebd42c87899a33fd2bdd7ee4425f71263b7a949ec7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_2b007afcb36650e5817d5ebd42c87899a33fd2bdd7ee4425f71263b7a949ec7d->leave($__internal_2b007afcb36650e5817d5ebd42c87899a33fd2bdd7ee4425f71263b7a949ec7d_prof);

        
        $__internal_4aab8a592d6cd4c74fdab3f62a82c24e37485e0e51a8dbb1fb2be51e6aeab186->leave($__internal_4aab8a592d6cd4c74fdab3f62a82c24e37485e0e51a8dbb1fb2be51e6aeab186_prof);

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
", "bootstrap_4_horizontal_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
