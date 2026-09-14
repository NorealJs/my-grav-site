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

/* partials/base.html.twig */
class __TwigTemplate_3c032ff997bb629e4532bc59f177c64e extends Template
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

        // line 7
        $_trait_0 = $this->load("blocks/base.html.twig", 7);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 7, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'header_navigation' => [$this, 'block_header_navigation'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["body_classes"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->bodyClassFunc($context, ["header-fixed", "header-animated", "header-transparent", "header-dark", "header-light", "sticky-footer"]);
        // line 2
        $context["theme_default"] = (((($tmp = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "theme-mode")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "theme-mode")) : ("auto"));
        // line 3
        $context["accent"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "accent-color");
        // line 4
        $context["accent_is_hex"] = ((($tmp = ($context["accent"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && CoreExtension::matches("/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6}|[0-9a-fA-F]{8})\$/", $this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 4, $this->source)));
        // line 5
        $context["fa_enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "fontawesome.enabled");
        // line 6
        $context["fa_local"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "fontawesome.local");
        // line 8
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 9
        yield (string) (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, true, 9), "getActive", [], "any", false, false, true, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, true, 9), "getActive", [], "any", false, false, true, 9), 9, $this->source), "html", null, true), 9, $this->source)) : ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, true, 9), "site", [], "any", false, false, true, 9), "default_lang", [], "any", false, false, true, 9), 9, $this->source), "html", null, true), 9, $this->source)));
        yield "\"
      data-theme-default=\"";
        // line 10
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["theme_default"] ?? null), 10, $this->source), "html", null, true), 10, $this->source);
        yield "\">
<head>
";
        // line 12
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 61
        yield "
";
        // line 62
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 75
        yield "
";
        // line 76
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 80
        yield "
";
        // line 81
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 85
        yield "</head>
<body id=\"top\" class=\"";
        // line 86
        yield from $this->unwrap()->yieldBlock('body_classes', $context, $blocks);
        yield "\">
    <div id=\"page-wrapper\">
    ";
        // line 88
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 119
        yield "
    ";
        // line 120
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 121
        yield "
        <main id=\"start\">
        ";
        // line 123
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 133
        yield "        </main>

    </div>

    ";
        // line 137
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 140
        yield "
    ";
        // line 141
        yield from $this->unwrap()->yieldBlock('mobile', $context, $blocks);
        // line 156
        yield "
";
        // line 157
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 160
        yield "</body>
