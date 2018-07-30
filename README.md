# mu-plugins

## WordPress WPO Collection

Dieses Plugin ist Teil einer Website-Performance-Optimierungssammlung, die die Optimierungen[CSS](https://github.com/o10n-x/wordpress-css-optimization),[Javascript)](https://github.com/o10n-x/wordpress-javascript-optimization),[HTML](https://github.com/o10n-x/wordpress-html-optimization),[Web Font](https://github.com/o10n-x/wordpress-font-optimization),[HTTP/2](https://github.com/o10n-x/wordpress-http2-optimization) und [Security Header](https://github.com/o10n-x/wordpress-security-header-optimization) enthält. 

The WPO optDie WPO-Optimierungs-Plugins enthalten alle wesentlichen Werkzeuge, die es ermöglichen, perfekte Ergebnisse zu erzielen (Google Lighthouse Test](https://developers.google.com/web/tools/lighthouse/) und eine Website als[Google PWA](https://developers.google.com/web/progressive-web-apps/) zu validieren, ein wichtiger Rankingfaktor für Googles[Speed Update](https://searchengineland.com/google-speed-update-page-speed-will-become-ranking-factor-mobile-search-289904) (Juli 2018).
imization plugins provide in all essential tools that enable to achieve perfect [Google Lighthouse Test](https://developers.google.com/web/tools/lighthouse/) scores and to validate a website as [Google PWA](https://developers.google.com/web/progressive-web-apps/), an important ranking factor for Google's [Speed Update](https://searchengineland.com/google-speed-update-page-speed-will-become-ranking-factor-mobile-search-289904) (July 2018).

![Google Lighthouse Perfect Performance Scores](https://github.com/o10n-x/wordpress-css-optimization/blob/master/docs/images/google-lighthouse-pwa-validation.jpg)

Die WPO-Optimierungs-Plugins sind so konzipiert, dass sie mit der Leistung eines einzelnen Plugins zusammenarbeiten. Die Plugins bieten die neuesten Optimierungstechnologien und viele einzigartige Innovationen.

JSON-Konfiguration

100% der WPO-Plugin-Einstellungen werden von JSON gesteuert. Das bedeutet, dass Sie die Plugins auch ohne die WordPress-Admin-Formulare verwenden können.

Der JSON wird mit Hilfe von JSON-Schemas verifiziert. Mehr Informationen über [JSON-Schemata] (https://github.com/o10n-x/wordpress-o10n-core/tree/master/schemas).

Lokale Bearbeitung von Optimierungseinstellungen

Ein kürzlich hinzugefügtes[Stealth Optimization Config Proxy](https://github.com/o10n-x/wordpress-http2-optimization/releases/tag/0.0.55) Konzept ermöglicht es, die Plugin-Einstellungen mit Hilfe von physischen `.json` Dateien aus einem lokalen Editor (mit automatischem Upload) zu bearbeiten, was es effizient für die Feinabstimmung von Optimierungseinstellungen macht. Ein Update würde eine Sekunde kosten, verglichen mit dem Verwenden + Speichern eines WordPress Admin-Panels.

https://github.com/o10n-x/wordpress-http2-optimization/releases/tag/0.0.55

## Google PageSpeed vs Google Lighthouse Scores

Während ein Google PageSpeed 100 Score immer noch von Wert ist, können Websites mit einem hohen Google PageSpeed Score im neuen Google[Lighthouse Performance Test] (https://developers.google.com/web/tools/lighthouse/) sehr schlecht abschneiden. 

Die folgenden Punkte sind für die gleiche Seite. Es zeigt, dass ein perfekter Google PageSpeed Score nicht mit einem hohen Google Lighthouse Performance Score korreliert.

Perfect Google PageSpeed 100 Score](https://github.com/o10n-x/wordpress-css-optimization/blob/master/docs/images/google-pagespeed-100.png) ![Google Lighthouse Critical Performance Score](https://github.com/o10n-x/wordpress-css-optimization/blob/master/docs/images/lighthouse-performance-15.png)

### Google PageSpeed Ergebnis ist veraltet

Damit das offene Web eine Überlebenschance in einer mobilen Ära hat, muss es mit nativen mobilen Anwendungen konkurrieren und siegen. Google ist für seine Werbeeinnahmen auf das offene Web angewiesen. Google sucht daher einen Weg, das offene Web zu sichern, und das Hauptziel ist es, die Qualität des offenen Webs schnell zu verbessern, um die Standards der nativen mobilen Anwendungen zu erfüllen.

Für SEO ist es daher einfach: Websites müssen den Standards des[Google Lighthouse Test] (https://developers.google.com/web/tools/lighthouse/) (oder den zukünftigen neuen Tests von Google) entsprechen. Eine Website mit perfekten Ergebnissen wird bei der Suche gegenüber Websites mit geringer Leistung bevorzugt. Das offiziell angekündigte[Google Speed Update] (https://searchengineland.com/google-speed-update-page-speed-will-become-ranking-factor-mobile-search-289904) (Juli 2018) zeigt, dass Google so weit wie möglich geht, um die Menschen dazu zu bringen, die Qualität auf höchstem Niveau zu verbessern, die Qualität von und hoffentlich auch die einheimischen mobilen Anwendungen zu übertreffen.

Ein perfekter Google Lighthouse Score beinhaltet die Validierung einer Website als[Progressive Web App (PWA)] (https://developers.google.com/web/progressive-web-apps/).

Google bietet einen weiteren neuen Website-Leistungstest an, der viel härter ist als der Google PageSpeed-Score. Es basiert auf einem neuronalen KI-Netzwerk und kann unter https://testmysite.thinkwithgoogle.com abgerufen werden.

## Stealth-Optimierungs-Plugin-Konzept

Die kürzlich hinzugefügte Methode \O10n\config( [....]); ermöglicht es, physische JSON-Dateien zur Bearbeitung der Konfiguration zu verwenden. Dies würde es ermöglichen, die Einstellungen von einem lokalen Editor aus zu aktualisieren (mit automatischem Upload), was eine effiziente Feinabstimmung der Optimierungseinstellungen ermöglicht. Ein Update würde eine Sekunde kosten, verglichen mit dem Verwenden + Speichern eines WordPress Admin-Panels.

Das folgende Konzept verwendet ein unsichtbares WordPress-Plugin über den `mu-plugin`-Ordner.

https://codex.wordpress.org/Must_Verwendung_Plugins

Das Stealth-Plugin würde eine Art Optimierungs-Proxy zur Verfügung stellen. Sie können die Konfiguration manuell aus dem Plugin heraus eingeben, indem Sie PHP-Dateien aus dem Theme-Verzeichnis einbinden, oder Sie können einen benutzerdefinierten physischen JSON-Konfigurationsdatei-Proxy verwenden, wie im folgenden Beispiel gezeigt.

Genau wie bei `.css`-Dateien können Sie mehrere `.json`-Dateien verwenden, die Teile der Optimierungseinstellungen enthalten. Dies erleichtert die Verwaltung von Tausenden von Einstellungen.

Sie können die Dateien in einem Verzeichnis Ihrer Wahl speichern, z.B. `/wp-content/optimization-config/`.

```bash
su www-data
cd ~/pagespeed.plus/htdocs
git clone https://github.com/SpeedWP/mu-plugins.git
wp plugin install --activate https://github.com/afragen/github-updater/archive/develop.zip
```
## WordPress WPO Kollektion Installation

![Github Updater](https://github.com/afragen/github-updater/raw/develop/assets/GitHub_Updater_logo_small.png)

Dieses Plugin kann mit [Github Updater](https://github.com/afragen/github-updater) installiert und aktualisiert werden ([Installationsanleitung](https://github.com/afragen/github-updater/wiki/Installation))

### Installation Anweisungen

*Schritt 1: Github Updater und erstes Optimierungs-Plugin installieren*

Die Installation und Aktualisierung der Plugins ist mit dem Github Updater möglich. Es ist einfach, eines der Plugins zu installieren. Sie müssen lediglich das Github Updater-Plugin herunterladen ([zip-Datei](https://github.com/afragen/github-updater/archive/develop.zip)), es aus dem WordPress-Plugin-Verwaltungsfenster installieren und die Github-URL des Plugins in das Github Updater-Installationsprogramm kopieren.

![Bild](https://user-images.githubusercontent.com/8843669/39889846-46158cc2-5499-11e8-824d-720020f758db.png)

*Schritt 2: Weitere Optimierungs-Plugins mit einem Klick installieren*

Ein aktuelles Update aller Plugins enthält einen einfachen Ein-Klick-Installations-Button.
![image](https://user-images.githubusercontent.com/8843669/39661507-cc1eac5e-5052-11e8-8fba-33c0cc959b07.png)
</details>

### Plugin Repo Links

https://github.com/o10n-x/wordpress-font-optimization.git
https://github.com/o10n-x/wordpress-http2-optimization.git
https://github.com/o10n-x/wordpress-security-header-optimization.git
https://github.com/o10n-x/wordpress-css-optimization.git
https://github.com/o10n-x/wordpress-javascript-optimization.git
https://github.com/o10n-x/wordpress-file-page-cache.git
https://github.com/o10n-x/wordpress-html-optimization.git
https://github.com/o10n-x/wordpress-pwa-optimization.git
https://github.com/o10n-x/wordpress-nginx-config-editor.git


