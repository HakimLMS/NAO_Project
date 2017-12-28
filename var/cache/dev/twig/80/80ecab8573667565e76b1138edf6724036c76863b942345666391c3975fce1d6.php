<?php

/* form_table_layout.html.twig */
class __TwigTemplate_96cd836cbe473a3f65e139ab813b74ca4bd2b8959a08b3bb3171c48130d4be69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_544402646f561d5d1e32dfa70fe08bd368c1a129f1f8891e9a63706af9a19393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_544402646f561d5d1e32dfa70fe08bd368c1a129f1f8891e9a63706af9a19393->enter($__internal_544402646f561d5d1e32dfa70fe08bd368c1a129f1f8891e9a63706af9a19393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_a1c9d13470d5b0854427c6744d508f5ff83b47d25b1afe8e5ab84efcdb3129bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c9d13470d5b0854427c6744d508f5ff83b47d25b1afe8e5ab84efcdb3129bb->enter($__internal_a1c9d13470d5b0854427c6744d508f5ff83b47d25b1afe8e5ab84efcdb3129bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_544402646f561d5d1e32dfa70fe08bd368c1a129f1f8891e9a63706af9a19393->leave($__internal_544402646f561d5d1e32dfa70fe08bd368c1a129f1f8891e9a63706af9a19393_prof);

        
        $__internal_a1c9d13470d5b0854427c6744d508f5ff83b47d25b1afe8e5ab84efcdb3129bb->leave($__internal_a1c9d13470d5b0854427c6744d508f5ff83b47d25b1afe8e5ab84efcdb3129bb_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e68826b40ca92a42f46f44bc9dc3e362c468916ab2fd2271c7ef32887136f625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68826b40ca92a42f46f44bc9dc3e362c468916ab2fd2271c7ef32887136f625->enter($__internal_e68826b40ca92a42f46f44bc9dc3e362c468916ab2fd2271c7ef32887136f625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a11edf7e7efd7fcbcc5da42070af548847726b4cc5bab34205e5e67f841deef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11edf7e7efd7fcbcc5da42070af548847726b4cc5bab34205e5e67f841deef1->enter($__internal_a11edf7e7efd7fcbcc5da42070af548847726b4cc5bab34205e5e67f841deef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_a11edf7e7efd7fcbcc5da42070af548847726b4cc5bab34205e5e67f841deef1->leave($__internal_a11edf7e7efd7fcbcc5da42070af548847726b4cc5bab34205e5e67f841deef1_prof);

        
        $__internal_e68826b40ca92a42f46f44bc9dc3e362c468916ab2fd2271c7ef32887136f625->leave($__internal_e68826b40ca92a42f46f44bc9dc3e362c468916ab2fd2271c7ef32887136f625_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f6b0e6ca6c0aec4361760714b37c0d3030f12d77f892d41c6de9c133c2d7dfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b0e6ca6c0aec4361760714b37c0d3030f12d77f892d41c6de9c133c2d7dfa4->enter($__internal_f6b0e6ca6c0aec4361760714b37c0d3030f12d77f892d41c6de9c133c2d7dfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_877a4b30c911c47a0511e40d68b53ca0539043d43d26adc17e4979e8dafd22dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877a4b30c911c47a0511e40d68b53ca0539043d43d26adc17e4979e8dafd22dc->enter($__internal_877a4b30c911c47a0511e40d68b53ca0539043d43d26adc17e4979e8dafd22dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_877a4b30c911c47a0511e40d68b53ca0539043d43d26adc17e4979e8dafd22dc->leave($__internal_877a4b30c911c47a0511e40d68b53ca0539043d43d26adc17e4979e8dafd22dc_prof);

        
        $__internal_f6b0e6ca6c0aec4361760714b37c0d3030f12d77f892d41c6de9c133c2d7dfa4->leave($__internal_f6b0e6ca6c0aec4361760714b37c0d3030f12d77f892d41c6de9c133c2d7dfa4_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_db3265e342c54eec8e0ee8720803e2af38a45326e90a78d6f2e3979a9196ddd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3265e342c54eec8e0ee8720803e2af38a45326e90a78d6f2e3979a9196ddd8->enter($__internal_db3265e342c54eec8e0ee8720803e2af38a45326e90a78d6f2e3979a9196ddd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_2f09cc0dd390e95e091c3c0606a864b7e2c4bbfb80d25ea12bb13b32396ec4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f09cc0dd390e95e091c3c0606a864b7e2c4bbfb80d25ea12bb13b32396ec4cb->enter($__internal_2f09cc0dd390e95e091c3c0606a864b7e2c4bbfb80d25ea12bb13b32396ec4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_2f09cc0dd390e95e091c3c0606a864b7e2c4bbfb80d25ea12bb13b32396ec4cb->leave($__internal_2f09cc0dd390e95e091c3c0606a864b7e2c4bbfb80d25ea12bb13b32396ec4cb_prof);

        
        $__internal_db3265e342c54eec8e0ee8720803e2af38a45326e90a78d6f2e3979a9196ddd8->leave($__internal_db3265e342c54eec8e0ee8720803e2af38a45326e90a78d6f2e3979a9196ddd8_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_349aab11e25554f025bbcdc054c24bfbbfefb5a6394e6484b9f6cbad8bf1ab07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_349aab11e25554f025bbcdc054c24bfbbfefb5a6394e6484b9f6cbad8bf1ab07->enter($__internal_349aab11e25554f025bbcdc054c24bfbbfefb5a6394e6484b9f6cbad8bf1ab07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_8390aca8b7300bd12e0d1927fce1eb03f0e62164b653912ca533d9570f8075af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8390aca8b7300bd12e0d1927fce1eb03f0e62164b653912ca533d9570f8075af->enter($__internal_8390aca8b7300bd12e0d1927fce1eb03f0e62164b653912ca533d9570f8075af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_8390aca8b7300bd12e0d1927fce1eb03f0e62164b653912ca533d9570f8075af->leave($__internal_8390aca8b7300bd12e0d1927fce1eb03f0e62164b653912ca533d9570f8075af_prof);

        
        $__internal_349aab11e25554f025bbcdc054c24bfbbfefb5a6394e6484b9f6cbad8bf1ab07->leave($__internal_349aab11e25554f025bbcdc054c24bfbbfefb5a6394e6484b9f6cbad8bf1ab07_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp64\\www\\NAO_Project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
