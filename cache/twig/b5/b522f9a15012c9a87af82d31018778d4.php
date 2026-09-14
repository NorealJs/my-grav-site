<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* partials/theme-toggle.html.twig */
class __TwigTemplate_b75226175611f1c94c346f955f0f8f5b extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["labeled"] = ((array_key_exists("labeled", $context)) ? ($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["labeled"] ?? null), 1, $this->source), false), 1, $this->source)) : (false));
        // line 6
        yield "<button type=\"button\"
        class=\"theme-toggle\"
        data-theme-toggle
        data-label-auto=\"";
        // line 9
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.THEME_TOGGLE.AUTO"), 9, $this->source), "html_attr"), 9, $this->source);
        yield "\"
        data-label-light=\"";
        // line 10
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.THEME_TOGGLE.LIGHT"), 10, $this->source), "html_attr"), 10, $this->source);
        yield "\"
        data-label-dark=\"";
        // line 11
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.THEME_TOGGLE.DARK"), 11, $this->source), "html_attr"), 11, $this->source);
        yield "\"
        data-aria-template=\"";
        // line 12
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.THEME_TOGGLE.ARIA_LABEL"), 12, $this->source), "html_attr"), 12, $this->source);
        yield "\"
        data-title-template=\"";
        // line 13
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.THEME_TOGGLE.TITLE"), 13, $this->source), "html_attr"), 13, $this->source);
        yield "\"
        aria-label=\"";
        // line 14
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.THEME_TOGGLE.LABEL"), 14, $this->source), "html_attr"), 14, $this->source);
        yield "\"
        title=\"";
        // line 15
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.THEME_TOGGLE.LABEL"), 15, $this->source), "html_attr"), 15, $this->source);
        yield "\">
    ";
        // line 17
        yield "    <i class=\"icon icon-sun   fa-solid fa-sun\"   aria-hidden=\"true\"></i>
    <i class=\"icon icon-moon  fa-solid fa-moon\"  aria-hidden=\"true\"></i>
    <i class=\"icon icon-auto  fa-solid fa-circle-half-stroke\" aria-hidden=\"true\"></i>
    ";
        // line 20
        if ((($tmp = ($context["labeled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span style=\"margin-left:.5rem;\">";
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.THEME_TOGGLE.LABEL"), 20, $this->source), "html", null, true), 20, $this->source);
            yield "</span>";
        }
        // line 21
        yield "</button>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/theme-toggle.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  91 => 21,  85 => 20,  80 => 17,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  47 => 6,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set labeled = labeled|default(false) %}
{# Mode names and the sentences built from them are passed to theme-toggle.js as
   data attributes, because the button\x27s label changes on click and the script
   has no access to Grav\x27s translations. A child theme overriding
   THEME_QUARK2.THEME_TOGGLE.* in its own languages.yaml changes both. #}
<button type=\"button\"
        class=\"theme-toggle\"
        data-theme-toggle
        data-label-auto=\"{{ \x27THEME_QUARK2.THEME_TOGGLE.AUTO\x27|t|e(\x27html_attr\x27) }}\"
        data-label-light=\"{{ \x27THEME_QUARK2.THEME_TOGGLE.LIGHT\x27|t|e(\x27html_attr\x27) }}\"
        data-label-dark=\"{{ \x27THEME_QUARK2.THEME_TOGGLE.DARK\x27|t|e(\x27html_attr\x27) }}\"
        data-aria-template=\"{{ \x27THEME_QUARK2.THEME_TOGGLE.ARIA_LABEL\x27|t|e(\x27html_attr\x27) }}\"
        data-title-template=\"{{ \x27THEME_QUARK2.THEME_TOGGLE.TITLE\x27|t|e(\x27html_attr\x27) }}\"
        aria-label=\"{{ \x27THEME_QUARK2.THEME_TOGGLE.LABEL\x27|t|e(\x27html_attr\x27) }}\"
        title=\"{{ \x27THEME_QUARK2.THEME_TOGGLE.LABEL\x27|t|e(\x27html_attr\x27) }}\">
    {# Sun (light), Moon (dark), Adjust (auto) — Font Awesome 7 free #}
    <i class=\"icon icon-sun   fa-solid fa-sun\"   aria-hidden=\"true\"></i>
    <i class=\"icon icon-moon  fa-solid fa-moon\"  aria-hidden=\"true\"></i>
    <i class=\"icon icon-auto  fa-solid fa-circle-half-stroke\" aria-hidden=\"true\"></i>
    {% if labeled %}<span style=\"margin-left:.5rem;\">{{ \x27THEME_QUARK2.THEME_TOGGLE.LABEL\x27|t }}</span>{% endif %}
</button>
", "partials/theme-toggle.html.twig", "C:\\laragon\\www\\LARAGON_WORKSPACE\\grav\\user\\themes\\quark2\\templates\\partials\\theme-toggle.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 20];
        static $filters = ["default" => 1, "e" => 9, "t" => 9, "escape" => 20];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "default", 1 => "e", 2 => "t", 3 => "escape"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
