<?php include 'zz1.php'; ?>
<title>Regeln | Ballmanager.de</title>
<?php include 'zz2.php'; ?>
<?php
if ($loggedin == 1) {
	if (isset($_POST['acceptedRules'])) {
		if ($_POST['acceptedRules'] == 1) {
			$sql1 = "UPDATE ".$prefix."users SET acceptedRules = 1 WHERE ids = '".$cookie_id."'";
			$sql2 = mysql_query($sql1);
			if (mysql_affected_rows() == 1) {
				$_SESSION['acceptedRules'] = 1;
			}
		}
	}
	if (isset($_SESSION['acceptedRules'])) {
		if ($_SESSION['acceptedRules'] == 0) {
			echo '<h1>Regeln akzeptieren</h1>';
			echo '<form action="/regeln.php" method="post" accept-charset="utf-8">';
			echo '<p><select name="acceptedRules" size="1" style="width:350px">';
			echo '<option value="0">- Bitte bestätigen -</option>';
			echo '<option value="1">Ich habe die unten stehenden Regeln gelesen</option>';
			echo '</select></p>';
			echo '<p><input type="submit" value="Regeln akzeptieren"'.noDemoClick($cookie_id).' /></p>';
			echo '</form>';
			echo '<p>Du kannst leider nur am Spiel teilnehmen, wenn Du unsere aktuellen Regeln akzeptierst. Ansonsten empfehlen wir Dir, Deinen Account unter &quot;Einstellungen&quot; zu löschen.</p>';
		}
	}
}
?>
<h1 id="regeln">Nutzungsregeln</h1>
<p>Diese Nutzungsbedingungen (&quot;Regeln&quot;) legen fest, wie Du (&quot;der User&quot;) die Webseite unter www.ballmanager.de (&quot;Ballmanager&quot;) nutzen darfst. Mit der Nutzung dieser Webseite erklärst Du, dass Du mit den Regeln auf dieser Seite einverstanden bist.</p>
<p>Bitte lies die Regeln sorgfältig durch, denn sie müssen eingehalten werden, damit alles fair bleibt und jeder Spaß am Spiel hat.</p>
<p><strong>Teil I: Allgemeines Verhalten</strong></p>
<ol>
<li>Pro Person ist nur ein einziger Account (Benutzerkonto) erlaubt. Freunde und Verwandte dürfen natürlich mitspielen, auch wenn sie vom gleichen Internetanschluss aus spielen.</li>
<li>Im Spiel kann mit anderen Usern kommuniziert werden. Dabei sollte man auf einen höflichen Umgangston achten und sich an die <a href="http://de.wikipedia.org/wiki/Netiquette">Netiquette</a> halten.</li>
<li>Du darfst andere User nicht diskriminieren, etwa wegen ihrer Herkunft, ihrer Hautfarbe, ihres Geschlechts oder ihrer Religion.</li>
<li>Die Veröffentlichung privater Inhalte (Post etc.) oder realer Namen von anderen Usern ohne deren Einverständnis ist nicht gestattet.</li>
<li>Team-Mitglieder dürfen nicht (persönlich) angegriffen werden, ihre Entscheidungen sind zu akzeptieren.</li>
<li>Kritik im Forum muss sachlich erfolgen und darf keine persönliche Wertung enthalten. Jeder soll sich seine Meinung selbst bilden können, &quot;Meinungsmache&quot; ist nicht erwünscht.</li>
<li>Du versicherst, dass Du andere Personen (vor allem andere User) nicht beleidigen oder belästigen wirst.</li>
<li>Du bist dazu verpflichtet, Deine Zugangsdaten zu schützen und diese geheim zu halten, sodass Dritte keinen Zugang zu Deinem Account haben.</li>
<li>Der Missbrauch der Melden-Funktion im Chat (REPORT Username) ist verboten.</li>
<li>Politische Diskussionen sind in keinem Bereich der Webseite gestattet.</li>
<li>Es ist verboten, bewusst falsche Informationen zu verbreiten.</li>
<li>Das Einstellen von jugendgefährdenden, gewaltverherrlichenden oder in sonstiger Weise rechtsverletzenden Inhalten ist strengstens verboten.</li>
<li>In allen Bereichen, in denen öffentlich kommuniziert werden kann, sind nur deutsche und englische Mitteilungen erlaubt. Denn die Kommunikation soll für jeden User nachvollziehbar bleiben.</li>
</ol>
<p><strong>Teil II: Verhalten in der Spielwelt</strong></p>
<ol>
<li>Transfers mit anderen Nutzern, die vom selben Internetanschluss aus spielen, sind nicht gestattet.</li>
<li>Es ist nicht erlaubt, bei der Wahl zum <i>Manager der Saison</i> für Manager abzustimmen, die vom selben Internetanschluss aus spielen.</li>
<li>Es ist verboten, absichtlich schwache (oder sogar unvollständige) Aufstellungen einzustellen, um anderen Teams dadurch einen Vorteil zu verschaffen.</li>
<li>Das Ausnutzen von Fehlern in der Programmierung (&quot;Bugs&quot;) ist verboten. Die Fehler sollten sofort gemeldet werden.</li>
<li>Es dürfen keine Spieler (virtuell) von Teams gekauft oder geliehen werden, die jemandem gehören, der am gleichen Internetanschluss spielt.</li>
<li>Es darf kein Ligatausch mit Teams durchgeführt werden, die jemandem gehören, der am gleichen Internetanschluss spielt.</li>
<li>Es ist nicht gestattet, andere User nach ihrer Scout-Schätzung zu fragen.</li>
<li>Zwischen zwei Teams darf es pro Saison höchstens zwei Transfers geben.</li>
</ol>
<p><strong>Teil III: Verbotene Usernamen</strong></p>
<ol>
<li>obszöne Usernamen</li>
<li>Usernamen, die beleidigend gegenüber Personen oder Gruppen sind</li>
<li>rassistische Usernamen</li>
<li>Usernamen, die Internetadressen enthalten</li>
<li>Usernamen, die dem Namen eines realen Vereins ähneln</li>
</ol>
<p><strong>Teil IV: Aufgaben und Funktion des Ballmanager-Teams</strong></p>
<ol>
<li>Sämtliche Inhalte, die von Usern selbst eingestellt wurden, können vom Team ohne Angabe von Gründen gelöscht werden.</li>
<li>Das Team legt Sanktionen fest, wenn begründeter Verdacht eines Verstoßes gegen die hier aufgelisteten Regeln besteht. Es kann auch der Zugriff auf bestimmte Funktionen des Spiels gesperrt werden.</li>
<li>Usernamen können vom Team geändert werden, sofern sie gegen <i>Regel III</i> verstoßen.</li>
<li>Das Team unterstützt User bei Fragen oder Problemen.</li>
<li>Unangebrachte (rechtsverletzende) Inhalte werden vom Team entfernt, sobald es in Kenntnis gesetzt wurde.</li>
<li>Das Team soll immer mit gutem Beispiel vorangehen, geduldig und fair sein.</li>
<li>Jedes Teammitglied muss gegenüber den anderen Usern der Community Respekt in Wort und Tat zeigen.</li>
</ol>
<p><strong>Teil V: Ballmanager</strong></p>
<ol>
<li>Alle Geldwerte im Spiel sind Teil der virtuellen Währung. Eine Auszahlung dieses Guthabens ist ausgeschlossen.</li>
<li>Alle Vereine, Spieler und Sponsoren sowie deren Namen sind frei erfunden und haben keinen Bezug zu realen Ligen.</li>
<li>Das Spiel wird ständig weiterentwickelt und Funktionen verändert, hinzugefügt oder entfernt.</li>
<li>Ballmanager behält sich vor, den Zugang ohne Angabe von Gründen zu sperren bzw. Accounts zu löschen. Dabei ist auch keine Benachrichtigung im Voraus nötig.</li>
<li>Es wird keine Garantie für die Verfügbarkeit des Spiels übernommen. Es gibt keinen Anspruch auf bestimmte Funktionen oder deren Aktualisierung.</li>
<li>Für alle Aktivitäten, die mit einem Account stattfinden, ist ausschließlich der User verantwortlich, der diesen Account registriert hat. Zu diesen Aktivitäten zählen vor allem selbst eingestellte Beiträge und die Kommunikation im Spiel.</li>
<li>Es wird keine Gewähr für die Richtigkeit, Aktualität und Vollständigkeit der bereitgestellten Informationen übernommen.</li>
<li>Diese Webseite (und auch jeder Teil davon) darf ausschließlich mit Webbrowsern aufgerufen werden. Die Verwendung von anderen Programmen ist nicht gestattet.</li>
<li>Ballmanager behält sich vor, diese Regeln jederzeit ändern zu können.</li>
</ol>
<h1 id="datenschutz">Datenschutz</h1>
<p><strong>Keine Weitergabe der Daten:</strong><br />
Die Betreiber der Webseite unter www.ballmanager.de (&quot;Ballmanager&quot;) geben grundsätzlich keine Daten von Benutzern an Dritte weiter. Ausnahmen sind Fälle, in denen Ballmanager.de gesetzlich oder durch Entscheidungen von Gerichten dazu verpflichtet ist, und Fälle, in denen die Daten zur Strafverfolgung benötigt werden.</p>
<p><strong>Akzeptieren der Datenschutzerklärung:</strong><br />
Mit dem Nutzen dieser Webseite erklärt sich der User mit dieser Datenschutzerklärung einverstanden. Die Verarbeitung und Nutzung der personenbezogenen Daten wird gemäß dieser Datenschutzerklärung und der gesetzlichen Bestimmungen durchgeführt.</p>
<p><strong>IP-Adresse</strong><br />
Beim Aufrufen, Lesen und Benutzen von Seiten unter www.ballmanager.de wird die IP-Adresse des Users in anonymisierter Form gespeichert. Zum einen wird die aktuelle IP-Adresse als MD5-Hash (Beispiel: d41d8cd98f00b204e9800998ecf8427e) gespeichert. Zum anderen wird die IP-Adresse gespeichert, nachdem die letzten beiden Oktetts gelöscht wurden (Beispiel: 123.123.XXX.XXX).</p>
<p><strong>User-Agent</strong><br />
Der User-Agent-Header des Webbrowsers wird bei jedem Besuch gespeichert.</p>
<p><strong>Persönliche Daten bei der Registrierung</strong><br />
Bei der Registrierung werden die folgenden Daten gespeichert:</p>
<ul>
<li>Benutzername</li>
<li>Passwort</li>
<li>E-Mail-Adresse</li>
</ul>
<p>Diese Daten sind erforderlich, damit die Registrierung möglich ist danach weitere Funktionen zur Verfügung stehen. Diese Informationen können aber vollständig entfernt werden, indem der eigene Account gelöscht wird.</p>
<p><strong>Protokoll-Dateien:</strong><br />
In Verbindung mit Protokoll-Dateien werden die folgenden Daten über jeden Besucher gespeichert:</p>
<ul>
<li>abgerufene Dateien/Seiten</li>
<li>Datum und Uhrzeit der Abrufe</li>
<li>Status der Abrufe (Erfolg / Fehler)</li>
<li>Menge der übertragenen Daten</li>
<li>gesendeter User-Agent-Header</li>
</ul>
<p>Alle diese Daten werden jedoch anonym gespeichert. Das bedeutet, dass die IP-Adresse nicht dazu gespeichert wird und die oben genannten Daten nicht mit dem Besucher in Verbindung gebracht werden können.</p>
<p><strong>Drittanbieter:</strong><br />
Wir greifen auf Amazon als Drittanbieter zurück, um Anzeigen zu schalten, wenn Sie unsere Website besuchen. Lesen Sie dazu bitte auch die <a href="http://www.amazon.de/gp/help/customer/display.html?ie=UTF8&nodeId=3312401">Datenschutzerklärung von Amazon</a>.</p>
<p><strong>Google Analytics</strong><br />
Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. (&quot;Google&quot;). Google Analytics verwendet sog. &quot;Cookies&quot;, Textdateien, die auf Ihrem Computer gespeichert werden und eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website (einschließlich Ihrer IP-Adresse) wird an einen Server von Google in den USA übertragen und dort gespeichert. Google wird diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten für die Websitebetreiber zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen zu erbringen. Auch wird Google diese Informationen gegebenenfalls an Dritte übertragen, sofern dies gesetzlich vorgeschrieben oder soweit Dritte diese Daten im Auftrag von Google verarbeiten. Google wird in keinem Fall Ihre IP-Adresse mit anderen Daten von Google in Verbindung bringen. Sie können die Installation der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern. Wir weisen Sie allerdings darauf hin, dass Sie in diesem Fall möglicherweise nicht alle Funktionen dieser Website in vollem Umfang nutzen können. Durch die Nutzung dieser Website erklären Sie sich mit der Bearbeitung der über Sie erhobenen Daten durch Google in der zuvor beschriebenen Art und Weise und zu dem zuvor benannten Zweck einverstanden. Der Datenerhebung und -speicherung <a href="http://tools.google.com/dlpage/gaoptout?hl=de">kann jederzeit mit Wirkung für die Zukunft widersprochen werden</a>. Angesichts der Diskussion um den Einsatz von Analysetools mit vollständigen IP-Adressen möchten wir darauf hinweisen, dass diese Website Google Analytics mit der Erweiterung &quot;anonymizeIp&quot; verwendet und daher IP-Adressen nur gekürzt weiterverarbeitet werden, um eine direkte Personenbeziehbarkeit auszuschließen.
<p><strong>Google Adsense</strong><br />
Da auf dieser Seite teilweise Werbung durch Google Adsense angezeigt wird, speichert Ihr Browser eventuell ein von Google Inc. oder Dritten gesendetes Cookie. Dieses Cookie kann durch Google Inc. oder Dritte ausgelesen werden. Um dieses Cookie zu löschen oder die Cookiebehandlung generell zu verändern, konsultieren Sie bitte die Hilfe Ihres Browsers. In der Regel finden sich diese Einstellungen unter Extras &raquo; Einstellungen &raquo; Datenschutz (Firefox) oder unter Extras &raquo; Internetoptionen &raquo; Datenschutz (Internet Explorer).
<p><strong>Änderungen an dieser Datenschutzerklärung:</strong><br />
Ballmanager behält sich vor, jederzeit Änderungen an dieser Datenschutzerklärung durchzuführen.</p>
<p><strong>Verlinkte Webseiten:</strong><br />
Auf den einzelnen Seiten dieses Projekts sind verschiedene externe Webseiten verlinkt. Für diese Seiten gilt die obige Erklärung nicht und Ballmanager ist nicht für die Seiten verantwortlich.</p>
<p><strong>Weitere Informationen:</strong></p>
<ul>
<li><a href="http://de.wikipedia.org/wiki/HTTP-Cookie">Browser-Cookies</a></li>
<li><a href="http://de.wikipedia.org/wiki/JavaScript">JavaScript</a></li>
<li><a href="http://de.wikipedia.org/wiki/User_Agent">User-Agent-Header</a></li>
<li><a href="http://de.wikipedia.org/wiki/IP-Adresse">IP-Adresse</a></li>
</ul>
<?php include 'zz3.php'; ?>