# mu-plugins

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
