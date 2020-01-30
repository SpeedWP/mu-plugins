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
```

## Github Updater Plugin Installation

![Github Updater](https://github.com/afragen/github-updater/raw/develop/assets/GitHub_Updater_logo_small.png)

Dieses Plugin kann mit [Github Updater](https://github.com/afragen/github-updater) installiert und aktualisiert werden ([Installationsanleitung](https://github.com/afragen/github-updater/wiki/Installation))

### Installation Anweisungen

*Schritt 1: Github Updater und erstes Optimierungs-Plugin installieren*

Die Installation und Aktualisierung der Plugins ist mit dem Github Updater möglich. Es ist einfach, eines der Plugins zu installieren. Sie müssen lediglich das Github Updater-Plugin herunterladen ([zip-Datei](https://github.com/afragen/github-updater/archive/develop.zip)), es aus dem WordPress-Plugin-Verwaltungsfenster installieren und die Github-URL des Plugins in das Github Updater-Installationsprogramm kopieren.

```bash
su www-data
cd ~/pagespeed.plus/htdocs
wp plugin install --activate https://github.com/afragen/github-updater/archive/develop.zip
```

![Bild](https://user-images.githubusercontent.com/8843669/39889846-46158cc2-5499-11e8-824d-720020f758db.png)

*Schritt 2: Weitere Optimierungs-Plugins mit einem Klick installieren*

Ein aktuelles Update aller Plugins enthält einen einfachen Ein-Klick-Installations-Button.
![image](https://user-images.githubusercontent.com/8843669/39661507-cc1eac5e-5052-11e8-8fba-33c0cc959b07.png)
</details>

#### Plugin Repo Links

- https://github.com/o10n-x/wordpress-font-optimization.git
- https://github.com/o10n-x/wordpress-http2-optimization.git
- https://github.com/o10n-x/wordpress-security-header-optimization.git
- https://github.com/o10n-x/wordpress-css-optimization.git
- https://github.com/o10n-x/wordpress-javascript-optimization.git
- https://github.com/o10n-x/wordpress-file-page-cache.git
- https://github.com/o10n-x/wordpress-html-optimization.git
- https://github.com/o10n-x/wordpress-pwa-optimization.git
- https://github.com/o10n-x/wordpress-nginx-config-editor.git

* * *
