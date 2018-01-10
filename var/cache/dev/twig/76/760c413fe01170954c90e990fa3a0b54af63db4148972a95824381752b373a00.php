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
        $__internal_cea2ed81495f0979f3d0691cf2458a5d874031eb84f498b0ce563c72d65cef3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea2ed81495f0979f3d0691cf2458a5d874031eb84f498b0ce563c72d65cef3c->enter($__internal_cea2ed81495f0979f3d0691cf2458a5d874031eb84f498b0ce563c72d65cef3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_9ae6dd524cfa4e2bb87cd077df86ec16ee1933e9ce5f79924f5a59cd71b36592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae6dd524cfa4e2bb87cd077df86ec16ee1933e9ce5f79924f5a59cd71b36592->enter($__internal_9ae6dd524cfa4e2bb87cd077df86ec16ee1933e9ce5f79924f5a59cd71b36592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_cea2ed81495f0979f3d0691cf2458a5d874031eb84f498b0ce563c72d65cef3c->leave($__internal_cea2ed81495f0979f3d0691cf2458a5d874031eb84f498b0ce563c72d65cef3c_prof);

        
        $__internal_9ae6dd524cfa4e2bb87cd077df86ec16ee1933e9ce5f79924f5a59cd71b36592->leave($__internal_9ae6dd524cfa4e2bb87cd077df86ec16ee1933e9ce5f79924f5a59cd71b36592_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4ffd953c0952987632ae12273fc7fee509a05c0bdfea0fe02714f09f6547fb45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ffd953c0952987632ae12273fc7fee509a05c0bdfea0fe02714f09f6547fb45->enter($__internal_4ffd953c0952987632ae12273fc7fee509a05c0bdfea0fe02714f09f6547fb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_54f96b279b273a569fab327ffb39d4715d0f4949d425acf8651ccc2c0fd0adf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f96b279b273a569fab327ffb39d4715d0f4949d425acf8651ccc2c0fd0adf8->enter($__internal_54f96b279b273a569fab327ffb39d4715d0f4949d425acf8651ccc2c0fd0adf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_54f96b279b273a569fab327ffb39d4715d0f4949d425acf8651ccc2c0fd0adf8->leave($__internal_54f96b279b273a569fab327ffb39d4715d0f4949d425acf8651ccc2c0fd0adf8_prof);

        
        $__internal_4ffd953c0952987632ae12273fc7fee509a05c0bdfea0fe02714f09f6547fb45->leave($__internal_4ffd953c0952987632ae12273fc7fee509a05c0bdfea0fe02714f09f6547fb45_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_217eae6cb79815e340b35da0d8de33ed38b84cf7cedfd600a55069ba23dc8e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217eae6cb79815e340b35da0d8de33ed38b84cf7cedfd600a55069ba23dc8e4b->enter($__internal_217eae6cb79815e340b35da0d8de33ed38b84cf7cedfd600a55069ba23dc8e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cb273e8daa47214b7d9a68b24e5ea680e6010a5306d4a606e496b6319e4cfa81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb273e8daa47214b7d9a68b24e5ea680e6010a5306d4a606e496b6319e4cfa81->enter($__internal_cb273e8daa47214b7d9a68b24e5ea680e6010a5306d4a606e496b6319e4cfa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_cb273e8daa47214b7d9a68b24e5ea680e6010a5306d4a606e496b6319e4cfa81->leave($__internal_cb273e8daa47214b7d9a68b24e5ea680e6010a5306d4a606e496b6319e4cfa81_prof);

        
        $__internal_217eae6cb79815e340b35da0d8de33ed38b84cf7cedfd600a55069ba23dc8e4b->leave($__internal_217eae6cb79815e340b35da0d8de33ed38b84cf7cedfd600a55069ba23dc8e4b_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_60d42415760421b8e4e14b97893b38cca31d3566b406b54c7beca299b90179bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d42415760421b8e4e14b97893b38cca31d3566b406b54c7beca299b90179bd->enter($__internal_60d42415760421b8e4e14b97893b38cca31d3566b406b54c7beca299b90179bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_a569b11ef387f452727e0a7ddb5c6e04951faf946f3f947589f1128dbbeaa8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a569b11ef387f452727e0a7ddb5c6e04951faf946f3f947589f1128dbbeaa8a5->enter($__internal_a569b11ef387f452727e0a7ddb5c6e04951faf946f3f947589f1128dbbeaa8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_a569b11ef387f452727e0a7ddb5c6e04951faf946f3f947589f1128dbbeaa8a5->leave($__internal_a569b11ef387f452727e0a7ddb5c6e04951faf946f3f947589f1128dbbeaa8a5_prof);

        
        $__internal_60d42415760421b8e4e14b97893b38cca31d3566b406b54c7beca299b90179bd->leave($__internal_60d42415760421b8e4e14b97893b38cca31d3566b406b54c7beca299b90179bd_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_ea7f9f520f0742a2dd0911423331c39a8773b3127689f71f8444fa2d29093e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7f9f520f0742a2dd0911423331c39a8773b3127689f71f8444fa2d29093e35->enter($__internal_ea7f9f520f0742a2dd0911423331c39a8773b3127689f71f8444fa2d29093e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_dce38d41801c07a06d26f64503227e9f549340d52dc78e5521b93afd73cb227b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce38d41801c07a06d26f64503227e9f549340d52dc78e5521b93afd73cb227b->enter($__internal_dce38d41801c07a06d26f64503227e9f549340d52dc78e5521b93afd73cb227b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_dce38d41801c07a06d26f64503227e9f549340d52dc78e5521b93afd73cb227b->leave($__internal_dce38d41801c07a06d26f64503227e9f549340d52dc78e5521b93afd73cb227b_prof);

        
        $__internal_ea7f9f520f0742a2dd0911423331c39a8773b3127689f71f8444fa2d29093e35->leave($__internal_ea7f9f520f0742a2dd0911423331c39a8773b3127689f71f8444fa2d29093e35_prof);

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
