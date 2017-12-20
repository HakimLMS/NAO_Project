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
        $__internal_051d0479e8511a14f87f620d378ad82a042046341fb0bbcbe98532a122d310d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051d0479e8511a14f87f620d378ad82a042046341fb0bbcbe98532a122d310d2->enter($__internal_051d0479e8511a14f87f620d378ad82a042046341fb0bbcbe98532a122d310d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_d0c1f8ede209fc389603723153d4a49c2704513a0304db1c43a93f97fe369a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c1f8ede209fc389603723153d4a49c2704513a0304db1c43a93f97fe369a66->enter($__internal_d0c1f8ede209fc389603723153d4a49c2704513a0304db1c43a93f97fe369a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_051d0479e8511a14f87f620d378ad82a042046341fb0bbcbe98532a122d310d2->leave($__internal_051d0479e8511a14f87f620d378ad82a042046341fb0bbcbe98532a122d310d2_prof);

        
        $__internal_d0c1f8ede209fc389603723153d4a49c2704513a0304db1c43a93f97fe369a66->leave($__internal_d0c1f8ede209fc389603723153d4a49c2704513a0304db1c43a93f97fe369a66_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_71ceaf15a1fdc8d9630b0bd4301ddaea8fc5dd6af2d8ea14c72164d11b13a2d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ceaf15a1fdc8d9630b0bd4301ddaea8fc5dd6af2d8ea14c72164d11b13a2d4->enter($__internal_71ceaf15a1fdc8d9630b0bd4301ddaea8fc5dd6af2d8ea14c72164d11b13a2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bf33cfac3e45771f4adaf50ac2b6a9d042db1b79b03b8c2d54caaa4504b2f05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf33cfac3e45771f4adaf50ac2b6a9d042db1b79b03b8c2d54caaa4504b2f05e->enter($__internal_bf33cfac3e45771f4adaf50ac2b6a9d042db1b79b03b8c2d54caaa4504b2f05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_bf33cfac3e45771f4adaf50ac2b6a9d042db1b79b03b8c2d54caaa4504b2f05e->leave($__internal_bf33cfac3e45771f4adaf50ac2b6a9d042db1b79b03b8c2d54caaa4504b2f05e_prof);

        
        $__internal_71ceaf15a1fdc8d9630b0bd4301ddaea8fc5dd6af2d8ea14c72164d11b13a2d4->leave($__internal_71ceaf15a1fdc8d9630b0bd4301ddaea8fc5dd6af2d8ea14c72164d11b13a2d4_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0299513e76b21d9d395980787f36781dccb7c289ec159d7991fd378b42bd6d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0299513e76b21d9d395980787f36781dccb7c289ec159d7991fd378b42bd6d36->enter($__internal_0299513e76b21d9d395980787f36781dccb7c289ec159d7991fd378b42bd6d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f5a7e76c278280b173649c3c12cdf8aa22ad823643b4857b32a115fe3cebd076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a7e76c278280b173649c3c12cdf8aa22ad823643b4857b32a115fe3cebd076->enter($__internal_f5a7e76c278280b173649c3c12cdf8aa22ad823643b4857b32a115fe3cebd076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_f5a7e76c278280b173649c3c12cdf8aa22ad823643b4857b32a115fe3cebd076->leave($__internal_f5a7e76c278280b173649c3c12cdf8aa22ad823643b4857b32a115fe3cebd076_prof);

        
        $__internal_0299513e76b21d9d395980787f36781dccb7c289ec159d7991fd378b42bd6d36->leave($__internal_0299513e76b21d9d395980787f36781dccb7c289ec159d7991fd378b42bd6d36_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_eb1ab5feef9779879002d9d18578e92d05203e1709fa0570aa6d3c894103fa46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1ab5feef9779879002d9d18578e92d05203e1709fa0570aa6d3c894103fa46->enter($__internal_eb1ab5feef9779879002d9d18578e92d05203e1709fa0570aa6d3c894103fa46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_ab528f9a98347635dcffaa758bb839ed5bf5706e83e5a25a8995e2d6bb5847b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab528f9a98347635dcffaa758bb839ed5bf5706e83e5a25a8995e2d6bb5847b4->enter($__internal_ab528f9a98347635dcffaa758bb839ed5bf5706e83e5a25a8995e2d6bb5847b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_ab528f9a98347635dcffaa758bb839ed5bf5706e83e5a25a8995e2d6bb5847b4->leave($__internal_ab528f9a98347635dcffaa758bb839ed5bf5706e83e5a25a8995e2d6bb5847b4_prof);

        
        $__internal_eb1ab5feef9779879002d9d18578e92d05203e1709fa0570aa6d3c894103fa46->leave($__internal_eb1ab5feef9779879002d9d18578e92d05203e1709fa0570aa6d3c894103fa46_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_5ce10ffe74475ee790ea099f074a555596f66d6c6e3a7b1a8486b91b284b8c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce10ffe74475ee790ea099f074a555596f66d6c6e3a7b1a8486b91b284b8c3e->enter($__internal_5ce10ffe74475ee790ea099f074a555596f66d6c6e3a7b1a8486b91b284b8c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_5717ad33c711292c68cc9461f5c08e58016cd906c888b51c241a5a8ef35ad6c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5717ad33c711292c68cc9461f5c08e58016cd906c888b51c241a5a8ef35ad6c7->enter($__internal_5717ad33c711292c68cc9461f5c08e58016cd906c888b51c241a5a8ef35ad6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_5717ad33c711292c68cc9461f5c08e58016cd906c888b51c241a5a8ef35ad6c7->leave($__internal_5717ad33c711292c68cc9461f5c08e58016cd906c888b51c241a5a8ef35ad6c7_prof);

        
        $__internal_5ce10ffe74475ee790ea099f074a555596f66d6c6e3a7b1a8486b91b284b8c3e->leave($__internal_5ce10ffe74475ee790ea099f074a555596f66d6c6e3a7b1a8486b91b284b8c3e_prof);

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