</html>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'head');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    <meta charset=\"utf-8\" />
    <title>";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 14), 14, $this->source), "html"), 14, $this->source);
            yield " | ";
        }
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, true, 14), 14, $this->source), "html"), 14, $this->source);
        yield "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"color-scheme\" content=\"light dark\">

    ";
        // line 19
        yield from $this->load("partials/metadata.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/favicon.png"), 21, $this->source), "html", null, true), 21, $this->source);
        yield "\" />
    <link rel=\"canonical\" href=\"";
        // line 22
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, true, 22), 22, $this->source), "html", null, true), 22, $this->source);
        yield "\" />

    ";
        // line 25
        yield "    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"";
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://fonts/cal-sans/cal-sans-latin.woff2"), 25, $this->source), "html", null, true), 25, $this->source);
        yield "\" />
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"";
        // line 26
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://fonts/inter/inter-latin.woff2"), 26, $this->source), "html", null, true), 26, $this->source);
        yield "\" />

    ";
        // line 28
        if ((($tmp = ($context["accent_is_hex"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "    ";
            // line 30
            yield "    <style>
      :root {
        --q2-accent: ";
            // line 32
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 32, $this->source), "html", null, true), 32, $this->source);
            yield ";
        --q2-accent-contrast: #ffffff;
        --q2-link: ";
            // line 34
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 34, $this->source), "html", null, true), 34, $this->source);
            yield ";
        --q2-focus-ring: color-mix(in oklab, ";
            // line 35
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 35, $this->source), "html", null, true), 35, $this->source);
            yield " 45%, transparent);
      }
      :root[data-theme=\x27dark\x27] {
        --q2-accent: color-mix(in oklab, ";
            // line 38
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 38, $this->source), "html", null, true), 38, $this->source);
            yield " 80%, white 20%);
        --q2-accent-contrast: #ffffff;
        --q2-link: color-mix(in oklab, ";
            // line 40
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 40, $this->source), "html", null, true), 40, $this->source);
            yield " 75%, white 25%);
        --q2-focus-ring: color-mix(in oklab, ";
            // line 41
            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 41, $this->source), "html", null, true), 41, $this->source);
            yield " 45%, transparent);
      }
    </style>
    ";
        }
        // line 45
        yield "
    ";
        // line 47
        yield "    <script>
    (function () {
      try {
        var d = document.documentElement;
        var stored = localStorage.getItem(\x27quark2-theme\x27);
        var pref = stored || d.getAttribute(\x27data-theme-default\x27) || \x27auto\x27;
        var isDark = pref === \x27dark\x27 || (pref === \x27auto\x27 && window.matchMedia && window.matchMedia(\x27(prefers-color-scheme: dark)\x27).matches);
        d.setAttribute(\x27data-theme\x27, isDark ? \x27dark\x27 : \x27light\x27);
        d.setAttribute(\x27data-theme-preference\x27, pref);
        d.classList.toggle(\x27dark\x27, isDark);
      } catch (e) {}
    })();
    </script>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/fonts.css", 100], "method", false, false, true, 63);
        // line 64
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/blades.min.css", 95], "method", false, false, true, 64);
        // line 65
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/theme.css", 90], "method", false, false, true, 65);
        // line 66
        yield "    ";
        if ((($tmp = ($context["fa_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "        ";
            if ((($tmp = ($context["fa_local"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "            ";
                CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/fontawesome/all.min.css", 85], "method", false, false, true, 68);
                // line 69
                yield "        ";
            } else {
                // line 70
                yield "            ";
                CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css", 85], "method", false, false, true, 70);
                // line 71
                yield "        ";
            }
            // line 72
            yield "    ";
        }
        // line 73
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/custom.css", 80], "method", false, false, true, 73);
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/theme-toggle.js", ["group" => "head", "priority" => 100]], "method", false, false, true, 77);
        // line 78
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/site.js", ["group" => "bottom", "priority" => 100]], "method", false, false, true, 78);
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'assets');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "    ";
        yield (string) $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, true, 82), 82, $this->source), 82, $this->source);
        yield "
    ";
        // line 83
        yield (string) $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, true, 83), 83, $this->source), 83, $this->source);
        yield "
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["body_classes"] ?? null), 86, $this->source), "html", null, true), 86, $this->source);
        yield from [];
    }

    // line 88
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 89
        yield "        <header id=\"header\" class=\"section\">
            <div class=\"container\">
                <nav class=\"navbar\" aria-label=\"";
        // line 91
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.ARIA.PRIMARY_NAV"), 91, $this->source), "html_attr"), 91, $this->source);
        yield "\">
                    <div class=\"navbar-section logo\">
                        ";
        // line 93
        yield from $this->load("partials/logo.html.twig", 93)->unwrap()->yield($context);
        // line 94
        yield "                    </div>
                    <div class=\"navbar-section desktop-menu\">
                        <div class=\"dropmenu\">
                        ";
        // line 97
        yield from $this->unwrap()->yieldBlock('header_navigation', $context, $blocks);
        // line 100
        yield "                        </div>
                    </div>
                    <div class=\"navbar-section actions\">
                        ";
        // line 103
        yield from $this->load("partials/theme-toggle.html.twig", 103)->unwrap()->yield($context);
        // line 104
        yield "                        ";
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, true, 104), "login", [], "any", false, false, true, 104), "enabled", [], "any", false, false, true, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, true, 104), "username", [], "any", false, false, true, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 105
            yield "                            <span class=\"login-status-wrapper\"><i class=\"fa-solid fa-user\" aria-hidden=\"true\"></i> ";
            try {
                $_v0 = $this->load("partials/login-status.html.twig", 105);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield($context);
            }
            yield "</span>
                        ";
        }
        // line 107
        yield "                    </div>
                </nav>
            </div>
        </header>
        <div class=\"mobile-menu\">
            <button type=\"button\" class=\"button_container\" id=\"toggle\" aria-label=\"";
        // line 112
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.ARIA.OPEN_MENU"), 112, $this->source), "html_attr"), 112, $this->source);
        yield "\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </button>
        </div>
    ";
        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 98
        yield "                            ";
        yield from $this->load("partials/navigation.html.twig", 98)->unwrap()->yield($context);
        // line 99
        yield "                        ";
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 124
        yield "            <section id=\"body-wrapper\" class=\"section\">
                <div class=\"container\">
                    ";
        // line 126
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 129
        yield "                    ";
        yield from         $this->unwrap()->yieldBlock("content_surround", $context, $blocks);
        yield "
                </div>
            </section>
        ";
        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 127
        yield "                        ";
        try {
            $_v1 = $this->load("partials/messages.html.twig", 127);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v1 = null;
        }
        if ($_v1) {
            yield from $_v1->unwrap()->yield($context);
        }
        // line 128
        yield "                    ";
        yield from [];
    }

    // line 137
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 138
        yield "        ";
        yield from $this->load("partials/footer.html.twig", 138)->unwrap()->yield($context);
        // line 139
        yield "    ";
        yield from [];
    }

    // line 141
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mobile(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 142
        yield "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\" role=\"dialog\" aria-label=\"";
        // line 143
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.ARIA.MENU"), 143, $this->source), "html_attr"), 143, $this->source);
        yield "\">
            <div class=\"mobile-logo\">
                ";
        // line 145
        yield from $this->load("partials/logo.html.twig", 145)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 146
        yield "            </div>
            <nav class=\"overlay-menu\" aria-label=\"";
        // line 147
        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.ARIA.MOBILE_NAV"), 147, $this->source), "html_attr"), 147, $this->source);
        yield "\">
                ";
        // line 148
        yield from $this->load("partials/navigation.html.twig", 148)->unwrap()->yield(CoreExtension::merge($context, ["tree" => true]));
        // line 149
        yield "            </nav>
            <div style=\"margin-top:2rem;\">
                ";
        // line 151
        yield from $this->load("partials/theme-toggle.html.twig", 151)->unwrap()->yield(CoreExtension::merge($context, ["labeled" => true]));
        // line 152
        yield "            </div>
        </div>
    </div>
    ";
        yield from [];
    }

    // line 157
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 158
        yield "    ";
        yield (string) $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, true, 158), 158, $this->source), 158, $this->source);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
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
        return array (  577 => 158,  570 => 157,  562 => 152,  560 => 151,  556 => 149,  554 => 148,  550 => 147,  547 => 146,  545 => 145,  540 => 143,  537 => 142,  530 => 141,  525 => 139,  522 => 138,  515 => 137,  510 => 128,  499 => 127,  492 => 126,  482 => 129,  480 => 126,  476 => 124,  469 => 123,  459 => 120,  454 => 99,  451 => 98,  444 => 97,  432 => 112,  425 => 107,  411 => 105,  408 => 104,  406 => 103,  401 => 100,  399 => 97,  394 => 94,  392 => 93,  387 => 91,  383 => 89,  376 => 88,  365 => 86,  357 => 83,  352 => 82,  335 => 81,  329 => 78,  326 => 77,  319 => 76,  313 => 73,  310 => 72,  307 => 71,  304 => 70,  301 => 69,  298 => 68,  295 => 67,  292 => 66,  289 => 65,  286 => 64,  283 => 63,  276 => 62,  257 => 47,  254 => 45,  247 => 41,  243 => 40,  238 => 38,  232 => 35,  228 => 34,  223 => 32,  219 => 30,  217 => 29,  215 => 28,  210 => 26,  205 => 25,  200 => 22,  196 => 21,  193 => 20,  191 => 19,  179 => 14,  176 => 13,  159 => 12,  151 => 160,  149 => 157,  146 => 156,  144 => 141,  141 => 140,  139 => 137,  133 => 133,  131 => 123,  127 => 121,  125 => 120,  122 => 119,  120 => 88,  115 => 86,  112 => 85,  110 => 81,  107 => 80,  105 => 76,  102 => 75,  100 => 62,  97 => 61,  95 => 12,  90 => 10,  86 => 9,  83 => 8,  81 => 6,  79 => 5,  77 => 4,  75 => 3,  73 => 2,  71 => 1,  37 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set body_classes = body_class([\x27header-fixed\x27, \x27header-animated\x27, \x27header-transparent\x27, \x27header-dark\x27, \x27header-light\x27, \x27sticky-footer\x27]) %}
{% set theme_default = theme_var(\x27theme-mode\x27) ?: \x27auto\x27 %}
{% set accent = theme_var(\x27accent-color\x27) %}
{% set accent_is_hex = accent and accent matches \x27/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6}|[0-9a-fA-F]{8})\$/\x27 %}
{% set fa_enabled = theme_var(\x27fontawesome.enabled\x27) %}
{% set fa_local   = theme_var(\x27fontawesome.local\x27) %}
{% use \x27blocks/base.html.twig\x27 %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\"
      data-theme-default=\"{{ theme_default }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e(\x27html\x27) }} | {% endif %}{{ site.title|e(\x27html\x27) }}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"color-scheme\" content=\"light dark\">

    {% include \x27partials/metadata.html.twig\x27 %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url(\x27theme://images/favicon.png\x27) }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {# Preload the critical latin subsets so headings + body text render in-font on first paint #}
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"{{ url(\x27theme://fonts/cal-sans/cal-sans-latin.woff2\x27) }}\" />
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"{{ url(\x27theme://fonts/inter/inter-latin.woff2\x27) }}\" />

    {% if accent_is_hex %}
    {# User-configured accent: tint links, focus ring, and filled UI accents with the chosen hex #}
    <style>
      :root {
        --q2-accent: {{ accent }};
        --q2-accent-contrast: #ffffff;
        --q2-link: {{ accent }};
        --q2-focus-ring: color-mix(in oklab, {{ accent }} 45%, transparent);
      }
      :root[data-theme=\x27dark\x27] {
        --q2-accent: color-mix(in oklab, {{ accent }} 80%, white 20%);
        --q2-accent-contrast: #ffffff;
        --q2-link: color-mix(in oklab, {{ accent }} 75%, white 25%);
        --q2-focus-ring: color-mix(in oklab, {{ accent }} 45%, transparent);
      }
    </style>
    {% endif %}

    {# Pre-paint theme bootstrap — blocks FOUC by setting data-theme synchronously #}
    <script>
    (function () {
      try {
        var d = document.documentElement;
        var stored = localStorage.getItem(\x27quark2-theme\x27);
        var pref = stored || d.getAttribute(\x27data-theme-default\x27) || \x27auto\x27;
        var isDark = pref === \x27dark\x27 || (pref === \x27auto\x27 && window.matchMedia && window.matchMedia(\x27(prefers-color-scheme: dark)\x27).matches);
        d.setAttribute(\x27data-theme\x27, isDark ? \x27dark\x27 : \x27light\x27);
        d.setAttribute(\x27data-theme-preference\x27, pref);
        d.classList.toggle(\x27dark\x27, isDark);
      } catch (e) {}
    })();
    </script>
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss(\x27theme://css/fonts.css\x27, 100) %}
    {% do assets.addCss(\x27theme://css/blades.min.css\x27, 95) %}
    {% do assets.addCss(\x27theme://css/theme.css\x27, 90) %}
    {% if fa_enabled %}
        {% if fa_local %}
            {% do assets.addCss(\x27theme://css/fontawesome/all.min.css\x27, 85) %}
        {% else %}
            {% do assets.addCss(\x27https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css\x27, 85) %}
        {% endif %}
    {% endif %}
    {% do assets.addCss(\x27theme://css/custom.css\x27, 80) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs(\x27theme://js/theme-toggle.js\x27, {group:\x27head\x27, priority: 100}) %}
    {% do assets.addJs(\x27theme://js/site.js\x27, {group:\x27bottom\x27, priority: 100}) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <header id=\"header\" class=\"section\">
            <div class=\"container\">
                <nav class=\"navbar\" aria-label=\"{{ \x27THEME_QUARK2.ARIA.PRIMARY_NAV\x27|t|e(\x27html_attr\x27) }}\">
                    <div class=\"navbar-section logo\">
                        {% include \x27partials/logo.html.twig\x27 %}
                    </div>
                    <div class=\"navbar-section desktop-menu\">
                        <div class=\"dropmenu\">
                        {% block header_navigation %}
                            {% include \x27partials/navigation.html.twig\x27 %}
                        {% endblock %}
                        </div>
                    </div>
                    <div class=\"navbar-section actions\">
                        {% include \x27partials/theme-toggle.html.twig\x27 %}
                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa-solid fa-user\" aria-hidden=\"true\"></i> {% include \x27partials/login-status.html.twig\x27 ignore missing %}</span>
                        {% endif %}
                    </div>
                </nav>
            </div>
        </header>
        <div class=\"mobile-menu\">
            <button type=\"button\" class=\"button_container\" id=\"toggle\" aria-label=\"{{ \x27THEME_QUARK2.ARIA.OPEN_MENU\x27|t|e(\x27html_attr\x27) }}\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </button>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <main id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <div class=\"container\">
                    {% block messages %}
                        {% include \x27partials/messages.html.twig\x27 ignore missing %}
                    {% endblock %}
                    {{ block(\x27content_surround\x27) }}
                </div>
            </section>
        {% endblock %}
        </main>

    </div>

    {% block footer %}
        {% include \x27partials/footer.html.twig\x27 %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\" role=\"dialog\" aria-label=\"{{ \x27THEME_QUARK2.ARIA.MENU\x27|t|e(\x27html_attr\x27) }}\">
            <div class=\"mobile-logo\">
                {% include \x27partials/logo.html.twig\x27 with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\" aria-label=\"{{ \x27THEME_QUARK2.ARIA.MOBILE_NAV\x27|t|e(\x27html_attr\x27) }}\">
                {% include \x27partials/navigation.html.twig\x27 with {tree: true} %}
            </nav>
            <div style=\"margin-top:2rem;\">
                {% include \x27partials/theme-toggle.html.twig\x27 with {labeled: true} %}
            </div>
        </div>
    </div>
    {% endblock %}

{% block bottom %}
    {{ assets.js(\x27bottom\x27)|raw }}
{% endblock %}
</body>
</html>
", "partials/base.html.twig", "C:\\laragon\\www\\LARAGON_WORKSPACE\\grav\\user\\themes\\quark2\\templates\\partials\\base.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "use" => 7, "block" => 12, "if" => 14, "include" => 19, "do" => 63];
        static $filters = ["escape" => 9, "e" => 14, "raw" => 82, "t" => 91];
        static $functions = ["body_class" => 1, "theme_var" => 2, "url" => 21, "block" => 129];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "use", 2 => "block", 3 => "if", 4 => "include", 5 => "do"],
                [0 => "escape", 1 => "e", 2 => "raw", 3 => "t"],
                [0 => "body_class", 1 => "theme_var", 2 => "url", 3 => "block"],
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
    private $deferred;
}
