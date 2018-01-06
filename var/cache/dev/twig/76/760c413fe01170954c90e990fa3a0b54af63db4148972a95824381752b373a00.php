<?php

/* form_table_layout.html.twig */
class __TwigTemplate_c28abcbd13129841cae784b14b65289cf1ac7943a90001ef0f36ca112d7dd8ae extends Twig_Template
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
        $__internal_0f2339588dc4e1752e1eba298c226441ac57e1893d08f28e9f1d5bb67cc7dd71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2339588dc4e1752e1eba298c226441ac57e1893d08f28e9f1d5bb67cc7dd71->enter($__internal_0f2339588dc4e1752e1eba298c226441ac57e1893d08f28e9f1d5bb67cc7dd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_4a0efaad2aa62bdf4d0223b4bf3e063c15592717a3708b8c8687b5703347ee82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0efaad2aa62bdf4d0223b4bf3e063c15592717a3708b8c8687b5703347ee82->enter($__internal_4a0efaad2aa62bdf4d0223b4bf3e063c15592717a3708b8c8687b5703347ee82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_0f2339588dc4e1752e1eba298c226441ac57e1893d08f28e9f1d5bb67cc7dd71->leave($__internal_0f2339588dc4e1752e1eba298c226441ac57e1893d08f28e9f1d5bb67cc7dd71_prof);

        
        $__internal_4a0efaad2aa62bdf4d0223b4bf3e063c15592717a3708b8c8687b5703347ee82->leave($__internal_4a0efaad2aa62bdf4d0223b4bf3e063c15592717a3708b8c8687b5703347ee82_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_33487658349c1afa8143e1a708da266eaae5f4344c795f1ba513be610a1c941b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33487658349c1afa8143e1a708da266eaae5f4344c795f1ba513be610a1c941b->enter($__internal_33487658349c1afa8143e1a708da266eaae5f4344c795f1ba513be610a1c941b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0f5d47c9e13f8b0ae9f3609d43a6b824927276b2f8873418d107fd59fa357e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5d47c9e13f8b0ae9f3609d43a6b824927276b2f8873418d107fd59fa357e74->enter($__internal_0f5d47c9e13f8b0ae9f3609d43a6b824927276b2f8873418d107fd59fa357e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_0f5d47c9e13f8b0ae9f3609d43a6b824927276b2f8873418d107fd59fa357e74->leave($__internal_0f5d47c9e13f8b0ae9f3609d43a6b824927276b2f8873418d107fd59fa357e74_prof);

        
        $__internal_33487658349c1afa8143e1a708da266eaae5f4344c795f1ba513be610a1c941b->leave($__internal_33487658349c1afa8143e1a708da266eaae5f4344c795f1ba513be610a1c941b_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1cf16d54b4fb6ccf9fd1dda10a3d63433c1bf206b5fcecf369214b5469f2618f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf16d54b4fb6ccf9fd1dda10a3d63433c1bf206b5fcecf369214b5469f2618f->enter($__internal_1cf16d54b4fb6ccf9fd1dda10a3d63433c1bf206b5fcecf369214b5469f2618f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_4e35fcb1e0973d7b804f0fe837135de20707ab71e0153c4cecd4094d04376f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e35fcb1e0973d7b804f0fe837135de20707ab71e0153c4cecd4094d04376f2f->enter($__internal_4e35fcb1e0973d7b804f0fe837135de20707ab71e0153c4cecd4094d04376f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_4e35fcb1e0973d7b804f0fe837135de20707ab71e0153c4cecd4094d04376f2f->leave($__internal_4e35fcb1e0973d7b804f0fe837135de20707ab71e0153c4cecd4094d04376f2f_prof);

        
        $__internal_1cf16d54b4fb6ccf9fd1dda10a3d63433c1bf206b5fcecf369214b5469f2618f->leave($__internal_1cf16d54b4fb6ccf9fd1dda10a3d63433c1bf206b5fcecf369214b5469f2618f_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_15fc1ef87cf0c35c2bfa0096f41121c9c10091577a37120d9af7f17bd0e016b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15fc1ef87cf0c35c2bfa0096f41121c9c10091577a37120d9af7f17bd0e016b5->enter($__internal_15fc1ef87cf0c35c2bfa0096f41121c9c10091577a37120d9af7f17bd0e016b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_64f0b9098283fae1c479a3b230df26605d868d7aa3c13bd370939960cd2f1f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f0b9098283fae1c479a3b230df26605d868d7aa3c13bd370939960cd2f1f2d->enter($__internal_64f0b9098283fae1c479a3b230df26605d868d7aa3c13bd370939960cd2f1f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_64f0b9098283fae1c479a3b230df26605d868d7aa3c13bd370939960cd2f1f2d->leave($__internal_64f0b9098283fae1c479a3b230df26605d868d7aa3c13bd370939960cd2f1f2d_prof);

        
        $__internal_15fc1ef87cf0c35c2bfa0096f41121c9c10091577a37120d9af7f17bd0e016b5->leave($__internal_15fc1ef87cf0c35c2bfa0096f41121c9c10091577a37120d9af7f17bd0e016b5_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_6791d2904bf28e080b2c77a4fb7debaee219cee7df007a39404a0dbf7fed025a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6791d2904bf28e080b2c77a4fb7debaee219cee7df007a39404a0dbf7fed025a->enter($__internal_6791d2904bf28e080b2c77a4fb7debaee219cee7df007a39404a0dbf7fed025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_56c983e7ab8e493beee9cf9bea461ff784f354c44f5e60400879e6f106aebd95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c983e7ab8e493beee9cf9bea461ff784f354c44f5e60400879e6f106aebd95->enter($__internal_56c983e7ab8e493beee9cf9bea461ff784f354c44f5e60400879e6f106aebd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_56c983e7ab8e493beee9cf9bea461ff784f354c44f5e60400879e6f106aebd95->leave($__internal_56c983e7ab8e493beee9cf9bea461ff784f354c44f5e60400879e6f106aebd95_prof);

        
        $__internal_6791d2904bf28e080b2c77a4fb7debaee219cee7df007a39404a0dbf7fed025a->leave($__internal_6791d2904bf28e080b2c77a4fb7debaee219cee7df007a39404a0dbf7fed025a_prof);

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
", "form_table_layout.html.twig", "E:\\wamp64\\www\\NAO_project\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
