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

/* partials/logo.html.twig */
class __TwigTemplate_50c40810a3b947b3dbc4ceaff75574b6 extends Template
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
        $context["logo"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, (((($tmp = ($context["mobile"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("custom_logo_mobile") : ("custom_logo")));
        // line 2
        $context["logo_first"] = (((is_iterable(($context["logo"] ?? null)) && ($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::length($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 2, $this->source)), 2, $this->source) > 0))) ? (Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 2, $this->source))) : (null));
        // line 3
        $context["logo_file"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["logo_first"] ?? null), "name", [], "any", true, true, true, 3)) ? ($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["logo_first"] ?? null), "name", [], "any", false, false, true, 3), 3, $this->source), null), 3, $this->source)) : (null));
        // line 4
        yield "<a href=\"";
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["home_url"] ?? null), 4, $this->source), "html", null, true), 4, $this->source);
        yield "\" class=\"navbar-brand\" aria-label=\"";
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true), 4, $this->source);
        yield "\" title=\"";
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, true, 4), 4, $this->source), "html", null, true), 4, $this->source);
        yield "\">
";
        // line 5
        if ((($tmp = ($context["logo_file"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield "    ";
            if ((is_string($_v0 = Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(($context["logo_file"] ?? null), 6, $this->source))) && is_string($_v1 = ".svg") && str_ends_with($_v0, $_v1))) {
                // line 7
                yield "        ";
                yield (string) $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(Grav\Common\Twig\Extension\GravExtension::svgImageFunction(("theme://images/logo/" . $this->sandbox->ensureToStringAllowed(($context["logo_file"] ?? null), 7, $this->source))), 7, $this->source), 7, $this->source);
                yield "
    ";
            } else {
                // line 9
                yield "        <img src=\"";
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc(("theme://images/logo/" . $this->sandbox->ensureToStringAllowed(($context["logo_file"] ?? null), 9, $this->source))), 9, $this->source), "html", null, true), 9, $this->source);
                yield "\" alt=\"";
                yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true), 9, $this->source);
                yield "\" />
    ";
            }
        } else {
            // line 12
            yield "    ";
            try {
                $_v2 = $this->load("@images/grav-logo.svg", 12);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v2 = null;
            }
            if ($_v2) {
                yield from $_v2->unwrap()->yield($context);
            }
        }
        // line 14
        yield "</a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/logo.html.twig";
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
        return array (  92 => 14,  80 => 12,  71 => 9,  65 => 7,  62 => 6,  60 => 5,  51 => 4,  49 => 3,  47 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set logo = theme_var(mobile ? \x27custom_logo_mobile\x27 : \x27custom_logo\x27) %}
{% set logo_first = (logo is iterable and logo|length > 0) ? logo|first : null %}
{% set logo_file = logo_first.name|default(null) %}
<a href=\"{{ home_url }}\" class=\"navbar-brand\" aria-label=\"{{ site.title }}\" title=\"{{ site.title }}\">
{% if logo_file %}
    {% if logo_file|lower ends with \x27.svg\x27 %}
        {{ svg_image(\x27theme://images/logo/\x27 ~ logo_file)|raw }}
    {% else %}
        <img src=\"{{ url(\x27theme://images/logo/\x27 ~ logo_file) }}\" alt=\"{{ site.title }}\" />
    {% endif %}
{% else %}
    {% include \x27@images/grav-logo.svg\x27 ignore missing %}
{% endif %}
</a>
", "partials/logo.html.twig", "C:\\laragon\\www\\LARAGON_WORKSPACE\\grav\\user\\themes\\quark2\\templates\\partials\\logo.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 5, "include" => 12];
        static $filters = ["length" => 2, "first" => 2, "default" => 3, "escape" => 4, "lower" => 6, "raw" => 7];
        static $functions = ["theme_var" => 1, "svg_image" => 7, "url" => 9];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "include"],
                [0 => "length", 1 => "first", 2 => "default", 3 => "escape", 4 => "lower", 5 => "raw"],
                [0 => "theme_var", 1 => "svg_image", 2 => "url"],
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
